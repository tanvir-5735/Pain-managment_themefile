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
                                <p>
                                    Typically presents as a <strong>dull ache or sharp pain</strong> in the lower
                                    back. Pain often <strong>worsens with activity</strong> and may include
                                    <strong>stiffness </strong> or <strong>radiate</strong> into the leg (
                                    <strong>sciatica</strong> ).
                                </p>
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
                                <p>
                                    Typically felt as a <strong>stiff neck</strong> or <strong>aching
                                    pain</strong> that worsens when moving the head. May include
                                    <strong>headaches</strong> or pain that <strong>radiates</strong> into the
                                    shoulder or down the arm.
                                </p>
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
                                <p>
                                    Headaches are typically a <strong>dull, constant ache</strong> on both sides
                                    of the head ( <strong>Tension Headache</strong> ).
                                </p>
                                 </br>
                                <p><strong>Migraine</strong> symptoms are more severe and often include:</p>

                                <p>&bull; <strong>Throbbing, pulsing pain</strong> , usually on one side of the
                                          head.
                                </p>

                                </br>
                                <p> &bull; <strong>Nausea or vomiting</strong>.</br></p>

                                <p> &bull; Extreme <strong>sensitivity to light and sound</strong>.</br></p>

                                <p>&bull; May be preceded by an <strong>aura </strong> (visual changes,
                                            tingling).
                                </p>
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
                                <p>
                                    Nerve pain is often described as <strong>burning, stabbing, or
                                    electric-shock-like</strong> sensations. It frequently includes:
                               </p>
                               <p> &bull; <strong>Tingling or "pins and needles</strong> " feeling.</p>
                               <p>&bull; <strong>Numbness</strong> or a loss of feeling.</p>
                               <p>&bull; <strong>Hypersensitivity</strong> to light touch (e.g., clothing or
                                            bedsheets causing pain)
                               </p>
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
                                <p>
                                    <strong>Post-surgical pain</strong> is either short-term pain from the
                                    incision and tissue damage, or long-term ( <strong>chronic post-surgical
                                    pain</strong> ) resulting from nerve damage or entrapment by scar
                                    tissue.
                                </p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Post-Surgical Pain</span>
                        </div>
                    </div>
                    <div class="glaryItem">
                        <div class="glaryCard">
                            <img src="<?php echo wp_get_upload_dir()['baseurl']; ?>/2025/11/Muscle-Soft_Tissue-Pain.jpg" alt="" class="glaryImage">
                            <div class="glaryContent scroll_hidden">
                                <p>Muscle and soft tissue pain (Myalgia) refers to discomfort in the muscles,
                                   ligaments, tendons, and <strong>fascia</strong> (connective tissue).
                                    </br>
                                   
                                    <strong>Specific Soft Tissue Syndromes</strong>-
                                    </br>
                                    <p>
                                    &bull; <strong>Myofascial Pain Syndrome</strong>: Persistent, localized
                                     muscle pain caused by <strong>trigger points</strong> (tender knots or
                                    nodules within a tight band of muscle). Pressure on these points causes
                                    pain, sometimes radiating to other areas.
                                    </p>
                                    </br>
                                    <p>
                                     &bull;<strong>Tendonitis/Bursitis</strong>: Inflammation of a tendon or
                                     bursa (fluid-filled sac near a joint), leading to acute pain, tenderness,
                                     and difficulty moving the joint.
                                    </p>
                                </p>
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
                                <p>Cancer pain is a complex symptom that can be caused by the disease itself, by
                                   the treatment, or by other related conditions. Pain management is a crucial
                                   part of cancer care.
                                </p>
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
                                <p>
                                    <strong>Peripheral joint pain</strong> is a common issue causing generalized
                                     stiffness and aching in joints like the <strong>knees, shoulders, elbows,
                                    wrists, ankles, and feet,</strong> sometimes presenting as nerve issues
                                    like <strong>carpal tunnel syndrome</strong>
                                </p>
                            </div>
                        </div>
                        <div class="cardTag">
                            <span>Joint Pain</span>
                        </div>
                    </div>

                </div>
                <div class="view_more_btn">
                    <a href="<?php echo get_permalink( get_page_by_path( 'conditions' ) ); ?>" class="interlink">
                            <div class="myBtn">View More</div>
                    </a>                
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