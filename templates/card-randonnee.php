<article class="randonnee-card">
    <?php if (get_field('image')) : ?>
        <img src="<?php echo get_field('image'); ?>" alt="<?php the_title(); ?>">
    <?php endif; ?>
    
    <div class="card-content">
        <h3><?php the_title(); ?></h3>
        <div class="card-meta">
            <span>👣 <?php echo get_field('distance_km'); ?> km</span>
            <span>⏱️ <?php echo get_field('duree'); ?></span>
        </div>
        <a href="<?php the_permalink(); ?>" style="display:inline-block; margin-top:15px; color:#2c5e2e; font-weight:bold;">Voir les détails →</a>
    </div>
</article>