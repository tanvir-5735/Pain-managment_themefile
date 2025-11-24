<?php
/**
 * Template Name: home
 * Description: A clean Treatments page template with hero, content, contact sidebar and optional map.
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>


<<<<<<< HEAD
<main class="myContiner2">
    <?php get_template_part('template-parts/home/home_banner'); ?>
    <div class="myContiner">
        <?php get_template_part('template-parts/home/about_practice'); ?>
        <?php get_template_part('template-parts/home/condition_we_treat'); ?>
        <?php get_template_part('template-parts/home/dr_salah_eldin'); ?>
        <?php get_template_part('template-parts/home/meet_our_expert_doctor'); ?>
    </div>

=======
<main class="myContiner">
<?php get_template_part('template-parts/home/home_banner'); ?>
<?php get_template_part('template-parts/home/aboutpractice'); ?>
<?php get_template_part('template-parts/home/condition_we_treat', 'conditionWeTreat'); ?>
<?php get_template_part('template-parts/home/dr_salah_eldin', 'DrSalahEldin'); ?>
<?php get_template_part('template-parts/home/meet_our_expert_doctor', 'MeetOurExpertDoctor'); ?>
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78

</main>

<?php get_footer(); ?>