<?php 
//Template name: Service
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title($sep = ''); ?> | Andrix Design</title>
  <meta name="author" content="Adrian Holzschuh">
  <meta name="description" content="<?php the_field("meta-description"); ?>">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/service-styles.css">
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

  <style>
    @media (max-width: 740px) {
      .service-title h1 {
        background: var(--b2) url(<?php the_field("service-logo-2"); ?>);
        background-repeat: no-repeat;
        background-position: center;
        background-size: 160px;
      }
    }
  </style>

</head>

<body>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="service-intro">
    <div class="intro-wrapper">
      <div class="blur <?php the_field("service"); ?> active"></div>
    </div>
  </div>

  <img src="<?php the_field("service-image"); ?>" alt="<?php the_field("service-image-alt"); ?>" class="service-image">

  <main role="main">
    <div class="service-title">
      <img src="<?php the_field("service-logo"); ?>" alt="<?php the_field("service-logo-alt"); ?>">
      <h1><?php the_field("service-h1"); ?><span><?php the_field("service-h1-bold"); ?></span></h1>
    </div>
    <div class="service-description">
      <div class="description-inner">
        <div class="scroll-animation-once leftside">
          <p><?php the_field("service-description-1"); ?></p>
        </div>
        <div class="scroll-animation-once rightside">
          <p><?php the_field("service-description-2"); ?></p>
        </div>
        <div class="scroll-animation-once leftside">
          <p><?php the_field("service-technologies-title"); ?></p>
          <ul>
            <li><strong><?php the_field("service-technology-1"); ?></strong><?php the_field("service-technology-1-description"); ?></li>
            <li><strong><?php the_field("service-technology-2"); ?></strong><?php the_field("service-technology-2-description"); ?></li>
            <li><strong><?php the_field("service-technology-3"); ?></strong><?php the_field("service-technology-3-description"); ?></li>
            <li><strong><?php the_field("service-technology-4"); ?></strong><?php the_field("service-technology-4-description"); ?></li>
          </ul>
        </div>
        <div class="service-technologies scroll-animation-once rightside">
          <img src="<?php the_field("service-technology-1-logo"); ?>" alt="<?php the_field("service-technology-1"); ?>">
          <img src="<?php the_field("service-technology-2-logo"); ?>" alt="<?php the_field("service-technology-2"); ?>">
          <img src="<?php the_field("service-technology-3-logo"); ?>" alt="<?php the_field("service-technology-3"); ?>">
          <img src="<?php the_field("service-technology-4-logo"); ?>" alt="<?php the_field("service-technology-4"); ?>">
        </div>
      </div>
      <div class="blur <?php the_field("service"); ?> active"></div>
    </div>
  </main>

  <section class="projects" id="service-projects">
    <div class="projects-heading">
      <h1><?php the_field("service-projects-h1"); ?></h1>
      <div>
        <h2 class="scroll-animation-once leftside"><?php the_field("service-projects-h2"); ?><br><span><?php the_field("service-projects-h2-bold"); ?></span></h2>
      </div>
    </div>
    <div class="projects-list">
      <div class="swiper-container swiper">
        <div class="swiper-wrapper">
          <?php $projects = get_field('projects-list'); 
          if(isset($projects)) { foreach ($projects as $project) { ?>
          <div class="swiper-slide">
            <div class="project-wrapper">
              <div class="project-info">
                <h3><?php echo $project['projects-list-title']; ?></h3>
                <div class="project-cover">
                  <iframe width="560" height="382" src="<?php echo $project['iframe-source']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="<?php echo $project['iframe-style']; ?>"></iframe>
                  <img src="<?php echo $project['project-cover']; ?>" alt="<?php echo $project['project-cover-alt']; ?>" style="<?php echo $project['project-cover-style']; ?>">
                </div>
                <div class="project-data">
                  <span><?php echo $project['description-title']; ?></span>
                  <p><?php echo $project['project-description']; ?></p>
                  <span><?php echo $project['technologies-title']; ?></span>
                  <div class="project-technologies">
                    <div class="section-icon" data-value="<?php echo $project['project-technology-1-alt']; ?>">
                      <img src="<?php echo $project['project-technology-1']; ?>" alt="<?php echo $project['project-technology-1-alt']; ?>" style="<?php echo $project['project-technology-1-style']; ?>">
                    </div>
                    <div class="section-icon" data-value="<?php echo $project['project-technology-2-alt']; ?>">
                     <img src="<?php echo $project['project-technology-2']; ?>" alt="<?php echo $project['project-technology-2-alt']; ?>" style="<?php echo $project['project-technology-2-style']; ?>">
                    </div>
                    <div class="section-icon" data-value="<?php echo $project['project-technology-3-alt']; ?>">
                      <img src="<?php echo $project['project-technology-3']; ?>" alt="<?php echo $project['project-technology-3-alt']; ?>" style="<?php echo $project['project-technology-3-style']; ?>">
                    </div>
                  </div>
                  <a href="<?php echo $project['project-link']; ?>" target="_blank"><?php echo $project['project-call']; ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php } } ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <section class="faq" id="faq">
    <div class="projects-heading faq-heading">
      <h1><?php the_field("faq-title"); ?></h1>
    </div>
    <div class="faq-background" style="background-image:url(<?php the_field("faq-background"); ?>); <?php the_field("faq-background-style"); ?>">
      <div class="faq-inner">
        <dl>
          <?php $faqs = get_field('projects-faq'); 
          if(isset($faqs)) { foreach ($faqs as $faq) { ?>
          <div class="scroll-animation-once leftside">
            <dt>
              <button aria-controls="pergunta01" aria-expanded="true">
                <?php echo $faq['faq-question']; ?>
              </button>
            </dt>
            <dd id="pergunta01">
              <?php echo $faq['faq-answer']; ?>
            </dd>
          </div>
          <?php } } ?>
        </dl>
      </div>
      <div class="blur <?php the_field("service"); ?> active"></div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>

  <div class="blur <?php the_field("service"); ?> active"></div>
  </footer>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite reverse;">
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite reverse;">
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
      <span><?php the_field("about-header-footer-decoration-service"); ?> • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <script src="<?= get_stylesheet_directory_uri() ?>/js/swiper/swiper.min.js"></script>
  <script type="module">
    import { Navigation } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/navigation.js';
    import { Pagination } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/pagination.js';
    import { Autoplay } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/autoplay.js';
    Swiper.use([Navigation, Pagination, Autoplay]);
    const swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
      grabCursor: true,
      loop: true,
      rewind: true,
      speed: 1000,
      autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
      },
    });
  </script>
  <script defer src="<?= get_stylesheet_directory_uri() ?>/js/script-global.js"></script>

  <?php wp_footer(); ?>

</body>

</html>