# Aquantica Laravel - Common Commands / Comandos Comunes

This file contains the most frequently used commands for the Aquantica Laravel project.
Este archivo contiene los comandos más utilizados para el proyecto Aquantica Laravel.

## Laravel Artisan Commands / Comandos de Laravel Artisan

### Clear Application Cache / Limpiar Caché de la Aplicación
```bash
php artisan cache:clear
```
**English:** Clears all cached data stored by the application. Use this when you experience unexpected behavior or after making configuration changes.

**Español:** Limpia todos los datos almacenados en caché por la aplicación. Úsalo cuando experimentes comportamiento inesperado o después de hacer cambios en la configuración.

---

### Clear Configuration Cache / Limpiar Caché de Configuración
```bash
php artisan config:clear
```
**English:** Clears the cached configuration files. Essential when you modify any config files (in `/config` directory) and changes aren't reflecting.

**Español:** Limpia los archivos de configuración almacenados en caché. Esencial cuando modificas archivos de configuración (en el directorio `/config`) y los cambios no se reflejan.

---

### Start Development Server / Iniciar Servidor de Desarrollo
```bash
php artisan serve
```
**English:** Starts the Laravel development server on `http://localhost:8000`. This is the quickest way to run your application locally.

**Español:** Inicia el servidor de desarrollo de Laravel en `http://localhost:8000`. Esta es la forma más rápida de ejecutar tu aplicación localmente.

---

## Frontend Development / Desarrollo Frontend

### Start Asset Compilation (WSL Terminal) / Iniciar Compilación de Assets (Terminal WSL)
```bash
npm run dev
```
**English:** Starts the Vite development server for hot-reloading of CSS/JS assets. Run this in WSL terminal to compile Tailwind CSS and JavaScript files. Keep this running while developing.

**Español:** Inicia el servidor de desarrollo Vite para recarga automática de assets CSS/JS. Ejecuta esto en terminal WSL para compilar archivos Tailwind CSS y JavaScript. Mantén esto ejecutándose mientras desarrollas.

---

## Quick Setup / Configuración Rápida

To get the project running / Para poner el proyecto en funcionamiento:

1. **Terminal 1 (PowerShell):**
   ```bash
   php artisan serve
   ```

2. **Terminal 2 (WSL):**
   ```bash
   npm run dev
   ```

**English:** Keep both terminals running simultaneously for full development experience.

**Español:** Mantén ambas terminales ejecutándose simultáneamente para una experiencia completa de desarrollo.
**Español:** Mantén ambas terminales ejecutándose simultáneamente para una experiencia completa de desarrollo.