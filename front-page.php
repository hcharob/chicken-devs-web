<?php get_header() ?>
<main class="site__main__acceuil">
    <section class="showcase">
     <?php dynamic_sidebar( 'home_video_banner' ); ?>
     <div class="showcase__conteneur">
         <div class="showcase__contain">
            <?php //the_custom_logo(); ?>
            <div class="showcase__logo">
            </div>
            <h2 class="showcase__titre">Techniques d’intégration multimédia</h2>
         </div>
     </div>
    </section>
    <div class="pages__sections">
        <?php  query_posts(array('post_type' => 'page')); ?>
        <?php while (have_posts()): the_post(); ?>
            <?php
             $titre = get_the_title();
             get_template_part('composantes/template','previewSection'.$titre);
             ?>   
        <?php endwhile ?>
        <?php wp_reset_query(); ?>
    </div>
</main>
<?php get_footer() ?>