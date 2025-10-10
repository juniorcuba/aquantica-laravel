<div align="center">
  <img src="public/images/logo.png" alt="Aquantica" height="90" />
  
  <h1>Aquantica – Sitio corporativo (Laravel 12 + Tailwind + Vite)</h1>
  <p>Guía completa para retomar el proyecto en minutos – Prod/Dev/Contenido</p>
</div>

---

## 🚀 Stack y requisitos

- PHP ^8.2
- Laravel ^12.x (Sanctum, Tinker)
- Node.js + npm (Vite ^6, TailwindCSS ^3.4)
- SQLite (archivo `database/database.sqlite` ya presente)

## 📦 Instalación rápida

1) Clonar y preparar dependencias:

```bash
composer install
npm install
```

2) Variables de entorno y clave:

```bash
copy .env.example .env   # Windows
php artisan key:generate
```

3) Base de datos (SQLite ya configurada):

```bash
php artisan migrate --graceful
```

4) Desarrollo (servidor + colas + logs + Vite):

```bash
composer run dev
```

5) Compilar assets para producción:

```bash
npm run build
```

## 🧭 Estructura clave

- `routes/web.php`: rutas bilingües ES/EN para todas las secciones.
- `app/Http/Controllers/*Controller.php`: controladores por categoría (costeros, costa afuera, ambientales, estudios, PND).
- `config/*.php`: catálogo de servicios e imágenes por categoría:
  - `coastal_services.php`
  - `offshore_services.php` (si aplica)
  - `environmental_services.php`
  - `oceanographic_studies.php`
  - `non_destructive_testing.php`
- `resources/lang/{es,en}/*.php`: textos y features por idioma.
- `resources/views/…`:
  - `home/*`: secciones de portada.
  - `*_services.blade.php`: grillas de servicios.
  - `*_service_detail.blade.php`: vistas detalle con slider y features.
  - `components/image-slider.blade.php`: carrusel de galería.
  - `partials/navigation.blade.php`: navbar fijo, `partials/app.blade.php` layout principal.

## 🌐 Rutas y SEO

Rutas por categoría en ES/EN (ejemplos):

- Costeros: `/servicios-costeros` | `/coastal-services`
- Costa afuera: `/servicios-costa-afuera` | `/offshore-services`
- Trámites ambientales: `/tramites-ambientales` | `/environmental-services`
- Estudios oceanográficos: `/estudios-oceanograficos` | `/oceanographic-studies`
- Pruebas no destructivas (PND): `/pruebas-no-destructivas` | `/non-destructive-testing`

Cada detalle usa slug derivado del título traducido. Los labels se generan desde `AppServiceProvider` y configs por categoría.

## 🖼️ Gestión de imágenes

Ubicación: `public/images/services/<categoria>/<servicio>/...`

Convención de galería:

- Imagen principal: `main-service.jpg`
- Galería: `gallery/gallery-1.jpg`, `gallery-2.jpg`, `gallery-3.jpg`, …

Para agregar/editar imágenes:

1) Copiar los archivos en su carpeta correspondiente.
2) Actualizar el arreglo `gallery_images` y `image` en el archivo `config/*.php` de la categoría.
3) Confirmar que el slider incluya la principal al final si aplica.

Ejemplo (PND submarino) en `config/non_destructive_testing.php`:

```php
'image' => 'images/services/non-destructive-testing/submarine/main-service.jpg',
'gallery_images' => [
  'images/services/non-destructive-testing/submarine/gallery/gallery-1.jpg',
  'images/services/non-destructive-testing/submarine/gallery/gallery-2.jpg',
  'images/services/non-destructive-testing/submarine/gallery/gallery-3.jpg',
  'images/services/non-destructive-testing/submarine/main-service.jpg',
],
```

## 🧩 i18n (ES/EN)

- Textos en `resources/lang/es/*.php` y `resources/lang/en/*.php`.
- Los features de cada servicio se leen como arrays de claves y sus descripciones se resuelven por convención `feature_key` y `feature_key_desc`.

## ✉️ Contacto

- Formulario: `routes/web.php` (`/contacto` y `/contact`).
- Mailable: `app/Mail/ContactFormMail.php` usando vista `resources/views/emails/contact-form.blade.php`.
- Endpoint de envío: `POST /contact-send` (`ContactController@store`). Configurar credenciales de correo en `.env`.

## 🛠️ Build y estilos

- Vite (`vite.config.js`) con entradas `resources/css/app.css` y `resources/js/app.js`.
- Tailwind (`tailwind.config.js`) con scan de `resources/views/**/*.blade.php`.
- PostCSS (`postcss.config.js`) con Tailwind y Autoprefixer.

Desarrollo:

```bash
npm run dev
# o junto al servidor/colas/logs: composer run dev
```

Producción:

```bash
npm run build
```

## 🧪 Pruebas

```bash
php artisan test
```

## 🔐 Notas de seguridad

- No commitear `.env` ni credenciales.
- Revisar `APP_URL`, `APP_ENV`, `APP_KEY` y configuración de correo al desplegar.

## 🚢 Despliegue rápido

1) Subir código y ejecutar `composer install --no-dev` y `npm ci && npm run build`.
2) Configurar `.env` (cache: `php artisan config:cache`).
3) Migrar BD: `php artisan migrate --force`.
4) Apuntar el DocumentRoot a `public/`.

## 🧭 Puntos útiles

- Navbar fijo: `resources/views/partials/navigation.blade.php` (usa Alpine para scroll y mobile toggle).
- Espaciado del main: `resources/views/partials/app.blade.php` (`<main class="mt-8 pt-16">`).
- Sliders/galerías: `resources/views/components/image-slider.blade.php`.
- Elementos en grilla: `resources/views/components/service-item-details.blade.php`.

## 📚 Cómo agregar un nuevo servicio (checklist)

1) Subir imágenes a `public/images/services/<categoria>/<servicio>/...`.
2) Editar `config/<categoria>.php` y agregar un ítem con:
   - `title_key`, `description_key`, `description_footer_key` (opcional), `image`, `gallery_images`, `show_features`.
3) Añadir/ajustar textos en `resources/lang/{es,en}/<categoria>.php`.
4) Verificar rutas y la vista de detalle correspondiente.

Listo. El controlador convierte la config en un `Collection` traducido y las vistas leen directamente de ahí.

---

Hecho con ❤️ para Aquantica. Mantén este README cerca; retomar el proyecto debería tomar minutos, no horas.
