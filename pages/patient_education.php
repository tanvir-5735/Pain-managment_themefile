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
            <div class="selectOption">
                <select name="exercise" id="exercise">
                    <option value="Home exercise program">Home exercise program 1</option>
                    <option value="FAQ">Home exercise program 2</option>
                    <option value="Home exercise program">Home exercise program 3</option>
                </select>
            </div>
            <div id="exercise_document_wrapper" class="">
                <div class="exercise_document_item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/petient_doc_1.png"
                        alt="Cancer Pain" class="glaryImage">
                </div>
            </div>
            <div id="faq" class="hidden">
                <?php get_template_part('template-parts/frequent_qa', 'FrequentQA'); ?>
            </div>
        </div>

    </div>
</section>


<?php
get_footer();
?>