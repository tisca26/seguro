<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language'); ?>">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title><?php echo trans_line('title_tag'); ?></title>

    <meta name="keywords" content="<?php echo trans_line('metatag_keywords'); ?>"/>
    <meta name="description" content="<?php echo trans_line('metatag_desc'); ?>">
    <meta name="author" content="icognitis.com">

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/et-line.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/custom.css" type="text/css"/>

    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/components/bs-select.css" type="text/css"/>

    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>style.css" type="text/css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

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
                    <a href="<?php echo base_url_lang(); ?>" class="standard-logo"><img
                                src="<?php echo cdn_assets(); ?>images/logo.png" alt="SegurAutos"></a>
                    <a href="<?php echo base_url_lang(); ?>" class="retina-logo"><img
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
                          class="landing-wide-form landing-form-overlay nobottommargin clearfix">
                        <div class="heading-block nobottommargin nobottomborder">
                            <h2 style="color: #FFF;">Cotiza ahora</h2>
                            <span style="color: #FFF;">Llena los campos para solicitar <br>una cotización (* Campo Obligatorio)</span>
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
                                <select class="selectpicker form-control required" name="landing-modelo"
                                        data-live-search="true" data-live-search-placeholder="Modelo (Año)*"
                                        data-size="5" title="Modelo (Año)*">
                                    <?php for ($i = 1980; $i <= date("Y") + 1; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col_half">
                                <select class="selectpicker form-control required" name="landing-marca"
                                        data-live-search="true" data-live-search-placeholder="Marca*"
                                        data-size="5" title="Marca*" id="marcas">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->idmarcas; ?>"><?php echo $marca->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col_half col_last">
                                <select class="selectpicker form-control required" name="landing-submarca"
                                        data-live-search="true" data-live-search-placeholder="Submarca*"
                                        data-size="5" title="Submarca*" id="submarcas">
                                    <option>-Seleccionar-</option>
                                </select>
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
                                <button class="btn btn-lg btn-block btn-primary nomargin" value="submit" type="submit"
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
                    <h2 style="margin: 0px !important;">El mejor cotizador de seguros para autos</h2>
                    <span>Mejoramos cualquier cotización con las mejores aseguradoras del país. Somos la mejor opción para tu seguridad, comprueba nuestra calidad.</span>
                    <br />
                    <img src="<?php echo cdn_assets();?>images/landing/marcas.png">
                </div>
            </div>

            <div class="section nomargin nobottompadding nobgcolor" id="section-nosotros">
                <div class="container clearfix">
                    <div class="fancy-title title-center title-border-color">
                        <h3>Te ayudamos a <span>cotizar</span> tu Seguro de auto</h3>
                    </div>
                    <div class="col_one_third">
                        <p class="text-justify">
                            Somos una empresa comprometida en brindar a nuestros asegurados la protección y seguridad que necesitan ante cualquier imprevisto que le ocurra a su automóvil. Tenemos alianza con las mejores 5 aseguradoras del país, para brindar el respaldo ante cualquier siniestro, además de contar con diversos planes para cubrir las necesidades de cada cliente a un costo accesible.
                        </p>
                    </div>
                    <div class="col_one_third center">
                        <img src="<?php echo cdn_assets(); ?>images/landing/trato.jpg" class=""/>
                    </div>
                    <div class="col_one_third col_last">
                        <p class="text-justify">
                            Te asesoramos desde la cotización del seguro que mejor atienda a tus necesidades, cuando tengas un siniestro y durante toda la vida de la póliza para brindarte la asistencia que necesites.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a class="button button-full button-dark center tright nomargin" id="section-beneficios" href="#"
           data-scrollTo="#section-contrato">
            <div class="container clearfix">
                ¿Te hemos convencido? Contratanos ahora <strong>55049384950</strong> <i class="icon-phone"
                                                                                        style="top:4px;"></i>
            </div>
        </a>

        <div class="content-wrap nopadding">
            <div class="section nomargin nobg">
                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-clock i-alt"></i></a>
                        </div>
                        <span>¿Te preocupa que tarden mucho en reparar tu vehiculo?</span>
                        <br/><br/>
                        <h3>Fecha Promesa de reparación</h3>
                        <p>Tiempo de entrega garantizado, si la fecha de entrega prometida no se cumple,
                        te decontamos un 20% del deducible por cada dia de atraso.</p>
                    </div>
                </div>
                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-et-tools-2 i-alt"></i></a>
                        </div>
                        <span>¿Te preocupa la calidad de la reparación?</span>
                        <br/><br/>
                        <h3>Calidad en hojalatería y pintura</h3>
                        <p>Garantía en reparación por seis meses o 5,000 km en hojalatería y pintura después de la fecha de entrega del vehículo.</p>
                    </div>
                </div>
                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-truck i-alt"></i></a>
                        </div>
                        <span>¿Chocaste? ¡Te llevamos a tu destino!</span>
                        <br/><br/>
                        <h3>Auto con chofer</h3>
                        <p>Auto con chofer gratis el día del accidente para que puedas llegar a tu destino..</p>
                    </div>
                </div>
                <div class="col_one_fifth nobottommargin">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-cog i-alt"></i></a>
                        </div>
                        <span>¿Prefieres reparar tu coche con tu mecánico?</span>
                        <br/><br/>
                        <h3>Pago en sitio</h3>
                        <p>Te pagamos en el mismo lugar del accidente en siniestros de menos de $25,000.</p>
                    </div>
                </div>
                <div class="col_one_fifth col_last nobottommargin">
                    <div class="feature-box fbox-center fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line-circle-cross i-alt"></i></a>
                        </div>
                        <span>¿Tu auto fue pérdida total por daño o robo?</span>
                        <br/><br/>
                        <h3>Pago en 72 horas</h3>
                        <p>Te pagamos en 72 horas la pérdida total al presentar toda la documentación.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap nopadding">
            <div class="section nomargin">
                <div class="container clearfix">
                    <div class="fancy-title title-center nobg">
                        <h3 class="nobg">Te ofrecemos la mejor asistencia, que incluye:</h3>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src=""></a>
                            </div>
                            <p>Servicio de grua</p>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src=""></a>
                            </div>
                            <p>Paso de corriente</p>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src=""></a>
                            </div>
                            <p>Cambio de llantas</p>
                        </div>
                    </div>
                    <div class="col_one_fourth col_last nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src=""></a>
                            </div>
                            <p>Servicio de gasolina</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col_one_third nobottommargin">
                            <p><i class="icon-check"></i> Seguros al más bajo costo</p>
                            <p><i class="icon-check"></i> + de 750,000 Asegurados en México</p>
                        </div>
                        <div class="col_one_third nobottommargin">
                            <p><i class="icon-check"></i> Precios bajos garantizados</p>
                            <p><i class="icon-check"></i> Atención personalizada via Call Center</p>
                        </div>
                        <div class="col_one_third nobottommargin col_last">
                    <p><i class="icon-check"></i> Multiples formas de pago</p>
                    <p><i class="icon-check"></i> Asesores especializados en seguros</p>
                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap nopadding">
            <div class="section dark nomargin"
                 style="background-image: url('<?php echo cdn_assets(); ?>images/footer-bg.jpg'); background-attachment: fixed;">
                <div class="container clearfix">

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="846"
                                                                 data-refresh-interval="50" data-speed="2000"></span>K+
                        </div>
                        <h5>Autos asegurados</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="200">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-graph"></i>
                        <div class="counter counter-lined"><span data-from="3000" data-to="15360"
                                                                 data-refresh-interval="100" data-speed="2500"></span>+
                        </div>
                        <h5>Clientes satisfechos</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center" data-animate="bounceIn" data-delay="400">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-layers"></i>
                        <div class="counter counter-lined">$<span data-from="10" data-to="358987"
                                                                  data-refresh-interval="25" data-speed="3500"></span>
                        </div>
                        <h5>Ahorro generado</h5>
                    </div>

                    <div class="col_one_fourth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
                        <i class="i-plain i-xlarge divcenter nobottommargin icon-line2-clock"></i>
                        <div class="counter counter-lined"><span data-from="0" data-to="9" data-refresh-interval="1"
                                                                 data-speed="500"></span>+
                        </div>
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
                        <div class="col_two_third nobottommargin">
                            <div class="panel panel-danger">
                                <div class="panel-body">
                                    Si ya contrataste Seguros de autos en AhorraSeguros® y sufres cualquier evento que
                                    te ponga en riesgo a ti o a tu auto, ya sea un choque, colisión, robo de autoparte,
                                    etc.
                                    Te brindamos los siguientes consejos: Conserva la calma, Ayuda a otras personas en
                                    caso de estar heridas, Avisa a las fuerzas de seguridad más cercanas, En caso de
                                    cualquier
                                    tipo de robo evita cualquier riesgo y mantén la calma. Comunicate a AhorraSeguros®
                                    mantén a la mano tu número de póliza para reportar tu siniestro y nosotros
                                    trasladaremos
                                    tu caso al área especialista en siniestros de la aseguradora con la que decidiste
                                    contratar tu seguro de auto, o de lo contrario ponte en contacto con los teléfonos
                                    que te
                                    proporcionaremos a continuación.
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third col_last nobottommargin">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>01 (800) 900 1292</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">Qualitas<span>01 (800) 800 2880</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">Mapfre <span>01 (800) 062 7373</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">GNP Seguros <span>01 (800) 911 9000</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">HDI Seguros <span>01 (800) 0000 434</span></h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section nomargin" id="section-contrato">
                <div class="container clearfix">
                    <form action="include/landing-5.php" method="post" role="form"
                          class="nobottommargin">
                        <div class="heading-block nobottommargin nobottomborder">
                            <h2>Cotiza ahora</h2>
                            <span>Llena los campos para solicitar una cotización</span><span>(* Campo Obligatorio)</span>
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
                                <button class="btn btn-lg btn-block btn-primary nomargin" value="submit" type="submit"
                                        style="">Cotizar ahora
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <footer id="footer" class="dark">

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights" style="padding-top:20px">

            <div class="container clearfix">

                <div class="col_two_third nobottommargin">
                    <img src="<?php echo cdn_assets(); ?>images/footer-logo.png" alt="" class="footer-logo nomargin">
                    Copyrights © 2014 All Rights Reserved by Canvas Inc.
                </div>

                <div class="col_one_third col_last tright nobottommargin">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" style="top:2px;position:relative; color: #AAA;"><i class="icon-phone"></i>4938493849</a>
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
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/components/bs-select.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/functions.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/custom.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
            $("#marcas").on("changed.bs.select", function () {
                var marca = $(this).val();
                console.log(marca);
                obtener_submarcas_por_marca(marca);
            });
        }
    );

    function obtener_submarcas_por_marca(marca) {
        var my_url = '<?php echo base_url('landing/submarcas_por_marca/'); ?>' + marca;
        $.get(
            my_url
        ).done(function (data) {
            var $select = $('#submarcas');
            $select.empty();
            for (var idx in data) {
                $select.append('<option value="' + data[idx].idmodelo + '">' + data[idx].nombre + '</option>');
            }
            $('.selectpicker').selectpicker('refresh');
        }).fail(function () {
            alert("Error al obtener las submarcas");
        });
    }
</script>
</body>
</html>