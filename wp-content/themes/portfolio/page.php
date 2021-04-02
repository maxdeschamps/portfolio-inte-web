<?php get_header(); ?>
<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php if ($header = get_field('header')): ?>
      <header style="background-image: url(<?= $header['background']['url'] ?>);">
        <div class="container flex flex-wrap space-between align-end column-reverse-sm">
          <div id="header-title" class="col-12 col-md-5" data-aos="fade-right" data-aos-delay="500">
            <?= $header['texte'] ?>
          </div>

          <div id="header-image" class="col-7 col-md-4" data-aos="fade-left" data-aos-delay="500">
            <span id="header-square"></span>
            <img class="reverse" src="<?= $header['image']['url'] ?>" alt="<?= $header['image']['alt'] ?>" />
          </div>
        </div>

        <svg id="svg-wave" viewBox="0 0 500 150" preserveAspectRatio="none">
          <path d="M-11.06,150.08 C193.78,0.48 305.53,0.48 510.38,149.10 L500.00,149.60 L-0.00,149.60 Z"></path>
        </svg>

        <a id="to-scroll" href="#qui-suis-je">En savoir plus</a>
      </header>
    <?php endif; ?>

    <?php if ($about = get_field('qui_suis_je')): ?>
      <section id="qui-suis-je">
        <div class="container">
          <h2 data-aos="fade-right" data-aos-delay="300"><?= $about['titre'] ?></h2>

          <div class="flex space-between align-center column-sm" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
            <div class="col-12 col-md-6 margin-bottom-sm">
              <?= $about['texte'] ?>
            </div>

            <div class="cadre col-12 col-md-5">
              <img class="cadre reverse" src="<?= $about['image']['url'] ?>" alt="<?= $about['image']['alt'] ?>" />
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if ($projets = get_field('projets')): ?>
      <section id="mes-projets">
        <div class="container">
          <h2 data-aos="fade-right" data-aos-delay="300"><?= $projets['titre'] ?></h2>

          <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
            <div class="col-12 col-md-6 margin-auto text-center">
              <?= $projets['texte'] ?>
            </div>

            <?php get_template_part('slider-articles'); ?>
          </div>
        </div>
      </section>
    <?php endif; ?>

    <?php if ($contact = get_field('contactez_moi')): ?>
      <section id="contactez-moi">
        <div class="container">
          <div class="flex space-between column-sm" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0">
            <div class="col-12 col-md-4 margin-bottom-sm">
              <h2 data-aos="fade-right" data-aos-delay="300"><?= $contact['titre'] ?></h2>

              <?= $contact['texte'] ?>

              <ul id="list-socials" class="flex space-around">
                <?php foreach ($contact['contacts'] as $key => $social) : ?>
                  <li>
                    <?php if ($key === "mail") : $mail = explode('@', $social); ?>
                      <a class="mailto picto-<?= $key ?>" data-name="<?= $mail[0] ?>" data-domain="<?= $mail[1] ?>" title="Par <?= $key ?>" target="blank"><?= ucfirst($key) ?></a>
                    <?php else : ?>
                      <a class="picto-<?= $key ?>" href="<?= $social ?>" title="Par <?= ucfirst($key) ?>" target="blank"><?= ucfirst($key) ?></a>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <div class="col-12 col-md-7">
              <?= do_shortcode($contact['formulaire']) ?>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>

  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
