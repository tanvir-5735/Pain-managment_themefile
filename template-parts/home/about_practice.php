<?php
/**
 * Home about practice Template Part
 *
 * @package Mohammed
 */

?>
<section id="aboutPractice">
    <div class="myContiner">
        <div class="aboutPracticeWrapper">
            <div class="practiceImage">
<<<<<<< HEAD:template-parts/home/about_practice.php
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home_about_us.jpg" alt="consult image">
=======
                <img src="<?php echo wp_get_upload_dir()['url']; ?>/image_1.png" alt="consult image">
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78:template-parts/home/aboutPractice.php
            </div>
            <div class="practiceContent">
                <div class="practiceContentWrapper">
                    <h2>About Our </h2>
                    <h2>Practice</h2>
                    <h5>Comprehensive Pain Management Solutions</h5>
                    <p>At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first.</p>
<<<<<<< HEAD:template-parts/home/about_practice.php
                    <a href="<?php echo home_url('/about_practice'); ?>">
                        <div class="myBtn">
                            <span>See All</span>
                        </div>
                    </a>
=======
                   
                        <a href="<?php echo get_permalink( get_page_by_path( 'about-practice' ) ); ?>" class="interlink">
                            <div class="myBtn">See All</div>
                        </a>
                    
>>>>>>> 0f8e9a2413509368dc65cef26d02f706c0ac9e78:template-parts/home/aboutPractice.php
                </div>
            </div>
        </div>
    </div>
</section>

