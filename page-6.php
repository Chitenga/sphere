<?php get_header(); ?>

          <!-- Start Hero -->
          <?php if ( have_rows( 'hero' ) ) : ?>
            <?php while ( have_rows( 'hero' ) ) : the_row(); ?>
                <section class="hero">
                    <div class="overlay">
                        <h1><?php the_sub_field( 'h1' ); ?></h1>
                    </div>
                </section>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- End Hero -->

          <!-- Start Management -->
          <?php if ( have_rows( 'management' ) ) : ?>
            <?php while ( have_rows( 'management' ) ) : the_row(); ?>
                <section class="management">
                    <h5><?php the_sub_field( 'h5' ); ?></h5>
                    <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3><?php the_sub_field( 'h3' ); ?></h3>
                            </div>
                            <div class="col-md-8">
                                <div class="text">
                                    <p><?php the_sub_field( 'p' ); ?>
                                        </p>
                                        <p class="p"><?php the_sub_field( 'p1' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- End Management -->

          <!--Start Entertain -->
          <?php if ( have_rows( 'entertain' ) ) : ?>
            <?php while ( have_rows( 'entertain' ) ) : the_row(); ?>
                <section class="entertain">
                    <h5><?php the_sub_field( 'h5' ); ?></h5>
                    <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
                    <div class="container">
                        <div class="row">
                        <?php if ( have_rows( 'enter' ) ) : ?>
                                <?php while ( have_rows( 'enter' ) ) : the_row(); ?>
                            <div class="col-md-4">
                                    <div class="enter">
                                        <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="img-fluid">
                                        <div class="content">
                                            <h6><?php the_sub_field( 'h6' ); ?></h6>
                                            <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="" class="path">
                                            <p><?php the_sub_field( 'p' ); ?></p>
                                        </div>
                                    </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- End Entertain -->

            <!--Start Sports -->
            <?php if ( have_rows( 'entertain_copy' ) ) : ?>
                <?php while ( have_rows( 'entertain_copy' ) ) : the_row(); ?>
                    <section class="entertain">
                        <h5><?php the_sub_field( 'h5' ); ?></h5>
                        <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
                        <div class="container">
                            <div class="row">
                            <?php if ( have_rows( 'enter' ) ) : ?>
                                <?php while ( have_rows( 'enter' ) ) : the_row(); ?>
                                <div class="col-md-4">
                                    <div class="enter">
                                        <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="img-fluid">
                                        <div class="content">
                                            <h6><?php the_sub_field( 'h6' ); ?></h6>
                                            <img src="<?php $path = get_sub_field( 'path' );echo $path['url']; ?>" alt="" class="path">
                                            <p><?php the_sub_field( 'p' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- End Sports -->

            <!-- Start brand -->
            <?php if ( have_rows( 'start_brand' ) ) : ?>
	        <?php while ( have_rows( 'start_brand' ) ) : the_row(); ?>
            <section class="brand">
                <h5><?php the_sub_field( 'h5' ); ?></h5>
                <img src="<?php $line = get_sub_field( 'line' );echo $line['url']; ?>" alt="" class="line">
                <div class="container">
                    <div class="row">
                    <?php if ( have_rows( 'imgs' ) ) : ?>
	                <?php while ( have_rows( 'imgs' ) ) : the_row(); ?>
                        <div class="col-md-4">
                            <div class="imgs">
                                <img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </section>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- End brand -->

            <?php get_footer(); ?>