
@extends('layouts.app')

@section('content')



<div class="section section-header-blog">
        <div class="parallax filter filter-color-black">
            <div class="image"
                style="background-image:url('{{ url('/img/fourmie-5061910_1920.jpg') }}')">
            </div>
            <div class="container">
                <div class="content">
                    <h1>Exemple Of A Post </h1>
                    <h3 class="subtitle">C'est a ça que ça va ressembler plus ou moins.</h3>
                    <div class="separator separator-success">✻</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-blog">
                        <p>In the past nine months we’ve hosted over 400 LIVE Chats with entrepreneurs, investors, entertainers, athletes, and thought leaders from every industry imaginable. Many of our guests have written some of the most insightful, entertaining, and thought-provoking books in categories ranging from science fiction and history, to business non-fiction and memoirs.</p>
                        <p>Perhaps unsurprisingly, our community wanted to know how. How do these writers write? What time of day do they write, and how frequently? How long does it take? And does it get any easier over time?</p>
                        <p>A. The desire to lose weight is one of the most frequently cited reasons for skipping breakfast. But many observational studies have found that people who skip breakfast are more likely to be overweight. The theory is that they more than make up for the missed calories in the morning by eating more at lunch or snacking all day.</p>
                        <blockquote>
                            <p>Overall, there’s still a similar intake or a lesser intake (of calories) over the whole day.</p>
                            <small>Krista Casazza, PhD, RD.</small>
                        </blockquote>
                        <p>Another small randomized trial published by Cornell University researchers in Physiology & Behavior in 2013 found that college students ate about 145 calories more at lunch when they ate nothing in the morning than they did on a day when they ate breakfast. Considering that their breakfasts averaged about 625 calories, skipping it still resulted in a savings of about 450 calories by day’s end, according to the study.</p>
                        <p>In the past nine months we’ve hosted over 400 LIVE Chats with entrepreneurs, investors, entertainers, athletes, and thought leaders from every industry imaginable. Many of our guests have written some of the most insightful, entertaining, and thought-provoking books in categories ranging from science fiction and history, to business non-fiction and memoirs.</p>
                        <p>Perhaps unsurprisingly, our community wanted to know how. How do these writers write? What time of day do they write, and how frequently? How long does it take? And does it get any easier over time?</p>
                    </div>
                    <div class="separator separator-success">✻</div>
                </div>
                <div class="col-md-3 col-md-offset-1 text-center">
                    <h3 class="social-title">Author</h3>
                    <div class="author">
                        <div class="avatar avatar-success">
                            <img alt="..." src="{{ url('/img/IMG_20200525_162057_761.jpg') }}"/>
                        </div>

                        <div class="description text-center">
                            <h3 class="big-text">Sim</h3>
                            <p class="small-text">Bloger</p>
                        </div>
                        <div class="social-buttons">
                            <a href="#" class="btn btn-social btn-simple"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-social btn-simple"><i class="fa fa-dribbble"></i></a>
                            <a href="#" class="btn btn-social btn-simple"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                    <h3 class="social-title">Categories</h3>
                    <span class="label label-fill label-success">Food</span>
                    <span class="label label-fill label-success">Health</span>
                    <span class="label label-fill label-success">Lifestyle</span>
                    <span class="label label-fill label-success">Breakfast</span>
                    <h3 class="social-title">Shares - 18,5K</h3>
                    <div class="social-buttons-blog-posts">
                        <button class="btn btn-social btn-simple btn-padding"><i class="fa fa-facebook-square"></i></button>
                        <button class="btn btn-social btn-simple btn-padding"><i class="fa fa-twitter"></i></button>
                        <button class="btn btn-social btn-simple btn-padding"><i class="fa fa-instagram"></i></button>
                        <button class="btn btn-social btn-simple btn-padding"><i class="fa fa-google-plus-square" ></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <h3>Comments</h3>
            <div class="row">
                <div class="col-md-8">
                    <div class="media-area">
                        <div class="media">
                            <a href="#" class="avatar avatar-success pull-left">
                                <img class="media-object" src="../assets/img/faces/face_1.jpg">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Tina Rosa</h3>
                                <h5 class="text-muted pull-right">Mar 23, 09:42 AM</h5>
                                <p>While doing this, I also came up with a name, bought the domain, found a suitable Wordpress theme I could strip to bare essentials, registered Twitter/Facebook and made a lander with an e-mail drop which I managed to get on BetaList and StartupList, two of my favorite tools to get early (possible) users.</p>
                                <p>Don't forget, You're Awesome!</p>
                                <div class="media-footer">
                                    <button class="btn btn-info btn-simple">
                                        <i class="fa fa-reply"></i>
                                        Reply
                                    </button>
                                    <button class="btn btn-success btn-simple pull-right">
                                        <i class="fa fa-heart"></i>
                                        123
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <a href="#" class="avatar avatar-success pull-left">
                                <img class="media-object" src="../assets/img/faces/face_3.jpg">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Creative Tim</h3>
                                <h5 class="text-muted pull-right">Mar 23, 09:42 AM</h5>
                                <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                <p>Don't forget, You're Awesome!</p>
                                <div class="media-footer">
                                    <button class="btn btn-info btn-simple">
                                        <i class="fa fa-reply"></i>
                                        Reply
                                    </button>
                                    <button class="btn btn-success btn-simple pull-right">
                                        <i class="fa fa-heart"></i>
                                        243
                                    </button>
                                </div>
                                <div class="media media-comment">
                                    <a href="#" class="avatar avatar-success pull-left">
                                        <img class="media-object" src="../assets/img/faces/face_4.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading">Mike Tompson</h3>
                                        <h5 class="text-muted pull-right">Mar 23, 09:42 AM</h5>
                                        <p>If you’ve been around Dribbble, Behance, or any other design community lately, you’ve probably seen the recent trend of mixing flat design with big, beautiful diffused drop shadows. On the face of it, you might think, “That’s just a big drop shadow applied to a rectangle,” but you’d be sorely mistaken. </p>
                                        <div class="media-footer">
                                            <button class="btn btn-success btn-simple pull-right">
                                                <i class="fa fa-heart fa-heart-o"></i>
                                                4
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media">
                            <a href="#" class="avatar pull-left">
                                <img class="media-object" src="../assets/img/faces/face_1.jpg">
                            </a>
                            <div class="media-body">
                                <h3 class="media-heading">Creative Tim</h3>
                                <h5 class="text-muted pull-right">Sep 17, 07:53 PM</h5>
                                <p>If you’ve been around Dribbble, Behance, or any other design community lately, you’ve probably seen the recent trend of mixing flat design with big, beautiful diffused drop shadows. On the face of it, you might think, “That’s just a big drop shadow applied to a rectangle,” but you’d be sorely mistaken. </p>
                                <p>This video will show you how to make the perfect diffused shadow for your trendiest designs.</p>

                                <div class="media-footer">
                                    <button class="btn btn-info btn-simple">
                                        <i class="fa fa-reply"></i>
                                        Reply
                                    </button>
                                    <button class="btn btn-success btn-simple pull-right">
                                        <i class="fa fa-heart-o"></i>
                                        243
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="contact-form">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <textarea name="content" class="form-control" placeholder="Here you can write your nice text" rows="8"></textarea>
                                </div>
                                <button type="button" class="btn btn-success btn-fill pull-right">Post Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include('layouts.ourStories')
    
    
@endsection