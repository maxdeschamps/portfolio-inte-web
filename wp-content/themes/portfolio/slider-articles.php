<div id="liste-projets" class="swiper-container">
  <div class="swiper-wrapper">
    <?php query_posts( array(
       'posts_per_page' => 10,
    )); ?>

    <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
      <div class="swiper-slide">
        <figure class="item">
          <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" />

          <figcaption>
            <div class="col-8 text-center flex column align-center">
              <p><?= get_the_title(); ?></p>
              <a class="btn" href="<?= get_permalink(); ?>">Voir le projet</a>
            </div>
          </figcaption>
        </figure>
      </div>
    <?php endwhile; else : ?>
     <p>Pas de contenu pour le moment :( ...</p>
    <?php endif; wp_reset_query(); ?>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
