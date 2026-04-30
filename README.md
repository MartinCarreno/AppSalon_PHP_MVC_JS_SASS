# AppSalon - Sistema de Reservas para Peluquería y Barbería

## Descripción

AppSalon es una aplicación web Full-Stack diseñada para la gestión de reservas de citas en peluquerías o salones de belleza. El sistema permite a los clientes registrarse, iniciar sesión, recuperar su contraseña de forma segura y agendar citas seleccionando los servicios deseados. 

El proyecto está desarrollado utilizando el patrón de diseño **MVC (Modelo-Vista-Controlador)** en PHP, garantizando un código limpio, modular y seguro, con un enfoque fuerte en la experiencia de usuario y la administración de la base de datos.

## Stack Tecnológico

### Backend y Base de Datos
*   **PHP (POO & MVC):** Lógica del servidor estructurada rigurosamente con clases, modelos y un enrutador personalizado.
*   **MySQL:** Base de datos relacional para gestionar usuarios, citas y servicios del salón.
*   **Composer:** Gestor de dependencias para autoloading (PSR-4) y la instalación de librerías externas.
*   **PHPMailer:** Integración para el envío seguro de correos electrónicos transaccionales (confirmación de cuentas y recuperación de contraseñas).

### Frontend y Workflow
*   **JavaScript (Vanilla):** Lógica en el cliente para la validación de formularios, paginación del proceso de reserva y cálculo de totales en tiempo real.
*   **SCSS (Sass):** Preprocesador CSS para hojas de estilo mantenibles y organizadas.
*   **Node.js & Gulp:** Automatización de tareas, compilación de SCSS a CSS y optimización/minificación de scripts e imágenes.

## Características Principales

*   **Sistema de Citas (Paginado):** Interfaz intuitiva en 3 pasos mediante JavaScript para que el cliente seleccione servicios, revise sus datos, elija fecha/hora y confirme la reserva.
*   **Autenticación y Seguridad Avanzada:**
    *   Registro de usuarios con *hasheo* de contraseñas.
    *   Confirmación de cuenta vía correo electrónico mediante tokens únicos.
    *   **Recuperación de Contraseña:** Flujo completo donde el usuario solicita recuperar su acceso, recibe un email vía PHPMailer con un token seguro de un solo uso, y establece una nueva contraseña.
*   **Panel de Administración:** Área restringida para el dueño del salón, donde puede visualizar las citas agendadas filtradas por fecha, ver los ingresos del día y gestionar (crear, actualizar, eliminar) los servicios ofrecidos.
*   **Protección de Rutas:** Validación de sesiones para proteger tanto la zona de clientes como el panel de administración.
