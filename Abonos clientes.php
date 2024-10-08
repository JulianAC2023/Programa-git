<?php
session_start();
if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: Login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'Pagina principal'</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Inicio</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- Otros enlaces de navegación -->
            </ul>
            <span class="navbar-text">
                Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?>
            </span>
        </div>
    </nav>

    <!-- Botones de redes sociales -->
<div class="redes-sociales">
    <a href="https://www.facebook.com/" class="icon-facebook"></a>
    <a href="https://x.com/" class="icon-twitter"></a>
    <a href="https://www.instagram.com/" class="icon-instagram"></a>
</div>

<!-- Barra de navegación -->
<nav>
    <div class="container">
        <ul>
            <li><a href="Main.php">Inicio</a></li>
            <li><a href="Plantas clientes.php">Plantas</a></li>
            <li><a href="Accesorios clientes.php">Accesorios</a></li>
            <li><a href="Abonos clientes.php">Abonos</a></li>
            <li><a href="Semillas clientes.php">Semillas</a></li>
            <li><a href="Herramientas clientes.php">Herramientas</a></li>
            <li><a href="Carrito clientes.php">Carrito</a></li>
            <li><a href="Contacto clientes.php">Contacto</a></li>
        </ul>
    </div>
</nav>

    <!-- Sección de nuestros abonod -->
    <section id="abonos">
        <div class="container">
            <h4>Nuestros Abonos</h4>
            <div class="row">
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Triple 15.jpg" class="card-img-top w-100 img-fluid" alt="Abono 1">
                        <div class="card-body">
                            <h5 class="card-title">Fertilizante triple 15</h5>
                            <p class="card-text">El fertilizante triple 15 proporciona nutrientes vitales en una proporción equilibrada para un crecimiento vigoroso de tus plantas.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $10.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Fertilizante triple 15" data-precio="10000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Tierra abonada.jpg" class="card-img-top w-100 img-fluid" alt="Abono 2">
                        <div class="card-body">
                            <h5 class="card-title">Tierra abonada</h5>
                            <p class="card-text">La tierra abonada es un sustrato enriquecido con nutrientes esenciales para promover un crecimiento saludable de las plantas.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $12.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Tierra abonada" data-precio="12000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Fertox.jpg" class="card-img-top w-100 img-fluid" alt="Abono 3">
                        <div class="card-body">
                            <h5 class="card-title">Fertox insecticida</h5>
                            <p class="card-text">Fertox es un insecticida efectivo para combatir una amplia variedad de plagas en plantas, garantizando un ambiente saludable para su crecimiento.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $8.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Fertox insecticida" data-precio="8000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Sustrato.jpg" class="card-img-top w-100 img-fluid" alt="Abono 4">
                        <div class="card-body">
                            <h5 class="card-title">Sustrato especial orquídeas</h5>
                            <p class="card-text">El sustrato especial para orquídeas proporciona el ambiente ideal para el crecimiento y desarrollo óptimo de estas plantas, ofreciendo una combinación equilibrada de nutrientes y una excelente capacidad de drenaje.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $15.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Sustrato especial orquídeas" data-precio="15000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Nutriente universal.png" class="card-img-top w-100 img-fluid" alt="Abono 4">
                        <div class="card-body">
                            <h5 class="card-title">Nutriente Líquido Universal</h5>
                            <p class="card-text">Nutriente líquido universal ideal para todo tipo de plantas. Proporciona un equilibrio perfecto de nutrientes esenciales que ayudan al desarrollo óptimo y la floración vigorosa.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $18.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Nutriente Líquido Universal" data-precio="18000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-sm-12 mt-2">
                    <div class="card">
                        <img src="Multimedia/Abono granulado.jpg" class="card-img-top w-100 img-fluid" alt="Abono 4">
                        <div class="card-body">
                            <h5 class="card-title">Abono Orgánico en Granulado</h5>
                            <p class="card-text">Abono orgánico en granulado ideal para enriquecer el suelo con nutrientes naturales. Favorece el crecimiento de las plantas y mejora la estructura del suelo.</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><strong>Precio:</strong> $15.000</p>
                            <button class="btn btn-outline-success agregar-carrito" data-nombre="Abono Orgánico en Granulado" data-precio="15000">Agregar al carrito</button>
                        </div>
                    </div>
                </div>
                <!-- Agrega más productos según sea necesario -->
            </div>
        </div>
    </section>

    <div id="pantallazo">
        <button id="toggleBtn">Hablar a WhatsApp</button>
        <div id="contenido" style="display: none;">
            <h2>¡Hola! ¿En qué puedo ayudarte?</h2>
            <p>Escríbenos por WhatsApp para obtener asistencia inmediata.</p>
            <!-- Aquí puedes colocar el enlace de WhatsApp -->
            <a href="https://wa.me/tunumerodetelefono" target="_blank" class="whatsapp-btn"><img src="Multimedia/Wathsapp.jpg" alt="WhatsApp" width="50px" height="50px"></a>
        </div>
    </div>
    
    </section>

    <!-- Cerra sesion -->
    <div class="container mt-5">
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
       
    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Vivero Plantas Nuevas Vida. Todos los derechos reservados.</p>
        </div>
    </footer>

    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("toggleBtn");
            const contenido = document.getElementById("contenido");
            
            toggleBtn.addEventListener("click", function() {
                if (contenido.style.display === "none") {
                    contenido.style.display = "block";
                    toggleBtn.textContent = "Cerrar WhatsApp";
                } else {
                    contenido.style.display = "none";
                    toggleBtn.textContent = "Abrir WhatsApp";
                }
            });
        });

    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="Script.js"></script>
</body>
</html>
