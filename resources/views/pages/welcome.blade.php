
@extends('layouts.app')

@section('content')




<div class="section section-header">
        <div class="parallax filter filter-color-black">
            <div class="image" style="
                 background-image:       url('{{ url('/img/lorenz-lippert-eGO4gEm2Y9s-unsplash.jpg') }}')">
            </div>
            <div class="container">
                <div class="content">
                    <p><span>by </span>Sim</p>
                    <h1>MinusculeAnt</h1>
                    <div class="separator-container">
                        <div class="separator line-separator">♦</div>
                    </div>
                    <h5>Welcome to my personal blog, I wish you a good visit</h5>
                </div>
            </div>
        </div>
        <a href="" data-scroll="true" data-id="#firstSection" class="scroll-arrow hidden-xs hidden-sm">
            <i class="fa fa-angle-down"></i>
        </a>
    </div>


    <div class="section" id="firstSection">
        <div class="container">
            <div class="title-area">
                <h2>Our company will take your startup to the next level for sure!</h2>
                <div class="separator separator-success">♦</div>
                <p class="description">
                    Our company is a group of professional individuals looking to create amazing pieces of clothing. We have studied at the best schools of design, we have tailored the suits for the most stylish men in the industry, we are what you need!
                </p>
            </div>
        </div>

        <div class="parallax parallax-small">
            <div class="image" style="background-image: url('{{ url('/img/the-road-815297_1920.jpg') }}')"></div>
        </div>
    </div>


    <div class="section section-our-projects section-our-projects-fluid">

        <div class="title-area">
            <h5 class="subtitle text-gray">Here you can check</h5>
            <h2>Our Projects</h2>
            <div class="separator separator-success">♦</div>
            <p class="description">
                Utah has eliminated homelessness by 91% It wasn’t any Kanyes I even had the pink polo I thought I was Kanye They think we're stupid. They do not know how to communicate.
            </p>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download1.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-success label-fill">Website Redesign</label>
                                <h3>Famous Website Redesign</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download2.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-success label-fill">Desktop Development</label>
                                <h3>Desktop App</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download3.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-success label-fill">Marketing</label>
                                <h3>Social Marketing</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download4.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-success label-fill">Website Redesign</label>
                                <h3>Behance Redesign</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download5.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-info label-fill">App Development</label>
                                <h3>Analytics App Android</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanyes</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="project">
                        <img src="{{ url('/img/download6.jpg') }}" />
                        <a class="over-area" href="#gaia">
                            <div class="content">
                                <label class="label label-success label-fill">Marketing</label>
                                <h3>Social Marketing</h3>
                                <p>We will find freedom in truth as opposed to ridicule. Let's fight for our future. We can change everything. Pablo in blood It wasn’t any Kanye.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.ourStories')


    <div class="section section-get-started">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image: url('{{ url('/img/tree.jpg') }}')">
            </div>
            <div class="container">
            <div class="text-area">
                <div class="title">
                    <h2>Subscribe to Newsletter</h2>
                    <div class="separator separator-success">✻</div>
                    <h5 class="text-white">We are so blessed! All praises and blessings to the families of people who never gave up on dreams I love you guys.</h5>
                </div>

            <div class="contact-form">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-md-push-4">
                            <div class="form-group">
                                <input type="text" name="email" value="" placeholder="michael.j@gmail.com" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-fill btn-success">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

@endsection


