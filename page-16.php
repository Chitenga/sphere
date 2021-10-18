<?php get_header(); ?>

    <!-- End Header -->

    <!-- banner -->
    <?php if ( have_rows( 'hero' ) ) : ?>
        <?php while ( have_rows( 'hero' ) ) : the_row(); ?>
            <section class="banner">
                <h1><?php the_sub_field( 'h1' ); ?></h1>
                <h1 class="h"><?php the_sub_field( 'h1_copy' ); ?></h1>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end banner -->

    <!-- about -->
    <?php if ( have_rows( 'about' ) ) : ?>
        <?php while ( have_rows( 'about' ) ) : the_row(); ?>
            <section class="about">
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
                                <?php if ( have_rows( 'btn' ) ) : ?>
			                        <?php while ( have_rows( 'btn' ) ) : the_row(); ?>
                                       <a href="#" type="button" class="btn"><?php the_sub_field( 'a' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrow"></a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- end about -->

    <!-- Portfolio -->
    <?php if ( have_rows( 'portfolio' ) ) : ?>
	<?php while ( have_rows( 'portfolio' ) ) : the_row(); ?>
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
                            <?php if ( have_rows( 'btn' ) ) : ?>
			                <?php while ( have_rows( 'btn' ) ) : the_row(); ?>
                                <a href="#" type="button" class="btn"><?php the_sub_field( 'a' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrow"></a>
                            <?php endwhile; ?>
		                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end Portfolio -->

    <!-- Sphere Talent Roster -->
    <?php if ( have_rows( 'sphere_talent_roster' ) ) : ?>
	<?php while ( have_rows( 'sphere_talent_roster' ) ) : the_row(); ?>
    <section class="entertainment">
        <h5><?php the_sub_field( 'h5' ); ?></h5>
        <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><?php the_sub_field( 'h3' ); ?></h3>
                </div>
                <div class="col-md-8">
                    <div class="text1">
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <p><?php the_sub_field( 'p_copy' ); ?></p>
                        <p><?php the_sub_field( 'p_copy2' ); ?></p>
                    </div>
                    <div class="text2">
                    <p><?php the_sub_field( 'p' ); ?></p>
                    <p><?php the_sub_field( 'p_copy' ); ?></p>
                    <p><?php the_sub_field( 'p_copy2' ); ?></p>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3><?php the_sub_field( 'h3_copy' ); ?></h3>
                </div>
                <div class="col-md-8">
                    <div class="text1">
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <p><?php the_sub_field( 'p_copy' ); ?></p>
                        <p><?php the_sub_field( 'p_copy2' ); ?></p>
                    </div>
                    <div class="text2">
                        <p><?php the_sub_field( 'p' ); ?></p>
                        <p><?php the_sub_field( 'p_copy' ); ?></p>
                        <p><?php the_sub_field( 'p_copy2' ); ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end Sphere Talent Roster -->

    <!-- contact -->
    <?php if ( have_rows( 'contact' ) ) : ?>
	<?php while ( have_rows( 'contact' ) ) : the_row(); ?>
    <section class="contact">
        <h5><?php the_sub_field( 'h5' ); ?></h5>
        <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
        <div class="container">
            <div class="row">
                            <div class="col-md-4">
                            <?php if ( have_rows( 'h' ) ) : ?>
                            <?php while ( have_rows( 'h' ) ) : the_row(); ?>
                                <h3><?php the_sub_field( 'h3' ); ?></h3>
                                <?php endwhile; ?>
                             <?php endif; ?>
                            </div>

                        <div class="col-md-8">
                        <?php if ( have_rows( 'tex' ) ) : ?>
                        <?php while ( have_rows( 'tex' ) ) : the_row(); ?>
                            <div class="tex">
                                <p><?php the_sub_field( 'p' ); ?></p>
                                <p><?php the_sub_field( 'p_copy' ); ?></p>
                                <p><?php the_sub_field( 'p_copy2' ); ?></p>
                                <p><?php the_sub_field( 'p_copy3' ); ?></p></a>
                            </div>
                        <?php endwhile; ?>
                         <?php endif; ?>
                        </div>
                    
            </div>
        </div>
        <?php if ( have_rows( 'btn' ) ) : ?>
			<?php while ( have_rows( 'btn' ) ) : the_row(); ?>
        <a href="#" type="button" class="btn"><?php the_sub_field( 'a' ); ?> <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrow"></a>
    <?endwhile; ?>
    <?php endif; ?>
    </section>
    <?php endwhile; ?>
    <?php endif; ?>
    <!-- end contact -->

    <?php get_footer(); ?>