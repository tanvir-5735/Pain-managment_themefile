<?php get_header(); ?>
<main class=" ">
    <?php get_template_part('template-parts/home/home_banner', 'banner'); ?>
    <div class="myContiner">

        <?php get_template_part('template-parts/home/aboutPractice', 'aboutPractice'); ?>
        <?php get_template_part('template-parts/home/condition_we_treat', 'conditionWeTreat'); ?>
    </div>
</main>
<?php get_footer(); ?>
