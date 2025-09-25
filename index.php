<?php
 include('view/layout.php');
 
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Óptica Grisol</title>
   <?php IncluirCSS();?>
</head>
    <body>
       <?php MostrarMenu();?>
        
            <!-- Header-->
            <header class="py-5 inicio-vitra">
                <div class="container px-5 ">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="header-content">
                                <h1 class="fw-bolder mb-3">Bienvenido a Óptica Grisol</h1>
                                <p class="lead fw-normal mb-4">En Óptica Grisol combinamos tecnología, salud visual y estilo para brindarte la mejor experiencia.</p>
                              </div>
                            </div>
                        </div>
                    </div>
             </header>
            <!-- Features section-->
            <section class="bg-white-gray" id="features">
                <div class="container px-5 pt-3">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0 pt-6"><h2 class="fw-bolder mb-0">Mejor forma de cuidar tu vista</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-blue-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-eye-fill"></i></div>
                                    <h2 class="h5">Servicios innovadores</h2>
                                    <p class="mb-0">En Óptica Grisol, nos comprometemos a ofrecerte soluciones personalizadas para tu salud visual, utilizando tecnología avanzada y lentes de última generación.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-blue-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-alt"></i></div>
                                    <h2 class="h5">Visítanos para un diagnóstico personalizado</h2>
                                    <p class="mb-0">Nuestros profesionales te brindan un examen ocular detallado para detectar cualquier problema de visión y ofrecerte la mejor opción de lentes..</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-blue-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-eyeglasses"></i></div>
                                    <h2 class="h5">Lentes de alta calidad</h2>
                                    <p class="mb-0">Trabajamos con las mejores marcas de lentes para garantizar una visión clara y cómoda, adaptada a tus necesidades específicas.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-blue-dark bg-gradient text-white rounded-3 mb-3"><i class="bi bi-eye"></i></div>
                                    <h2 class="h5">Conoce nuestras opciones de lentes de contacto</h2>
                                    <p class="mb-0">Descubre nuestra variedad de lentes de contacto que se adaptan perfectamente a tu estilo de vida, con opciones que brindan comodidad durante todo el día.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
                    <!-- Call to action-->
                    <aside class="bg-blue-dark bg-gradient rounded-3 p-4 p-sm-5 ">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Noticias de promociones</div>
                                <div class="text-white">Registre su correo para recibir las promociones disponibles</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Correo Electronico" aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-custom" id="button-newsletter" type="button">Registrarse</button>
                                </div>
                                <div class="small text-white">Nos preocupamos por suprivacidad, sus datos no serán compartidos.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>
        </main>
        <?php MostrarFooter(); ?>
    <?php IncluirScripts(); ?>
    </body>
</html>
