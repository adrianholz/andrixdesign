<?php 
//Template name: About
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title($sep = ''); ?> | Andrix Design</title>
  <meta name="author" content="Adrian Holzschuh">
  <meta name="description" content="A Andrix Design cria projetos digitais personalizados para seu negócio. Criação de site, loja virtual, marketing digital, hospedagem e domínio em Botucatu.">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/about-styles.css">
  <link rel="apple-touch-icon" sizes="57x57" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_stylesheet_directory_uri() ?>/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri() ?>/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= get_stylesheet_directory_uri() ?>/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>

</head>

<body>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main role="main">
    <div class="about-inner">
      <span class="player-decoration scroll-animation-once upside"><?php the_field("about-decoration"); ?></span>
      <div class="player-intro scroll-animation-once leftside">
        <h1><?php the_field("about-h1"); ?> <span><?php the_field("about-h1-thin"); ?></span></h1>
        <h2><?php the_field("about-description"); ?></h2>
        <div class="player-calls">
          <a href="#education"><?php the_field("text-call-1"); ?></a>
          <a href="#experience"><?php the_field("text-call-2"); ?></a>
        </div>
      </div>
      <img src="<?php the_field("about-image"); ?>" alt="<?php the_field("about-image-alt"); ?>" class="scroll-animation-once rightside">
    </div>
    <div class="blur marketing active"></div>
  </main>

  <section class="player-description">
    <div class="description-inner">
      <div class="player-summary">
        <h1><?php the_field("about-h1-2"); ?></h1>
        <div class="summary-info">
          <div class="player-quote">
            <img src="<?php the_field("about-profile"); ?>" alt="<?php the_field("about-profile-alt"); ?>" class="scroll-animation-once leftside">
            <div>
              <span class="scroll-animation-once leftside"><?php the_field("about-describe"); ?></span>
              <p class="scroll-animation-once leftside"><?php the_field("about-describe-testimony"); ?></p>
            </div>
          </div>
          <p class="scroll-animation-once leftside"><?php the_field("about-describe-description"); ?></p>
        </div>
      </div>
      <div class="player-info">
        <h1><?php the_field("about-info-title"); ?></h1>
        <div class="info-inner">
          <div>
            <span class="scroll-animation-once rightside"><?php the_field("about-info-specialties-title"); ?></span>
            <p class="scroll-animation-once rightside"><?php the_field("about-info-specialties"); ?></p>
          </div>
          <div>
            <div>
              <span class="scroll-animation-once rightside"><?php the_field("about-info-birthday-title"); ?></span>
              <p class="scroll-animation-once rightside"><?php the_field("about-info-birthday"); ?></p>
              <span class="scroll-animation-once rightside"><?php the_field("about-info-age-title"); ?></span>
              <p class="scroll-animation-once rightside"><?php the_field("about-info-age"); ?></p>
            </div>
            <div>
              <span class="scroll-animation-once rightside"><?php the_field("about-info-hometown-title"); ?></span>
              <p class="scroll-animation-once rightside"><?php the_field("about-info-hometown"); ?></p>
              <span class="scroll-animation-once rightside"><?php the_field("about-info-home-title"); ?></span>
              <p class="scroll-animation-once rightside"><?php the_field("about-info-home"); ?></p>
            </div>
          </div>
          <div>
            <span class="scroll-animation-once rightside"><?php the_field("about-info-email-title"); ?></span>
            <p class="scroll-animation-once rightside"><a href="mailto:<?php the_field("about-info-email"); ?>"><?php the_field("about-info-email"); ?></a></p>
            <span class="scroll-animation-once rightside"><?php the_field("about-info-phone-title"); ?></span>
            <p class="scroll-animation-once rightside"><a href="tel:<?php the_field("about-info-phone-no-format"); ?>"><?php the_field("about-info-phone"); ?></a></p>
          </div>
          <div>
            <?php $socials = get_field('social-media'); 
            if(isset($socials)) { foreach ($socials as $social) { ?>
            <a href="<?php echo $social['social-media-link']; ?>" target="_blank" class="scroll-animation-once rightside"><img src="<?php echo $social['social-media-image']; ?>" alt="<?php echo $social['social-media-image-alt']; ?>"></a>
            <?php } } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="player-experience" id="experience">
    <h1><?php the_field("about-experience-title"); ?></h1>
    <div class="experience-inner">
      <div>
        <?php $experienceCards = get_field('experience-cards'); 
        if(isset($experienceCards)) { foreach ($experienceCards as $experienceCard) { ?>
        <div class="experience-card">
          <h2 class="scroll-animation-once leftside"><?php echo $experienceCard['occupation']; ?></h2>
          <h3 class="scroll-animation-once leftside"><?php echo $experienceCard['company']; ?></h3>
          <span class="scroll-animation-once leftside"><?php echo $experienceCard['period']; ?></span>
          <p class="scroll-animation-once leftside"><?php echo $experienceCard['description']; ?></p>
          <div>
            <span class="scroll-animation-once leftside"><?php echo $experienceCard['skill-1']; ?></span>
            <span class="scroll-animation-once leftside"><?php echo $experienceCard['skill-2']; ?></span>
            <span class="scroll-animation-once leftside"><?php echo $experienceCard['skill-3']; ?></span>
          </div>
        </div>
        <?php } } ?>
      </div>
    </div>
  </section>

  <section class="player-education" id="education">
    <h1><?php the_field("about-education-title"); ?></h1>
    <div class="education-inner">
      <div>
        <?php $educationCards = get_field('education-cards'); 
        if(isset($educationCards)) { foreach ($educationCards as $educationCard) { ?>
        <div class="education-card">
          <a href="<?php echo $educationCard['diploma-pdf']; ?>" target="_blank"><img src="<?php echo $educationCard['diploma']; ?>" alt="<?php echo $educationCard['diploma-alt']; ?>" class="scroll-animation-once leftside"></a>
          <h2 class="scroll-animation-once leftside"><?php echo $educationCard['education-title']; ?></h2>
          <h3 class="scroll-animation-once leftside"><?php echo $educationCard['institution']; ?></h3>
          <span class="scroll-animation-once leftside"><?php echo $educationCard['study-period']; ?></span>
          <p class="scroll-animation-once leftside"><?php echo $educationCard['study-description']; ?></p>
        </div>
        <?php } } ?>
      </div>
    </div>
  </section>

  <section class="player-certificates">
    <h1><?php the_field("about-certificates-title"); ?></h1>
    <div class="certificates-inner marquee marquee-hover" style="--gap: 40px">
      <div class="marquee-content" style="animation: scroll 20s linear infinite;">
        <?php $certificateCards = get_field('certificates-cards'); 
        if(isset($certificateCards)) { foreach ($certificateCards as $certificateCard) { ?>
        <div class="certificates-card">
          <a href="<?php echo $certificateCard['certificate-link']; ?>" target="_blank">
            <img src="<?php echo $certificateCard['certificate']; ?>" alt="<?php echo $certificateCard['certificate-alt']; ?>">
          </a>
          <h2><?php echo $certificateCard['certificate-title']; ?></h2>
          <h3><?php echo $certificateCard['certificate-institution']; ?></h3>
        </div>
        <?php } } ?>
      </div>
      <div class="marquee-content" aria-hidden="true" style="animation: scroll 20s linear infinite;">
        <?php $certificateCards2 = get_field('certificates-cards'); 
        if(isset($certificateCards2)) { foreach ($certificateCards2 as $certificateCard2) { ?>
        <div class="certificates-card">
          <a href="<?php echo $certificateCard2['certificate-link']; ?>" target="_blank">
            <img src="<?php echo $certificateCard2['certificate']; ?>" alt="<?php echo $certificateCard2['certificate-alt']; ?>">
          </a>
          <h2><?php echo $certificateCard2['certificate-title']; ?></h2>
          <h3><?php echo $certificateCard2['certificate-institution']; ?></h3>
        </div>
        <?php } } ?>
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>

  <div class="blur marketing active"></div>
  </footer>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <script defer src="<?= get_stylesheet_directory_uri() ?>/js/script-global.js"></script>

  <?php wp_footer(); ?>

</body>

</html>