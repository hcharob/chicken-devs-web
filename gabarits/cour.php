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
    <div class="conteneurContour">
        <div class="conteneurCours">
            <h3 class="cours__titre">
                    <?= $titreFiltreCours; ?>
            </h3>
            <p class="cours__sigle"><?= $sigleCours; ?> </p>
            <code class="cours__desc"><?=$descCours?><?php get_permalink(); ?></code>
        </div>
    </div>
</article>