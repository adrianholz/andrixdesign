<?php

add_filter( 'big_image_size_threshold', '__return_false' );
add_theme_support( 'post-thumbnails' ); 
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_action('cmb2_admin_init', 'cmb2_fields_andrix');

function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}

function cmb2_fields_andrix()  {
  $cmbHome = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Home',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);

  $cmbHome->add_field([
    'name' => 'Main Icon 1',
    'id' => 'main-icon-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 1 Alt',
    'id' => 'main-icon-1-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 2',
    'id' => 'main-icon-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 2 Alt',
    'id' => 'main-icon-2-alt',
    'type' => 'text_medium',
  ]);


  $cmbHome->add_field([
    'name' => 'Main Icon 3',
    'id' => 'main-icon-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 3 Alt',
    'id' => 'main-icon-3-alt',
    'type' => 'text_medium',
  ]);


  $cmbHome->add_field([
    'name' => 'Main H1',
    'id' => 'main-h1',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 4',
    'id' => 'main-icon-4',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 4 Alt',
    'id' => 'main-icon-4-alt',
    'type' => 'text_medium',
  ]);


  $cmbHome->add_field([
    'name' => 'Main Icon 5',
    'id' => 'main-icon-5',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 5 Alt',
    'id' => 'main-icon-5-alt',
    'type' => 'text_medium',
  ]);


  $cmbHome->add_field([
    'name' => 'Main Icon 6',
    'id' => 'main-icon-6',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Main Icon 6 Alt',
    'id' => 'main-icon-6-alt',
    'type' => 'text_medium',
  ]);


  $cmbHome->add_field([
    'name' => 'Services H1',
    'id' => 'services-h1',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services H2',
    'id' => 'services-h2',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services H2 Bold',
    'id' => 'services-h2-bold',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 1 Icon',
    'id' => 'services-section-1-icon',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 1 Icon Alt',
    'id' => 'services-section-1-icon-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 1 Title',
    'id' => 'services-section-1-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 1 Description',
    'id' => 'services-section-1-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Window Intro',
    'id' => 'services-intro-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 1920x1080/60fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Nav',
    'id' => 'service-1-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Logo',
    'id' => 'service-1-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Logo Alt',
    'id' => 'service-1-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Background',
    'id' => 'service-1-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Background Position',
    'id' => 'service-1-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Header',
    'id' => 'service-1-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Header Span',
    'id' => 'service-1-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Description',
    'id' => 'service-1-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Video',
    'id' => 'service-1-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  $cmbHome->add_field([
    'name' => 'Service Steps',
    'id' => 'service-steps',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 First Step',
    'id' => 'service-1-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Second Step',
    'id' => 'service-1-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Third Step',
    'id' => 'service-1-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Fourth Step',
    'id' => 'service-1-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 1 Fifth Step',
    'id' => 'service-1-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Nav',
    'id' => 'service-2-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Logo',
    'id' => 'service-2-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Logo Alt',
    'id' => 'service-2-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Background',
    'id' => 'service-2-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Background Position',
    'id' => 'service-2-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Header',
    'id' => 'service-2-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Header Span',
    'id' => 'service-2-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Description',
    'id' => 'service-2-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Video',
    'id' => 'service-2-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  

  $cmbHome->add_field([
    'name' => 'Service 2 First Step',
    'id' => 'service-2-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Second Step',
    'id' => 'service-2-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Third Step',
    'id' => 'service-2-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Fourth Step',
    'id' => 'service-2-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 2 Fifth Step',
    'id' => 'service-2-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Nav',
    'id' => 'service-3-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Logo',
    'id' => 'service-3-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Logo Alt',
    'id' => 'service-3-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Background',
    'id' => 'service-3-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Background Position',
    'id' => 'service-3-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Header',
    'id' => 'service-3-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Header Span',
    'id' => 'service-3-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Description',
    'id' => 'service-3-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Video',
    'id' => 'service-3-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  

  $cmbHome->add_field([
    'name' => 'Service 3 First Step',
    'id' => 'service-3-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Second Step',
    'id' => 'service-3-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Third Step',
    'id' => 'service-3-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Fourth Step',
    'id' => 'service-3-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 3 Fifth Step',
    'id' => 'service-3-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Nav',
    'id' => 'service-4-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Logo',
    'id' => 'service-4-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Logo Alt',
    'id' => 'service-4-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Background',
    'id' => 'service-4-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Background Position',
    'id' => 'service-4-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Header',
    'id' => 'service-4-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Header Span',
    'id' => 'service-4-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Description',
    'id' => 'service-4-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Video',
    'id' => 'service-4-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  

  $cmbHome->add_field([
    'name' => 'Service 4 First Step',
    'id' => 'service-4-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Second Step',
    'id' => 'service-4-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Third Step',
    'id' => 'service-4-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Fourth Step',
    'id' => 'service-4-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 4 Fifth Step',
    'id' => 'service-4-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Nav',
    'id' => 'service-5-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Logo',
    'id' => 'service-5-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Logo Alt',
    'id' => 'service-5-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Background',
    'id' => 'service-5-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Background Position',
    'id' => 'service-5-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Header',
    'id' => 'service-5-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Header Span',
    'id' => 'service-5-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Description',
    'id' => 'service-5-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Video',
    'id' => 'service-5-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 First Step',
    'id' => 'service-5-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Second Step',
    'id' => 'service-5-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Third Step',
    'id' => 'service-5-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Fourth Step',
    'id' => 'service-5-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 5 Fifth Step',
    'id' => 'service-5-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Nav',
    'id' => 'service-6-nav',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Logo',
    'id' => 'service-6-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Logo Alt',
    'id' => 'service-6-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Background',
    'id' => 'service-6-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Background Position',
    'id' => 'service-6-background-position',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Header',
    'id' => 'service-6-header',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Header Span',
    'id' => 'service-6-header-span',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Description',
    'id' => 'service-6-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Video',
    'id' => 'service-6-video',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 330x186/30fps)',
    ],
    'query_args' => [
      'type' => [
        'video/mp4'
      ],
    ],
  ]);

  

  $cmbHome->add_field([
    'name' => 'Service 6 First Step',
    'id' => 'service-6-first-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Second Step',
    'id' => 'service-6-second-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Third Step',
    'id' => 'service-6-third-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Fourth Step',
    'id' => 'service-6-fourth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Service 6 Fifth Step',
    'id' => 'service-6-fifth-step',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 2 Icon',
    'id' => 'services-section-2-icon',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 2 Icon Alt',
    'id' => 'services-section-2-icon-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 2 Title',
    'id' => 'services-section-2-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Services Section 2 Description',
    'id' => 'services-section-2-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Boxes 1 Title',
    'id' => 'interface-boxes-1-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Boxes 2 Title',
    'id' => 'interface-boxes-2-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Boxes 3 Title',
    'id' => 'interface-boxes-3-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Boxes 4 Title',
    'id' => 'interface-boxes-4-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Preview Content Title',
    'id' => 'interface-preview-content-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Preview Content Subtitle',
    'id' => 'interface-preview-content-subtitle',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Preview Content Description',
    'id' => 'interface-preview-content-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Interface Preview Content Button',
    'id' => 'interface-preview-content-button',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Team H1',
    'id' => 'team-h1',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Team H2',
    'id' => 'team-h2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Team H2 Bold',
    'id' => 'team-h2-bold',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Team Decoration',
    'id' => 'team-decoration',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Team Image',
    'id' => 'team-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 520x758)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Team Image Alt',
    'id' => 'team-image-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Name',
    'id' => 'player-name',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Name Bold',
    'id' => 'player-name-bold',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Title 1',
    'id' => 'player-education-title-1',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Description 1',
    'id' => 'player-education-description-1',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Title 2',
    'id' => 'player-education-title-2',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Description 2',
    'id' => 'player-education-description-2',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Title 3',
    'id' => 'player-education-title-3',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Player Education Description 3',
    'id' => 'player-education-description-3',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Team Call',
    'id' => 'team-call',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Projects H1',
    'id' => 'projects-h1',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $cmbHome->add_field([
    'name' => 'Projects H2',
    'id' => 'projects-h2',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $cmbHome->add_field([
    'name' => 'Projects H2 Bold',
    'id' => 'projects-h2-bold',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $project_items = $cmbHome->add_field([
    'name' => 'Projects',
    'id' => 'project-items',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Project {#}',
      'add_button' => 'Add Project',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Image',
    'id' => 'project-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 960xAnything)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Title Style',
    'id' => 'project-title-style',
    'type' => 'text_medium',
  ]);  

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Title Span',
    'id' => 'project-title-span',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Span Weight',
    'id' => 'project-span-weight',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Title',
    'id' => 'project-title',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Description',
    'id' => 'project-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Typography Title',
    'id' => 'typography-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Typography',
    'id' => 'project-typography',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Typography Span',
    'id' => 'project-typography-span',
    'type' => 'text_small',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Typography P',
    'id' => 'project-typography-p',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Colors Title',
    'id' => 'colors-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Color 1',
    'id' => 'project-color-1',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Type Color 1',
    'id' => 'project-type-color-1',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Color 2',
    'id' => 'project-color-2',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Type Color 2',
    'id' => 'project-type-color-2',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Color 3',
    'id' => 'project-color-3',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Type Color 3',
    'id' => 'project-type-color-3',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Color 4',
    'id' => 'project-color-4',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Type Color 4',
    'id' => 'project-type-color-4',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Color 5',
    'id' => 'project-color-5',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Type Color 5',
    'id' => 'project-type-color-5',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Technologies Title',
    'id' => 'technologies-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 1',
    'id' => 'project-technology-1',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 1 Logo',
    'id' => 'project-technology-1-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 1 Logo Alt',
    'id' => 'project-technology-1-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 1 Logo Style',
    'id' => 'project-technology-1-logo-style',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 2',
    'id' => 'project-technology-2',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 2 Logo',
    'id' => 'project-technology-2-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 2 Logo Alt',
    'id' => 'project-technology-2-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 2 Logo Style',
    'id' => 'project-technology-2-logo-style',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 3',
    'id' => 'project-technology-3',
    'type' => 'text_small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 3 Logo',
    'id' => 'project-technology-3-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 3 Logo Alt',
    'id' => 'project-technology-3-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Technology 3 Logo Style',
    'id' => 'project-technology-3-logo-style',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Link',
    'id' => 'project-link',
    'type' => 'text',
  ]);

  $cmbHome->add_group_field($project_items, [
    'name' => 'Project Call',
    'id' => 'project-call',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Projects Call',
    'id' => 'projects-call',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Projects Call Link',
    'id' => 'projects-call-link',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses H1',
    'id' => 'courses-h1',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Courses H2',
    'id' => 'courses-h2',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Courses H2 Bold',
    'id' => 'courses-h2-bold',
    'type' => 'text_medium',
    'sanitization_cb' => false,
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 1 Logo',
    'id' => 'courses-section-1-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 1 Logo Alt',
    'id' => 'courses-section-1-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 1 Title',
    'id' => 'courses-section-1-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 1 Description',
    'id' => 'courses-section-1-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 2 Logo',
    'id' => 'courses-section-2-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 2 Logo Alt',
    'id' => 'courses-section-2-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 2 Title',
    'id' => 'courses-section-2-title',
    'type' => 'text_medium',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Section 2 Description',
    'id' => 'courses-section-2-description',
    'type' => 'textarea_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Call 1',
    'id' => 'courses-call-1',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Call 1 Ebook',
    'id' => 'courses-call-1-ebook',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: PDF)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Call 2',
    'id' => 'courses-call-2',
    'type' => 'text_small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Call 2 Link',
    'id' => 'courses-call-2-link',
    'type' => 'text',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Image',
    'id' => 'courses-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 400x610)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbHome->add_field([
    'name' => 'Courses Image Alt',
    'id' => 'courses-image-alt',
    'type' => 'text_medium',
  ]);

  $cmbService = new_cmb2_box([
		'id' => 'service_box',
		'title' => 'Service',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-service.php',
		],
	]);

  $cmbService->add_field([
    'name' => 'Meta Description',
    'id' => 'meta-description',
    'type' => 'textarea_small',
  ]);

  $cmbService->add_field([
    'name' => 'About Header/Footer Decoration Service',
    'id' => 'about-header-footer-decoration-service',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service',
    'id' => 'service',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service Image',
    'id' => 'service-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 1140x638)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Image Alt',
    'id' => 'service-image-alt',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service Logo',
    'id' => 'service-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Logo Alt',
    'id' => 'service-logo-alt',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service Logo 2',
    'id' => 'service-logo-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service H1',
    'id' => 'service-h1',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service H1 Bold',
    'id' => 'service-h1-bold',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service Description 1',
    'id' => 'service-description-1',
    'type' => 'textarea_small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Description 2',
    'id' => 'service-description-2',
    'type' => 'textarea_small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technologies Title',
    'id' => 'service-technologies-title',
    'type' => 'text',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 1',
    'id' => 'service-technology-1',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 1 Description',
    'id' => 'service-technology-1-description',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 2',
    'id' => 'service-technology-2',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 2 Description',
    'id' => 'service-technology-2-description',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 3',
    'id' => 'service-technology-3',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 3 Description',
    'id' => 'service-technology-3-description',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 4',
    'id' => 'service-technology-4',
    'type' => 'text_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 4 Description',
    'id' => 'service-technology-4-description',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 1 Logo',
    'id' => 'service-technology-1-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 2 Logo',
    'id' => 'service-technology-2-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 3 Logo',
    'id' => 'service-technology-3-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Technology 4 Logo',
    'id' => 'service-technology-4-logo',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbService->add_field([
    'name' => 'Service Projects H1',
    'id' => 'service-projects-h1',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'Service Projects H2',
    'id' => 'service-projects-h2',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $cmbService->add_field([
    'name' => 'Service Projects H2 Bold',
    'id' => 'service-projects-h2-bold',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $projects_list = $cmbService->add_field([
    'name' => 'Projects',
    'id' => 'projects-list',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Project {#}',
      'add_button' => 'Add Project',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Title',
    'id' => 'projects-list-title',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Cover',
    'id' => 'project-cover',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 680xAnything)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'video/mp4'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Cover Alt',
    'id' => 'project-cover-alt',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Cover Style',
    'id' => 'project-cover-style',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Iframe Source',
    'id' => 'iframe-source',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Iframe Style',
    'id' => 'iframe-style',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Description Title',
    'id' => 'description-title',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Description',
    'id' => 'project-description',
    'type' => 'textarea_small',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Technologies Title',
    'id' => 'technologies-title',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 1',
    'id' => 'project-technology-1',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 1 Style',
    'id' => 'project-technology-1-style',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 1 Alt',
    'id' => 'project-technology-1-alt',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 2',
    'id' => 'project-technology-2',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 2 Style',
    'id' => 'project-technology-2-style',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 2 Alt',
    'id' => 'project-technology-2-alt',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 3',
    'id' => 'project-technology-3',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/Dark)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 3 Style',
    'id' => 'project-technology-3-style',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Technology 3 Alt',
    'id' => 'project-technology-3-alt',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Call',
    'id' => 'project-call',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_list, [
    'name' => 'Project Link',
    'id' => 'project-link',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_field([
    'name' => 'FAQ Title',
    'id' => 'faq-title',
    'type' => 'text_medium',
  ]);

  $cmbService->add_field([
    'name' => 'FAQ Background',
    'id' => 'faq-background',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/232323)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbService->add_field([
    'name' => 'FAQ Background Style',
    'id' => 'faq-background-style',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $projects_faq = $cmbService->add_field([
    'name' => 'Projects FAQ',
    'id' => 'projects-faq',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'FAQ {#}',
      'add_button' => 'Add FAQ',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbService->add_group_field($projects_faq, [
    'name' => 'FAQ Question',
    'id' => 'faq-question',
    'type' => 'text_medium',
  ]);  

  $cmbService->add_group_field($projects_faq, [
    'name' => 'FAQ Answer',
    'id' => 'faq-answer',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);  

  $cmbAbout = new_cmb2_box([
		'id' => 'about_box',
		'title' => 'About',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-about.php',
		],
	]);

  $cmbAbout->add_field([
    'name' => 'About Header/Footer Decoration',
    'id' => 'about-header-footer-decoration',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Decoration',
    'id' => 'about-decoration',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About H1',
    'id' => 'about-h1',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About H1 Thin',
    'id' => 'about-h1-thin',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Description',
    'id' => 'about-description',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'Text Call 1',
    'id' => 'text-call-1',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'Text Call 2',
    'id' => 'text-call-2',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Image',
    'id' => 'about-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: 513x748)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Image Alt',
    'id' => 'about-image-alt',
    'type' => 'text_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Profile H1',
    'id' => 'about-h1-2',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Profile',
    'id' => 'about-profile',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Profile Alt',
    'id' => 'about-profile-alt',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Describe',
    'id' => 'about-describe',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Describe Testimony',
    'id' => 'about-describe-testimony',
    'type' => 'textarea_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Describe Description',
    'id' => 'about-describe-description',
    'type' => 'textarea_small',
    'sanitization_cb' => 'false',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Title',
    'id' => 'about-info-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Specialties Title',
    'id' => 'about-info-specialties-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Specialties',
    'id' => 'about-info-specialties',
    'type' => 'text_medium',
    'sanitization_cb' => 'false',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Birthday Title',
    'id' => 'about-info-birthday-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Birthday',
    'id' => 'about-info-birthday',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Age Title',
    'id' => 'about-info-age-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Age',
    'id' => 'about-info-age',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Hometown Title',
    'id' => 'about-info-hometown-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Hometown',
    'id' => 'about-info-hometown',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Home Title',
    'id' => 'about-info-home-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Home',
    'id' => 'about-info-home',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Email Title',
    'id' => 'about-info-email-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Email',
    'id' => 'about-info-email',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Phone Title',
    'id' => 'about-info-phone-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Phone',
    'id' => 'about-info-phone',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Info Phone (no format)',
    'id' => 'about-info-phone-no-format',
    'type' => 'text_medium',
  ]);

  $social_media = $cmbAbout->add_field([
    'name' => 'Social Media',
    'id' => 'social-media',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Social Media {#}',
      'add_button' => 'Add Social Media',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbAbout->add_group_field($social_media, [
    'name' => 'Social Media Image',
    'id' => 'social-media-image',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Square/White)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_group_field($social_media, [
    'name' => 'Social Media Image Alt',
    'id' => 'social-media-image-alt',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($social_media, [
    'name' => 'Social Media Link',
    'id' => 'social-media-link',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Experience Title',
    'id' => 'about-experience-title',
    'type' => 'text_medium',
  ]);

  $experience_cards = $cmbAbout->add_field([
    'name' => 'Experience Cards',
    'id' => 'experience-cards',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Experience {#}',
      'add_button' => 'Add Experience',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Occupation',
    'id' => 'occupation',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Company',
    'id' => 'company',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Period',
    'id' => 'period',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Description',
    'id' => 'description',
    'type' => 'textarea_small',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Skill 1',
    'id' => 'skill-1',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Skill 2',
    'id' => 'skill-2',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($experience_cards, [
    'name' => 'Skill 3',
    'id' => 'skill-3',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Education Title',
    'id' => 'about-education-title',
    'type' => 'text_medium',
  ]);

  $education_cards = $cmbAbout->add_field([
    'name' => 'Education Cards',
    'id' => 'education-cards',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Education {#}',
      'add_button' => 'Add Education',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Diploma',
    'id' => 'diploma',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Rectangular)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Diploma PDF',
    'id' => 'diploma-pdf',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: PDF)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Diploma Alt',
    'id' => 'diploma-alt',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Education Title',
    'id' => 'education-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Institution',
    'id' => 'institution',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Study Period',
    'id' => 'study-period',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($education_cards, [
    'name' => 'Study Description',
    'id' => 'study-description',
    'type' => 'textarea_small',
  ]);

  $cmbAbout->add_field([
    'name' => 'About Certificates Title',
    'id' => 'about-certificates-title',
    'type' => 'text_medium',
  ]);

  $certificates_cards = $cmbAbout->add_field([
    'name' => 'Certificates Cards',
    'id' => 'certificates-cards',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Certificate {#}',
      'add_button' => 'Add Certificate',
      'sortable' => true,
      'closed' => true,
    ]
  ]);

  $cmbAbout->add_group_field($certificates_cards, [
    'name' => 'Certificate Link',
    'id' => 'certificate-link',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: PDF)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'small',
  ]);

  $cmbAbout->add_group_field($certificates_cards, [
    'name' => 'Certificate',
    'id' => 'certificate',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
    'text' => [
      'add_upload_file_text' => 'Add File (Ideal: Rectangular)',
    ],
    'query_args' => [
      'type' => [
        'image/webp',
        'image/jpeg',
        'image/png',
        'image/svg'
      ],
    ],
    'preview_size' => 'medium',
  ]);

  $cmbAbout->add_group_field($certificates_cards, [
    'name' => 'Certificate Alt',
    'id' => 'certificate-alt',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($certificates_cards, [
    'name' => 'Certificate Title',
    'id' => 'certificate-title',
    'type' => 'text_medium',
  ]);

  $cmbAbout->add_group_field($certificates_cards, [
    'name' => 'Certificate Institution',
    'id' => 'certificate-institution',
    'type' => 'text_medium',
  ]);

}

?>