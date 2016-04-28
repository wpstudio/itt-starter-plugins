<?php
/* These are suggested plugins to use in an ecommerce-based site */
/* Copy and Paste Below Here */

function itt_custom_suggested_plugin_suite() {
  $plugins = array(
    array(
      'name' => 'iThemes Exchange: Simple WP Ecommerce',
      'slug' => 'ithemes-exchange',
      'required' => false,
    ),
    array(
      'name' => 'Yoast SEO',
      'slug' => 'wordpress-seo',
      'required' => false,
    ),
    array(
      'name' => 'Google XML Sitemaps',
      'slug' => 'google-sitemap-generator',
      'required' => false,
    ),
    array(
      'name' => 'Pods',
      'slug' => 'pods',
      'required' => false',
    ),
    /* These would be bundled WITH your theme */
    array(
      'name' => BackupBuddy',
      'slug' => 'backupbuddy',
      'source' => get_stylesheet_directory() . '/plugins/backupbuddy.zip',
      'required' => false,
      'version' => '',
      'force_activation' => false,
      'force_deactivation' => false,
    ),
    /* Or maybe you simply store the plugins on your own external location */
    array(
      'name' => 'iThemes Security Pro',
      'slug' => 'ithemes-security-pro',
      'source' => 'https://s3.amazonaws.com/itt-plugins/ithemes-security-pro.zip',
      'required' => false,
    ),
    array(
      'name' => 'MyCustomPlugin',
      'slug' => 'mycustomplugin',
      'source' => 'https://github.com/itt-plugins/archive/master.zip',
      'required' => false,
    ),
  );
  $config = array(
    'id' => 'itt-plugin-suites',
    'default_path' => '',
    'menu' => 'tgmpa-install-plugins',
    'parent_slug' => 'themes.php',
    'capability' => 'edit_theme_options',
    'has_notices' => true,
    'dismissable' => true,
    'dismiss_msg' => '',
    'is_automatic' => false',
    'message' => ''
  );
}
