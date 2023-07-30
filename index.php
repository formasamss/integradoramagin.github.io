<?php
session_start();

// Acción para cerrar sesión
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

if (!empty($_SESSION["id"])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Clean</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <script src="app.js" async></script>
</head>

<body>
    <section id="header">
        <a href="#"><img src="imagenes/Logo/logooo (2).png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="hogar.html">Hogar</a></li>
                <li><a href="about.html">Nosotros</a></li>
                <li><a href="contact.html">Contactanos</a></li>
                <li><a href="carro.html"><i class="far fa-shopping-bag"></i></a></li>
                <?php
                if (isset($_SESSION["nombre"]) && isset($_SESSION["apellido"])) {
                    // Si el usuario ha iniciado sesión, mostrar su nombre y el botón de "Salir"
                    echo '<li><div class="text-white bg-success p-2">' . $_SESSION["nombre"] . " " . $_SESSION["apellido"] . '</div></li>';
                    echo '<li><a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_sesion.php">Salir</a></li>';
                } else {
                    // Si el usuario no ha iniciado sesión, ocultar el nombre y mostrar el botón de inicio de sesión
                    echo '<li style="display: none;"><div class="text-white bg-success p-2"></div></li>';
                    echo '<li><a class="nav-item nav-link text-justify ml-3 hover-primary" href="login.php">Iniciar Sesión</a></li>';
                }
                ?>
                <li><a href="Tickets.html">Tickets</a></li>
            </ul>
        </div>
        <div id='search-box'>
            <form action='/search' id='search-form' method='get' target='_top'>
                <input id='search-text' name='q' placeholder='Escribe lo que buscas' type='text' />
                <button id='search-button' type='submit'><span>Buscar</span></button>
            </form>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-bag-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
       
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="imagenes/Iconos/camisa.png" alt="">
            <h6>Camisa</h6>
        </div>
        <div class="fe-box">
            <img src="imagenes/Iconos/chaqueta.png" alt="">
            <h6>Chaqueta</h6>
        </div>
        <div class="fe-box">
            <img src="imagenes/Iconos/traje.png" alt="">
            <h6>Traje</h6>
        </div>
        <div class="fe-box">
            <img src="imagenes/Iconos/blusa.png" alt="">
            <h6>Blusa</h6>
        </div>
        <div class="fe-box">
            <img src="imagenes/Iconos/sueter.png" alt="">
            <h6>Sweater</h6>
        </div>
        <div class="fe-box">
            <img src="imagenes/Iconos/falda.png" alt="">
            <h6>Falda</h6>
        </div>
    </section>

    <section id="promociones">
       
    </section>

    <section id="product1" class="section-p1">
        <h2>Promociones</h2>
        <p>Ahorra tiempo y dinero con nuestras ofertas en packs de servicios</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='packete1.html';">
                <img src="imagenes/promociones/Promociones 300x300/3- Saco.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta</span>
                    <h5>Pack 2 Sacos</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$125.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete2.html';">
                <img src="imagenes/promociones/Promociones 300x300/5-sweater.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta </span>
                    <h5>Pack 3 Sweater</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$130.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete3.html';">
                <img src="imagenes/promociones/Promociones 300x300/1-Camisa.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta</span>
                    <h5>Pack 3 Camisas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$185.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete4.html';">
                <img src="imagenes/promociones/Promociones 300x300/8-pantalones.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta</span>
                    <h5>Pack 3 Pantalones </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$206.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete5.html';">
                <img src="imagenes/promociones/Promociones 300x300/6-Falda.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta</span>
                    <h5>Pack 3 prendas (saco, pantalón, faldas)</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$248.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete6.html';">
                <img src="imagenes/promociones/Promociones 300x300/7-Traje.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta</span>
                    <h5>Pack Ejecutivo 2 Camisas + Traje </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$185.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete7.html';">
                <img src="imagenes/promociones/Promociones 300x300/4-Blusa.jpg" alt="">
                <div class="des">
                    <span>Pack Blusa</span>
                    <h5>Pack 2 blusas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$66.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='packete8.html';">
                <img src="imagenes/promociones/Promociones 300x300/2-Chaqueta.jpg" alt="">
                <div class="des">
                    <span>Pack Oferta </span>
                    <h5>Pack 2 Chaquetas</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$165.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        
    </section>

    <section id="product1" class="section-p1">
        <h2>Productos Destacados  </h2>
        <p>No te pierdas nuestras soluciones destacadas: prendas limpias y frescas que impresionan</p>
        <div class="pro-container">
            <div class="pro">
                <img src="imagenes/Productos Destados/1.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Camisa</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50.00</h4>
                </div>
                <a href="destprod1.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/2.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Abrigo</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$99.00</h4>
                </div>
                <a href="destprod2.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/3.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Vestido de fiesta</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$99.00</h4>
                </div>
                <a href="destprod3.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/4.png" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Pantalón</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$55.00</h4>
                </div>
                <a href="destprod5.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/5.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Gabardina</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$120.00</h4>
                </div>
                <a href="destprod4.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/6.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Traje de Mujer </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$84.00</h4>
                </div>
                <a href="destprod6.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/tintoreria y lavanderia/bolsa lavanderia pequeña/51MQJL5ud8L._AC_UF1000,1000_QL80_.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Bolsa Grande </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78.00</h4>
                </div>
                <a href="destprod7.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
            <div class="pro">
                <img src="imagenes/Productos Destados/31t92OEVSAL._AC_SR300,300.jpg" alt="">
                <div class="des">
                    <span>Sobresaliente</span>
                    <h5>Cobarta</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78.00</h4>
                </div>
                <a href="destprod8.html"><i class="fal fa-shopping-cart"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
           
        </div>
        <div class="banner-box banner-box2">
            
        </div>
    </section>
    <br>

    <section id="banner3">
        <div class="banner-box">
        </div>
        <div class="banner-box banner-box2">
            
        </div>
        <div class="banner-box banner-box3">
            
        </div>
    </section>

    <section id="final">
       
    </section>

    <section class="section-p1">
        <footer>
            <div class="col">
                <img class="logo" src="" alt="">
                <h4>Contacto</h4>
                <p><strong>Dirección:</strong> Josafat F. Márquez 1, Colonial Iztapalapa,<br>
                     Iztapalapa, 09270 Ciudad de México, CDMX</p>
                <p><strong>Teléfono:</strong>55-57-74-89-04</p>
                <p>Horario:<strong>Lunes a Domingo de 9:00 am a 9:00 pm</strong></p>
                <div class="follow">
                    <h4>Redes Sociales</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Acerca de</h4>
                <a href="about.html">Nosotros</a>
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos y Condiciones</a>
                <a href="contact.html">Contactanos</a>
            </div>

            <div class="col">
                <h4>Mi Cuenta</h4>
                <a href="index.php">Inicio</a>
                <a href="carro.html">Carro de Compras</a>
                <a href="servicios.html">Servicios</a>
                <a href="hogar.html">Hogar</a>
            </div>

            <div class="copyright">
                <p>© Sistema de Tintoreria Digital (STD)<br>
                    Centro de la Ciudad de México,2023</p>
            </div>
        </footer>
    </section>

    <script src="script.js"></script>
</body>

</html>