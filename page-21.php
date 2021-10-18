<?php get_header(); ?>

          <!-- banner -->
<?php if ( have_rows( 'hero' ) ) : ?>
	<?php while ( have_rows( 'hero' ) ) : the_row(); ?>
        <section class="banner1">
            <h1><?php the_sub_field( 'h1' ); ?></h1>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- end banner -->

<!-- Start touch -->
<?php if ( have_rows( 'touch' ) ) : ?>
	<?php while ( have_rows( 'touch' ) ) : the_row(); ?>
        <section class="touch">
            <h5><?php the_sub_field( 'h5' ); ?></h5>
            <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><?php the_sub_field( 'h3' ); ?></h3>
                    </div>
                    <div class="col-md-8">
                        <div class="text">
                            <p><?php the_sub_field( 'p' ); ?></p>
                            <p class="p"><?php the_sub_field( 'pp' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!-- end touch -->

<!-- location -->
<?php if ( have_rows( 'location' ) ) : ?>
	<?php while ( have_rows( 'location' ) ) : the_row(); ?>
        <section class="location">
            <h5><?php the_sub_field( 'h5' ); ?></h5>
            <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
            <div class="container">
            <?php if ( have_rows( 'locate' ) ) : ?>
	            <?php while ( have_rows( 'locate' ) ) : the_row(); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <h3><?php the_sub_field( 'h3' ); ?></h3>
                        </div>
                        <div class="col-md-8">
                            <div class="text">
                                <p><?php the_sub_field( 'p' ); ?></p>
                                <p><?php the_sub_field( 'pp' ); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!-- end location -->

<!-- Start email -->
<?php if ( have_rows( 'email' ) ) : ?>
	<?php while ( have_rows( 'email' ) ) : the_row(); ?>
<section class="email">
    <h5><?php the_sub_field( 'h5' ); ?></h5>
    <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
    <div class="form">
        <label for="Name"><?php the_sub_field( 'input' ); ?> <input type="text" class="bl"></label>
        <label for="Name"><?php the_sub_field( 'input_copy' ); ?> <input type="text" class="bl"></label>
        <label for="Name"><?php the_sub_field( 'input_copy2' ); ?> <input type="text" class="b"></label>
        <?php if ( have_rows( 'btn' ) ) : ?>
			<?php while ( have_rows( 'btn' ) ) : the_row(); ?>
        <a href="#" type="button" class="btn"><?php the_sub_field( 'a' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrow"></a>
        <?php endwhile; ?>
<?php endif; ?>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!-- End email -->

<?php get_footer(); ?>