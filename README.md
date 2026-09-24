# Fruit Market - Tienda Virtual de Frutas y Verduras 

Plataforma de comercio electrónico desarrollada en PHP y estructurada bajo el patrón de arquitectura Modelo-Vista-Controlador (MVC)[cite: 3]. Este proyecto está diseñado para ofrecer una tienda en línea rápida y organizada, especializada en la venta de frutas, verduras y productos agrícolas frescos, gestionando desde el catálogo hasta la cobertura de envíos.

## Características de la Tienda

El sistema cuenta con Controladores, Modelos y Vistas para gestionar los siguientes apartados:
* **Catálogo Agrícola:** Visualización y gestión de los alimentos, filtrados por Marcas (ej. fincas o proveedores) y Tipos de Producto (ej. cítricos, hortalizas, tubérculos)[cite: 3].
* **Cobertura de Despachos:** Estructuración geográfica para la entrega de productos frescos mediante módulos de Ciudades y Departamentos[cite: 3].
* **Checkout y Facturación:** Administración de Tipos de Documento para el registro de clientes y Tipos de Pago disponibles para completar las compras[cite: 3].

##  Tecnologías y Arquitectura

* **Backend:** PHP nativo bajo el patrón MVC[cite: 3].
* **Base de Datos:** MySQL (Conexión segura orientada a objetos mediante la clase `Database` y PDO)[cite: 3].
* **Frontend:** Vistas dinámicas renderizadas con PHP y HTML[cite: 3].
* **Seguridad:** Uso de archivos `.env` para proteger las credenciales de la base de datos y la configuración del entorno[cite: 3].

##  Estructura del Código

El código separa la lógica de negocio, el acceso a los datos y la interfaz gráfica para facilitar su escalabilidad:

* `/app/controllers/`: Controladores que reciben las peticiones de la tienda, consultan la información y cargan la interfaz correspondiente[cite: 3].
* `/app/models/`: Archivos encargados de conectarse a la base de datos y extraer los productos o configuraciones[cite: 3].
* `/app/views/`: Archivos de interfaz gráfica que el cliente y el administrador ven en el navegador[cite: 3].
* `/config/`: Configuración central de la conexión a la base de datos (`Database.php`)[cite: 3].
* `/public/`: Punto de entrada de la plataforma (`index.php`)[cite: 3].

##  Instalación en Entorno Local

1. Clona o mueve la carpeta del proyecto a la ruta de tu servidor local (ejemplo: `C:\xampp\htdocs\fruit_market`).
2. Crea la base de datos en tu gestor local (ej. phpMyAdmin).
3. Haz una copia del archivo `.env.example`, renómbrala a `.env` y coloca ahí el usuario, contraseña y nombre de tu base de datos[cite: 3].
4. Enciende los servicios de Apache y MySQL en tu servidor (XAMPP/MAMP).
5. Abre el navegador y accede a la tienda desde: `http://localhost/fruit_market/public/`