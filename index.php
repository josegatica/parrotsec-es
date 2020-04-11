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
