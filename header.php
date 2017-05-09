<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MaterialComponentsWP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">

	<div class="mdc-toolbar mdc-toolbar--fixed">
      <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <button class="primary-menu material-icons">menu</button>
        </section>     
      </div>
    </div>

    <aside class="mdc-temporary-drawer">
      <nav class="mdc-temporary-drawer__drawer">
        <header class="mdc-temporary-drawer__header">
          <div class="mdc-temporary-drawer__header-content mdc-theme--primary-bg mdc-theme--text-primary-on-primary">
            <?php bloginfo( 'name' ); ?>
          </div>
        </header>

        <?php
			$args = array(
		        'theme_location' => 'primary',
		        'container'       => 'div',
		        'items_wrap' => '<div class="mdc-list">%3$s</div>',
		        'container_class' => 'mdc-temporary-drawer__content mdc-list-group',
				'walker' => new MCWP_Nav_Walker()
			);

			if (has_nav_menu('primary')) {
			       wp_nav_menu($args);
			    }
		?>

  		</nav>
    </aside>

	<div id="content" class="site-content mdc-toolbar-fixed-adjust">
