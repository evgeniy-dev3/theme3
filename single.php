<?php get_header(); ?>

<div class="page-title">
    <?php $cat = get_the_category(); ?>
    <h1><?php echo $cat[0]->name ?></h1>
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /
        <a href="<?php echo get_category_link($cat[0]->cat_ID); ?>"><?php echo $cat[0]->name ?></a> /
             <?php the_title(); ?></php></p>
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

    <!--   //Блок Our Team-->



               <!--БЛОК Our Clients-->

    <h1 class="center-n"><span class="hnc">Our Clients</span></h1>

    <div class="our-clients">
        <?php if(!dynamic_sidebar('clients')): ?>
            <span>Наши клиенты</span>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
