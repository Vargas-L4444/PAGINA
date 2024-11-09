<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Center</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styleHtml.css">

</head>
<body>

    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">RSVL</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="imgs/15_23.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. Modi doloremque id iure laudantium dolorem 
                    molestias nemo tempore eligendi commodi? 
                    Reprehenderit, commodi exercitationem. Sequi 
                    temporibus doloremque nam illo officiis, 
                    perferendis repellat.
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="imgs/2826.jpg" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="imgs/atardecer.webp" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. Modi doloremque id iure laudantium dolorem 
                    molestias nemo tempore eligendi commodi? 
                    Reprehenderit, commodi exercitationem. Sequi 
                    temporibus doloremque nam illo officiis, 
                    perferendis repellat.
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing 
                    elit. Modi doloremque id iure laudantium dolorem 
                    molestias nemo tempore eligendi commodi? 
                    Reprehenderit, commodi exercitationem. Sequi 
                    temporibus doloremque nam illo officiis, 
                    perferendis repellat.
            </p>
        </div>
    </section>

    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>pediatría</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>ginecología</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>dermatología</h3>
            </div> 

            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>cardiología</h3>
            </div>
        </div>
    </main>
    
    <section class="formulario container">
        <form method="post" autocomplete="off">
            
            <h2>Agenda Consulta</h2>
            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onClick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">rsvlotte.com</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>


    <?php
        include("send.php");
    ?>

    <script>
        function myFunction(){
            window.location.href="http://localhost/pagina"
        }
    </script>

</body>
</html>