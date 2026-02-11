<?php get_header(); ?>
<div class="container">
    <h1 class="section-title">Accueil - Nos Randonnées Niveau "Moyen"</h1>

    <div class="randonnee-grid">
        <?php
        $args = [
            'post_type' => 'randonnee',
            'posts_per_page' => 3,
            'tax_query' => [[
                'taxonomy' => 'difficulte',
                'field'    => 'slug',
                'terms'    => 'moyen',
            ]],
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                get_template_part('templates/card-randonnee');
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>⚠️ Pense à créer des randonnées et à leur attribuer la catégorie "Moyen" dans l\'admin !</p>';
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>