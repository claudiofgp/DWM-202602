import os
import secrets
from fastapi import FastAPI, Header, HTTPException, Depends

app = FastAPI(
    title="Flor & Vida - Backend API",
    description="Microservicio interno de negocio"
)

# Secreto interno compartido con el API Gateway
INTERNAL_GATEWAY_SECRET = os.getenv("INTERNAL_GATEWAY_SECRET", "gateway-api-secret-456")

def verify_gateway(x_gateway_secret: str = Header(default="")):
    valid = secrets.compare_digest(
        x_gateway_secret,
        INTERNAL_GATEWAY_SECRET
    )
    if not valid:
        raise HTTPException(
            status_code=403,
            detail="Solicitud no autorizada desde Gateway"
        )

@app.get("/health")
def health():
    return {"status": "OK", "service": "Backend API Flor & Vida"}

@app.get("/products", dependencies=[Depends(verify_gateway)])
def products():
    return {
        "products": [
            {"id": 1, "name": "Ramo de Rosas Rojas", "price": 25000},
            {"id": 2, "name": "Arreglo de Girasoles", "price": 20000}
        ]
    }

@app.get("/orders", dependencies=[Depends(verify_gateway)])
def orders():
    return {
        "orders": [
            {"id": 1001, "status": "paid", "total": 25000},
            {"id": 1002, "status": "pending", "total": 20000}
        ]
    }