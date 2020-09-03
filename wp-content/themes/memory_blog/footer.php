
<?php wp_footer(); ?>
<footer class="page-footer font-small indigo">
    <div class="bd-example partenaires">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active carousel-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/partenaire1.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item carousel-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/partenaire2.png" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item carousel-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/src/img/partenaire3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Société</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.memoryvoyage.com/memory-voyage-presentation!">Présentation</a>
                    </li>
                    <li>
                        <a href="https://www.memoryvoyage.com/mentions-legales">Mentions legals</a>
                    </li>
                    <li>
                        <a href="https://www.memoryvoyage.com/cgv">Conditions générales de ventes</a>
                    </li>
                    <li>
                        <a href="https://www.memoryvoyage.com/cgv">Confidentialité</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
                <ul class="list-unstyled">
                    <li>
                        contact@memoryvoyage.com
                    </li>
                    <li>
                        Du lundi au samedi de 10h30 à 18h30 au +33 (0)9 86 37 49 14
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Communication</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Presse</a>
                    </li>
                    <li>
                        <a href="#!">Partenaires</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Vous et nous</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Blog</a>
                    </li>
                    <li>
                        <a href="#!">FAQ</a>
                    </li>
                    <li>
                        <a href="#!">Recrutement</a>
                    </li>
                    <li>
                        <a href="#!">Devenir partenaire</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3"><?php the_field('copyright_');?> © 2019 Copyright: www.memoryvoyage.com</div>
    <!-- Copyright -->

</footer>


</body>
</html>