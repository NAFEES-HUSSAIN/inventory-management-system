# Project Architecture

## Architecture Pattern

This project follows a layered architecture.

Presentation Layer

↓

Application Layer

↓

Business Layer

↓

Data Access Layer

↓

Database

---

## Folder Structure

Controller

↓

Service

↓

Repository

↓

Model

---

## Responsibilities

### Controller

Responsible only for:

- Receive Request
- Validate Request
- Call Service
- Return Response

Controllers must never contain business logic.

---

### Service

Responsible for:

- Business Logic
- Transactions
- Validation Rules
- Calling Multiple Repositories

---

### Repository

Responsible for:

- Database Queries
- CRUD Operations
- Relationships

Repositories must never contain business rules.

---

### Model

Responsible for:

- Relationships
- Casts
- Scopes
- Accessors
- Mutators

Models must not contain application business logic.

---

### Policies

Responsible for:

Authorization

Never use role checks directly.

Always use permissions.

---

### DTO

Responsible for passing validated data between layers.

---

### Actions

Responsible for one specific business action.

Examples

CreateSaleAction

ApprovePurchaseAction

UpdateProductStockAction

---

### Enums

Store all application constants.

Examples

SaleStatus

PaymentMethod

UserRole

---

### ViewModels

Prepare data for UI.

No business logic.

---

### Coding Rules

Controllers must remain thin.

Services coordinate business operations.

Repositories access the database.

Policies handle authorization.

Business logic must never be duplicated.

---

## Development Workflow

Request

↓

Validation

↓

DTO

↓

Service

↓

Repository

↓

Model

↓

Database

↓

Response