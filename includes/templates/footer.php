<footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>GdlWebCamp</span></h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto perferendis, neque, odio ipsa deleniti asperiores non iure animi natus voluptatibus sapiente exercitationem tenetur impedit nulla tempora molestias. Ex, doloribus dolores?</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Ultimos <span>Tweets</span></h3>
                <ul>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto perferendis, neque.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto perferendis, neque.</li>
                    <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto perferendis, neque.</li>
                </ul>

            </div>
            <div class="menu">
                <h3>Redes <span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>

                </nav>
            </div>
        </div>
    </footer>

    <p class="copyright">Todos los derechos Reservados GdlWebCamp 2016</p>



    <script src="js/vendor/modernizr-3.8.0.min.js "></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js " integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous "></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js "><\/script>')
    </script>
    <script src="js/plugins.js "></script>
    <script src="js/jquery.animateNumber.js "></script>
    <script src="js/jquery.countdown.min.js "></script>
    <script src="js/jquery.lettering.js "></script>
    
    <?php
            $archivo = basename($_SERVER['PHP_SELF']);
            $pagina = str_replace(".php", "", $archivo);
            if($pagina == 'invitados' || $pagina == 'index'){
              echo '<script src="js/jquery.colorbox-min.js "></script>';
            } else if($pagina == 'conferencia') {
              echo '<script src="js/lightbox.js "></script>';
            }
        ?>
    <script src="js/jquery.waypoints.min.js "></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="js/main.js "></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js " async></script>
</body>

</html>