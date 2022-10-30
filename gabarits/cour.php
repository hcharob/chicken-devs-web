<article class="formation__cours  <?php  echo $categorie[1]->slug; ?>">
    <?php          
        $titre = get_the_title();
        // 1w1 Mise en page Web

        $titreFiltreCours = substr($titre, 4, -6);
                //$nbHeures = substr($titre, -6);
                /*// on peut utiliser le champ personnalisé « nombre_dheures »
                $nbHeures = get_field( "nombre_dheures" ) . " heures";
                //echo $nombre_dheure;*/
        $sigleCours = substr($titre, 0, 3);
        $descCours = get_the_content();
    ?>
<div class="conteneurCours">
                <h3 class="cours__titre">
                    <a href="<?php echo get_permalink(); ?>">
                        <?= $titreFiltreCours; ?>
                    </a> 
                </h3>
                <p class="cours__sigle"><?= $sigleCours; ?> </p>
                <!-- <p class="cours__desc"><?=wp_trim_words($descCours, 12, " <button class='cours__desc__bouton'>...</button>"); ?></p>
                <?php get_permalink(); ?> -->
    </div>
</article>