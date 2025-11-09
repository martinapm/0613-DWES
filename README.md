# ⚙️ Desarrollo Web en Entorno Servidor  
**Grado Superior en Desarrollo de Aplicaciones Web (DAW)**  
**Instituto FOC**

---

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Apache-D22128?style=for-the-badge&logo=apache&logoColor=white"/>
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white"/>
  <img src="https://img.shields.io/badge/Server%20Side-4A90E2?style=for-the-badge&logo=serverless&logoColor=white"/>
</p>

---

## 🧩 Descripción del Repositorio

Este repositorio ha sido creado como parte del módulo **“0613. Desarrollo Web en Entorno Servidor”**, perteneciente al **Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web (DAW)** del **Instituto FOC**.

Aquí se recopilan los **ejercicios y prácticas** realizadas con el lenguaje **PHP**, centradas en el desarrollo del lado del servidor, la generación dinámica de contenido y la interacción con el navegador a través de peticiones HTTP.

---

## 📚 Contenido del Repositorio

El repositorio contiene los materiales correspondientes a las siguientes unidades:

### 🧠 Unidad 01 – PHP  
- Primeros pasos con **PHP**.  
- Estructura básica de un script PHP.  
- Variables, operadores y estructuras de control.

### ⚙️ Unidad 02 – PHP  
- Funciones, arrays y formularios.  
- Envío y recepción de datos mediante `$_GET` y `$_POST`.  
- Manejo básico de sesiones y cookies.

### 💡 Unidad 03 – PHP  
- Trabajo con ficheros y directorios.  
- Validación de formularios.  
- Uso de funciones personalizadas y reutilización de código.

### 🧩 Unidad 04 – PHP  
- Conceptos avanzados de programación en servidor.  
- Control de errores y buenas prácticas.  
- Preparación para la conexión con bases de datos y gestión de proyectos.

---

## 🧰 Tecnologías y Herramientas Utilizadas

| Tecnología | Descripción |
|-------------|-------------|
| **PHP** | Lenguaje de programación del lado del servidor para generar contenido dinámico en la web. |
| **Apache** | Servidor web utilizado por XAMPP para ejecutar scripts PHP localmente. |
| **XAMPP** | Paquete que incluye Apache, PHP y MySQL para pruebas y desarrollo local. |
| **HTML / CSS** | Soporte para la presentación y estructura de las páginas dinámicas. |

---

## 👀 Cómo Visualizar los Archivos PHP en XAMPP

Para poder ejecutar y visualizar correctamente los archivos PHP de este repositorio, sigue los pasos detallados a continuación 👇

### 🧭 Paso 1: Instalar XAMPP
1. Descarga **XAMPP** desde [https://www.apachefriends.org/es/index.html](https://www.apachefriends.org/es/index.html).  
2. Instálalo siguiendo las instrucciones del instalador.  
3. Abre el **Panel de Control de XAMPP** y activa los módulos:
   - ✅ Apache  
   - ✅ MySQL (opcional, si tu ejercicio lo requiere)

---

### 📁 Paso 2: Colocar el proyecto en la carpeta `htdocs`
1. Accede a la carpeta donde está instalado XAMPP (por defecto suele ser):  

```bash
C:\xampp\htdocs\
```

2. Crea una carpeta con el nombre de tu proyecto, por ejemplo:

```bash
C:\xampp\htdocs\desarrollo_entorno_servidor\
```

3. Copia los archivos y carpetas del repositorio dentro de esa carpeta.

---

### 🌐 Paso 3: Ejecutar los archivos PHP desde el navegador
1. Abre tu navegador (Chrome, Edge, Firefox, etc.).  
2. En la barra de direcciones, escribe:

```bash
http://localhost/desarrollo_entorno_servidor/
```

3. Accede al archivo que quieras visualizar, por ejemplo:

```bash
http://localhost/desarrollo_entorno_servidor/unidad_01/ejercicio1.php
```

4. El servidor Apache procesará el archivo y mostrará el resultado en pantalla.

---

### ⚙️ Paso 4 (opcional): Ver errores o salida en consola
- Si un archivo no se ejecuta correctamente, revisa el **Panel de Control de XAMPP** → pestaña *Logs (Apache)*.  
- También puedes habilitar los mensajes de error en PHP añadiendo lo siguiente al inicio de tus scripts:

```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

## 🎯 Objetivos de Aprendizaje

- Comprender los fundamentos del **desarrollo web del lado del servidor**.  
- Aprender a **crear scripts dinámicos** con PHP.  
- Gestionar datos mediante **formularios, sesiones y cookies**.  
- Conocer el funcionamiento de un **servidor web local (Apache)**.  
- Prepararse para conectar **PHP con bases de datos (MySQL, MariaDB, etc.)**.

---

## 📂 Estructura del Proyecto

```plaintext
├── Unidad_01/
│   └── Ejercicios_PHP/
├── Unidad_02/
│   └── Ejercicios_PHP/
├── Unidad_03/
│   └── Ejercicios_PHP/
└── Unidad_04/
    └── Ejercicios_PHP/
```

---

## 🏫 Créditos

Proyecto académico desarrollado para el módulo:  
**“0613. Desarrollo Web en Entorno Servidor”**  
**Ciclo Formativo de Grado Superior en Desarrollo de Aplicaciones Web (DAW)**  
**Instituto FOC**

---

## 📜 Licencia

Este repositorio se distribuye con fines **educativos y formativos**.  
Puedes usar, adaptar o compartir el contenido siempre que cites la fuente original.

---

<p align="center">
  ✨<i>“MPM”</i>✨
</p>
