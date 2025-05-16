# Medical Center - Formulario de Contacto

## Descripción
Este proyecto es una página web básica para un centro médico. 
Permite a los usuarios agendar una consulta médica mediante un formulario, cuyos datos se almacenan en una base de datos MySQL. 
El diseño es moderno y responsive, y utiliza PHP para el procesamiento de datos.

---

## Tabla de Contenido

- [Instalación](#instalación)
- [Uso](#uso)
- [Tecnologías](#tecnologías)
- [Autor](#autor)
- [Licencia](#licencia)

---

## Instalación

1. Clona este repositorio en tu servidor local.
2. Crea la base de datos y la tabla ejecutando:

    ```sql
    CREATE DATABASE formulario;
    USE formulario;
    CREATE TABLE datos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(100),
        telefono VARCHAR(20),
        email VARCHAR(100),
        mensaje TEXT
    );
    ```

3. Verifica y ajusta los datos de conexión en `conexion.php` si es necesario.
4. Accede a `http://localhost/PAGINA/index.php` desde tu navegador.

---

## Uso

- Completa el formulario de contacto con tus datos.
- Haz clic en "Enviar".
- Los datos se guardarán en la base de datos y verás un mensaje de éxito o error.

---

## Tecnologías

- HTML5
- CSS3
- PHP
- MySQL
- Font Awesome

---

## Autor

- Puede estar en mi repositorio pero el Autor Original es: divcode
Video: https://youtu.be/NK0y2y_eZ1s?si=1ONTHMRhSP_ilayx

---

## Licencia

Este proyecto es de uso educativo y libre.