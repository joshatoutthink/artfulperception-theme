<?php
/* Template Name: Media Audio Video */
get_header(); ?>
?>



        <div id="cover-image" class="container-fluid cover p-0" style="background-color: black;">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4v_tn4nyjwE?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <div id="main-content" class="container-fluid w-75 ml-auto mr-auto mt-7">
            <div class="row">
                <div class="col text-center">
                    <h3 class="sans-serif mb-5">Audio &amp; Video</h3>
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
                                <a class="dropdown-item active" href="media-audio-video.html">Audio &amp; Video</a>
                                <a class="dropdown-item" href="media-articles.html">News</a>
                            </div>
                        </div>
                        <ul class="desktop">
                            <li><a href="media-audio-video.html" class="font-weight-bold">Audio &amp; Video</a></li>
                            <li><a href="media-articles.html">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h6 class="sans-serif">The Leonard Lopate Show</h6>
                                <iframe frameborder="0" scrolling="no" height="100" width="100%" src="https://www.wnyc.org/widgets/ondemand_player/wnyc/#file=/audio/json/600900/"></iframe>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5"/>
                    <div class="container-fluid">
                         <div class="row mt-5">
                            <div class="col-md">
                                <iframe class="media-video" src="https://www.youtube.com/embed/4v_tn4nyjwE?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md">
                                <iframe class="media-video" src="https://mediahub.unl.edu/media/9445?format=iframe&autoplay=0" frameborder="0" title="Video Player:  Sheldon Museum | The Art of Perception" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md">
                                <iframe class="media-video" src="https://www.youtube.com/embed/B9kExhYk75A?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="row mt-5">
                             <div class="col-md">
                                <iframe class="media-video" src="https://www.youtube.com/embed/ubEadhXWwV4?rel=0" frameborder="0" allowfullscreen></iframe>
                             </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md">
                                <iframe class="media-video" src="https://www.youtube.com/embed/jko5WaG_1mE?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
