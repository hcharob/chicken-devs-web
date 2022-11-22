<?php /* Template Name: cours */ ?>
<?php get_header() ?>
<?php $cat_count = get_category_by_slug('session-5'); ?>


<main class="site__main">
    <section class="formation">
        <div class="gradient__conteneur">
            <div class="conteneur__titre">
                <h2 class="formation__titre">LISTE DES COURS DU PROGRAMME TIM</h2>
            </div>
        </div>
        
        <?php wp_nav_menu(array(
            "menu" => "categorie_cours",
            "container_class" => "listeSession"
        )) ?>
        
        <div class="formation__conteneur" style="--n: <?php echo $cat_count -> count ?>">
            <div class="dropdown">
                <button class="dropbtn">Session</button>
                <div class="dropdown-content">
                    <?php wp_nav_menu(array(
                        "menu" => "categorie_cours",
                        "container_class" => "listeSessionDropdown"
                    )) ?>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
            </div>
            <div id="myDIV" class="formation__liste">
                    <?php 
                        $args = array(
                            "posts_per_page"   => -1, //This parameter defines the number of posts to return. Use -1 if you want all the posts.
                            "paged"            => 1, // Allows us to navigate between a set of posts while using the posts_per_page parameter. It is used for pagination. For example: suppose posts_per_page is 10 and there are 20 posts in the result, then if you assign paged to 2 then last 10 posts are returned.
                            "tax_query" => array(
                                array(
                                    "taxonomy" => "category",
                                    "field"    => "slug",
                                    "terms"    => array("session-1"), //permet d'afficher les cours de certaines catégories
                                )
                            ),
                            "orderby"          => "none", // l'ordre duh
                            "order"            => "DESC", // ASC ou DESC
                            "exclude"          => "", //mettre les post ID de ceux qu'on veux enlever
                            "meta_key"         => "", 
                            "meta_value"       => "",
                            "post_type"        => "post", // Retrieves content based on post, page or custom post type.
                            "post_status"      => "publish" //“publish”, “pending”, “draft”, “future”, “any” or “trash”.
                        );
                    ?>
                    <?php
                        $posts_array = get_posts($args); 
                        foreach($posts_array as $post)
                        {
                            get_template_part('gabarits/cour');
                        } 
                    ?>
                    
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>