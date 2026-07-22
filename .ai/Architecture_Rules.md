# Architecture Rules

## General

Controllers must remain thin.

Never place business logic inside controllers.

Use:

Controller
→ Service
→ Repository

Architecture.

---

## Validation

Always use Form Requests.

Never validate directly inside controllers.

---

## Authorization

Use Policies and Permissions.

Never hardcode role checks.

Bad:

if(auth()->user()->role == 'admin')

Good:

$user->can('create products')

---

## Database Access

All database operations must go through repositories.

---

## Reusability

Never duplicate business logic.

Create reusable services.

---

## Naming

Models:
Product

Controllers:
ProductController

Services:
ProductService

Repositories:
ProductRepository
