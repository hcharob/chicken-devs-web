<?php /* Template Name: cours */ ?>
<?php get_header() ?>
<main class="site__main">
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
        <?php 

            $args = array(
                "posts_per_page"   => -1, //This parameter defines the number of posts to return. Use -1 if you want all the posts.
                "paged"            => 1, // Allows us to navigate between a set of posts while using the posts_per_page parameter. It is used for pagination. For example: suppose posts_per_page is 10 and there are 20 posts in the result, then if you assign paged to 2 then last 10 posts are returned.
                "tax_query" => array(
                    array(
                        "taxonomy" => "category",
                        "field"    => "slug",
                        "terms"    => "cours", //permet d'afficher les cours de certaines catégories
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

            $posts_array = get_posts($args); 
            foreach($posts_array as $post)
	    {
            get_template_part('gabarits/cour');

            /*
            echo "<div class=cour>" . 
            "<h1>".$post->post_title."</h1>" 
            . "<p>" . $post->post_content . 
            "</p><br></div><br>";
            */
	    } 

        ?>
            
        </div>
    </section>
</main>
<?php get_footer() ?>