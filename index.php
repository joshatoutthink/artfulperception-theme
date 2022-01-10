<?php get_header();?>

<?php $url = get_stylesheet_directory_uri();
; ?>

        <div id="cover-image" class="container-fluid cover-bg">
            <div class="floating-text-1">
                Sharpen your perception,
            </div>
            <div class="floating-text-2 mt-2 pt-0">
                change your life.
            </div>
        </div>

        <div id="promo-banner" class="container-fluid promo-banner top-shadow">
            <div class="slider">
                <div>
                    <div class="container promo-content-container pb-4 pt-4 pt-md-5 ">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <img src=<?php echo $url . "/images/fixed-book.png"; ?> class="book-image">
                            </div>
                            <div class="col text-center">
                                <h3 class="text-white">Now in stores!</h3>
                                <hr class="bg-white">
                                <p class="text-white">An art historian and lawyer who uses works of art to teach us how to hone our perceptions and visual intelligence, presents a paradigm-shattering twist on problem solving that helps us find solutions to the problems we face every day. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center serif text-white">
                                    <div class="text-center mt-4">
                                        <div class="book-store-logos mb-2">
                                            <a href="http://aps.harpercollins.com/hc?isbn=9780063004849&retailer=amazon&utm_campaign=null&utm_source=null" target="_blank">
                                            <img src=<?php echo $url ."/images/amazon_logo.png";?> class="mr-2 mb-2 mt-3">
                                            </a>
                                            <a href="http://aps.harpercollins.com/hc?isbn=9780063004849&retailer=barnesandnoble&utm_campaign=null&utm_source=null" target="_blank">
                                            <img src=<?php echo $url ."/images/bn_logo.png";?> class="ml-xl-4">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mx-auto mt-4 ted-video-container"><iframe src="https://embed.ted.com/talks/amy_herman_a_lesson_on_looking" class="ted-video" frameborder="0" scrolling="no" allowfullscreen></iframe></div>
                </div>
                <div>
                    <div class="container promo-content-container pb-4 pt-4 pt-md-5 ">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <img src=<?php echo $url . "/images/book.png"; ?> class="book-image">
                            </div>
                            <div class="col text-center">
                                <img src=<?php echo $url . "/images/covers/amy-herman-headshot.jpg"; ?> class="headshot">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="text-center serif text-white">
                                    <div class="text-center mt-4">
                                        <div class="book-store-logos mb-2">
                                            <a href="https://www.amazon.com/Visual-Intelligence-Sharpen-Perception-Change/dp/0544947126/ref=sr_1_1?ie=UTF8&qid=1527437029&sr=8-1&keywords=visual+intelligence" target="_blank">
                                                <img src=<?php echo $url . "/images/amazon_logo.png"; ?> class="mr-2 mb-2 mt-3">
                                            </a>
                                            <a href="https://www.barnesandnoble.com/w/visual-intelligence-amy-e-herman/1122025486?ean=9780544947122" target="_blank">
                                                <img src=<?php echo $url . "/images/bn_logo.png"; ?> class="ml-xl-4">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-content" class="container-fluid w-75 ml-auto mr-auto mt-7">
            <div class="row">
                <div class="col">
                    <h3 class="sans-serif text-center">Welcome to the Art of Perception&reg;</h3>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-lg pr-lg-5">
                    <p>
                        Astute observation is critical to professional success. The ability to observe is grounded in the perception of visual information and the effective articulation of what the eye sees and what the brain interprets. Learning to reconsider how we perceive the world around us renews the critical nexus between the eye and the mind.
                    </p>
                </div>
                <div class="col-auto text-right">
                    <img src=<?php echo $url . "/images/homepage/turner2018.jpg"; ?> class="homepage-photo pl-5" />
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-auto">
                    <img src=<?php echo $url . "/images/homepage/magritte2018.jpg"; ?> class="homepage-photo pr-5" />
                </div>
                <div class="col-lg pl-lg-5">
                    <p>
                        The Art of Perception&reg; is a highly participatory, proprietary training seminar that teaches professionals how to enhance their observation and communication skills. Since its inception in 2000, the Art of Perception&reg; has successfully trained thousands of leaders in a broad range of fields, including, among others, law enforcement, intelligence, medicine, information technology, and education, as well as those in financial services, pharmaceuticals, and crisis management. The program's objectives are achieved by removing participants from their daily work environment and developing and improving observational skills that are relevant to their specific professions. Participants analyze works of art to reconsider their skills of critical inquiry and articulation, thereby improving their individual and collective abilities to discern the distinctions between perception and inference. As a result, they are able to enhance the effectiveness of their work.
                    </p>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-lg pr-lg-5">
                    <p>
                        To date, The Art of Perception&reg; has improved observation and communication skills and enhanced the exchange of critical information for thousands of professionals and leaders&mdash;whether in exigent circumstances or implementing long-term strategies for complex teams.
                    </p>
                </div>
                <div class="col-auto">
                    <img src=<?php echo $url . "/images/homepage/vangogh.png"; ?> class="homepage-photo pl-5" />
                </div>
            </div>

            <div class="row mt-6">
                <div class="col text-center">
                    <a href="about-course.html" class="action-button">Learn More</a>
                </div>
            </div>

        </div>


<?php 
    get_footer();
?>
