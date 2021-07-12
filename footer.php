<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="container">
    <div class="footer-contact">
      <h2 class="title">Contato</h2>

      <img src="<?=get_template_directory_URI()?>/img/src/logo_branco.png" alt="Ricardo Nishimoto" />

      <ul>
        <li>
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#tel"></use>
          </svg>

          <span>+55 31 3643-7530 | +55 31 98837-7530</span>
        </li>

        <li>
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#mail"></use>
          </svg>

          <span>atendimento@videourologia.com.br</span>
        </li>

        <li>
          <svg width="32" height="32" viewBox="0 0 32 32">
            <use xlink:href="#pin"></use>
          </svg>

          <span>Rua Araguari 1156, Sala 2004</br>
            Santo Agostinho</br>Belo Horizonte/MG</br>
            Cep: 30190-111</span>
        </li>
      </ul>
    </div>

    <div class="form">
      <?php echo do_shortcode('[contact-form-7 id="37" title="Footer Form"]'); ?>
    </div>
  </div>

  <div class="rodape">
    <div class="container">
      <p>Todos os direitos reservados a Ricardo Nishimoto. Desenvolvido por <a href="https://agenciasalt.com.br"
          target="_blank">Agência Salt</a>.</p>
    </div>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>