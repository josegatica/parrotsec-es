<?php require(__DIR__ . '/include/parrot.inc.php'); ?>
<header id="first">
        <div class="header-content">
            <div class="inner">
              <h3 class="text-center wow fadeInDown"><?php echo $lang['index-1']; ?></h2>
              <h5 class="text-center wow fadeInUp"><?php echo $lang['index-2']; ?></h3>
                <hr>
                <a href="download.php" class="btn btn-primary btn-xl"><?php echo $lang['index-3']; ?></a> &nbsp; <a href="#one" class="btn btn-primary btn-xl page-scroll"><?php echo $lang['index-4']; ?></a>
            </div>
        </div>
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary  wow fadeInDown"><?php echo $lang['index-5']; ?></h2>
                    <br>
                    <p class="text-faded  wow fadeInRight">
                      <?php echo $lang['index-6']; ?>
                    </p>
                    <p class="text-faded  wow fadeInUp">
                      <?php echo $lang['index-7']; ?>
                    </p>
                    <a href="#two" class="btn btn-primary btn-xl page-scroll"><?php echo $lang['index-8']; ?></a>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary"><?php echo $lang['index-9']; ?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="img/security.png" width="60" height="60" />
                        <h3><?php echo $lang['index-10']; ?></h3>
                        <p class="text-muted"><?php echo $lang['index-11']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="img/privacy.png" width="60" height="60" />
                        <h3><?php echo $lang['index-12']; ?></h3>
                        <p class="text-muted"><?php echo $lang['index-13']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <img src="img/develop.png" width="55" height="55" />
                        <h3><?php echo $lang['index-14']; ?></h3>
                        <p class="text-muted"><?php echo $lang['index-15']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid" id="four">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2 class="text-center text-primary"><?php echo $lang['index-16']; ?></h2>
                <hr>
                <div class="media wow fadeInRight">
                    <h3><?php echo $lang['index-17']; ?></h3>
                    <div class="media-body media-middle">
                        <p><?php echo $lang['index-18']; ?></p>
                    </div>
                    <div class="media-right">
                        <img src="img/shield.png" width="100" />
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInLeft">
                    <h3><?php echo $lang['index-19']; ?></h3>
                    <div class="media-left">
                        <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><img src="img/gpl.png" width="100" /></a>
                    </div>
                    <div class="media-body media-middle">
                        <p><?php echo $lang['index-20']; ?></p>
                    </div>
                </div>
                <hr>
                <div class="media wow fadeInRight">
                    <h3><?php echo $lang['index-21']; ?></h3>
                    <div class="media-body media-middle">
                        <p><?php echo $lang['index-22']; ?></p>
                    </div>
                    <div class="media-right">
                        <img src="img/lightweight.png" width="100" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div id="videos">
                    
                </div>
            </div>
        </div>
    </section>
    <script src='https://meet.jit.si/external_api.js'></script>
<?php require(__DIR__ . '/include/foot.php'); ?>
