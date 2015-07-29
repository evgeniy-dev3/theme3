<?php get_header(); ?>

<div class="page-title">
    <h1>Portfolio Single Title</h1>
    <p class="page-title-map"><a href="#">Home</a>  /  <a href="#">Our Work</a>  /  Single Page</p>
</div>

<div class="content-main">

<?php if (have_posts()) : while (have_posts()) :the_post(); ?>
    <?php the_post_thumbnail('full', array( 'class' => "img-lefter" )); ?>
    <h1 class="center-n"><span class="hnc"><?php the_title(); ?></span></h1>
    <?php the_content(); ?>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no post found -->
<?php endif; ?>



    <!--Блок Our Team-->

<?php
$id = 5;
$posts_team = new WP_Query(array('cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC' ));
?>
<h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="<?php echo get_category_link($id); ?>">View The Team</a></span></h1>

    <?php if ($posts_team -> have_posts()) : ?>
        <div class="our-team-main">

    <?php while ($posts_team ->have_posts()) :$posts_team ->the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?> </a>
                <br />
                <?php the_title(); ?><br />
                <span><?php my_list_tags();?></span></h2>
            <p> <?php the_excerpt(); ?></p>
        </div>

    <?php endwhile; ?>
        </div>
    <?php else: ?>
        <!-- no post found -->
    <?php endif; ?>





    <!--<h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="#">View The Team</a></span></h1>
    <div class="our-team-main">
        <div>
            <h2><a href="#"><img src="images/team1.jpg" alt="Darren Kimbell" /></a>
                <br />
                Darren Kimbell<br />
                <span>Business Marketing</span></h2>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
        </div>
        <div>
            <h2><a href="#"><img src="images/team2.jpg" alt="Darren Kimbell" /></a>
                <br />
                Allan Pesola<br />
                <span>Developer</span></h2>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
        </div>
        <div>
            <h2><a href="#"><img src="images/team3.jpg" alt="Darren Kimbell" /></a>
                <br />
                Lenore Hilker<br />
                <span>Designer</span></h2>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
        </div>
    </div>-->

    <h1 class="center-n"><span class="hnc">Our Clients</span></h1>

    <div class="our-clients">
        <a href="#"><img src="images/client1.jpg" alt="" /></a>
        <a href="#"><img src="images/client2.jpg" alt="" /></a>
        <a href="#"><img src="images/client3.jpg" alt="" /></a>
        <a href="#"><img src="images/client4.jpg" alt="" /></a>
        <a href="#"><img src="images/client5.jpg" alt="" /></a>
        <a href="#"><img src="images/client6.jpg" alt="" /></a>
    </div>

</div>

<?php get_footer(); ?>
