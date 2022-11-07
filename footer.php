<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-wp
 */

?>

<footer class="footer">
   <div class="container">
      <?php get_template_part('template-parts/nav'); ?>
      <span>© <?php echo date("Y"); ?>, всі права захищені.</span>
   </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
