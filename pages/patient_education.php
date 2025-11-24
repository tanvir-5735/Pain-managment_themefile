<?php
/**
 * Template Name: patient_education
 * Description: A clean Patient_Education page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="PatientEducation">
    <div class="myContiner">
        <div class="Patient_Education_wrapper">
            
            <div id="exercise_document_wrapper" class="hidden">
                <?php get_template_part('template-parts/home_exercise_program', 'HomeExerciseProgram'); ?>
            </div>
<<<<<<< HEAD
            <div id="faq_section" class="">
                <?php get_template_part('template-parts/frequent_qa', 'FrequentQA'); ?>
=======
            <div class="exercise_document_wrapper">
                <div class="exercise_document_item">
                    <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/11/image-5.png" alt="exercise_document_item">
                </div>
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78
            </div>
        </div>

    </div>
</section>


<?php
get_footer();
?>