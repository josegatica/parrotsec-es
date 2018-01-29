<?php 
require('include/parrot.inc.php');

echo
'<header id="first">
        <div class="header-content">
            <div class="inner">
              <h3 class="text-center wow fadeInDown">',$lang['index-1'],'</h2>
              <h5 class="text-center wow fadeInUp">',$lang['index-2'],'</h3>
                <hr>
                <a href="',CONFIG_SITE_URL_STATIC_RESOURCES,'download.php" class="btn btn-primary btn-xl">',$lang['index-3'],'</a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll">',$lang['index-4'],'</a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown">',$lang['index-5'],'</h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      ',$lang['index-6'],'
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      ',$lang['index-7'],'
                    </p>
                    <a href="#two" class="btn btn-primary btn-xl page-scroll">',$lang['index-8'],'</a>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">',$lang['index-9'],'</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/security.png" width="60" height="60" />
                        <h3>',$lang['index-10'],'</h3>
                        <p class="text-muted">',$lang['index-11'],'</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/privacy.png" width="60" height="60" />
                        <h3>',$lang['index-12'],'</h3>
                        <p class="text-muted">',$lang['index-13'],'</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/develop.png" width="55" height="55" />
                        <h3>',$lang['index-14'],'</h3>
                        <p class="text-muted">',$lang['index-15'],'</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary">',$lang['index-16'],'</h2>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>',$lang['index-17'],'</h3>
                    <div class="media-body media-middle">
                        <p>',$lang['index-18'],'</p>
                    </div>
                    <div class="media-right">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/shield.png" width="100" />
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInLeft">
                    <h3>',$lang['index-19'],'</h3>
                    <div class="media-left">
                        <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/gpl.png" width="100" /></a>
                    </div>
                    <div class="media-body media-middle">
                        <p>',$lang['index-20'],'</p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3>',$lang['index-21'],'</h3>
                    <div class="media-body media-middle">
                        <p>',$lang['index-22'],'</p>
                    </div>
                    <div class="media-right">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'img/lightweight.png" width="100" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/01.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/01.jpg" class="img-responsive" alt="',$lang['index-23'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/02.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/02.jpg" class="img-responsive" alt="',$lang['index-24'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/09.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/09.jpg" class="img-responsive" alt="',$lang['index-25'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        <div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/03.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/03.jpg" class="img-responsive" alt="',$lang['index-26'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/04.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/04.jpg" class="img-responsive" alt="',$lang['index-27'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        <div class="clearfix hidden-lg"> </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/05.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/05.jpg" class="img-responsive" alt="',$lang['index-28'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/06.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/06.jpg" class="img-responsive" alt="',$lang['index-29'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/07.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/07.jpg" class="img-responsive" alt="',$lang['index-30'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./screenshots/08.jpg">
                        <img src="',CONFIG_SITE_URL_STATIC_RESOURCES,'screenshots/08.jpg" class="img-responsive" alt="',$lang['index-31'],'">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>';

require('include/foot.php');

?>
