<?php get_header(); ?>

<div class="container"> <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>

        <ul class="rando-stats">
            <li>👣 Distance : <?php echo get_field('distance_km'); ?> km</li>
            <li>⏱️ Durée : <?php echo get_field('duree'); ?></li>
            <li>🧗 Difficulté : 
    <?php 
    $terms = get_the_terms(get_the_ID(), 'difficulte'); 
    if ($terms && !is_wp_error($terms)) {
        // On récupère le nom du premier terme coché
        echo esc_html($terms[0]->name); 
    } else {
        echo 'Non définie';
    }
    ?>
</li>
        </ul>

        <?php if (get_field('image')) : ?>
            <img src="<?php echo get_field('image'); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>

        <div class="points-interets">
            <h3>📍 Points d'intérêts :</h3>
            <?php // Ton code pour le répéteur ici... ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>