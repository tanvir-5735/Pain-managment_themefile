<?php
/**
 * dr salah eldin mohammed Template Part
 *
 * @package Mohammed
 */

?>

<section id="doctor_details">
    <div class="myContiner">
        <div class="doctor_Detail_Wrapper">
            <div class="doctor_text_content">
                <div class="text_content_wrapper">
                    <h2>Dr. Salah Eldin Mohamed</h2>
                    <div class="desc">
                        <p>Physical Medicine & Rehabilitation | Pain Management Specialist
                            <br>
                            <br>
                            Dr. Salah Eldin Mohamed is a highly skilled and compassionate physician specializing in
                            Physical Medicine and Rehabilitation (PM&R) and Pain Management. He provides comprehensive
                            care for patients with joint and spine conditions, focusing on restoring function, relieving
                            pain, and improving quality of life.
                            <br>
                            <br>
                            Dr. Mohamed began his medical training at SUNY Downstate Medical Center, where he completed
                            his surgical internship. He then pursued a residency in Physical Medicine and Rehabilitation
                            at Burke Rehabilitation Hospital, affiliated with the Albert Einstein College of Medicine.
                            Following this, he completed a Pain Medicine Fellowship at Louisiana State University
                            Medical Center.
                            <br>
                            <br>
                            Dedicated to evidence-based, patient-centered care, Dr. Mohamed combines clinical excellence
                            with a personable and approachable style. He takes pride in tailoring individualized
                            treatment plans that address the underlying causes of pain and functional limitations. With
                            extensive experience in interventional pain procedures and rehabilitation therapies, Dr.
                            Mohamed is committed to helping patients achieve lasting relief and return to an active,
                            fulfilling lifestyle.
                        </p>
                    </div>
                    <div class="book_now_button">
                        <a href="<?php echo get_permalink( get_page_by_path( 'about-our-physicians' ) ); ?>" class="interlink">
                            <div class="myBtn">Book Now </div>
                        </a>
                        <!-- <button>Book Now </button> -->
                    </div>
                </div>
            </div>
            <div class="doctor_image_wrapper">
                <div class="doctor_Image">
                    <img src="<?php echo wp_get_upload_dir()['url']; ?>/Dr.-Salah-Eldin-Mohamed.jpg"
                    alt="picture">
                </div>
            </div>
        </div>
    </div>
</section>
<style>  /* ----added by me--- */
    #doctor_details{
        .myContiner{
            .doctor_Detail_Wrapper{
                margin-top:80px ;
            }

        }

    }

</style>