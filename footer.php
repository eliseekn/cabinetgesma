        <footer>
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-5">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logos/gesma.png'?>" alt="Logo Cabinet GESMA" class="img-fluid">
                        <h5 class="mt-5">GESTION MARKETING MANAGEMENT</h5>
                        <p class="mt-3">
                            SARL au Capital de 2.000.000 F CFA <br>
                            RCCM N°: CI DAL. 2016 B. 4740 <br>
                            Siège Social : Daloa - Rue Station Bra Kanon <br>
                            BP 755 Daloa - RCI - Tél : 32 76 79 63
                        </p>
                    </div>

                    <div class="col mt-5">
                        <h3>Plan du site</h3>
                        <hr>
                        <ul class="nav flex-column mt-3">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo home_url( '/' ); ?>">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/a-propos' ); ?>">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/expertise' ); ?>">Expertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/formations' ); ?>">Formations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/actualite' ); ?>">Actualité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/emploi' ); ?>">Offres d'emploi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="<?php echo site_url( '/contact' ); ?>">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col mt-5">
                        <h3>Contact</h3>
                        <hr>
                        <p class="mt-4">
                            <li class="fas fa-headset"></li>
                            <span class="ml-2">(+225) 32 76 79 63</span>
                        </p>

                        <p>
                            <li class="fas fa-envelope"></li>
                            <span class="ml-2">contact@cabinetgesma.com</span>
                        </p>

                        <p>
                            <li class="fas fa-mail-bulk"></li>
                            <span class="ml-2">BP 755 Daloa</span>
                        </p>

                        <h3 class="mt-5">Nous suivre</h3>
                        <hr>
                        <ul class="list-inline mt-4">
							<a class="list-inline-item" href="https://web.facebook.com/cabinetgesma/">
                                <li class="fab fa-facebook-f"></li>
                            </a>
							<!-- <a class="list-inline-item" href="#">
                                <li class="fab fa-linkedin-in ml-2"></li>
                            </a> -->
							<!-- <a class="list-inline-item" href="#">
                                <li class="fab fa-twitter ml-2"></li>
                            </a> -->
							<!-- <a class="list-inline-item" href="#">
                                <li class="fab fa-instagram ml-2"></li>
                            </a> -->
							<a class="list-inline-item" href="https://www.youtube.com/channel/UCCiL1taRK1me9XshXo7rhGg/featured">
                                <li class="fab fa-youtube ml-2"></li>
                            </a>
						</ul>
                    </div>
                </div>

                <hr>
                <div class="d-flex justify-content-between mt-4">
                    <p>
                        © 2019 Cabinet GESMA. Tous droits réservés.
                        <a href="<?php echo site_url( '/politique-de-confidentialite' ); ?>">Politique de confidentialité.</a>
                    </p>
                    <p></p>
                </div>
            </div>
        </footer>

        <a href="#page-top" id="scroll-top" title="Aller en haut">
			<li class="fas fa-chevron-up"></li>
		</a>

        <?php wp_footer(); ?>

        <script type="text/javascript">
            AOS.init({
                once: true,
            });

            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 180) {
                        $("#scroll-top").fadeIn('slow');
                    } else {
                        $("#scroll-top").fadeOut('slow');
                    }
                });

                $(".owl-carousel").owlCarousel({
                    margin: 30,
                    items: 2,
                    loop: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive : {
                        0: {
                            items: 1
                        },

                        768: {
                            items: 2
                        }
                    }
                });
            });
        </script>
    </body>
</html>
