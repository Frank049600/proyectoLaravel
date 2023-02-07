<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bolsaCompra.css">
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="{{asset('css/redes.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/popup.css')}}">
    <title>ProductosAgranel</title>
</head>
<body> 
    <div class="titulo"> <!--Inicio del contenedor de titulo-->
        <a href="index.html"><img src="Imagenes/IconoLimpieza.png" alt="logo" class="logo"></a>
        <p>Limpieza <br> A granel</p>

        <nav class="menu"> 
            <ul>
             <li><a href="#">Categorías</a>
                <ul>
                    <li><a href="cate/jabones.html">Jabones</a></li>
                    <li><a href="cate/Suavizantes.html">Savizantes</a></li>
                    <li><a href="cate/traposYfibras.html">Trapos y fibras</a></li>
                </ul>
            </li>
                <li><a href="#">Pedidos</a>
                    <ul>
                        <li><a href="Pedido.html">Encargar producto</a></li>
                    </ul>
                </li>
                <li> <!---------------------------Creación de popup----------------------------->
                    <div class="emergente">
                        <article>
                            <button class="btn-abrir-popup" id="btn-abrir-popup">Iniciar Sesión</button>
                        </article>

                        <div class="overlay" id="overlay">
                            <div class="popup" id="popup">
                                <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="icon icon-cross"></i></a>
                                    <h1>Inicia sesión</h1>
                                    <h2>Y disfruta de los beneficios</h2>
                                <form action="Php/validar.php" method="post" name="FormEntrar">
                                    <div class="emergente-inputs">
                                        <input type="email" class="form-correo" name="correo" placeholder="Correo electrónico" required/>
                                        <input type="password" name="contra" class="form-contraseña" placeholder="******" required/>
                                    </div>
                                        <button class="btn-submit" type="submit">Iniciar</button>
                                        <button class="btn-submit" type=""
                                            onclick="location.href='registro.html'">Registrar</button>
                                    <div class="opcion"><a href="#">¿Olvidaste tu contraseña?</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
        <!---------------------------Cierra de popup----------------------------->
                </li>
            </ul>
        </nav>
        <button class="compra"><a href="bolsaCompra.html"><img src="Imagenes/bolsa de compra.png" alt="" class="compra_bolsa"></a></button>
    </div> <!--Final del contenedor de titulo-->

    <div class="contenedor1"> <!--Inicio del contenedor1-->
        
        <div class="redes"> 
            <div class="rsocial-bar">
                <a href="https://www.instagram.com" class="icon icon-instagram" target="_blank"></a>
                <a href="https://es-la.facebook.com" class="icon icon-facebook2" target="_blank"></a>
                <a href="#" class="icon icon-envelop" target="_blank"></a>
            </div>
        </div>  <!--Fin de clase redes-->
        <div class="fondo_text">
            <p class="titulo_categoria">Bolsa de compras</p> <!--Nombre de la pantalla-->
        </div>

        <p>¡Disfruta de tus productos!</p>
        <div class="mensajeNone">No tienes ningun producto agregado, selecciona alguno.</div>

        <img src="Imagenes/flecha_abajo2.png" alt="" class="señalador"> <!--Flecha abajo-->

        <div class="opciones-regreso">
            <ul>
                <li><a href="categoria.html">Jabones</a></li>
                <li><a href="categoria.html">Savizantes</a></li>
                <li><a href="categoria.html">Trapos y fibras</a></li>
                <li><a href="categoria.html">Cubetas y cestos</a></li>
                <li><a href="categoria.html">Trapeadores y escobas</a></li>
            </ul>
        </div> <!--Fin de opciones-regreso -->  



            
    </div> <!--Final del contenedor1-->

        <!--------------------Inicio del Footer-------------------------->
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
                <small>&copy; 2022 <b>Productos A Grabel</b> - Todos los derechos Reservados</small>
            </div>
        </footer>  
        <!-------------------Fin del footer------------------>

        <script src="{{('js/popup.js')}}"></script>
</body>
</html>