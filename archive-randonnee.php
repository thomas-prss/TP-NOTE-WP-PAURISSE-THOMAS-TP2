<?php get_header(); ?>

<h1>Toutes les randonnées</h1>

<div class="randonnees-liste">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article style="border: 1px solid #ccc; margin-bottom: 20px; padding: 10px;">
            <h2><?php the_title(); ?></h2>
            
            <?php 
            // On vérifie si la fonction get_field existe (si l'extension SCF est active)
            if ( function_exists('get_field') ) : ?>
                <p>Distance : <?php the_field('distance_km'); ?> km</p>
                <p>Durée : <?php the_field('duree'); ?></p>
            <?php endif; ?>

            <a href="<?php the_permalink(); ?>">Voir le détail</a>
        </article>

    <?php endwhile; else : ?>
        <p>Aucune randonnée trouvée.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>