# Permission Seeder Design

## Purpose

This seeder creates every permission used in the Inventory Management System.

Permissions are grouped by module.

Each permission follows:

module.action

Example

product.view

product.create

product.update

product.delete

---

## Modules

Dashboard

Category

Product

Supplier

Customer

Purchase

Sale

Payment

Report

User

Role

Permission

Activity

---

## Seeder Workflow

Start

↓

Reset Permission Cache

↓

Create Permissions

↓

End

---

## Rules

Never duplicate permissions.

Use firstOrCreate().

Always use guard:

web

Permission names are lowercase.

Permission names never contain spaces.

Use dot notation.

---

## Expected Total

42 Permissions

---

## Future

New modules must register permissions before creating roles.

Examples

Warehouse

Expense

Payroll

Accounting

Multi Branch