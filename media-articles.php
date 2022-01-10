<?php 
/* Template Name: Media Articles */
get_header();
?>

<div id="cover-image" class="container-fluid cover p-0" style="background-color: black;">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4v_tn4nyjwE?rel=0" frameborder="0" allowfullscreen></iframe>
</div>

<div id="main-content" class="container-fluid w-75 ml-auto mr-auto mt-7">
    <div class="row">
        <div class="col text-center">
            <h3 class="sans-serif mb-5">News</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="subnav-wrapper">
                <div class="dropdown show mobile">
                    <button class="btn btn-primary dropdown-toggle bg-primary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Select Media Type
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="media-audio-video.html">Audio &amp; Video</a>
                        <a class="dropdown-item active" href="media-articles.html">News</a>
                    </div>
                </div>
                <ul class="desktop">
                    <li><a href="media-audio-video.html">Audio &amp; Video</a></li>
                    <li><a href="media-articles.html" class="font-weight-bold">News</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <ul class="participants-list">
                            <li>
                                <span class="name">
                                    <a href="Telegraph.pdf" target="_blank">Meet the Art Expert Who Trains Doctors, Navy Seals and the CIA</a>
                                </span>
                                <br/>
                                The Telegraph
                            </li>
                            <li>
                                <span class="name">
                                    <a href="https://hbr.org/2018/04/the-best-leaders-see-things-that-others-dont-art-can-help" target="_blank">The Best Leaders See Things That Others Don't. Art Can Help.</a>
                                </span>
                                <br/>
                                Harvard Business Review
                            </li>
                            <li>
                                <span class="name">
                                    <a href="https://www.nytimes.com/2016/04/27/arts/design/art-helps-police-officers-learn-to-look.html?hpw&rref=arts&action=click&pgtype=Homepage&module=well-region&region=bottom-well&WT.nav=bottom-well&_r=0" target="_blank">Off the Beat and Into a Museum: Art Helps Police Officers Learn to Look</a>
                                </span>
                                <br/>
                                New York Times
                            </li>

                        </ul>
                    </div>
                    <div class="col-md">
                        <ul class="participants-list">
                            <li>
                                <span class="name">
                                    <a href="https://www.nytimes.com/2001/01/02/health/by-observing-art-med-students-learn-art-of-observation.html?scp=1&sq=%22art%20of%20observation%22%20medical%20students&st=cse" target="_blank">
                                        By Observing Art, Med Students Learn Art of Observation
                                    </a>
                                </span>
                                <br>
                                New York Times
                            </li>
                            <li>
                                <span class="name">
                                    <a href="https://www.smithsonianmag.com/arts-culture/teaching-cops-to-see-138500635/?c=y&page=1" target="_blank">Teaching Cops to See</a>
                                </span>
                                <br/>
                                Smithsonian.com
                            </li>
                            <li>
                                <span class="name">
                                    <a href="https://www.wsj.com/articles/SB112242979091297007" target="_blank">
                                        To Master the Art Of Solving Crimes, Cops Study Vermeer
                                    </a>
                                </span>
                                <br>
                                Wall Street Journal
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>
