@extends('layouts.main')

@section('title')
    @parent ADICOM ACADEMY
@endsection

{{--@section('description')--}}
{{--    {{ setting('site.description') }}--}}
{{--@endsection--}}

{{--@section('keywords')--}}
{{--    {{ setting('site.keywords') }}--}}
{{--@endsection--}}

{{--@section('meta-image')--}}
{{--    {{ Voyager::image(setting('site.logo')) }}--}}
{{--@endsection--}}

@section('content')
    <main id="content" class="site-main">
        <!-- Inner Banner html start-->
        <section class="inner-banner-wrap">
            <div class="inner-baner-container" style="background-image: url({{asset('assets/img/eventum-img1.jpg')}});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">About Us</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inner Banner html end-->
        <section class="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">INTRODUCTION</span>
                            <h3 class="section-title">
                                KNOW MORE ABOUT OUR GRAND EVENT
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Officia expedita pede voluptatibus netus aptent, laoreet consequuntur animi, aliqua quod
                                quidem deleniti nibh tempor sequi mi quia ipsam gravida vehicula fugit architecto
                                malesuada elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="about-img">
                    <figure class="about-left-img">
                        <div class="video-button">
                            <a id="video-container" data-video-id="IUN664s7N-c">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </figure>
                    <figure class="about-right-img">
                        <img src="assets/img/eventum-img8.jpg" alt="">
                    </figure>
                </div>
                <div class="iconbox-container-bg">
                    <div class="iconbox-item-bg">
                        <div class="iconbox-content-bg">
                            <i aria-hidden="true" class="icon icon-idea_generate"></i>
                            <h5>WHAT WE DO?</h5>
                            <p>Habitant porta viverra voluptatum facilisi. Dolor mi sit! Recusandae, nisl, habitasse
                                justo architecto viverra volupt.</p>
                        </div>
                    </div>
                    <div class="iconbox-item-bg">
                        <div class="iconbox-content-bg">
                            <i aria-hidden="true" class="icon icon-users"></i>
                            <h5>WHAT WE ARE?</h5>
                            <p>Habitant porta viverra voluptatum facilisi. Dolor mi sit! Recusandae, nisl, habitasse
                                justo architecto viverra volupt.</p>
                        </div>
                    </div>
                    <div class="iconbox-item-bg item-3">
                        <div class="iconbox-content-bg ">
                            <i aria-hidden="true" class="icon icon-rocket"></i>
                            <h5>OUR AIM & MISSION</h5>
                            <p>Habitant porta viverra voluptatum facilisi. Dolor mi sit! Recusandae, nisl, habitasse
                                justo architecto viverra volupt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-mission-and-aim">
            <div class="container">
                <div class="about-purpose">
                    <figure class="about-banner-image">
                        <div class="pattern-overlay overlay-circle"></div>
                        <img src="assets/img/eventum-img38.png" alt="">
                    </figure>
                    <div class="mission-and-aim-inside">
                        <div class="about-mission-content">
                            <div class="section-head">
                                <span class="section-sub-title ">INTRODUCTION</span>
                                <h3 class="section-title">
                                    ABOUT OUR WORKSHOP
                                </h3>
                                <p class="section-paragraph">
                                    Consequat sociosqu sem officiis aute ridiculus repellat in aliquip at, metus
                                    sociosqu veritatis cubilia ac soluta? Faucibus ipsam, incidunt cras.
                                </p>
                            </div>
                            <div class="widget-bg faq-widget">
                                <div id="sidebar-tab-content" class="accordion-content" role="tablist">
                                    <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"
                                         aria-labelledby="accordion-A">
                                        <div class="card-header" role="tab" id="qus-A">
                                            <h6 class="mb-0">
                                                <a data-bs-toggle="collapse" href="#collapse-one" aria-expanded="false"
                                                   aria-controls="collapse-one" class="collapsed">
                                                    LEARN FROM THE BEST IN INDUSTRY!
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-one" class="collapse" data-bs-parent="#sidebar-tab-content"
                                             role="tabpanel" aria-labelledby="qus-A">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                                luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-B" class="card tab-pane" role="tabpanel"
                                         aria-labelledby="accordion-B">
                                        <div class="card-header" role="tab" id="qus-B">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two"
                                                   aria-expanded="false" aria-controls="collapse-two">
                                                    OUR SPEAKER EXPERIENCE IN THIS EVENT
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-two" class="collapse" data-bs-parent="#sidebar-tab-content"
                                             role="tabpanel" aria-labelledby="qus-B">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                                luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion-C" class="card tab-pane" role="tabpanel"
                                         aria-labelledby="accordion-C">
                                        <div class="card-header" role="tab" id="qus-C">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-three"
                                                   aria-expanded="false" aria-controls="collapse-three">
                                                    IMPROVE YOUR BUSINESS KOWLEDGE
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-three" class="collapse" data-bs-parent="#sidebar-tab-content"
                                             role="tabpanel" aria-labelledby="qus-C">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                                luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About page html start -->
    </main>
@endsection
