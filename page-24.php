<?php get_header(); ?>

    <!-- Start Hero -->
    <?php if ( have_rows( 'hero' ) ) : ?>
	<?php while ( have_rows( 'hero' ) ) : the_row(); ?>
    <section class="Hero">
        <div class="overlay">
            <h1><?php the_sub_field( 'h1' ); ?></h1>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- End Hero -->

    <!-- Start Development -->
    <?php if ( have_rows( 'port' ) ) : ?>
	<?php while ( have_rows( 'port' ) ) : the_row(); ?>
    <section class="Portfolio">
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
    <!-- End Development -->

    <!-- Start Financial  -->
    <?php if ( have_rows( 'port_copy' ) ) : ?>
	<?php while ( have_rows( 'port_copy' ) ) : the_row(); ?>
    <section class="financial">
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
    <!-- End Financial  -->

    <!-- Start Talent -->
    <?php if ( have_rows( 'port_copy2' ) ) : ?>
	<?php while ( have_rows( 'port_copy2' ) ) : the_row(); ?>
    <section class="Portfolio">
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
    <!-- End Talent -->

    <?php get_footer(); ?>