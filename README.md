# RetroGames

Proyecto de práctica para el módulo de Desarrollo de Aplicaciones Multiplataforma (DAM). Muestra una lista de videojuegos y la ficha de cada uno usando datos estáticos en el controlador para simular una base de datos.

**Estado:** Implementación básica con Blade y controlador estático.

**Tecnologías**
- PHP (Laravel)
- Laravel (estructura creada con Laravel Herd)
- Blade (vistas)
- HTML/CSS
- SQLite (opcional, usado durante el desarrollo local)
- Node.js / NPM (opcional — para compilar assets con Vite/Tailwind si se desea)

**Estructura relevante**
- `app/Http/Controllers/GameController.php` — controlador con los datos estáticos y las acciones `index()` y `show()`.
- `resources/views/app.blade.php` — plantilla base con `@yield`.
- `resources/views/listaGeneral.blade.php` — vista principal de listado.
- `resources/views/fichaJuego.blade.php` — vista de la ficha (implementada por el compañero).
- `public/css/app.css` — hoja de estilos servida por la aplicación.
- `public/js/app.js` — script mínimo cargado por la plantilla.

**Rutas**
- `/` → lista general (controlador: `GameController@index`)
- `/juego/{id}` → ficha del juego (controlador: `GameController@show`)

Instalación y ejecución local

1. Clonar el repositorio

```bash
git clone <url-del-repositorio> RetroGames
cd RetroGames
```

2. Instalar dependencias PHP

```bash
composer install
```

3. Variables de entorno

Copiar el fichero de ejemplo y generar la clave de aplicación:

```bash
cp .env.example .env
php artisan key:generate
```

Si quieres usar SQLite:

```bash
touch database/database.sqlite
# en el .env, establece:
# DB_CONNECTION=sqlite
# DB_DATABASE=database/database.sqlite
php artisan migrate
```

4. Levantar el servidor

- Con Laravel Herd: abrir la app Herd y arrancar el sitio (por defecto se mostrará en `http://retrogames.test`).
- Sin Herd, usar el servidor de desarrollo de Laravel:

```bash
php artisan serve --host=127.0.0.1 --port=8000
# Acceder en http://127.0.0.1:8000
```

