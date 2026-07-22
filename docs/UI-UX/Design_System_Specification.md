# Design System Specification

Version: 1.0

Status: Approved

---

# Purpose

This document defines the official UI/UX Design System for the Inventory Management System.

Every designer, developer, AI assistant, and contributor must follow this specification to maintain consistency across the application.

---

# Design Philosophy

Our UI must be:

- Modern
- Professional
- Minimal
- Enterprise Ready
- Responsive
- Accessible
- Consistent
- Reusable
- Scalable

Avoid unnecessary decorations and visual noise.

---

# Design Inspiration

Primary Inspirations

- Stripe Dashboard
- Linear
- Vercel
- GitHub
- Shadcn/UI

Avoid

- Bootstrap Admin Templates
- AdminLTE
- Overly colorful dashboards
- Heavy gradients
- Outdated enterprise interfaces

---

# Technology

Frontend

- Tailwind CSS 4
- Livewire 4

Icons

- Lucide Icons

Fonts

- Inter

---

# Color Palette

## Primary

Blue 600

Used for

- Primary Buttons
- Active Navigation
- Links

---

## Success

Emerald 600

Used for

- Success Messages
- Positive Status
- Completed Actions

---

## Warning

Amber 500

Used for

- Warnings
- Pending Status

---

## Danger

Red 600

Used for

- Delete Actions
- Error Messages

---

## Information

Sky 500

Used for

- Informational Messages

---

## Background

Gray 50

---

## Cards

White

---

## Borders

Slate 200

---

## Primary Text

Slate 900

---

## Secondary Text

Slate 500

---

# Typography

Primary Font

Inter

Fallback

system-ui

---

## Heading

Bold

Large spacing

---

## Body Text

16px

Regular

---

## Labels

Medium Weight

---

## Helper Text

Small

Slate 500

---

# Icons

Use only

Lucide Icons

Never mix

- Heroicons
- Bootstrap Icons
- Font Awesome
- Material Icons

---

# Buttons

Allowed Variants

- Primary
- Secondary
- Success
- Danger
- Outline
- Ghost

Style

- Rounded XL
- Medium Shadow
- Consistent Height
- Icon Support

---

# Cards

Every card must contain

- White Background
- Border
- Rounded XL
- Shadow Small
- 24px Padding

---

# Tables

Every table must support

- Search
- Filters
- Sorting
- Pagination
- Export
- Bulk Actions
- Loading State
- Empty State

---

# Forms

Every form must contain

- Section Title
- Labels
- Required Indicators
- Helper Text
- Validation Messages
- Save Button
- Cancel Button

Never create unlabeled inputs.

---

# Sidebar

Requirements

- Collapsible
- Icons
- Grouped Navigation
- Active Page Indicator
- User Profile Section
- Logout

---

# Top Navigation

Must contain

- Search
- Notifications
- User Profile
- Theme Ready
- Breadcrumb

---

# Dashboard

Widgets

- Today's Sales
- Monthly Sales
- Revenue
- Products
- Low Stock
- Outstanding Payments
- Recent Sales
- Recent Purchases
- Quick Actions

---

# Dialogs

Use Modal Dialogs for

- Delete Confirmation
- Unsaved Changes
- Approval Actions

Never use browser alert().

---

# Toast Notifications

Types

- Success
- Error
- Warning
- Information

Position

Top Right

---

# Empty States

Every page must provide

- Meaningful Message
- Action Button
- Illustration (Optional)

---

# Loading States

Every asynchronous action must show

- Skeleton Loading

or

- Loading Spinner

---

# Responsive Design

Support

- Mobile
- Tablet
- Laptop
- Desktop
- Large Desktop

---

# Accessibility

Follow WCAG AA

Requirements

- Keyboard Navigation
- Visible Focus
- Screen Reader Friendly
- Color Contrast
- ARIA Labels

---

# Animation

Use subtle animations only.

Duration

150ms

Avoid excessive transitions.

---

# Dark Mode

Architecture must support Dark Mode.

Implementation can be added later.

---

# Component Library

Reusable Components

- Button
- Card
- Input
- Select
- Textarea
- Checkbox
- Radio
- Badge
- Alert
- Toast
- Table
- Modal
- Dropdown
- Tabs
- Pagination
- Breadcrumb
- Avatar
- Sidebar
- Navbar
- Footer

---

# Spacing

Use consistent spacing.

Preferred spacing scale

4px

8px

12px

16px

24px

32px

48px

---

# AI Design Rules

Every AI tool must follow this Design System.

Never

- Invent new colors
- Invent new button styles
- Invent new spacing
- Mix icon libraries
- Create inconsistent layouts

Always

- Reuse existing components
- Maintain visual consistency
- Follow accessibility rules
- Follow responsive rules

---

# Definition of Done

A screen is considered complete only if

- Responsive
- Accessible
- Uses approved colors
- Uses approved typography
- Uses approved components
- Follows spacing rules
- Supports loading state
- Supports empty state
- Supports error state
- Passes UI Checklist

---

End of Design System Specification