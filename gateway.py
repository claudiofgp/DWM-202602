import os
import httpx
from fastapi import FastAPI, HTTPException, Request, Response

app = FastAPI(
    title="Flor & Vida - API Gateway",
    description="API Gateway seguro para enrutar solicitudes del frontend"
)

# Definimos la URL de nuestros microservicios internos corriendo localmente
BACKEND_URL = os.getenv("BACKEND_URL", "http://127.0.0.1:9000")

@app.get("/health")
def health():
    return {"status": "OK", "service": "API Gateway Flor & Vida"}

# Ruta comodín para capturar y redirigir todas las peticiones del frontend
@app.api_route("/api/{path:path}", methods=["GET", "POST", "PUT", "PATCH", "DELETE"])
async def gateway_proxy(path: str, request: Request):
    target_url = f"{BACKEND_URL}/{path}"
    body = await request.body()
    
    # Credencial secreta interna compartida con el microservicio backend
    gateway_headers = {
        "X-Gateway-Secret": "gateway-api-secret-456",
        "X-Authenticated-Client": "web-frontend-cliente"
    }
    
    content_type = request.headers.get("content-type")
    if content_type:
        gateway_headers["content-type"] = content_type

    try:
        async with httpx.AsyncClient(timeout=10.0) as client:
            upstream = await client.request(
                method=request.method,
                url=target_url,
                params=request.query_params,
                content=body,
                headers=gateway_headers
            )
    except httpx.RequestError:
        raise HTTPException(status_code=502, detail="Backend interno no disponible")

    response_headers = {}
    if "content-type" in upstream.headers:
        response_headers["content-type"] = upstream.headers["content-type"]

    return Response(
        content=upstream.content,
        status_code=upstream.status_code,
        headers=response_headers
    )