<?php
/**
 * Template Name: treatments
 * Description: A clean Treatments page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<<<<<<< HEAD
<section id="treatment_we_treat">
=======
<section id="treatments_page">
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78
    <div class="myContiner">
        <div class="breadCrumb">
            home / treatment
        </div>
        <div>
            <?php
                    get_template_part(
                        'template-parts/treatHeading',
                        null,
                        [
                            'treat_heading'    => 'Treatments We Treat',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first. ',
                        ]
                    );
            ?>
<<<<<<< HEAD
        </div>
        <!-- ====tratment card wrapper==== -->
        <div class="treatment_card_continer">
            <div class="treatment_card_wrapper">

                <!-- ---flip card-1-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Joint Vasco supplementation</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>The injection of hyaluronic acid or similar substances into joints (commonly the knee) to improve lubrication, reduce pain, and enhance mobility, especially in osteoarthritis.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-2-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>An injection procedure that targets the medial branches of the dorsal rami nerves supplying the cervical/thoracic/lumbar facet joints. It helps in diagnosing and managing neck/mid-back/low back pain related to facet joint arthritis.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-3-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/ Thoracic/Lumbar Epidural Steroid injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Administration of steroids into the epidural space of the spine to reduce inflammation and alleviate pain, often used for back pain and sciatica.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-4-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/Thoracic/Lumbar Facet Joint Injections</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Injection of anesthetic and steroids into the facet joints of the spine to relieve localized back pain caused by arthritis or inflammation.</p>
                        </div>
                    </div>
                </div>

                <!-- ==flip card=5= -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Minimally Invasive Varicose Vein Treatment</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Varicose veins can cause discomfort, swelling, and fatigue — but today’s treatments are simple, safe, and highly effective. We offer minimally invasive, such as laser therapy, radiofrequency ablation, and sclerotherapy to gently close unhealthy veins and restore healthy circulation. Most patients walk out the same day with little to no downtime, enjoying improved comfort, appearance, and confidence.  </p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-6-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Joint Injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Injection of anesthetic and steroids into the facet joints of the spine to relieve localized back pain caused by arthritis or inflammation.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-7-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Kyphoplasty</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A minimally invasive surgical procedure used to treat spinal compression fractures. It involves inserting a balloon catheter into the fractured vertebra to create space, then filling it with bone cement to stabilize the vertebra and relieve pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-8-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Genicular Nerve Block</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A minimally invasive medical procedure used to diagnose and treat chronic knee pain by interrupting pain signals sent from the knee joint to the brain.</p>
                        </div>
                    </div>
                </div>

                <!-- ==flip card=9= -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Endoscopic Rhizotomy</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals, providing longer-term relief for joint or facet pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-10-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Radiofrequency Ablation</h4>
                        </div>
                        <div class="flip-card-back">
                            <h2>Back Side</h2>
                            <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals, providing longer-term relief for joint or facet pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-11-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Peripheral Nerve Stimulation</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A procedure where a small device is implanted near peripheral nerves to deliver electrical impulses. This interferes with pain signals sent to the brain, helping to manage chronic pain conditions</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-12-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Sacroiliac Joint Injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>An injection of anesthetic and corticosteroids into the sacroiliac joint (located where the sacrum meets the ilium) to reduce inflammation, diagnose the source of lower back pain, and provide pain relief.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div>
            <?php get_template_part('template-parts/booking_consultation', 'bookingConsultation'); ?>
=======
            <!-- ================================ -->
             <!-- *************************************** -->
              <!-- your code start here -->
               <section id=treatments_list_section>
                <div class="treatments_list_wrapper">
                    <div class="treatments_list">
                        <div class="treatments_card">  <!--  card no 1 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Joint_-Vascosupplementation.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Joint Vascosupplementation</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Joint Vascosupplementation</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>The injection of hyaluronic acid or similar substances into joints (commonly the knee) to improve lubrication, reduce pain, and enhance mobility, especially in osteoarthritis.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card"> <!--  card no 2 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Cervical_Thoracic_Lumbar_Medial_Branch_BlockMBB.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>An injection procedure that targets the medial branches of the dorsal rami nerves supplying the cervical/thoracic/lumbar facet joints. It helps in diagnosing and managing neck/mid-back/low back pain related to facet joint arthritis.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card"> <!--  card no 3 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Cervical_-Thoracic_Lumbar_Epidural_Steroid_injection.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Cervical/ Thoracic/Lumbar Epidural Steroid injection</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Cervical/ Thoracic/Lumbar Epidural Steroid injection</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Administration of steroids into the epidural space of the spine to reduce inflammation and alleviate pain, often used for back pain and sciatica.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 4 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Cervical_Thoracic_Lumbar-Facet_Joint_Injections.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Cervical/Thoracic/Lumbar Facet Joint Injections</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back"> 
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Cervical/Thoracic/Lumbar Facet Joint Injections</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Injection of anesthetic and steroids into the facet joints of the spine to relieve localized back pain caused by arthritis or inflammation.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 5 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Minimally_Invasive_Varicose_Vein_Treatment.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Minimally Invasive Varicose Vein Treatment"</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Minimally Invasive Varicose Vein Treatment"</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Varicose veins can cause discomfort, swelling, and fatigue — but today’s treatments are simple, safe, and highly effective. We offer minimally invasive, such as laser therapy, radiofrequency ablation, and sclerotherapy to gently close unhealthy veins and restore healthy circulation. Most patients walk out the same day with little to no downtime, enjoying improved comfort, appearance, and confidence.                     </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 6 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Joint_Injection2.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Joint Injection</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Joint Injection</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Injection of anesthetic and steroids into the facet joints of the spine to relieve localized back pain caused by arthritis or inflammation.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 7 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Kyphoplasty.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Kyphoplasty</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Kyphoplasty</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>A minimally invasive surgical procedure used to treat spinal compression fractures. It involves inserting a balloon catheter into the fractured vertebra to create space, then filling it with bone cement to stabilize the vertebra and relieve pain.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 8 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Genicular_Nerve_Block.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Genicular Nerve Block</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Genicular Nerve Block</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>A minimally invasive medical procedure used to diagnose and treat chronic knee pain by interrupting pain signals sent from the knee joint to the brain.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 9 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Endoscopic_Rhizotomy.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Endoscopic Rhizotomy</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Endoscopic Rhizotomy</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals, providing longer-term relief for joint or facet pain.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 10 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Radiofrequency_Ablation-.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Radiofrequency Ablation</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Radiofrequency Ablation</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals, providing longer-term relief for joint or facet pain.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 11 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Peripheral_Nerve_Stimulation.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Peripheral Nerve Stimulation</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Peripheral Nerve Stimulation</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>A procedure where a small device is implanted near peripheral nerves to deliver electrical impulses. This interferes with pain signals sent to the brain, helping to manage chronic pain conditions</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 12 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Sacroiliac_Joint_Pain2.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Sacroiliac Joint Injection</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Sacroiliac Joint Injection</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>An injection of anesthetic and corticosteroids into the sacroiliac joint (located where the sacrum meets the ilium) to reduce inflammation, diagnose the source of lower back pain, and provide pain relief.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 13 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Endoscopic_discectomy.png" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Endoscopic discectomy</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Endoscopic discectomy</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>“A minimally invasive procedure that uses an endoscope to remove herniated disc tissue and relieve nerve compression..</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 14 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Trigger_Point_Joint_Injection.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Trigger Point Joint Injection</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Trigger Point Joint Injection</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Injection of local anesthetic or corticosteroid into trigger points in muscles to relieve myofascial pain</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="treatments_card">  <!--  card no 15 -->

                            <div class="treatments_card_front">
                                <div class="treatments_card_img"><img src="<?php echo wp_get_upload_dir()['url']; ?>/Spinal_Cord_Stimulator_Trial_Implant.jpg" alt="">

                                </div>
                                <div class="treatments_card_title">
                                  <h5 >Spinal Cord Stimulator Trial/Implant</h5>
                                </div>
                            </div>

                            <div class="treatments_card_back">
                                <div class="treatments_card_content">
                                    <div>
                                        <h5 class="treatments_card_title">Spinal Cord Stimulator Trial/Implant</h5>
                                    </div>
                                    <div class="treatments_card_text">
                                        <p>Implantation of a device that delivers electrical impulses to the spinal cord to interfere with pain signals before they reach the brain</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

               </section>
              <!-- ****************************************** -->
             <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->
            <?php get_template_part('template-parts/bookingConsultation', 'bookingConsultation'); ?>
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78
        </div>
    </div>
</section>


<?php
get_footer();
?>
<style>
    #treatments_page{
        padding-top:140px;
        .traet_heading .treat_heading_wrapper {
            margin:48px 0;
        }
    }

</style>