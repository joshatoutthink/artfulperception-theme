<?php 
/**
 * Template Name: About Course
*/

$url = get_stylesheet_directory_uri();
?>

<? get_header(); ?>

    <div id="cover-image" class="container-fluid cover p-0" style="background-color: black;">
        <iframe style="width:100%; height: 100%;" src="https://mediahub.unl.edu/media/9445?format=iframe&autoplay=0" frameborder="0" title="Video Player:  Sheldon Museum | The Art of Perception" allowfullscreen></iframe>
    </div>

    <div id="main-content" class="container-fluid w-75 ml-auto mr-auto mt-7">
        <div class="row">
            <div class="col text-center">
                <h3 class="sans-serif mb-5">About The Art of Perception&reg;</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="subnav-wrapper">
                    <div class="dropdown show mobile">
                        <button class="btn btn-primary dropdown-toggle bg-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Go To:
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item active" href="about-course.html">About the Course</a>
                            <a class="dropdown-item" href="about-amy-herman.html">About Amy Herman</a>
                        </div>
                    </div>
                    <ul class="desktop">
                        <li><a href="about-course.html" class="font-weight-bold"><b>About the Course</b></a></li>
                        <li><a href="about-amy-herman.html">About Amy Herman</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <p>
                    The Art of Perception&reg; is unique, offering a highly participatory professional development program in two primary settings:
                </p>

                <p>
                    In the first, as a workplace- or museum-based training seminar, original works of art and photographs are used to prompt dialogue and in-depth analysis of issues related to participants' professions and to uncover and address biases, assumptions, and other ethical challenges in today's diverse work environments.  No knowledge of art or art history is required.  Whether offered in an art museum (where group size is limited) or using high quality, digital reproductions on-site, observation, analysis, and discussion of these images affords participants opportunities to apply newly honed skills to scenarios and circumstances encountered in professional contexts. Participants' evaluate their own visual acuity in oral and written exercises throughout the seminar. Additionally, at the end, they have the opportunity to assess the relevance, applicability, and value of the course&mdash;both short-term and long-term&mdash;to their own work.
                </p>

                <p>
                    In the second, The Art of Perception&reg; serves as a dynamic, thought-provoking, and highly participatory keynote note presentation at conferences and conventions across the professional spectrum. Tailored to event themes and objectives, as a keynote address, The Art of Perception&reg; effectively demonstrates the value of visual literacy, enhanced perception, and precise communication in today's complex, diverse, and technologically driven workplaces.
                </p>

                <p>
                    Read more about The Art of Perception in these articles authored by Amy Herman:
                </p>
                <ul>
                    <li><a href="https://qz.com/703590/can-anything-be-art-an-art-historian-explains-why-not/" target="_blank">Can anything be art? An art historian explains why not</a></li>
                    <li><a href="https://qz.com/716873/art-that-makes-us-uncomfortable-can-make-us-better-social-justice-activists/" target="_blank">Art that makes us uncomfortable can make us smarter, more empathetic citizens</a></li>
                </ul>
            </div>
        </div>

    </div>

<?php get_footer(); ?>
