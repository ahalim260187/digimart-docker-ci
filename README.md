# Digimart – Multi Vendor Laravel App (Dockerized)

Digimart adalah aplikasi **Laravel Multi Vendor** yang dijalankan menggunakan **Docker** dan dilengkapi **CI/CD menggunakan GitHub Actions**.  
Project ini dibuat sebagai **Final Project Cloud / DevOps**.

---

## 🚀 Tech Stack
- Laravel 11
- PHP 8.3
- MySQL 8
- Nginx
- Docker & Docker Compose
- GitHub Actions (CI/CD)

---

## 📦 Services Architecture

| Service | Description |
|--------|------------|
| digimart-app | Laravel PHP-FPM |
| digimart-nginx | Nginx Web Server |
| digimart-db | MySQL Database |

---

## 🐳 Run Locally (Docker)

## Clone repository
bash
git clone https://github.com/ahalim260187/digimart-docker-ci.git
cd digimart-docker-ci

## Build & run container
docker compose up -d --build

## Access application
Frontend: http://localhost:8080
Admin Panel: http://localhost:8080/admin

## 🔁 CI/CD Pipeline
Setiap push ke branch main akan otomatis:
Build Docker image
Menjalankan container
Install dependency (Composer)
Generate APP_KEY
Menjalankan database migration

## Pipeline dijalankan menggunakan GitHub Actions.

## 👤 Author
Abdul Halim
Laravel • Docker • Cloud / DevOps Learner
