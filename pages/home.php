<?php
/**
 * Template Name: Home_Page
 * Description: A clean Treatments page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>


<main class="myContiner">
<?php get_template_part('template-parts/home/home_banner', 'banner'); ?>
<?php get_template_part('template-parts/home/aboutpractice', 'aboutPractice'); ?>
<?php get_template_part('template-parts/home/condition_we_treat', 'conditionWeTreat'); ?>
<?php get_template_part('template-parts/home/dr_salah_eldin', 'DrSalahEldin'); ?>
<?php get_template_part('template-parts/home/meet_our_expert_doctor', 'MeetOurExpertDoctor'); ?>

</main>

<?php get_footer(); ?>