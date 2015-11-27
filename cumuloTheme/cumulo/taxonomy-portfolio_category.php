<?php 
get_header(); 
$cmo_list_style = cmo_get_theme_mod_value( "portfolio-list-style" );
$cmo_sidebar = cmo_get_page_sidebar();
?>
<div id="main-container">
	<div class="page-content container page-taxonomy-portfolio_category portfolio-list-style-<?php echo esc_attr( $cmo_list_style ) ?> <?php echo esc_attr( $cmo_sidebar[1] ); ?>">
		<?php get_template_part( "templates/portfolio/layout", $cmo_list_style ); ?>
	</div>
</div>

<?php
get_footer();