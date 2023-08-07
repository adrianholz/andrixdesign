<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title($sep = ''); ?> | Andrix Design</title>
  <meta name="author" content="Adrian Holzschuh">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/style.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/css/blog-styles.css">

  <?php wp_head(); ?>

</head>

<body>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <?php get_header(); ?>

  <section class="blog">
    <div class="blog-inner">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="blog-post scroll-animation-once leftside">
        <?php the_post_thumbnail(); ?>
        <div>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_content(); ?></p>
          <div class="post-info">
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
            <a href="<?php the_permalink(); ?>" class="post-call">Ler sobre</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <div class="blog-navigation scroll-animation-once leftside">
        <?php next_posts_link('Postagens Antigas'); ?>
        <?php previous_posts_link('Postagens Recentes'); ?>
      </div>
      <?php else: ?>
      <p class="not-found scroll-animation-once leftside">Sinto muito, não encontramos nada. <a href="/">Voltar para a home?</a></p>
      <?php endif; ?>
      </div>
  </section>

  <?php get_footer(); ?>

  <div class="blur marketing active"></div>
  </footer>

  <div class="marquee marquee-decorator" style="--gap: 10px" aria-hidden="true">
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
    </div>
    <div class="marquee-content" style="animation: scroll 30s linear infinite;">
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
      <span>Notícias • </span>
      <span>Andrix Design • </span>
    </div>
  </div>

  <script defer src="<?= get_stylesheet_directory_uri() ?>/js/script-global.js"></script>

  <?php wp_footer(); ?>

</body>

</html>