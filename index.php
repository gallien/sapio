<?php
    include 'assets/inc/common.php';
    /*syncery_header(array(
        "title" => "Start",
        "description" => "Kulinarische Reisen, Genießerreisen, Genussreisen. Veranstalter kulinarischer Entdeckungsreisen - Produzenten besuchen, degustieren, kochen und wandern.  Reisen in kleinem Kreis oder individuell nach Ihren Vorstellungen.",
        "keywords" => "Kulinarische Reisen,Genießerreisen,Genussreisen,Sapio,kulinarisch,Entdeckungsreisen,Sapio,Sapio Reisen,Sapio Kulinarische Entdeckungsreisen,Kulinarische Entdeckungsreisen,Philipp Boecker,Philipp Boecker Reisen,Boecker Reisen,Kulinarische Reisen,Kulinarisch Reisen,Spezial-Veranstalter Kulinarische Reisen,Spezialveranstalter Kulinarische Reisen,Kulinarische Aktiv-Reisen,Genuss-Reisen,Geniesser-Reisen,Gourmet-Reisen,Weinreisen,Trüffelreisen,Koch-Reisen,Kochkurs-Reisen,Genuss-Wandern,Kulinarische Reisen Firmenangebote,Kulinarische Individualreisen,Slow Food Reisen,Slowfood Reisen,Slowfood-Reisen,Slow Tour,Slow Tours,Slow Touren,Slow-Tour,Slow-Tours,Slow-Touren",
        "page" => "index"
    ));*/
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sapio - Kulinarische Entdeckungsreisen | Start</title>
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/css.css" rel="stylesheet">
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
        <nav class="navbar">
            <div class="container" style="position:relative;">
                <div class="navbar-header navbar-default">
                    <a class="navbar-brand" href="./">
                        <img src="assets/images/logo.gif" alt="Logo" style="height:72px; width:auto;" />
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnavlinks" aria-expanded="false" style="position: absolute; right: 0px; top: 25px;">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="mainnavlinks">
                    <ul class="nav navbar-nav fg-cap" style="margin-top: 40px;">
                        <li><a href="#" data-target="#Reiseziele">Reiseziele</a></li>
                        <li><a href="#" data-target="#Reisethemen">Reisethemen</a></li>
                        <li><a href="#" data-target="#Ueber-uns">Über uns</a></li>
                    </ul>
                </div>

                <div class="hidden-xs" style="position: absolute; top:20px;right:0;">
                    <table>
                        <tr>
                            <td rowspan=2 style="font-size: 3rem; padding: 5px 10px 0 0; line-height: 3rem;color:#802629;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></td>
                            <td style="font-size:120%;text-align:justify;">030 &nbsp;- &nbsp;255 629 35</td>
                        </tr>
                        <tr>
                            <td style="font-size:80%;">Montag - Freitag 9 - 19 Uhr</td>
                        </tr> 
                    </table>
                </div>

                <div id="Reiseziele" class="row extendedmenu">
                    <div class="col-xs-12 col-sm-3 col-md-2 markHeadingOfList">
                        <h6><a href="#" id="markItalien" title="">Italien</a></h6>
                        <ul>
                            <li><a href="#" title="" data-parent="#markItalien">Abruzzen</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Apulien</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Äolische Inseln</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Emilia-Romagna</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Friaul Julisch Venetien</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Latium</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Ligurien</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Lombardei</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2 markHeadingOfList">
                        <h6>&nbsp;</h6>
                        <ul>
                            <li><a href="#" title="" data-parent="#markItalien">Piemont</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Sardinien</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Sizilien</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Trentino-Südtirol</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Südtoskana</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Toskana</a></li>
                            <li><a href="#" title="" data-parent="#markItalien">Venetien</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2 markHeadingOfList">
                        <h6><a href="#" id="markFrankreich" title="" data-id="fr-0">Frankreich</a></h6>
                        <ul style="margin:0;">
                            <li><a href="#" title="" data-parent="#markFrankreich" data-id="fr-1">Burgund</a></li>
                            <li><a href="#" title="" data-parent="#markFrankreich" data-id="fr-2">Languedoc</a></li>
                            <li>&nbsp;</li>
                        </ul>
                        <h6><a href="#" id="markDeutschland" title="" data-id="de-0">Deutschland</a></h6>
                        <ul>
                            <li><a href="#" title="" data-parent="#markDeutschland" data-id="de-1">Baden-Württemberg</a></li>
                            <li><a href="#" title="" data-parent="#markDeutschland" data-id="de-2">Berlin</a></li>
                            <li><a href="#" title="" data-parent="#markDeutschland" data-id="de-3">Schleswig-Holstein</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-0 col-sm-6 col-md-3">
                        <h6 style="margin:0;">&nbsp;</h6>
                        <img src="assets/images/nav-france-demo0.png" alt="" class="img-full markImage" />
                    </div>
                    <div class="col-xs-0 col-sm-6 col-md-3">
                        <h6>Kurz-Beschreibung</h6>
                        <p class="markTxt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    </div>
                </div>
                <div id="Reisethemen" class="row extendedmenu">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="assets/images/demopic1.jpg" alt="" class="img-full img-rounded markImage" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 markHeadingOfList">
                        <ul style="padding:0;">
                            <li><a href="#" class="fg-cap" title="" data-id="0">Weinreisen</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="1">Kochreisen</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="2">Genusswandern</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="3">Trüffelreise</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="4">Kulinarische Städtereisen</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="5">Kulinarik &amp; Kunst</a></li>
                            <li><a href="#" class="fg-cap" title="" data-id="6">Vegetarische Reisen</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <p class="markTxt"><br/><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    </div>
                </div>
                <div id="Ueber-uns" class="row extendedmenu" style="width: auto;left: 485px;">
                    <div class="col-xs-12">
                        <ul style="padding:0;margin:0;">
                            <li><a href="#" class="fg-cap" title="">Unser Team</a></li>
                            <li><a href="#" class="fg-cap" title="">Beratung</a></li>
                            <li><a href="#" class="fg-cap" title="">Nachhaltigkeit &amp; CSR</a></li>
                            <li><a href="#" class="fg-cap" title="">Incentive Reisen</a></li>
                            <li><a href="#" class="fg-cap" title="">Jobs</a></li>
                            <li><a href="#" class="fg-cap" title="">Presse</a></li>
                            <li><a href="#" class="fg-cap" title="">Freunde</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    
    <main class="container-fluid" style="padding-bottom:70px;">
        <section class="row" style="background-color:#802629;">
            <div class="container">
                SLIDER
            </div>
        </section>
        <section class="row" style="background-color:#C9C29C;">
            <div class="container">
                REISE FINDEN
            </div>
        </section>
        <section class="row">
            <div class="container">
                <div id="maincontent" class="col-xs-12 col-sm-9" style="padding:0 50px 0 0;">
                    <section class="row">
                        <h1 class="col-xs-12">Essen und Trinken - der schönste Weg, eine Region<br/> zu entdecken und ihre Menschen kennen zu lernen</h1>
                        <p class="col-xs-12">
                            <strong>Liebe Reisegäste und Interessenten,</strong><br/>
                            was mit nur zwei Grüppchen in der <a href="#">Toskana</a> und dem <a href="#">Piemont</a> begannt, ist heute der führende<br/>
                            deutschsprachige Veranstalter kulinarischer Reisen. Wir entwickeln alle Reisen selbst vor Ort und pflegen<br/>
                            enge Kontakte zu unseren Partnern. Daher sind Sie willkommen wie bei Freunden. Unser Tean von<br/>
                            qualifizierten zweisprachigen Reiseleitern, ermöglicht Zugänge uns Erlebnisse, die für andere Reisende / /<br/>
                            Allein-Reisende selten möglich sind.<br/>
                            <br/>
                            Genießen Sie das Leben - im Urlaub gern mit uns. <em>Ihr Phillip Boecker</em>
                        </p>
                    </section>
                    <section class="row">
                        <h2 class="col-xs-12">Aktuelle Angebote</h2>
                        <a href="#" class="col-xs-12 col-sm-4 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demopic3.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;"><strong>Höchste Gästezufriedenheit</strong><br><small style="">Unsere kulinarische Reise in Berlin</small></figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-12 col-sm-4 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demopic3.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;"><strong>Freie Plätze über Ostern</strong><br><small style="">Clinque Terre 28.3. - 3.4.</small></figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-12 col-sm-4 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demopic3.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;"><strong>Venedig Segelreise</strong><br><small style="">Freie Plätze über Pflingsten</small></figcaption>
                            </figure>
                        </a>
                        <h2 class="col-xs-12 col-sm-4 paddinleftright5" style="margin-top:30px;">Unsere Reiseleiter</h2>
                        <h2 class="col-xs-12 col-sm-8 paddinleftright5" style="margin-top:30px;">Neugigkeiten</h2>
                        <div class="col-xs-12 col-sm-4 paddinleftright5">
                            XXX
                        </div>
                        <a href="#" class="col-xs-12 col-sm-4 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demopic3.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;"><strong>Fünfte goldene Palme<br/>für Sapio</strong></figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-12 col-sm-4 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demopic3.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;"><strong>Freie Plätze über die<br/>Maifeiertage</strong></figcaption>
                            </figure>
                        </a>
                    </section>
                    <hr/>
                    <section class="row">
                        <h2 class="col-xs-12">Titel zu den Reisethemen</h2>
                        <p class="col-xs-12">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.<br/><br/>
                        </p>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:17px 5px 14px;line-height:1.6rem;">Weinreisen</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:17px 5px 14px;line-height:1.6rem;">Kochreisen</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:17px 5px 14px;line-height:1.6rem;">Genusswandern</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:17px 5px 14px;line-height:1.6rem;">Trüffelreise</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:10px 5px 5px;line-height:1.6rem;">Kulinarische Städtereisen</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="col-xs-6 col-sm-2 paddinleftright5 hiddenlink">
                            <figure class="inlinecaption" style="position:relative;">
                                <img src="assets/images/demo-woman.jpg" alt="" class="img-rounded img-full" />
                                <figcaption class="text-center" style="width:100%;displax:block;background-color:rgba(255,255,255,.85);position:absolute;bottom:0;left:0;padding:17px 5px 14px;line-height:1.6rem;">Kulinarik &amp; Kunst</figcaption>
                            </figure>
                        </a>
                    </section>
                </div>
                <aside id="sidecontent" class="hidden-xs col-sm-3 hidden-print">
                    <section class="clearfix" style="margin-bottom:30px;">
                        <img src="assets/images/demo-woman.jpg" alt="" class="pull-left img-rounded" style="width:50%;height:auto;margin:20px 15px 0 0;" />
                        <p style="margin-top:40px;">Wir beraten Sie gerne persönlich<br/><br/><strong>Johanna Franz<br/>030 - 255 629 35</strong></p>
                        <a href="#" class="btn btn-red" style="margin-left:-45px;"><span class="glyphicon glyphicon-send" aria-hidden="true"></span>   Anfrage senden</a>
                    </section>
                    <section style="margin-bottom:30px;">
                        <img src="assets/images/cite-demo.png" alt="" class="img-responsive" />
                    </section>
                    <section style="margin-bottom:30px;">
                        <h4 class="red-text">Reiseberichte</h4>
                        <p>
                            Andrea Maaßen, Krefend<br/>
                            <a href="" class="fg-hightlight fg-cap red-text">Languedoc</a> | Oktober 2015
                        </p>
                        <p>
                            <img src="assets/images/demo-woman.jpg" alt="" class="pull-left img-rounded" style="width:65px;height:auto;margin:0 15px 0 0;" />
                            &bdquo;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis [...]&rdquo;
                        </p>
                        <a href="#" class="readon"> Languedoc lesen</a>
                        <hr/>
                        <p>
                            Hanspeter Baumgartner, Schifferstadt<br/>
                            <a href="" class="fg-hightlight fg-cap red-text">Burgund</a> | Oktober 2015
                        </p>
                        <p>
                            <img src="assets/images/demo-woman.jpg" alt="" class="pull-left img-rounded" style="width:65px;height:auto;margin:0 15px 0 0;" />
                            &bdquo;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis [...]&rdquo;
                        </p>
                        <a href="#" class="readon"> Burgund lesen</a>
                    </section>
                    <section class="ochre-light highlight-box img-rounded" style="margin-bottom:30px;">
                        <div>
                            <h4>Newsletter</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus.
                            </p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail">
                                </div>
                                <input type="submit" name="setNewsletterAbo" class="btn btn-red text-center img-full" value="Jetzt abonnieren" />
                            </form>
                        </div>
                    </section>
                    <section class="clearfix" style="margin-bottom:30px;">
                        <h4 class="red-text">Überschrift</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                        </p>
                        <a href="#" class="btn btn-red pull-right">Button-Link</a>
                    </section>
                </aside>
            </div>
        </section>
    </main>

    <footer class="container-fluid">
        <section class="container">
            <span class="fg-cap" style="font-size: 2.2rem;">SAPIO [lat. Ich schmecke | Ich verstehe | Ich habe Geschmack]</span>
        </section>
        <section class="row red">
            <div class="container">
                <div class="row">
                    <aside class="col-xs-12 col-sm-6 col-md-3">
                        <h6>Kontakt</h6>
                        <address>
                            SAPIO Kulinarische Entdeckungsreisen<br/>
                            Reichenberger Str. 109<br/>
                            10999 Berlin
                        </address>
                        <p style="line-height:2.4rem;">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true" style="margin-right:10px;"></span> 030 255 629 35<br/>
                            <span class="glyphicon glyphicon-print" aria-hidden="true" style="margin-right:10px;"></span> 030 255 629 36<br/>
                            <span class="glyphicon glyphicon-send" aria-hidden="true" style="margin-right:10px;"></span> <a href="mailto:info@sapio.de">info@sapio.de</a><br/>
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="margin-right:10px;"></span> <a href="https://www.facebook.com/sapio.de">Facebook</a>
                        </p>
                    </aside>
                    <aside class="col-xs-12 col-sm-6 col-md-3">
                        <h6>Kulinarische Incentive Reisen</h6>
                        <p>
                            SAPIO bietet Beratung, Reiseorganisation, Reisebegleitung, Unterstützung bei Produkt-Scouting und Einkaufsverhandlungen sowie Messe-Services für Firmen.<br/>Wir unterstützen Sie gerne.
                        </p>
                        <p style="line-height:2.4rem;">
                            <a href="#">Erfahren Sie mehr über unsere kulinarischen Incentive Reisen</a>
                        </p>
                    </aside>
                    <aside class="col-xs-12 col-sm-6 col-md-3">
                        <h6>Zufriedenheit 2016</h6>
                        <p style="line-height:2.4rem;">
                            <a href="#">Ergebnisse der Gästebefragung</a>
                        </p>
                        <a href="#"><img src="assets/images/footer-programmuebersicht.png" alt="" class="img-responsive" /></a>
                    </aside>
                    <aside class="col-xs-12 col-sm-6 col-md-3">
                        <h6>Informatives</h6>
                        <nav style="line-height:2.4rem;">
                            <a href="#">Reiseberichte</a><br/>
                            <a href="#">Team</a><br/>
                            <a href="#">Presse</a><br/>
                            <br/>
                            <a href="#">AGB</a><br/>
                            <a href="#">Imressum</a> / <a href="#">Datenschutz</a>
                        </nav>
                    </aside>
                </div>
            </div>
        </section>
        <section class="row">
            <div class="container">
                <div class="row">
                    <h6 class="col-xs-12">Ausgezeichnete Reisen</h6>
                    <aside class="col-xs-12 col-sm-12 col-md-7">
                        <a href="#"><img src="assets/images/palme.png" alt="" style="width:18%;margin-right:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="width:18%;margin-right:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="width:18%;margin-right:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="width:18%;margin-right:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="width:18%;margin-right:1%;" /></a>
                        <br/>
                        <br/>
                        <em>Bei Klick auf die Logos finden Sie jeweils die ausgezeichnete Reise.</em>
                        <br/>
                        <br/>
                    </aside>
                    <aside class="col-xs-12 col-sm-12 col-md-5">
                        <p>
                            Die GEO SAISON, Europas größtes Reisemagazin, verleiht alljährlich die begehrte Auszeichnung für die "innovativsten, schönsten und orininellsten Reisen des jahres". Die Kriterien sind Einfallsreichtum, Preis-Leistungs-Verhältnis und verantwortungsbewusster Umgang mit der Umwelt und sozialen Strukturen.
                        </p>
                    </aside>
                </div>
            </div>
        </section>
        <section class="row" style="background-color:#C9C29C;">
            <div class="container">
                <div class="row">
                    <aside class="col-xs-12 col-sm-12 col-md-6">
                        <h6>Sapio in den Medien</h6>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                        <a href="#"><img src="assets/images/palme.png" alt="" style="margin:1%;" /></a>
                    </aside>
                    <aside class="col-xs-12 col-sm-12 col-md-6">
                        <h6>Partner / Mitgliedschaften</h6>
                        <img src="assets/images/footer-partners-demo.png" alt="" class="img-responsive" style="" />
                    </aside>
                </div>
            </div>
        </section>
        <section class="row">
            <p class="container">
                Copyright &copy; 2016 SAPIO Kulinarische Entdeckungsreisen
            </p>
        </section>
    </footer>


    <script type="text/javascript">
        var extendedmenuReisezieleItems = {  "fr": [
                                        {"image":"nav-france-demo0.png","txt":"Frankreich is voll nice und so"},
                                        {"image":"nav-france-demo1.png","txt":"Burgund in Frankreich is voll nice und so"},
                                        {"image":"nav-france-demo2.png","txt":"Languedoc in Frankreich is voll nice und so"}
                                    ],
                                   "de": [
                                        {"image":"nav-france-demo0.png","txt":"Deutschland is voll nice und so"},
                                        {"image":"nav-france-demo1.png","txt":"Berlin in Deutschland is voll nice und so"},
                                        {"image":"nav-france-demo2.png","txt":"Baden-Württemberg in Deutschland is voll nice und so"},
                                        {"image":"nav-france-demo2.png","txt":"Schleswig-Holstein in Deutschland is voll nice und so"}
                                    ]
                                };
        var extendedmenuReisethemenItems = [
                                        {"image":"demopic1.jpg","txt":"Weinreisen sind toll"},
                                        {"image":"demopic2.jpg","txt":"Kochreisen sind soll"},
                                        {"image":"demopic3.jpg","txt":"Genusswandern ist auch toll"},
                                        {"image":"demopic1.jpg","txt":"Trüffelreisen sind trüffeltastisch"}
                                    ];
        
        $(document).ready(function(){
            $('#mainnavlinks a').click(function(){
                if($(this).hasClass("active")){
                    $(this).removeClass("active");
                    $($(this).attr("data-target")).slideUp();
                }else{
                    $(".extendedmenu").slideUp();
                    $('#mainnavlinks a').removeClass("active");
                    $(this).addClass("active");
                    $($(this).attr("data-target")).slideDown();
                };
            });

            $("#Reiseziele .markHeadingOfList a").hover(function(){
                $($(this).attr("data-parent")).css('color','#802629');
                if($(this).attr("data-id")!=undefined){
                    var tmp = $(this).attr("data-id").split("-");
                    $('#Reiseziele .markImage').attr("src","assets/images/"+extendedmenuReisezieleItems[tmp[0]][tmp[1]].image);
                    $('#Reiseziele .markTxt').html(extendedmenuReisezieleItems[tmp[0]][tmp[1]].txt);
                };
            }, function(){
                $($(this).attr("data-parent")).css('color','inherit');
            });

            $("#Reisethemen .markHeadingOfList a").hover(function(){
                $('#Reisethemen .markImage').attr("src","assets/images/"+extendedmenuReisethemenItems[$(this).attr("data-id")].image);
                $('#Reisethemen .markTxt').html(extendedmenuReisethemenItems[$(this).attr("data-id")].txt);
            });
        });
     </script>
</body>
</html>