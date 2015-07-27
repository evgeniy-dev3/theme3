<?php get_header(); ?>
                     <!--СЛАЙДЕР-->
<?php $slider = new WP_Query(array('post_type' => 'slider', 'order' => 'ASC'))  ?>
<?php if ($slider->have_posts()) : ?>
    <div class="slider">
        <div class="flexslider">
          <ul class="slides">
<?php while ($slider->have_posts()) :$slider->the_post(); ?>
            <li>
            	<div class="slide-content">
                    <?php the_content(); ?>
                </div>
  	    	    <?php the_post_thumbnail('full'); ?>
  	    	</li>
<?php endwhile; ?>
          </ul>
        </div>
<?php else: ?>
            <div><h1>Место для слайдера</h1></div>
<?php endif; ?>
    </div>
    

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="under-slider">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no post found -->
<?php endif; ?>




    	<!--<h1>Extended is immensely powerful, flexible and nicely responsive.</h1>
        <p>You can easily add modules to the page with our Front-end Drag & Drop functionality.
            Page layouts began to be infinite and you can follow your creativity. The header is very flexible and
            allow you to upload backgrounds as well as choosing between few header layouts. Creating and updating your theme has never been that easy and
            it is fun to play with. Take a tour at all the pages and discover what a great and beautiful theme has to offer.</p>-->

    
    <div class="content-main">
<?php
$id = 3;  //номер категории
$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 4));
?>

<?php if ($posts_about->have_posts()) : ?>
   <div class="whatwedo">

<?php while ($posts_about->have_posts() ) : $posts_about->the_post(); ?>
    <div>
        <h1><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h1>
        <?php the_excerpt(); ?>
    </div>
<?php endwhile; ?>
  </div>
<?php else: ?>
  <h1>Здесь будет превью статья</h1>
<?php endif; ?>





<?php
$id = 4;  //номер категории
$posts_about = new WP_Query(array('cat' => $id, 'posts_per_page' => 4, 'order' => 'DESC'));
?>



<?php if ($posts_about->have_posts()) : ?>
        <h1 class="center-n">
            <span class="hnc">Our Latest Work</span>
            <span class="hnl">/
                <a href="<?php echo get_category_link($id); ?>">View All Portfolio</a>
            </span>
        </h1>

<div class="our-works-main">

<?php while ($posts_about->have_posts() ) : $posts_about->the_post(); ?>
    <div class="our-works">
    <a class="our-work-href" href="<?php the_permalink(); ?>">
        <div class="our-work-short">
            <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
            <h3><?php the_title(); ?></h3>
            <?php my_list_tags(); ?>
            <!--<p>Photoshop, Lightroom</p>-->
        </div>
        <img class="our-work-img" src=" <?php echo get_post_meta($post->ID, 'portfolio_img', true); ?>" alt="" />
    </a>
    </div>
<?php endwhile; ?>
</div>
<?php else: ?>
     <h1>Здесь будет превью статей</h1>
<?php endif; ?>


        <!--<h1 class="center-n"><span class="hnc">Our Latest Work</span> <span class="hnl">/ <a href="#">View All Portfolio</a></span></h1>
        <div class="our-works-main">
        	<div class="our-works">
            	<a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php /*bloginfo('template_url'); */?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php /*bloginfo('template_url'); */?>/images/our-work1.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php /*bloginfo('template_url'); */?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php /*bloginfo('template_url'); */?>/images/our-work2.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php /*bloginfo('template_url'); */?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php /*bloginfo('template_url'); */?>/images/our-work3.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php /*bloginfo('template_url'); */?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php /*bloginfo('template_url'); */?>/images/our-work4.jpg" alt="" />
                </a>
            </div>
        </div>-->
        
        <div class="advance">
			
            <div class="why-us">
                <!-- Accordion -->
                <h1 class="center-n"><span class="hnc">Why Choose Us</span></h1>
                <div id="accordion">
                    <h3>Accordion Title 1</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                    
                    <h3>Accordion Title 2</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                    
                    <h3>Accordion Title 3</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>                    
                </div>
            
            </div>
           
           <div class="our-services"> 
                <!-- Tabs -->
                <h1 class="center-n"><span class="hnc">Our Services</span></h1>
                <div id="tabs">                	
                    <ul>
                        <li><a href="#tabs-1">Tab Title 1</a></li>
                        <li><a href="#tabs-2">Tab Title 2</a></li>
                        <li><a href="#tabs-3">Tab Title 3</a></li>
                        <li><a href="#tabs-4">Tab Title 4</a></li>
                    </ul>
                    <div id="tabs-1"><img class="img-righter" src="<?php bloginfo('template_url'); ?>/images/tabs-img1.jpg" alt="" />Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
                    <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
                    <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                    <div id="tabs-4">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                </div>
            </div>
        
        </div>
           
    </div>
<?php get_footer(); ?>
