<?php
/**
 * Template Name: sala de imprensa
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="imprensa">
  <div class="container">
    <h2 class="title">Sala de Imprensa</h2>
    <p>Dr. Ricardo Nishimoto está presente na mídia.
      Clique e confira as matérias sobre Urologia e Robótica.</p>

    <div class="imprensa-wrapper">
      <div class="imprensa-cards">
        <? query_posts( array( 'post_type' => 'salas-de-imprensa', 'posts_per_page' => '3', 'cat' => '3',  'paged' => $paged ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <a href="<?=the_permalink()?>" class="imprensa-card">
          <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
          <h3><?=the_title()?></h3>
        </a>

        <?php endwhile; ?>
        <?php endif; ?>

        <!--Paginacao -->
        <div class="paginas">
          <?php if(function_exists('wp_paginate')) { wp_paginate(); }
          else { twentythirteen_paging_nav(); } ?>
        </div>
      </div>

      <div class="categories">
        <h4>Categorias</h4>
        <ul>
          <?php 
            $args = array(
            'show_option_all'    => '',
            'orderby'            => 'name',
            'order'              => 'ASC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'child_of'           => 3,
            'title_li'           => __( '' )
              );
              wp_list_categories( $args ); 
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer();