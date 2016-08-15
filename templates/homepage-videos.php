<!--iframe/video section-->
<section id="frame" class="section_5">
    <div class="frame_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_video_main_heading', __('Video Section','one-page'))); ?></h2>
                    <hr class="frame_sep animated fade_in_up">
                    <p class="main_desc animated fade_in_up"><?php echo esc_attr(onepage_get_option('onepage_video_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','one-page'))); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="frame_wrapper animated fade_in_up">
                    
                    <?php echo onepage_get_option('onepage_video_iframe', '<iframe width="900" height="510" src="https://www.youtube.com/embed/0yK6nI08GrY?autohide=1&controls=0&fs=0&modestbranding=1&rel=0&showinfo=0&frameborder=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>'); ?> 

                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/0yK6nI08GrY" frameborder="0" allowfullscreen></iframe> -->

                 </div>
            </div>
        </div>
    </div>
</section>
<!--/iframe/video section-->
