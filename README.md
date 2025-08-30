# 🛒 Hey!

Una aplicación web desarrollada con Laravel que permite gestionar productos, usuarios y órdenes de compra en una tienda digital. Cuenta con autenticación, panel de administración, carrito de compras y pasarela de pago simulada.

---

## 🚀 Características

- Registro e inicio de sesión de usuarios
- Panel de administración para CRUD de productos
- Sistema de categorías y filtrado por búsqueda
- Carrito de compras y gestión de órdenes
- Simulación de pagos
- Integración de SweetAlert2 para alertas visuales
- Control de acceso según tipo de usuario
- Responsive con diseño amigable

---

## 🧰 Tecnologías utilizadas

| Backend     | Frontend     | Base de datos | Otros         |
|-------------|--------------|---------------|---------------|
| Laravel     | Blade        | MySQL         | SweetAlert2   |
| PHP         | Bootstrap    |               | jQuery        |
| Composer    |              |               | Git           |

---

## ⚙️ Instalación

1. Clona el repositorio:
   

2. Instala las dependencias:
    composer install
    npm install && npm run dev

3. Configura el archivo .env y tu base de datos:
    cp .env.example .env
    php artisan key:generate

4. Ejecuta migraciones:
    php artisan migrate --seed

5. Inicia el servidor:
    php artisan serve

## 🤝 Autor
    Alejandro Hernandez Tapia
