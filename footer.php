 <!-- Fix content -->
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

</footer>
<?php wp_footer(); ?>
</body>
</html>