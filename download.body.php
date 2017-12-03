<?php
$version = "3.9";
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php
        include("nav.php");
    ?>
        <div class="mdl-layout__tab-panel is-active" id="download">
            <section name="security" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                	<div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing" style="background-color:#fefefe;margin:10px;padding:10px;">
                		<a href="#security" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell ">Security</a>
                    	<a href="#lite" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell">Lite</a>
                    	<a href="#air" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell">Air</a>
                    	<a href="#studio" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell">Studio</a>
                    	<a href="#cloud" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell">Cloud</a>
                    	<a href="#iot" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell">Iot</a>
                    </div>
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--9-col mdl-cell--12-col-phone">Descargar Parrot Security <?php echo $version; ?> Full Edition</h4>
                        <a href="https://dev.parrotsec.org/parrot/changelog/tree/master" target="_blank" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--grey-700 mdl-cell mdl-cell--3-col mdl-cell--12-col-phone">Revisar Historial de cambios</a>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/frozenbox.png') center / cover no-repeat"></div>
                        </div>
                        <div id="security" name="security" class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Un completo entorno proporcionando todas las herramientas en nuestro repositorio y un completo entorno de desarrollo fuera de la caja.</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_i386.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>

                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso" target="_blank" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-full-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section name="lite" id="lite" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Descargar Parrot Lite <?php echo $version; ?> Home Edition</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/devel.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Sistema operativo liviano y altamente portable,puede ser considerada una distribución estándar y de propósito general, la cual no está orientada a la seguridad. Es la base perfecta para crear to propio entorno de pruebas de penetración o para usar Parrot como un sistema operativo estándar<br> (Herramientas no vienen pre-instaladas)</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>32bit</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_i386.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>

                                <div class="mdl-cell--6-col">
                                    <h4>64bit</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-lite-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section name="air" id="air" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Descargar Parrot AIR <?php echo $version; ?></h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/devel.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Edición de Parrot especialmente diseñada para pruebas Wireless, es un subconjunto de Parrot Full Edition conteniendo sólo las herramientas útiles para testear dispositivos de comunicación inalámbrica.</p>
                            <div class="mdl-grid mdl-grid--no-spacing">
                                    <h4>64bit</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-air-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                                    <a href="https://archive.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section name="cloud" id="cloud" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" id="cloud">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Parrot Cloud Edition</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/servers.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <p>Parrot Server Edition, diseñada para ser rápidamente desplegada donde lo necesites y controlada remotamente para llevar a cabo pruebas de penetración en la nube.</p>
                            <a href="https://core.dasaweb.net/cart.php?gid=18" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Comprar un VPS</a><br>
                            <a href="#netboot" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Obtener con Parrot Netboot Installer</a><br>
                            <a href="https://www.parrotsec-es.org/features.php#cloud" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--blue-grey mdl-color-text--accent-contrast button-margin">Saber más</a><br><br>

                        </div>
                    </div>
                </div>
            </section>
            <section name="iot" id="iot" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col">
                    <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                        <h4 class="mdl-cell mdl-cell--12-col">Dispositivos embebidos e IoT</h4>
                        <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--12-col-phone">
                            <div class="section__circle-container__circle mdl-color--white" style="background:url('img/boxes.jpg') center / cover no-repeat"></div>
                        </div>
                        <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                            <div class="mdl-grid mdl-grid--no-spacing">
                                <div class="mdl-cell--6-col">
                                    <h4>Raspberry Pi</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/arm/parrotsec-3.4-armhf-rpi-1/index.html" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descarga</a>
                                </div>
                                <div class="mdl-cell--6-col">
                                    <h4>Generic Rootfs</h4>
                                    <a href="https://cdimage.parrotsec.org/parrot/iso/arm/parrotsec-3.4-armhf-1/" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descarga</a>

                                </div>
                                <div class="mdl-cell--6-col">
                                    <a href="https://archive.parrotsec.org/parrot/iso/arm/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">hashes</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="usb-writer" name="usb-writer" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                <div class="mdl-card mdl-cell mdl-cell--12-col section--center">
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>ISO USB Image Writer</h4>
                        <p>Los archivos ISO de Parrot son distribuídos como imágenes ISOHYBRID (iso9660), por lo que necesitas software especial (como DD) para ponerlas en un dispositivo USB. Rosa Image Writer es una poderosa herramienta multiplataforma que trabaja perfectamente con Parrot</p>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux64.exec" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Linux 64bit</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-linux32.exec" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Linux 32bit</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-win.exe" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Windows</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-osx.dmg" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>OSX</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-all.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>All</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/rosa-image-writer-2.6.2-source.zip" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col" download>Codigo Fuente</a>
                        <a href="https://cdimage.parrotsec.org/parrot/misc/image-writer/" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-cell mdl-cell--3-col">Mas info</a>
                    </div>
                    <div class="mdl-card__supporting-text" align="center">
                        <h4>Archivos</h4>
                        <a href="https://archive.parrotsec.org/parrot" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Repositorio Principal</a><br><br>
                        <a href="http://archive2.parrotsec.org" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Otros proyectos alojados</a><br><br>
                        <a href="https://www.sourceforge.net/projects/parrotsecurity/files" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Lanzamientos anteriores</a><br><br>

                    </div>
                    <div name="netboot" id="netboot" class="mdl-card__supporting-text" align="center">
                        <h4>Imágenes para instalación en red</h4>
                        <p>Las imágenes para netbooks son archivos muy pequeños que contienen sólo el instalador de Parrot, requiere conexión a internet para ser instalado.</p>
                        <a href="https://cdimage.parrotsec.org/parrot/dists/stable/main/installer-i386/current/images/netboot/mini.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 32bit</a>
                        <a href="https://cdimage.parrotsec.org/parrot/dists/stable/main/installer-amd64/current/images/netboot/mini.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-margin">Netinstall 64bit</a><br><br>
                    </div>
                    <div id="studio" name="studio" class="mdl-card__supporting-text" align="center">
                        <h4>Parrot <?php echo $version; ?> Studio (64bit)</h4>
                        <p>Parrot Studio es un proyecto derivado para creación de contenido multimedia; aplicaciones para audio, gráficos, video, fotografía y flujos de trabajo en programación.</p>
                        <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060606;background:#00a000;">Descargar</a>
                        <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso.mirrorlist" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width" style="color: #060806;background:#00b000;">Mirrors</a>
                        <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/Parrot-studio-<?php echo $version; ?>_amd64.iso.torrent" target="_blank" style="color:#060606;background:#00a0a0;" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Torrent</a>
                        <a href="https://cdimage.parrotsec.org/parrot/iso/<?php echo $version; ?>/signed-hashes.txt" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast button-fixed-width">Hashes</a><br><br>
                    </div>
                </div>
            </section>
<?php
    include("footer.php");
?>
</div>
<script src="/misc/material.min.js"></script>
