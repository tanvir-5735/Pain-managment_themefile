<?php
/**
 * Home consition_we_treat Template Part
 *
 * @package Mohammed
 */

?>
<section id="consitionWeTreat">
    <div class="myContainer">
        <div class="conditionWeTreatWrapper">
            <!-- ====heading==== -->
            <?php
                    get_template_part(
                        'template-parts/treatHeading',
                        null,
                        [
                            'treat_heading'    => ' Conditions We Treat ',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first.',
                        ]
                    );
            ?>
            <!-- ====heading==== -->
            <!-- ====treatment galary=== -->
             <div class="treatmentGalary">
                <div class="treatmentGlaryWrapper">

                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/asstets/images/Arthritis.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Back Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/asstets/images/Neck Pain.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Neck Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/asstets/images/Migraine.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Headaches & Migraines</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/asstets/images/Neuropathy Nerve pain.webp" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Nerve Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo get_template_directory_uri(); ?>/asstets/images/Pain After Back Surgery.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Post-Surgical Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/11/Muscle-Soft_Tissue-Pain.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Muscle & Soft Tissue Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/11/Cancer-Pain.jpg" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Cancer Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/11/Joint_Pain.png" alt="" class="glaryImage">
                            <div class="glaryContent">
                                <p>Typically presents as a dull ache or sharp pain in the lower back. Pain often worsens with activity and may include stiffness or radiate into the leg (sciatica)</p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Joint Pain</span>
                        </div>
                    </div>

                </div>
                <div class="view_more_btn">
                    <button>View More</button>
                </div>
             </div>
        </div>
    </div>
</section>
<style>
     #consitionWeTreat{ /* ----added by me--- */
        .myContainer{
            .conditionWeTreatWrapper{
                display:flex;
                flex-direction:column;
                gap:48px
            }
        }

     

        
    }
</style>