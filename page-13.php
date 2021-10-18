<?php get_header(); ?>

          <!-- Start hero -->
          <?php if ( have_rows( 'hero' ) ) : ?>
	        <?php while ( have_rows( 'hero' ) ) : the_row(); ?>
                <section class="board">
                    <div class="overlay">
                        <h1><?php the_sub_field( 'h1' ); ?></h1>
                    </div>
                </section>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- End hero -->

          <!-- Start About -->
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
                          </div>
                      </div> 
                  </div>
              </div>
          </section>
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- End About -->

          <!-- Start Services -->
    <?php if ( have_rows( 'services' ) ) : ?>
	    <?php while ( have_rows( 'services' ) ) : the_row(); ?>
          <section class="services">
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
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                        <h3><?php the_sub_field( 'h3_copy' ); ?></h3>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <h3><?php the_sub_field( 'h3_copy2' ); ?></h3>
                      </div>
                  </div>
              </div>
              <?php if ( have_rows( 'btn' ) ) : ?>
			<?php while ( have_rows( 'btn' ) ) : the_row(); ?>
              <a href="#" type="button" class="btn"><?php the_sub_field( 'a' ); ?><img src="<?php $img = get_sub_field( 'img' );echo $img['url']; ?>" alt="" class="arrow"></a>
              <?php endwhile; ?>
            <?php endif; ?>
          </section>
          <?php endwhile; ?>
          <?php endif; ?>
          <!-- End Services -->
          
          <?php get_footer(); ?>