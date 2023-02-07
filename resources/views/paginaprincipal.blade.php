@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/redes.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/popup.css">

    <title>Document</title>
</head>
<body>

<div class="contenedor1"> <!--Inicio del contenedor1-->

<div class="rsocial-bar"> <!---------Redes en barra lateral------->
    <a href="https://www.instagram.com/invites/contact/?¡=1awptca0gkav9&utm_content=pnxmxlr" class="icon icon-instagram" target="_blank"></a>
    <a href="https://www.facebook.com/profile.php?id=100086887335736" class="icon icon-facebook2" target="_blank"></a>
    <a href="#" class="icon icon-envelop" target="_blank"></a>
</div>

<div class="fondo_text">
    <p class="titulo_categoria">¡Bienvenidos!</p>
</div>

<p class="p1">¡Encuentra todo tipo de productos de limpieza. <br>
    ¡Mismos productos, mejores precios!</p>
 
    
    <video width="320" height="240" autoplay controls class="ApiVideo">
        <source src="" type="video/mp4">
      </video>
      <h1 class="SeñalText">Personas satisfechas <br><strong>Productos A Granel</strong></h1>

       <!----------------Inicio de clase lineaimagen-------------------->
       <div class="lineaimagen"> 
                <nav>
                    <ul>
                        <li>
                            <figure>
                            <a href=""><img src="Imagenes/img1.jpg" alt=""></a>
                            <figcaption>Variedad de productos de limpieza</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/img2.jpg" alt=""></a>
                                <figcaption>¡Misma eficiencia o mejor!</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/img3.jpg" alt=""></a>
                                <figcaption>Totos los productos que conoces a mejores precios</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/escoba3.jpg" alt=""></a>
                                <figcaption>Variedad de herramientas de limpieza</figcaption>
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="info">
                <img src="Gif/gif_limpieza1.gif" alt="limpieza" class="gif1" style="float: right;">
                <p class="p2">La limpieza es importante en todo lugar, evita las enfermedades en tu familia
                    y ahorra dinero al mismo tiempo
                </p>
            </div>

            <div class="lineaimagen2"> <!----------------Inicio de clase lineaimagen2-------------------->
                <nav>
                    <ul>
                        <li>
                            <figure> 
                            <a href="#"><img src="Imagenes/ofertas.jfif" alt=""></a>
                            <figcaption>No dejes pasar esta promoción</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/promo1.jpg" alt=""></a>
                                <figcaption>Aprovecha los mejores precios</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/promo2.webp" alt=""></a>
                                <figcaption>Cantidad rendidora</figcaption>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="Imagenes/limpieza2.png" alt=""></a>
                                <figcaption>Variedad de productos</figcaption>
                            </figure>
                        </li>
                    </ul>
                </nav>
            </div>
<!---------------------------------------------Inicio de clase lineaimagen-------------------------------------->

    <!---------------------------------------------Final del contenedor1------------------------------------------->
    </div> 

    <div class="intermedio"> <!--Inicio del intermedio-->
        <table>
            <tr>
                <th>
                    <p>¡Mismo producto, mejores precios!</p>
                </th>
                <th>
                    <img src="imagenes/mejorPrecio.png" alt="superior">
                </th>
                <th>
                    <p>Cantidad y calidad</p>
                </th>
                <th>
                    <img src="imagenes/calidad.png" alt="calidad" class="calidadMejor">
                </th>
            </tr>
        </table>
    </div> <!--Fin del intermedio-->

    <div class="contenedor2"> <!--------------------------------Inicio del contenedor2------------------------------->
        <br>
        <div class="info">
            <img src="Gif/gif_limpieza2.gif" alt="limpieza" class="gif1" style="float: right;">
            <p class="p2">La limpieza no debe ser costosa
            </p>
        </div>
        <div class="fondo_ubicacion">
            <div class="fondo_text">
                <p class="p3">Estamos ubicados en: <br><strong>Los Razos de Ancon, calle Miguel Hidalgo #97</strong></p>
            </div>

            <div class="ubicacion">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.855968233453!2d-101.15402281984304!3d20.675437967571625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x350372d8b63d6e91!2zMjDCsDQwJzMxLjYiTiAxMDHCsDA4JzU5LjMiVw!5e0!3m2!1ses-419!2smx!4v1665725986076!5m2!1ses-419!2smx" 
                width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div> <!----------------------------fin del contenedor2---------------------------------------------->
    
    <!------------------------------------------Inicio del Footer--------------------------------------------->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="Imagenes/IconoLimpieza.png" alt="Logo de Productos A Granel">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>
                    Somos un negocio que se enfoca en tener productos de calidad a los mejores
                    precios, nuestros clienes son lo mas importante para nosotros.
                </p>
                <p>
                    Atender a nuestros clientes de la mejor manera es nuestra principal 
                    meta.
                </p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="https://es-la.facebook.com" class="icon icon-facebook2"></a>
                    <a href="https://www.instagram.com" class="icon icon-instagram"></a>
                    <a href="#" class="icon icon-envelop"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Productos A Grabel</b> - Todos los derechos Reservados 
                <b>Ultima actualición: </b> 14/10/2022
            </small>
        </div>
    </footer>  
    <!---------------------------------------Fin del footer-------------------------------------------->

    <script src="Js/popup.js"></script>

</body>
</html>
@endsection