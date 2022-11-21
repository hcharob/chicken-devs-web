<?php get_header() ?>
<main class="site__main__acceuil">
    <section class="showcase">
     <?php dynamic_sidebar( 'home_video_banner' ); ?>
    </section>
    <div class="pages__sections">
        <section class="pages__sections__section section1">
            <div class="hoverPannel__conteneur">   
                <div class="hoverPannel__contour">
                    <div class="hoverPannel__contain">
                        <div class="box__titre">
                            <h2 class="titre">
                                Une Équipe de travail  <span>Adaptative</span>
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
                        <div class="button">
                            <?php get_template_part('composantes/template','buttonLong', array('Texte'	=> 'value', 'Link'	=> 'value2'));?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pages__sections__section section2">
        
        </section>
        <section class="pages__sections__section section3">
        
        </section>
        <section class="pages__sections__section section4">
        
        </section>
    </div>
</main>
<?php get_footer() ?>