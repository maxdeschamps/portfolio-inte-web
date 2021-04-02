<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header style="background-image: url(<?= get_the_post_thumbnail_url() ?>);">
        <div class="container flex flex-column-reverse">
          <h1 data-aos="fade-right" data-aos-delay="500"><?= get_the_title(); ?></h1>
        </div>
      </header>

      <section class="content" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

      <section data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
        <div class="container">
          <h2>Mes projets</h2>
          <?php get_template_part('slider-articles'); ?>
        </div>
      </section>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
