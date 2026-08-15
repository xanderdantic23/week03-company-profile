# Aeolus Digital - Company Profile Website

## 1. Project Title

**Aeolus Digital - Corporate Profile Website**  
*Built with Laravel 11, Blade Templating, and Tailwind CSS v4*

**Subject:** ITST 302 — Client-Server Technologies  
**Project:** Mini Project 02: Company Profile Website using Laravel MVC  
**Course:** Bachelor of Science in Information Technology (BSIT)  

---

## 2. Introduction

A Corporate Profile Website serves as an enterprise's official digital identity. It provides prospective clients, partners, and stakeholders with comprehensive information regarding a business's core services, organizational values, technical expertise, and contact channels.

Businesses require a modern profile website to establish authority, maintain customer trust, and showcase brand capabilities in a competitive market. The purpose of this project is to implement a multi-page, responsive web application using Laravel's Model-View-Controller (MVC) architecture, demonstrating clean client-server request processing, route definitions, reusable layout templating, and structured code separation.

---

## 3. Objectives

* Build a responsive multi-page corporate web application using Laravel.
* Implement custom routes mapping HTTP GET requests to specific controller methods.
* Utilize the Blade Templating Engine to build modular, non-redundant layouts and components (`app.blade.php`, `navbar`, `footer`).
* Maintain clean code organization by enforcing Laravel's separation of concerns.
* Configure static asset management using Vite and Tailwind CSS v4.
* Document development workflows and maintain structured version control using Git and GitHub.

---

## 4. MVC Architecture

**Model-View-Controller (MVC)** is a software architectural pattern that separates an application into three interconnected components:

* **Model:** Handles data logic, database queries, and business rules.
* **View:** Manages the user interface (UI) and layout presentation (HTML/Blade).
* **Controller:** Acts as an intermediary; receives incoming HTTP requests, executes business logic, and returns the appropriate view or data response.

### Why Laravel Uses MVC
Laravel adopts MVC to promote **Separation of Concerns**. By keeping presentation markup isolated from application logic, developers can modify UI components without risking breaking backend functionality or route handling.

### Advantages of MVC
1. **Maintainability:** Modular components make codebases easier to debug, refactor, and scale.
2. **Reusability:** Layouts, navigation bars, and headers can be shared across multiple views.
3. **Parallel Development:** Frontend developers can design Blade views simultaneously as backend engineers construct controllers and database logic.

### Request Flow Diagram
Browser (Client Request) ──> routes/web.php ──> CompanyController ──> Blade View (pages/*.blade.php) ──> HTML Response (Sent to Browser)

---

## 5. Laravel Routing

Routing defines how an application responds to client requests for specific URL paths. In Laravel, routes are defined inside `routes/web.php`.

* **GET Requests:** Handles standard HTTP GET calls used to fetch and display dynamic views.
* **Named Routes:** Allows developers to reference URLs by name (e.g., `route('services')`), ensuring that changing URL path strings in `web.php` won't break application navigation links.

### Route Definitions (`routes/web.php`)

(put the image here screenshots/web.png)

---

## 6. Controllers
Controllers organize route handling logic into dedicated PHP classes instead of defining inline closures in `routes/web.php`.

![CompanyController.php](screenshots/CompanyController.png)

---

## 7. Blade Templating Engine
Blade is Laravel's powerful templating engine. It compiles template markup into plain PHP code and introduces dynamic layout syntax:

**`@extends('layouts.app')`:** Inherits a master layout structure.
**`@section('content')`:** Defines a block of content injected into a parent layout.
**`@yield('content')`:** Creates a dynamic placeholder inside master layouts for child views to populate.
**`@include('components.navbar')`:** Embeds modular, reusable Blade components.

![app.blade.php](screenshots/SampleCode.png)

---

## 8. Laravel Folder Structure

* **`app/`:** Contains the core application logic, including HTTP Controllers (`app/Http/Controllers`), Middlewares, and Models.
* **`routes/`:** Contains all route definitions (`web.php, api.php, console.php`).
* **`resources/`:** Houses views (`resources/views/`), uncompiled CSS/JS files (`resources/css/, resources/js/`), and translation strings.
* **`public/`:** Stores public web assets accessible directly by browsers, including compiled assets, uploaded files, and image directories (public/images/).
* **`bootstrap/`:** Handles framework bootstrapping and auto-loading initialization scripts (`app.php`).
* **`config/`:** Contains global configuration options for app behavior, databases, session handling, and services.

---

## 9. Screenshots
| Screenshot Asset | Visual Preview |
| :--- | :---: |
| **Home Page** | ![Home Page](screenshots/Home.png) |
| **About Page** | ![About Page](screenshots/About.png) |
| **Services Page** | ![Services Page](screenshots/Services.png) |
| **Contact Page** | ![Contact Page](screenshots/Contact.png) |
| **Navigation Bar** | ![Navigation Bar](screenshots/NavBar.png) |
| **Footer** | ![Footer](screenshots/Footer.png) |
| **Route Definitions** | ![Route Definitions](screenshots/Routes.png) |
| **Controller** | ![Controller](screenshots/Controller.png) |
| **Blade Layout** | ![Blade Layout](screenshots/Layout.png) |

---

## 10. Problems Encountered
1. **Target Class [CompanyController] Does Not Exist:**  
   Occurred during initial route testing due to missing controller import statements in `routes/web.php`.

2. **Missing Asset Compilation Errors:**  
   Tailwind v4 utility styles were not rendering initially due to mismatched asset imports in `app.blade.php` and missing `@import "tailwindcss";` statements in `resources/css/app.css.`

3. **Broken Image Relative Paths:**  
   Custom social media PNG icons failed to display on dynamic subpages when using relative asset paths.

---

## 11. Solutions

1. Implemented explicit Controller namespace imports at the top of web.php using use App\Http\Controllers\CompanyController;.

2. Cleaned redundant default CSS files (`style.css`), properly configured `@import "tailwindcss";` inside `app.css`, and ensured `@vite(['resources/css/app.css', 'resources/js/app.js'])`
   was called within the HTML `<head>`.

3. Converted relative image sources to Laravel’s built-in `asset('images/filename.png')` Blade helper to properly resolve asset paths relative to the `public/` directory.

---

## 12. Reflection

Developing the Aeolus Digital company profile site using Laravel MVC provided valuable insights into standard enterprise request processing and backend architecture. Understanding how web requests move from a client browser through route definitions, trigger specific controller methods, and render modular Blade layouts clarified the practical benefits of separation of concerns.

Isolating business logic from presentation markup ensures that software projects remain maintainable over time. In monolithic setups, code duplication often leads to broken links and redundant layout maintenance. Blade layout inheritance (@extends, @yield, @include) resolves this issue by keeping layout elements like navigation bars and footers consistent across all pages.

When applied to larger client-server enterprise systems, this architectural foundation makes scaling seamless. Teams can safely extend applications by adding new routes, database models, RESTful endpoints, or complex hardware monitoring interfaces without interfering with existing frontend architecture.

## 13. References

* Laravel. (n.d.). *Laravel documentation: Routing*. https://laravel.com/docs/routing
* Laravel. (n.d.). *Laravel documentation: Controllers*. https://laravel.com/docs/controllers
* Laravel. (n.d.). *Laravel documentation: Blade templates*. https://laravel.com/docs/blade
* Tailwind Labs. (n.d.). *Tailwind CSS documentation*. https://tailwindcss.com/docs