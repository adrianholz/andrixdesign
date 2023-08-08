<?php 
//Template name: Home
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="author" content="Adrian Holzschuh">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.min.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/index-styles.min.css">
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

  <div class="intro">
    <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
      <div class="marquee-content" style="animation: scroll 30s linear infinite;">
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
      </div>
      <div class="marquee-content" style="animation: scroll 30s linear infinite;">
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
      </div>
    </div>
    <div>
      <img src="<?= get_stylesheet_directory_uri() ?>/img/svg/Andrix.svg" alt="Andrix Design">
      <h1 class="intro-heading">
        <span>A</span>
        <span>N</span>
        <span>D</span>
        <span>R</span>
        <span>I</span>
        <span>X</span>
        <div class="intro-subheading">
          <span>D</span>
          <span>E</span>
          <span>S</span>
          <span>I</span>
          <span>G</span>
          <span>N</span>
        </div>
      </h1>
    </div>
    <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
      <div class="marquee-content" style="animation: scroll 30s linear infinite reverse;">
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
      </div>
      <div class="marquee-content" style="animation: scroll 30s linear infinite reverse;">
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
        <span>Andrix Design • </span>
      </div>
    </div>
  </div>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <main role="main">
    <div class="main-inner">
      <div class="icons-above">
        <a href="#"><img src="<?php the_field("main-icon-1"); ?>" alt="<?php the_field("main-icon-1-alt"); ?>" class="scroll-animation leftside"></a>
        <a href="#"><img src="<?php the_field("main-icon-2"); ?>" alt="<?php the_field("main-icon-2-alt"); ?>" class="scroll-animation upside"></a>
        <a href="#"><img src="<?php the_field("main-icon-3"); ?>" alt="<?php the_field("main-icon-3-alt"); ?>" class="scroll-animation rightside"></a>
      </div>
      <p class="scroll-animation rightside"><span class="active">Aqui começa o seu</span></p>
      <h1 class="scroll-animation leftside">
        <span><?php the_field("main-h1"); ?></span>
        <span class="first-word">
          <i class="active"></i>
        </span>
        <span class="heading-separator active"></span>
        <span class="second-word active"></span>
      </h1>
      <div class="icons-below">
        <a href="#"><img src="<?php the_field("main-icon-4"); ?>" alt="<?php the_field("main-icon-4-alt"); ?>" class="scroll-animation leftside"></a>
        <a href="#"><img src="<?php the_field("main-icon-5"); ?>" alt="<?php the_field("main-icon-5-alt"); ?>" class="scroll-animation downside"></a>
        <a href="#"><img src="<?php the_field("main-icon-6"); ?>" alt="<?php the_field("main-icon-6-alt"); ?>" class="scroll-animation rightside"></a>
      </div>
    </div>
    <div class="blur marketing active"></div>
    <div class="swiper swiper-container-1">
      <div class="swiper-wrapper">
      <?php 
      $args = array(
      'post_type'=> 'post',
      'orderby'    => 'ID',
      'post_status' => 'publish',
      'order'    => 'DESC',
      'posts_per_page' => 5
      );
      $result = new WP_Query( $args );
      if ( $result-> have_posts() ) : ?>
      <?php while ( $result->have_posts() ) : $result->the_post(); ?>
        <div class="swiper-slide">
          <div class="blog-post">
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
              <div class="post-preview">
                <?php the_post_thumbnail(); ?>
                <div class="post-content-inner">
                   <?php the_content(); ?>
                </div>
              </div>
              <div class="post-call">
                <div class="post-meta">
                  <div>
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/svg/user.svg" alt="Ícone Autor Postagem">
                    <p><?php the_author(); ?></p>
                  </div>
                  <div>
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/svg/calendar.svg" alt="Ícone Tempo Leitura">
                    <p><?php echo get_the_date('m/Y'); ?></p>
                  </div>
                </div>
                <a href="<?php the_permalink(); ?>">Ler sobre</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
    </div>
  </main>

  <section class="services" id="services">
    <div class="services-heading">
      <h1><?php the_field("services-h1"); ?></h1>
      <div>
        <h2 class="scroll-animation-once leftside"><?php the_field("services-h2"); ?> <span><?php the_field("services-h2-bold"); ?></span></h2>
      </div>
    </div>
    <div class="services-inner">
      <div class="all-services">
        <div class="section-title scroll-animation-once leftside">
          <div class="section-icon">
            <img src="<?php the_field("services-section-1-icon"); ?>" alt="<?php the_field("services-section-1-icon-alt"); ?>">
          </div>
          <h3><?php the_field("services-section-1-title"); ?></h3>
        </div>
        <p class="service-description scroll-animation-once leftside"><?php the_field("services-section-1-description"); ?></p>
        <div class="services-wrapper" id="services-window">
          <div class="service-window">
            <div class="service-window-inner-background">
              <video muted src="<?php the_field("services-intro-video"); ?>"></video>
            </div>
            <div class="service-window-inner website active" style="background: var(--b1) url(<?php the_field("service-1-background"); ?>) no-repeat;background-position: <?php the_field("service-1-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-1-logo"); ?>" alt="<?php the_field("service-1-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-1-header"); ?> <br><span><?php the_field("service-1-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-1-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-1-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-1-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-1-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-1-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-1-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-1-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service-window-inner ecommerce" style="background: var(--b1) url(<?php the_field("service-2-background"); ?>) no-repeat;background-position: <?php the_field("service-2-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-2-logo"); ?>" alt="<?php the_field("service-2-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-2-header"); ?><br><span><?php the_field("service-2-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-2-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-2-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-2-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-2-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-2-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-2-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-2-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service-window-inner marketing" style="background: var(--b1) url(<?php the_field("service-3-background"); ?>) no-repeat;background-position: <?php the_field("service-3-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-3-logo"); ?>" alt="<?php the_field("service-3-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-3-header"); ?><br><span><?php the_field("service-3-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-3-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-3-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-3-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-3-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-3-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-3-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-3-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service-window-inner design" style="background: var(--b1) url(<?php the_field("service-4-background"); ?>) no-repeat;background-position: <?php the_field("service-4-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-4-logo"); ?>" alt="<?php the_field("service-4-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-4-header"); ?><br><span><?php the_field("service-4-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-4-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-4-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-4-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-4-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-4-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-4-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-4-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service-window-inner identity" style="background: var(--b1) url(<?php the_field("service-5-background"); ?>) no-repeat;background-position: <?php the_field("service-5-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-5-logo"); ?>" alt="<?php the_field("service-5-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-5-header"); ?><br><span><?php the_field("service-5-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-5-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-5-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-5-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-5-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-5-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-5-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-5-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="service-window-inner video" style="background: var(--b1) url(<?php the_field("service-6-background"); ?>) no-repeat;background-position: <?php the_field("service-6-background-position"); ?>">
              <div class="service-title">
                <div>
                  <img src="<?php the_field("service-6-logo"); ?>" alt="<?php the_field("service-6-logo-alt"); ?>" class="scroll-animation-once leftside">
                </div>
                <h2 class="scroll-animation-once leftside"><?php the_field("service-6-header"); ?><br><span><?php the_field("service-6-header-span"); ?></span></h2>
              </div>
              <p class="scroll-animation-once leftside"><?php the_field("service-6-description"); ?></p>
              <div class="service-steps">
                <video muted autoplay loop src="<?php the_field("service-6-video"); ?>" class="scroll-animation-once leftside"></video>
                <div>
                  <span class="scroll-animation-once leftside"><?php the_field("service-steps"); ?></span>
                  <ul>
                    <li class="scroll-animation-once leftside"><?php the_field("service-6-first-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-6-second-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-6-third-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-6-fourth-step"); ?></li>
                    <li class="scroll-animation-once leftside"><?php the_field("service-6-fifth-step"); ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="services-nav">
            <div class="service-website active scroll-animation-once leftside">
              <h2><?php the_field("service-1-nav"); ?></h2>
              <span>1</span>
            </div>
            <div class="service-commerce scroll-animation-once leftside">
              <h2><?php the_field("service-2-nav"); ?></h2>
              <span>2</span>
            </div>
            <div class="service-marketing scroll-animation-once leftside">
              <h2><?php the_field("service-3-nav"); ?></h2>
              <span>3</span>
            </div>
            <div class="service-design scroll-animation-once leftside">
              <h2><?php the_field("service-4-nav"); ?></h2>
              <span>4</span>
            </div>
            <div class="service-identity scroll-animation-once leftside">
              <h2><?php the_field("service-5-nav"); ?></h2>
              <span>5</span>
            </div>
            <div class="service-video scroll-animation-once leftside">
              <h2><?php the_field("service-6-nav"); ?></h2>
              <span>6</span>
            </div>
          </div>
        </div>
      </div>
      <div class="interfaces-types">
        <!-- Curtiu essa referência ao Tailwind? -->
        <div class="section-title scroll-animation-once leftside">
          <div class="section-icon">
            <img src="<?php the_field("services-section-2-icon"); ?>" alt="<?php the_field("services-section-2-icon-alt"); ?>">
          </div>
          <h3><?php the_field("services-section-2-title"); ?></h3>
        </div>
        <p class="service-description scroll-animation-once leftside"><?php the_field("services-section-2-description"); ?></p>
        <div class="interfaces">
          <div class="interface-boxes scroll-animation-once leftside">
            <div class="active">
              <p><?php the_field("interface-boxes-1-title"); ?></p>
              <span>1</span>
            </div>
            <div>
              <p><?php the_field("interface-boxes-2-title"); ?></p>
              <span>2</span>
            </div>
            <div>
              <p><?php the_field("interface-boxes-3-title"); ?></p>
              <span>3</span>
            </div>
            <div>
              <p><?php the_field("interface-boxes-4-title"); ?></p>
              <span>4</span>
            </div>
          </div>
          <div class="interface-preview simple scroll-animation-once rightside" aria-hidden="true">
            <div class="preview-image"></div>
            <div class="interface-preview-content">
              <span><?php the_field("interface-preview-content-title"); ?></span>
              <span><?php the_field("interface-preview-content-subtitle"); ?></span>
              <span class="separator"></span>
              <p><?php the_field("interface-preview-content-description"); ?></p>
              <a href="#" class="button"><?php the_field("interface-preview-content-button"); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team" id="team">
    <div class="team-heading">
      <h1><?php the_field("team-h1"); ?></h1>
      <div>
        <h2 class="scroll-animation-once leftside"><?php the_field("team-h2"); ?><span><?php the_field("team-h2-bold"); ?></span></h2>
        <div class="team-player">
          <span class="player-decoration"><?php the_field("team-decoration"); ?></span>
          <img src="<?php the_field("team-image"); ?>" alt="<?php the_field("team-image-alt"); ?>" class="scroll-animation-once leftside">
          <div class="player-info">
            <h3 class="scroll-animation-once rightside"><?php the_field("player-name"); ?><span><?php the_field("player-name-bold"); ?></span></h3>
            <div class="player-education scroll-animation-once rightside">
              <h4><?php the_field("player-education-title-1"); ?><span><?php the_field("player-education-description-1"); ?></span></h4>
              <h4><?php the_field("player-education-title-2"); ?><span><?php the_field("player-education-description-2"); ?></span></h4>
              <h4><?php the_field("player-education-title-3"); ?><span><?php the_field("player-education-description-3"); ?></span></h4>
            </div>
            <a href="/sobre-mim" class="button scroll-animation-once rightside"><?php the_field("team-call"); ?></a>
          </div>
        </div>
        <div class="blur marketing active"></div>
      </div>
    </div>
  </section>

  <section class="projects" id="projects">
    <div class="services-heading projects-heading">
      <h1><?php the_field("projects-h1"); ?></h1>
      <div>
        <h2 class="scroll-animation-once leftside"><?php the_field("projects-h2"); ?><span><?php the_field("projects-h2-bold"); ?></span></h2>
      </div>
    </div>
    <div class="projects-inner">
      <div class="swiper-container-2 swiper">
        <div class="swiper-wrapper">
          <?php $projects = get_field('project-items'); 
          if(isset($projects)) { foreach ($projects as $project) { ?>
            <div class="swiper-slide">
              <div class="project scroll-animation-once leftside">
                <div class="bg-cover" style="background-image: url('<?php echo $project['project-image']; ?>');">
                  <div class="project-start">
                    <button></button>
                  </div>
                </div>
                <div class="project-info">
                  <div class="project-title">
                    <h3 style="<?php echo $project['project-title-style']; ?>" class="scroll-animation-once rightside"><span style="<?php echo $project['project-span-weight']; ?>"><?php echo $project['project-title-span']; ?></span><?php echo $project['project-title']; ?></h3>
                    <p class="scroll-animation-once rightside"><?php echo $project['project-description']; ?></p>
                  </div>
                  <div class="project-typography">
                    <span class="scroll-animation-once rightside"><?php echo $project['typography-title']; ?></span>
                    <p style="<?php echo $project['project-typography']; ?>" class="scroll-animation-once rightside"><span><?php echo $project['project-typography-span']; ?></span><?php echo $project['project-typography-p']; ?></p>
                  </div>
                  <div class="project-colors">
                    <span class="scroll-animation-once rightside"><?php echo $project['colors-title']; ?></span>
                    <div class="color-boxes">
                      <div style="background: <?php echo $project['project-color-1']; ?>" data-value="<?php echo $project['project-color-1']; ?>" data-background="<?php echo $project['project-color-1']; ?>" data-color="<?php echo $project['project-type-color-1']; ?>" class="scroll-animation-once rightside"></div>
                      <div style="background: <?php echo $project['project-color-2']; ?>" data-value="<?php echo $project['project-color-2']; ?>" data-background="<?php echo $project['project-color-2']; ?>" data-color="<?php echo $project['project-type-color-2']; ?>" class="scroll-animation-once rightside"></div>
                      <div style="background: <?php echo $project['project-color-3']; ?>" data-value="<?php echo $project['project-color-3']; ?>" data-background="<?php echo $project['project-color-3']; ?>" data-color="<?php echo $project['project-type-color-3']; ?>" class="scroll-animation-once rightside"></div>
                      <div style="background: <?php echo $project['project-color-4']; ?>" data-value="<?php echo $project['project-color-4']; ?>" data-background="<?php echo $project['project-color-4']; ?>" data-color="<?php echo $project['project-type-color-4']; ?>" class="scroll-animation-once rightside"></div>
                      <div style="background: <?php echo $project['project-color-5']; ?>" data-value="<?php echo $project['project-color-5']; ?>" data-background="<?php echo $project['project-color-5']; ?>" data-color="<?php echo $project['project-type-color-5']; ?>" class="scroll-animation-once rightside"></div>
                    </div>
                  </div>
                  <div class="project-technologies">
                    <div class="technologies-inner">
                      <span class="scroll-animation-once rightside"><?php echo $project['technologies-title']; ?></span>
                      <div class="technologies-icons">
                        <div class="section-icon scroll-animation-once rightside" data-value="<?php echo $project['project-technology-1']; ?>">
                          <img src="<?php echo $project['project-technology-1-logo']; ?>" style="<?php echo $project['project-technology-1-logo-style']; ?>" alt="<?php echo $project['project-technology-1-logo-alt']; ?>">
                        </div>
                        <div class="section-icon scroll-animation-once rightside" data-value="<?php echo $project['project-technology-2']; ?>">
                          <img src="<?php echo $project['project-technology-2-logo']; ?>" style="<?php echo $project['project-technology-2-logo-style']; ?>" alt="<?php echo $project['project-technology-2-logo-alt']; ?>">
                        </div>
                        <div class="section-icon scroll-animation-once rightside" data-value="<?php echo $project['project-technology-3']; ?>">
                          <img src="<?php echo $project['project-technology-3-logo']; ?>" style="<?php echo $project['project-technology-3-logo-style']; ?>" alt="<?php echo $project['project-technology-3-logo-alt']; ?>">
                        </div>
                      </div>
                    </div>
                    <a href="<?php echo $project['project-link']; ?>" class="scroll-animation-once rightside" target="_blank"><?php echo $project['project-call']; ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php } } ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <a href="<?php the_field("projects-call-link"); ?>" class="projects-call"><?php the_field("projects-call"); ?></a>
  </section>

  <section class="courses" id="courses">
    <div class="services-heading courses-heading">
      <h1><?php the_field("courses-h1"); ?></h1>
      <div>
        <h2 class="scroll-animation-once leftside"><?php the_field("courses-h2"); ?><span><?php the_field("courses-h2-bold"); ?></span></h2>
      </div>
    </div>
    <div class="courses-bg">
      <div class="courses-inner">
        <div class="courses-info">
          <div class="courses-info-1">
            <div class="courses-section scroll-animation-once leftside">
              <div class="section-icon">
                <img src="<?php the_field("courses-section-1-logo"); ?>" alt="<?php the_field("courses-section-1-logo-alt"); ?>">
              </div>
              <h3><?php the_field("courses-section-1-title"); ?></h3>
            </div>
            <p class="scroll-animation-once leftside"><?php the_field("courses-section-1-description"); ?></p>
          </div>
          <div class="courses-info-2">
            <div class="courses-section scroll-animation-once leftside">
              <div class="section-icon">
                <img src="<?php the_field("courses-section-2-logo"); ?>" alt="<?php the_field("courses-section-2-logo-alt"); ?>">
              </div>
              <h3><?php the_field("courses-section-2-title"); ?></h3>
            </div>
            <p class="scroll-animation-once leftside"><?php the_field("courses-section-2-description"); ?></p>
          </div>
          <div class="courses-call">
            <a href="<?php the_field("courses-call-1-ebook"); ?>" target="_blank" class="button scroll-animation-once leftside"><?php the_field("courses-call-1"); ?></a>
            <a href="<?php the_field("courses-call-2-link"); ?>" class="button scroll-animation-once leftside"><?php the_field("courses-call-2"); ?></a>
          </div>
        </div>
        <img src="<?php the_field("courses-image"); ?>" alt="<?php the_field("courses-image-alt"); ?>" class="scroll-animation-once rightside">
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

  <?php get_footer(); ?>  

  <div class="blur marketing active"></div>
  </footer>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
      <span>Homepage • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <script src="<?= get_stylesheet_directory_uri() ?>/js/swiper/swiper.min.js"></script>
  <script type="module">
    import { Navigation } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/navigation.js';
    import { Pagination } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/pagination.js';
    import { Autoplay } from '<?= get_stylesheet_directory_uri() ?>/js/swiper/autoplay.js';
    Swiper.use([Navigation, Pagination, Autoplay]);

    const swiper = new Swiper('.swiper-container-1', {
      grabCursor: true,
      loop: true,
      rewind: true,
      speed: 1000,
      autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
      },
    });

    const swiper2 = new Swiper('.swiper-container-2', {
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
  <script defer src="<?= get_stylesheet_directory_uri() ?>/js/script-index.js"></script>

  <?php wp_footer(); ?>

</body>

</html>