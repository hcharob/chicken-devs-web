 <footer class="site__footer">
     <div class="site__footer__conteneur">
         <div class="footer__titre"><?php get_sidebar("pied_page_colonne_1")?></div>

         <!-- Informations du collège -->
         <div class="site__footer__contact">
             <section class="footer__adresse"><?php get_sidebar("pied_page_colonne_2")?></section>
         </div>

         <!-- Réseaux sociaux -->
         <div class="site__footer__social">
             <?php get_sidebar("pied_page_colonne_3"); ?>
         </div>

         <!-- Crédits du projet -->
         <div class="site__footer__credit">
             <?php get_sidebar("pied_page_colonne_4")?>
         </div>
     </div>
     
     <!-- Carrousel du site -->
    <div class="boite__carrousel">
        <div class="boite__carrousel__contour">
            <button class="boite__carrousel__right"><</button>
            <button class="boite__carrousel__left">></button>
            <button class="boite__carrousel__ferme">x</button>
            <section class="boite__carrousel__navigation"></section>
            <section class="boite__carrousel__overlay"></section>
            <section class="boite__carrousel__img"></section>
        </div>
    </div>
    <div class="boite__modale__conteneur">
        <div class="boite__modale">
            <button class="boite__modale__ferme">X</button>
            <article class="boite__modale__texte"></article>
        </div>
    </div>

 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>