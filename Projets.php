<?php /* Template Name: projets */ ?>
<?php get_header() ?>
<main class="site__main">
    <section class="projetsEtudiants">
        <div class="projets__boite__titre">
            <h2 class="projets__titre">
                Les Projets <span>étudiants</span>
            </h2>
            <svg class="projets__barre" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 353.41 26.71">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #a663ff;
                            stroke-miterlimit: 10;
                            stroke-width: 2px;
                        }
                    </style>
                </defs>
                <line class="cls-1" y1="13.36" x2="328" y2="13.36" />
                <rect class="cls-1" x="331.62" y="4.91" width="16.89" height="16.89"
                    transform="translate(109.04 -236.55) rotate(45)" />
            </svg>
        </div>
        <!-- <svg class="projets__fleche-scroll" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115.45 20.77">
            <defs>
                <style>
                    .cls-1 {
                        fill: none;
                        stroke: #a663ff;
                        stroke-miterlimit: 10;
                        stroke-width: 2px;
                    }
                </style>
            </defs>
            <g>
                <line class="cls-1" x1="113.41" y1="10.38" x2="19.44" y2="10.38" />
                <rect class="cls-1" x="4.04" y="4.04" width="12.69" height="12.69"
                    transform="translate(10.38 25.07) rotate(-135)" />
            </g>
            <polyline class="cls-1" points="107.84 4.6 114.03 10.79 107.84 16.99" />
        </svg> -->

        <!-- Pour avoir la gallery de Wordpress -->
        <?php if (have_posts()): the_post(); ?>
        <?php the_content() ?>
        <?php endif ?>

        <section class="scroll__projets">
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet1">
                        <div class="overlay">
                            <p class="projet__titre">Planète Pizza</p>
                        </div>
                    </div>
                    <!-- <button class='cours__desc__ouvrir'> La suite </button> -->
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet2">
                        <div class="overlay">
                            <p class="projet__titre">Pinball</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet3">
                        <div class="overlay">
                            <p class="projet__titre">Racines</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet4">
                        <div class="overlay">
                            <p class="projet__titre">La recherche <br>pour le <br> Dakimakura</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet5">
                        <div class="overlay">
                            <p class="projet__titre">Somnia</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet6">
                        <div class="overlay">
                            <p class="projet__titre">La dernière <br> Lumière</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet7">
                        <div class="overlay">
                            <p class="projet__titre">Made to last</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conteneur">
                <div class="contour">
                    <div class="forme" id="projet8">
                    <div class="overlay">
                            <p class="projet__titre">Projet8</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
</main>
<?php get_footer() ?>