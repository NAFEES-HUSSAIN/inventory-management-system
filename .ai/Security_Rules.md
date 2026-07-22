# Security Rules

## Authentication

Use Laravel Breeze.

Passwords must be hashed.

---

## Authorization

Use Spatie Permissions.

Never trust frontend permissions.

---

## Validation

Validate every request.

No exceptions.

---

## Protection

Use:

- CSRF Protection
- XSS Protection
- SQL Injection Protection

Laravel defaults must remain enabled.

---

## Logging

Log all:

Create
Update
Delete

activities.

---

## Sensitive Data

Never expose:

- Passwords
- Tokens
- Secrets

in responses or logs.
