<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single() && get_post_type() == 'post') { ?>

<section class="blog">
  <div class="container">
    <h2 class="title">Blog</h2>

    <div class="blog-wrapper">
      <div class="blog-content">
        <h1><?=the_title()?></h1>

        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

        <div>
          <?=the_content()?>
        </div>
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

<? } else if (is_single() && get_post_type() == 'salas-de-imprensa') { ?>

<section class="imprensa-inside">
  <div class="container">
    <h2 class="title">Sala de imprensa</h2>

    <div class="imprensa-inside-wrapper">
      <div class="imprensa-inside-content">
        <h1><?=the_title()?></h1>

        <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

        <div>
          <?=the_content()?>
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

<? } else { ?>

<a href="<?=the_permalink()?>" class="blog-card">
  <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

  <div>
    <h3><?=the_title()?></h3>
    <p><?=custom_excerpt2(100)?></p>
  </div>
</a>

<? } ?>