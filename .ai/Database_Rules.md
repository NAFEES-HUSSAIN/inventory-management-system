# Database Rules

Use migrations only.

Never manually modify database structure.

---

## Primary Keys

Use BIGINT auto increment IDs.

---

## Foreign Keys

All foreign keys must be indexed.

---

## Soft Deletes

Use Soft Deletes for:

- Products
- Categories
- Suppliers
- Customers

---

## Transactions

Always use DB Transactions for:

- Purchases
- Sales
- Payments

---

## Auditability

Track:

created_by
updated_by

where appropriate.

---

## Data Integrity

Use foreign key constraints.

Never disable constraints.
