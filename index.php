<?php require_once(__DIR__ . '/boot.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $config['title'];?></title>


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php if ($config['debug']):?>
        <?php foreach($config['css'] as $css):?>
            <link rel="stylesheet" href="<?php echo $css;?>">
        <?php endforeach; ?>
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo $config['cssmin'];?>">
    <?php endif; ?>
</head>

<body id="page-top">
    <header class="d-flex masthead" style="background-image: url('assets/img/bg-bhava.png');">
    <div class="container text-center">
    <div class="row align-items-center">
                <div class="col-6 mx-auto">
    <div class="arrow bounce">
        <a class="fa fa-chevron-down fa-3x" href="#start"></a>
    </div>
    </div>
    </div>
    </div>
    </header>
    <section id="disco" class="bg-light- mb-5">
        <a id="start">&nbsp;</a>
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mx-auto">
                    <div class="color-3 bold mb-1">TRACK</div>
                    <div class="color-2">ARUNACHALA</div>
                    <div class="color-2">SHRI KRISHNA SHARANAM MAMAH</div>
                    <div class="color-2">SITA RAM feat ALMUDENA VEGA</div>
                    <div class="color-2">OM LOKAH SAMASTAH feat KEVIN JAMES</div>
                    <div class="color-2">GAYATRI</div>
                    <div class="color-2">MULA MANTRA</div>
                    <div class="color-2">OM GAM GANAPATAYE NAMAH</div>
                    <div class="color-2">HARE KRISHNA</div>
                    <div class="color-3 bold mt-3">BONUS TRACK</div>
                    <div class="color-2">OM LOKAH SAMASTAH | LUCA&#xB4;SPIRIT</div>
                    <div>
                        <a class="btn btn-primary rounded-pill btn-color-2 mt-5" role="button" href="<?php echo $config['download'];?>">DESCARGAR</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mx-auto">
                    <img class="img-fluid" src="assets/img/tapa-disco.png" />
                </div>
            </div>
            <div class="row align-items-center-">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="row">
                        <div class="col-6 align-self-center text-end color-3">Cualquier dificultad en la descarga
                            ponte en contacto con nosostros</div>
                        <div class="col-6 align-self-center text-start"><a
                                class="btn btn-primary rounded-pill btn-color-reverse-3" role="button"
                                href="mailto:<?php echo $config['email'];?>">CONSULTAS</a></div>
                    </div>
                </div>
                <div class="col-6 mx-auto">

                </div>
            </div>
        </div>
    </section>

    <section id="ficha" class="pt-5"
        style="background-image: url('assets/img/bg-ficha.png');">
        <div class="container text-center">
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <img class="img-fluid mb-5" src="assets/img/logo-dark.png" width="200px" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div>
                        La palabra bhava tiene múltiples definiciones,
                        pero si tuviéramos que resumirla en una idea sería:
                        <strong>«el bhava lo es todo»</strong>.
                    </div>
                    <div class="mt-3">
                        En el plano psicológico es tu carácter;
                        en el plano emocional es el sentimiento que te inunda;
                        a nivel energético es lo-que-estás-vibrando; en inglés lo traducen
                        como moody en la calle le dicen «actitud».
                    </div>
                    <div class="mt-3">
                        Cuando se trata de lo Divino, el bhava es lo único que importa.
                        Los frutos están determinados por la semilla, pero también por el método de cultivo.
                        El bhava es regar con la mayor frecuencia posible el estado interior que te lleve a gozar de
                        una relación personal de amor con lo Divino, en cualquiera de sus manifestaciones.
                        En el bhava se reúnen la intención, la remembranza constante
                        y la llama de la pasión puestas al servicio de tu plenitud verdadera.
                    </div>
                    <div class="mt-3">
                        Por eso los textos afirman:
                        así como sea tu bhava, así será tu mundo.
                    </div>
                    <div class="mt-3">
                        <strong>Por mi amigo Naren Herrero</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center pb-5" style="padding-top: 500px">
            <div class="row">
                <div class="col-lg-6 mx-auto">

                    <div class="color-3 bold mb-1">FICHA TÉCNICA </div>
                    <div class="color-2">-GRABACION, PRODUCCIÓN Y ARREGLOS | LUCA&#xB4;SPIRIT </div>
                    <div class="color-2">-PERCUSIÓN | JAUME CATA </div>
                    <div class="color-2">-SITAR EN SITA RAM Y MULA MANTRA | TONY JAGWAR </div>
                    <div class="color-2">-VIOLIN | CLAUDIA MADHURIMA </div>
                    <div class="color-2">-VOZ EN SITA RAM | ALMUDENA VEGA </div>
                    <div class="color-2">-VOZ EN OM LOKAH SAMASTAH | KEVIN JAMES </div>
                    <div class="color-2">-HARMONIUM, BAJO, GUITARRAS, PROGRAMACIÓN, SITAR EN OM LOKAH SAMASTAH Y COROS |
                        LUCA&#xB4;SPIRIT </div>

                    <div class="color-3 bold mt-4 mb-1">GRABADO EN </div>
                    <div class="color-2">ESTUDIO BALA G (INDIA) </div>
                    <div class="color-2">M STUDIO (BARCELONA) </div>
                    <div class="color-2">ARCTICWAVESTUDIO (BARCELONA) </div>
                    <div class="color-2">ESTUDIOS NUZZI (ARGENTINA) </div>
                    <div class="color-2">HOME STUDIO (TRAVEL) </div>

                    <div class="color-2 mt-4">EDICIÓN | ANDRES NIJZZI</div>
                    <div class="color-2">MEZCLA Y MASTER | JORDI NAVARRO </div>

                    <div class="color-2 mt-4">DISEÑO | FEDERICO DENAGHI </div>
                    <div class="color-2">FOTOS Y VIDEOS | ILUSIÓN MAYA </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-3 text-center">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item color-2 underline">&nbsp;DISEÑO | <a href="https://WWW.FEDERICOBENAGHI.COM" target="_blank">WWW.FEDERICOBENAGHI.COM</a></li>
                <li class="list-inline-item color-1">&nbsp;<strong><?php echo $config['email'];?></Strong</li>
            </ul>
        </div><a class="js-scroll-trigger scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>
    </footer>
    <?php if ($config['debug']):?>
        <?php foreach($config['js'] as $js):?>
            <script src="<?php echo $js;?>"></script>
        <?php endforeach; ?>
    <?php else: ?>
        <script src="<?php echo  $config['jsmin'];?>"></script>
    <?php endif; ?>
</body>

</html>
