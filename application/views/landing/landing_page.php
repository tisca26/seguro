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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
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
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/components/datepicker.css" type="text/css"/>

    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>css/colors.php" type="text/css"/>

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
                        <li><a href="tel:55 5559 6120"><span class="ts-icon"><i class="icon-call"></i></span><span
                                        class="ts-text">55 5559 6120</span></a></li>
                        <li><a href="mailto:info@canvas.com"><span class="ts-icon"><span class="ts-text text-lowercase">ventas@segurosparaautomoviles.com.mx</span></a>
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
    <?php echo get_bootstrap_alert(); ?>
    <section id="slider"
             style="background: url('<?php echo cdn_assets(); ?>images/landing/auto.jpg'); background-position:center center; background-size: 2000px auto; overflow:visible;"
             data-height-lg="500" data-height-md="600" data-height-sm="600" data-height-xs="1200"
             data-height-xxs="1200">
        <div class="container clearfix">

            <div class="contact-widget" data-loader="button">

                <div class="contact-form-result"></div>

                <div class="col_full">
                    <form action="<?php echo base_url('landing/enviar_correo'); ?>" method="post" role="form"
                          class="landing-wide-form landing-form-overlay nobottommargin clearfix">
                        <div class="heading-block nobottommargin nobottomborder">
                            <h2 style="color: #FFF;">Cotiza ahora</h2>
                            <span style="color: #FFF;">Llena los campos para solicitar <br>una cotización (* Campo Obligatorio)</span>
                        </div>
                        <div class="line" style="margin: 20px 0 30px;"></div>
                        <div class="col_half">
                            <div class="col_half">
                                <input type="text" name="nombre" class="form-control required input-lg not-dark"
                                       value="" placeholder="Nombre*">
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="apellidos"
                                       class="form-control required input-lg not-dark" value=""
                                       placeholder="Apellidos*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="tel" class="form-control required input-lg not-dark"
                                       value="" placeholder="Telefono*">
                            </div>
                            <div class="col_half col_last">
                                <input type="email" name="email" class="form-control required input-lg not-dark"
                                       value="" placeholder="Correo Electrónico*">
                            </div>
                            <div class="col_half">
                                <select name="genero" class="form-control required not-dark input-lg">
                                    <option>-- Seleccione --</option>
                                    <option value="FEMENINO">Femenino</option>
                                    <option value="MASCULINO">Masculino</option>
                                </select>
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="nacimiento"
                                       class="form-control required input-lg not-dark format" value=""
                                       placeholder="Fecha de Nacimiento*">
                            </div>
                        </div>
                        <div class="col_half col_last">
                            <div class="col_half">
                                <input type="text" name="cp" class="form-control required input-lg not-dark"
                                       value="" placeholder="Codigo Postal*">
                            </div>
                            <div class="col_half col_last">
                                <select class="selectpicker form-control required" name="modelo"
                                        data-live-search="true" data-live-search-placeholder="Modelo (Año)*"
                                        data-size="5" title="Modelo (Año)*">
                                    <?php for ($i = 1980; $i <= date("Y") + 1; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col_half">
                                <select class="selectpicker form-control required" name="marca"
                                        data-live-search="true" data-live-search-placeholder="Marca*"
                                        data-size="5" title="Marca*" id="marcas">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->idmarcas; ?>"><?php echo $marca->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col_half col_last">
                                <select class="selectpicker form-control required" name="submarca"
                                        data-live-search="true" data-live-search-placeholder="Submarca*"
                                        data-size="5" title="Submarca*" id="submarcas">
                                    <option>-Seleccionar-</option>
                                </select>
                            </div>
                            <div class="col_half">
                                <input type="text" name="version"
                                       class="form-control input-lg not-dark" value="" placeholder="Versión">
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="botcheck" name="landing-botcheck" value=""
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
                    <br/>
                    <img src="<?php echo cdn_assets(); ?>images/landing/marcas.png">
                </div>
            </div>

            <div class="section nomargin nobottompadding nobgcolor" id="section-nosotros">
                <div class="container clearfix">
                    <div class="fancy-title title-center title-border-color">
                        <h3>Te ayudamos a <span>cotizar</span> tu Seguro de auto</h3>
                    </div>
                    <div class="col_one_third">
                        <p class="text-justify">
                            Somos una empresa comprometida en brindar a nuestros asegurados la protección y seguridad
                            que necesitan ante cualquier imprevisto que le ocurra a su automóvil. Tenemos alianza con
                            las mejores 5 aseguradoras del país, para brindar el respaldo ante cualquier siniestro,
                            además de contar con diversos planes para cubrir las necesidades de cada cliente a un costo
                            accesible.
                        </p>
                    </div>
                    <div class="col_one_third center">
                        <img src="<?php echo cdn_assets(); ?>images/landing/trato.jpg" class=""/>
                    </div>
                    <div class="col_one_third col_last">
                        <p class="text-justify">
                            Te asesoramos desde la cotización del seguro que mejor atienda a tus necesidades, cuando
                            tengas un siniestro y durante toda la vida de la póliza para brindarte la asistencia que
                            necesites.
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
                <div class="col-md-12">
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
                            <p>Garantía en reparación por seis meses o 5,000 km en hojalatería y pintura después de la
                                fecha de entrega del vehículo.</p>
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
                                <a href="#"><img src="<?php echo cdn_assets(); ?>images/icons/grua.png"></a>
                            </div>
                            <p>Servicio de grua</p>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="<?php echo cdn_assets(); ?>images/icons/bateria.png"></a>
                            </div>
                            <p>Paso de corriente</p>
                        </div>
                    </div>
                    <div class="col_one_fourth nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="<?php echo cdn_assets(); ?>images/icons/llanta.png"></a>
                            </div>
                            <p>Cambio de llantas</p>
                        </div>
                    </div>
                    <div class="col_one_fourth col_last nobottommargin">
                        <div class="feature-box fbox-center fbox-dark fbox-plain noborder">
                            <div class="fbox-icon">
                                <a href="#"><img src="<?php echo cdn_assets(); ?>images/icons/oil.png"></a>
                            </div>
                            <p>Servicio de gasolina</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <br/><br/><br/>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="col_one_third nobottommargin">
                                <h4><i class="icon-check"></i> Seguros al más bajo costo</h4>
                                <h4><i class="icon-check"></i> + de 750,000 Asegurados en México</h4>
                            </div>
                            <div class="col_one_third nobottommargin">
                                <h4><i class="icon-check"></i> Precios bajos garantizados</h4>
                                <h4><i class="icon-check"></i> Atención personalizada via Call Center</h4>
                            </div>
                            <div class="col_one_third nobottommargin col_last">
                                <h4><i class="icon-check"></i> Multiples formas de pago</h4>
                                <h4><i class="icon-check"></i> Asesores especializados en seguros</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrap nopadding">
            <div class="section bgcolor nomargin dark"
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
                        <div class="counter counter-lined"><span data-from="0" data-to="7" data-refresh-interval="1"
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
                                    <div class="col-md-6">
                                        <img src="<?php echo cdn_assets() ?>images/icons/siniestro.png" alt="Siniestros"
                                             class="img-responsive">
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Si sufres cualquier evento que ponga en riesto tu integridad y/o la de los
                                            demás, ponte en contacto con los teléfonos que te proporcionamos y
                                            recuerda:</h5>
                                        <h5><i class="icon-ok-sign"></i> Conserva la calma </h5>
                                        <h5><i class="icon-ok-sign"></i> Ayuda a personas heridas </h5>
                                        <h5><i class="icon-ok-sign"></i> Localiza las autoridades competentes más
                                            cercanas </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third col_last nobottommargin">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">AXA Seguros <span>01 (800) 900 1292</span></h4>
                                </a>
                                <a href="#" class="list-group-item">
                                    <h4 class="nomargin">Qualitas <span>01 (800) 800 2880</span></h4>
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
                    <form action="<?php echo base_url('landing/enviar_contacto'); ?>" method="post" role="form"
                          class="nobottommargin" id="form2">
                        <div class="heading-block nobottommargin nobottomborder">
                            <h2>Cotiza ahora</h2>
                            <span>Llena los campos para solicitar una cotización</span><span>(* Campo Obligatorio)</span>
                        </div>
                        <div class="line" style="margin: 20px 0 30px;"></div>
                        <div class="col_half">
                            <div class="col_half">
                                <input type="text" name="nombre" class="form-control required input-lg not-dark"
                                       value="" placeholder="Nombre*">
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="apellidos"
                                       class="form-control required input-lg not-dark" value=""
                                       placeholder="Apellidos*">
                            </div>
                            <div class="col_half">
                                <input type="text" name="tel" class="form-control required input-lg not-dark"
                                       value="" placeholder="Telefono*">
                            </div>
                            <div class="col_half col_last">
                                <input type="email" name="email" class="form-control required input-lg not-dark"
                                       value="" placeholder="Correo Electrónico*">
                            </div>
                            <div class="col_half">
                                <select name="genero" class="form-control required not-dark input-lg">
                                    <option>-- Seleccione --</option>
                                    <option value="FEMENINO">Femenino</option>
                                    <option value="MASCULINO">Masculino</option>
                                </select>
                            </div>
                            <div class="col_half col_last">
                                <input type="text" name="nacimiento"
                                       class="form-control required input-lg not-dark format" value=""
                                       placeholder="Fecha de Nacimiento*">
                            </div>
                        </div>
                        <div class="col_half col_last">
                            <div class="col_half">
                                <input type="text" name="cp" class="form-control required input-lg not-dark"
                                       value="" placeholder="Codigo Postal*">
                            </div>
                            <div class="col_half col_last">
                                <select class="selectpicker form-control required" name="modelo"
                                        data-live-search="true" data-live-search-placeholder="Modelo (Año)*"
                                        data-size="5" title="Modelo (Año)*">
                                    <?php for ($i = 1980; $i <= date("Y") + 1; $i++): ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col_half">
                                <select class="selectpicker form-control required" name="marca"
                                        data-live-search="true" data-live-search-placeholder="Marca*"
                                        data-size="5" title="Marca*" id="marcas2">
                                    <?php foreach ($marcas as $marca): ?>
                                        <option value="<?php echo $marca->idmarcas; ?>"><?php echo $marca->nombre; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col_half col_last">
                                <select class="selectpicker form-control required" name="submarca"
                                        data-live-search="true" data-live-search-placeholder="Submarca*"
                                        data-size="5" title="Submarca*" id="submarcas2">
                                    <option>-Seleccionar-</option>
                                </select>
                            </div>
                            <div class="col_half">
                                <input type="text" name="version"
                                       class="form-control input-lg not-dark" value="" placeholder="Versión">
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="landing-botcheck2" name="botcheck" value=""
                                       class="form-control"/>
                            </div>
                            <div class="col_half col_last">
                                <button class="btn btn-lg btn-block btn-primary nomargin" value="submit" type="submit"
                                        id="submit_contacto" style="">Cotizar ahora
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
                    Copyrights © 2017 Seguros Para Autos.
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
                        <a href="#" style="top:2px;position:relative; color: #AAA;"><i class="icon-phone"></i>55 5559
                            6120</a>
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
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/components/datepicker.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/components/datepicker-es.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/functions.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/plugins/jquery.validation.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>js/custom.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
            $('.format').datepicker({
                language: 'es',
                autoclose: true,
                format: "yyyy-mm-dd"
            });

            $("#marcas").on("changed.bs.select", function () {
                var marca = $(this).val();
                obtener_submarcas_por_marca(marca, '#submarcas');
            });
            $("#marcas2").on("changed.bs.select", function () {
                var marca = $(this).val();
                obtener_submarcas_por_marca(marca, '#submarcas2');
            });

            $('#submit_contacto').click(function () {
                $(this).html('Cargando...');
                return true;
            });

            $('#form2').validate();
        }
    );

    function obtener_submarcas_por_marca(marca, elem) {
        var my_url = '<?php echo base_url('landing/submarcas_por_marca/'); ?>' + marca;
        $.get(
            my_url
        ).done(function (data) {
            var $select = $(elem);
            $select.empty();
            for (var idx in data) {
                $select.append('<option value="' + data[idx].idmodelos + '">' + data[idx].nombre + '</option>');
            }
            $('.selectpicker').selectpicker('refresh');
        }).fail(function () {
            alert("Error al obtener las submarcas");
        });
    }
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-101843576-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>