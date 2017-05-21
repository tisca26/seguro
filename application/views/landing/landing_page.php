<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language'); ?>">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/custom.css" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag'); ?></title>

</head>

<body class="stretched no-transition">
<div id="wrapper" class="clearfix">

    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul class="sf-js-enabled clearfix" style="touch-action: pan-y;">
                        <?php echo top_lang_sel(); ?>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="tel:+91.11.85412542"><span class="ts-icon"><i class="icon-call"></i></span><span
                                        class="ts-text">+91.11.85412542</span></a></li>
                        <li><a href="mailto:info@canvas.com"><span class="ts-icon"><span class="ts-text text-lowercase">info@canvas.com</span></a>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col_half fright col_last nobottommargin">

                <div id="top-social">
                    <ul>
                        <li><a href="#" class="si-facebook" style="width: 40px;" data-hover-width="109"><span
                                        class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a>
                        </li>
                        <li><a href="#" class="si-twitter" style="width: 40px;" data-hover-width="95"><span
                                        class="ts-icon"><i class="icon-twitter"></i></span><span
                                        class="ts-text">Twitter</span></a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <header id="header" class="page-section">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <div id="logo">
                    <a href="<?php echo base_url_lang();?>" class="standard-logo"><img
                                src="<?php echo cdn_assets(); ?>images/logo.png" alt="SegurAutos"></a>
                    <a href="<?php echo base_url_lang();?>" class="retina-logo"><img
                                src="<?php echo cdn_assets(); ?>images/logo 2x.png" alt="SegurAutos"></a>
                </div>

                <nav id="primary-menu">

                    <ul class="one-page-menu">
                        <li><a href="#" data-href="#section-nosotros">
                                <div>Nosotros</div>
                            </a></li>
                        <li><a href="#" data-href="#section-beneficios">
                                <div>Beneficios</div>
                            </a></li>
                        <li><a href="#" data-href="#section-siniestro">
                                <div>Siniestro</div>
                            </a></li>
                        <li><a href="#" data-href="#section-contrato">
                                <div>Contratanos</div>
                            </a></li>
                    </ul>
            </div>
        </div>
    </header>

    <section id="slider"
             style="background: url('<?php echo cdn_assets(); ?>images/landing/auto.jpg'); background-position:center center; background-size: 2000px auto; overflow:visible;"
             data-height-lg="500" data-height-md="600" data-height-sm="600" data-height-xs="1200"
             data-height-xxs="1200">
        <div class="container clearfix">

            <div class="contact-widget" data-loader="button">

                <div class="contact-form-result"></div>

                <div class="col_full">
                    <form action="include/landing-5.php" method="post" role="form"
                          class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
                        <div class="heading-block nobottommargin nobottomborder">
                            <h2>Cotiza ahora</h2>
                            <span>Llena los campos para solicitar una cotización (* Campo Obligatorio)</span>
                        </div>
                        <div class="line" style="margin: 20px 0 30px;"></div>
                        <div class="col_half">
                            <div class="col_half">
                                <input type="text" name="landing-nombre" class="form-control required input-lg not-dark"
                                       value="" placeholder="Nombre*">
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="landing-apellidos"
                                       class="form-control required input-lg not-dark" value=""
                                       placeholder="Apellidos*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="landing-tel" class="form-control required input-lg not-dark"
                                       value="" placeholder="Telefono*">
                            </div>
                            <div class="col_half col_last">
                                <input type="email" name="landing-email" class="form-control required input-lg not-dark"
                                       value="" placeholder="Correo Electrónico*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="landing-genero" class="form-control required input-lg not-dark"
                                       value="" placeholder="Genero*">
                            </div>
                            <div class="col_half col_last">
                                <input type="email" name="landing-nacimiento"
                                       class="form-control required input-lg not-dark" value=""
                                       placeholder="Fecha de Nacimiento*">
                            </div>
                        </div>
                        <div class="col_half col_last">
                            <div class="col_half">
                                <input type="text" name="landing-cp" class="form-control required input-lg not-dark"
                                       value="" placeholder="Codigo Postal*">
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="landing-modelo" class="form-control required input-lg not-dark"
                                       value="" placeholder="Modelo (Año)*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="landing-marca" class="form-control required input-lg not-dark"
                                       value="" placeholder="Marca*">
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="landing-submarca"
                                       class="form-control required input-lg not-dark" value="" placeholder="Submarca*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="landing-version"
                                       class="form-control required input-lg not-dark" value="" placeholder="Versión">
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="landing-botcheck" name="landing-botcheck" value=""
                                       class="form-control"/>
                            </div>
                            <div class="col_half col_last">
                                <button class="btn btn-lg btn-block btn-success nomargin" value="submit" type="submit"
                                        style="">Cotizar ahora
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <section id="content" style="overflow: visible;">

        <div class="content-wrap nobottompadding">
            <div class="promo promo-full header-stick promo-light">
                <div class="container clearfix">
                    <h3>Te ayudamos a cotizar tu auto</h3>
                    <span>Mejoramos cualquier cotización con las mejores aseguradoras del país.</span>
                </div>
            </div>

            <div class="section nomargin nobottompadding nobgcolor" id="section-nosotros">
                <div class="container clearfix">
                    <div class="fancy-title title-center title-border-color">
                        <h3>Te ayudamos a <span>cotizar</span> tu Seguro de auto</h3>
                    </div>
                    <div class="col_one_third">
                        <p class="text-justify">
                            Asegurar tu auto nunca había sido tan sencillo, fácil y a un costo accesible, en AhorraSeguros® Comparamos más de 19 aseguradoras por ti,
                            te asesoramos desde la contratación de tu Seguro de auto y durante toda la vida de tu póliza. Estaremos para ti cuando necesites hacer un
                            trámite o incluso ampliar tu cobertura. Siempre atendiéndote de manera personalizada y eficaz.
                        </p>
                    </div>
                    <div class="col_one_third center">
                        <img src="<?php echo cdn_assets();?>images/landing/trato.png" class=""/>
                    </div>
                    <div class="col_one_third col_last">
                        <p class="text-justify">
                            Tomamos en cuenta tu edad, la zona donde circulas y los datos de tu auto para buscar las mejores opciones en Seguros de autos con los mejores
                            planes y coberturas a un costo accesible. ¡Comparamos por ti 19 aseguradoras de auto de manera rápida y sencilla para que tú no lo hagas!
                            Al Cotizar con AhorraSeguros® El mejor Cotizador de Seguros de Autos en México te ofrece los siguientes beneficios.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a class="button button-full button-dark center tright nomargin" id="section-beneficios">
            <div class="container clearfix">
                ¿Te hemos convencido? Contratanos ahora <strong>55049384950</strong> <i class="icon-phone" style="top:4px;"></i>
            </div>
        </a>

        <div class="content-wrap notoppadding">
            <div class="section nomargin">
                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Autos asegurados</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-graph"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
                        <h5>Clientes satisfechos</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-layers"></i>
                        <div class="counter counter-lined">$<span data-from="10" data-to="358987" data-refresh-interval="25" data-speed="3500"></span></div>
                        <h5>Ahorro generado</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-clock"></i>
                        <div class="counter counter-lined"><span data-from="0" data-to="9" data-refresh-interval="1" data-speed="500"></span>+</div>
                        <h5>Aseguradoras afiliadas</h5>
                    </div>

                </div>
            </div>

            <div class="section nomargin nobgcolor" id="section-siniestro">
                <div class="container clearfix">
                    <div class="fancy-title title-border-color title-center">
                        <h3>¿Qué hacer en caso de un <span>siniestro</span>?</h3>
                    </div>
                    <div class="col_full common-height">
                        <div class="col_two_third ">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                    Si ya contrataste Seguros de autos en AhorraSeguros® y sufres cualquier evento que te ponga en riesgo a ti o a tu auto, ya sea un choque, colisión, robo de autoparte, etc.
                                    Te brindamos los siguientes consejos: Conserva la calma, Ayuda a otras personas en caso de estar heridas, Avisa a las fuerzas de seguridad más cercanas, En caso de cualquier
                                    tipo de robo evita cualquier riesgo y mantén la calma. Comunicate a AhorraSeguros® mantén a la mano tu número de póliza para reportar tu siniestro y nosotros trasladaremos
                                    tu caso al área especialista en siniestros de la aseguradora con la que decidiste contratar tu seguro de auto, o de lo contrario ponte en contacto con los teléfonos que te
                                    proporcionaremos a continuación.
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>55483728394</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>55483728394</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>55483728394</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>55483728394</span></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer id="footer" class="dark">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    <img src="images/footer-logo.png" alt="" class="footer-logo">
                    Copyrights © 2014 All Rights Reserved by Canvas Inc.
                </div>

                <div class="col_half col_last tright">
                    <div class="copyrights-menu copyright-links fright clearfix">
                        <a href="#">Inicio</a>/<a href="#section-nosotros">Nosotros</a>/<a href="#section-beneficios">Beneficios</a>/<a href="#section-siniestro">Siniestro</a>/<a href="#section-contratanos">Contratanos</a>
                    </div>
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer>


</div>

<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/functions.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/custom.js"></script>
</body>
</html>