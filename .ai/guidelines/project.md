# Project

- This application is a JSON-only REST API. There is no frontend: no Node.js, npm, Vite or Blade views. Ignore any frontend bundling guidance.
- Every PHP file starts with `declare(strict_types=1);`. Customized generator stubs live in `stubs/`.
- API routes are not versioned: endpoints live under `/api` (e.g. `/api/products`). Do not add a version prefix.
- Pest tests use `it()`, not `test()`.
