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
        <?php 
                        $args = array(
                            "posts_per_page"   => -1, //This parameter defines the number of posts to return. Use -1 if you want all the posts.
                            "paged"            => 1, // Allows us to navigate between a set of posts while using the posts_per_page parameter. It is used for pagination. For example: suppose posts_per_page is 10 and there are 20 posts in the result, then if you assign paged to 2 then last 10 posts are returned.
                            "tax_query" => array(

                                array(
                                    "taxonomy" => "category",
                                    "field"    => "slug",
                                    "terms"    => "Projets-etudiants", //permet d'afficher les cours de certaines catégories
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
        
        <!-- Scroll des projets édutiants -->
        <section class="scroll__projets">
        <?php
            $posts_array = get_posts($args); 
            foreach($posts_array as $post)
            {  
                get_template_part('gabarits/projet'); 
            } 
        ?>
        </section>
</main>
<?php get_footer() ?>