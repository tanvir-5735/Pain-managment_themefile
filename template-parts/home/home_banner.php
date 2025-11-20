<?php
/**
 * Home Banner Template Part
 *
 * @package Mohammed
 */

?>

<section id="homeBanner" class="home_banner">
    <div class="banner_content_wrapper">
        <div class="banner_video">
            <video autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/home_banner_video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="banner_content">
            <h1>Live Life Pain-Free</h1>
            <p>Advanced Pain Institute of Texas is a full-spectrum, multi-disciplinary pain management practice focused
                on providing the best patient-focused care for a wide range of chronic pain conditions.</p>
            <div class="btnWrapper">
                <a href=""></a>
                <div class="myBtn">
                    <span>(948)228-1198</span>
                </div>
                <a href="<?php echo home_url('/abbout_our_physicians'); ?>">
                    <div class="myBtn">
                        <span>Book Appointment</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

