# 🐶 Proyecto Veterinaria - Sistema de Gestión Integral

Este es un sistema web desarrollado en **Laravel** para la gestión de una veterinaria. Permite administrar productos, servicios, ventas, compras, proveedores, usuarios, roles y permisos, entre otras funcionalidades clave para el control completo de una veterinaria o pet shop.

---

## 📦 Funcionalidades principales

✅ Registro y gestión de productos  
✅ Registro de compras con proveedores  
✅ Facturación de productos y servicios  
✅ Gestión de proveedores de productos o servicios  
✅ Caja registradora (punto de venta - POS)  
✅ Control de stock e inventario  
✅ Gestión de usuarios con roles y permisos (Spatie)  
✅ Administración de razas, sexos y tipos de edad de animales  
✅ Sistema de autenticación con Laravel  

---

## ⚙️ Requisitos del sistema

Asegúrate de tener instalado en tu entorno local:

- PHP 7.4 o superior
- Composer
- MySQL / MariaDB
- XAMPP, MAMP, Laragon o similar
- Laravel CLI (opcional)
- Navegador actualizado (Chrome, Firefox, etc.)

---

## 🚀 Instalación paso a paso

### 1. Clonar el proyecto

bash<br>
git clone https://github.com/tu-usuario/veterinaria.git<br>
cd veterinaria<br>

### 2. Instalar dependencias

composer install<br>

### 3. Configurar archivo .env

cp .env.example .env
Edita el archivo .env y configura los datos de conexión a la base de datos:<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=veterinaria<br>
DB_USERNAME=root<br>
DB_PASSWORD=<br>

📝 Cambia DB_USERNAME y DB_PASSWORD según tu configuración local de MySQL.

### 4. Crear la base de datos

Desde tu gestor (phpMyAdmin, DBeaver, consola, etc.):<br>
CREATE DATABASE veterinaria;<br>

### 5. Generar la clave de la aplicación

php artisan key:generate<br>

## 📂 Migraciones y seeders

### 6. Ejecutar migraciones

php artisan migrate<br>
Esto creará todas las tablas necesarias en la base de datos veterinaria.<br>

### 7. Ejecutar los seeders

php artisan db:seed<br>
Inserta datos base como usuarios, roles, permisos, productos de ejemplo, razas, sexos y tipos de edad.

### ▶️ Ejecutar servidor local

Levanta el servidor de desarrollo con:<br>
Accede desde tu navegador en: http://localhost:8000<br>

### 💻 Módulos incluidos

## 🧾 Ventas y caja registradora (POS)

Interfaz de punto de venta amigable<br>
Facturación de servicios o productos<br>
Generación de tickets/recibos<br>
Control de caja por usuario<br>

## 🛒 Compras

Registrar compras de productos<br>
Selección de proveedor<br>
Actualización automática del stock<br>

## 📦 Productos

Crear, editar y eliminar productos<br>
Categorías, precios, cantidades<br>

## 🧑‍💼 Proveedores

Registro de proveedores de servicios (baños, vacunas, peluquería, etc.)<br>
Registro de proveedores de productos<br>
Relación directa con compras y facturación<br>

## 🔒 Usuarios, roles y permisos

Control de acceso con Spatie Laravel Permission
Asignación de permisos por módulo
Gestión de usuarios desde el panel

## 🐕 Razas, sexos y edades

Catálogo para uso veterinario<br>
Registro de clientes con datos de mascotas<br>

### 🛠️ Comandos útiles

Acción	Comando
Ver estado de migraciones	php artisan migrate:status<br>
Revertir última migración	php artisan migrate:rollback<br>
Resetear todo y reseedear	php artisan migrate:fresh --seed<br>
Limpiar caché	php artisan config:clear<br>
php artisan cache:clear<br>
php artisan route:clear<br>

### 📌 Notas importantes

Si hiciste cambios en la estructura de carpetas (por ejemplo, moviste los seeders de ubicación), asegúrate de actualizar los namespaces correctamente.
Si ves errores como Target class [DatabaseSeeder] does not exist, verifica que el archivo esté en database/seeders y el namespace sea Database\Seeders.

### 🤝 Contribuciones
¡Las contribuciones son bienvenidas! Puedes crear un fork, trabajar en una rama y hacer un pull request.<br>
Si encuentras errores o tienes sugerencias, por favor abre un issue.

### 👨‍💻 Autor

Desarrollado por Freyman Andres Reyes Anaya<br>
Correo: frerey31@gmail.com

### 🐾 ¡Gracias por usar este sistema de Veterinaria!

