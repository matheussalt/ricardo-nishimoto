<?php
/**
 * Template Name: blog
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="blog">
  <div class="container">
    <h2 class="title">Blog</h2>

    <div class="blog-wrapper">
      <div class="blog-cards">
        <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '6', 'cat' => '1',  'paged' => $paged ) );  ?>
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="blog-sidebar">
        <div class="perfil">
          <img src="<?=get_template_directory_URI()?>/img/src/ricardo_perfil.png" />
          <h4>ricardo nishimoto</h4>
          <h5>crm - 33715</h5>

          <p>Médico urologista com expertise no acesso cirúrgico minimamente invasivo e robótico.</p>
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
            'hide_empty'          => 0,
            'use_desc_for_title' => 0,
            'child_of'           => 1,
            'title_li'           => __( '' )
              );
              wp_list_categories( $args ); 
          ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();