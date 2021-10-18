<?php wp_footer(); ?>

  <!--Start footer -->
  
<?php if ( have_rows( 'footer' ) ) : ?>
	<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
  <footer>
        <img src="<?php $log = get_sub_field( 'log' );echo $log['url']; ?>" alt="" class="log">
        <img src="<?php $rec = get_sub_field( 'rec' );echo $rec['url']; ?>" alt="" class="rec">

        <!-- start foot -->
        <div class="foot">
        <?php if ( have_rows( 'link' ) ) : ?>
	    <?php while ( have_rows( 'link' ) ) : the_row(); ?>
            <a href="#"><?php the_sub_field( 'p' ); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <!-- end foot -->
        
    </footer>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Footer -->

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>