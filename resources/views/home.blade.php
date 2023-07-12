@extends('layouts.main')

@section('content')
    <main id="content" class="site-main">
        <!-- home banner section html start -->
        <section class="home-banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="home-banner-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6 banner-top-img">
                            <figure class="banner-image">
                                <div class="pattern-overlay overlay-circle"></div>
                                <img src="assets/img/eventum-img38.png" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <h3 class="banner-title">ANNUAL BUSINESS</h3>
                                <span class="banner-title middle-title">CONFERENCE</span>
                                <h1 class="banner-title">EVENT 2022</h1>
                                <div class="banner-title-divider-center-white"></div>
                                <p class="banner-paragraph">
                                    Animi ab libero! Blanditiis, luctus morbi eget esse, ridiculus. Quos laborum sunt facere primis magni cumque.
                                </p>
                                <div class="banner-button">
                                    <a href="reservation.html" class="button-round-primary">BOOK RESERVATION</a>
                                    <a href="event-schedule.html" class="button-round-white-transparent">VIEW SCHEDULE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-shape">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M615.2,96.7C240.2,97.8,0,18.9,0,0v100h1000V0C1000,19.2,989.8,96,615.2,96.7z"></path>
                </svg>
            </div>
        </section>
        <!-- home time counter section -->
        <div class="home-count-timmer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="time-counter-wrap">
                            <div class="time-counter" data-date="2023-12-24 23:58:58">
                                <!-- Date Formate Input yyyy-mm-dd hh:mm:ss -->
                                <div class="counter-time">
                                    <span class="counter-days">207</span>
                                    <span class="label-text">Days</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-hours">15</span>
                                    <span class="label-text">Hours</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-minutes">32</span>
                                    <span class="label-text">Minutes</span>
                                </div>
                                <div class="counter-time">
                                    <span class="counter-seconds">53</span>
                                    <span class="label-text">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home about us section -->
        <section class="home-aboutus">
            <div class="container">
                <div class="home-aboutus-inner">
                    <div class="about-gallary">
                        <figure class=" figure-round-border">
                            <img src="assets/img/eventum-img33.jpg" alt="">
                        </figure>
                        <figure class=" figure-round-border">
                            <img src="assets/img/eventum-img35.jpg" alt="">
                        </figure>
                        <figure class=" figure-round-border">
                            <img src="assets/img/eventum-img34.jpg" alt="">
                        </figure>
                    </div>
                    <div class="home-about-right">
                        <div class="about-content">
                            <figure class="about-top-right-img figure-round-border">
                                <img src="assets/img/eventum-img36.jpg" alt="">
                            </figure>
                            <div class="section-head">
                                <span class="section-sub-title ">INTRODUCTION</span>
                                <h3 class="section-title">
                                    KNOW MORE ABOUT OUR GRAND EVENT
                                </h3>
                                <p class="section-paragraph">
                                    Consequat sociosqu sem officiis aute ridiculus repellat in aliquip at, metus sociosqu veritatis cubilia ac soluta? Faucibus ipsam, incidunt cras.
                                </p>
                            </div>
                        </div>
                        <div class="about-detail">
                            <figure class="about-bottom-right-img figure-round-border">
                                <img src="assets/img/eventum-img37.jpg" alt="">
                            </figure>
                            <div class="about-detail-inner">
                                <div class="about-list">
                                    <ul>
                                        <li>
                                            <i aria-hidden="true" class="icon icon-checkmark-circle"></i>
                                            <span>
                                                    Lusto tenetur temporibus repellendus aspernatur, blandit ullam cupidatat quisquam lacinia.
                                                </span>
                                        </li>
                                        <li>
                                            <i aria-hidden="true" class="icon icon-checkmark-circle"></i>
                                            <span>
                                                    Minima mattis laudantium nobis odit explicabo sapien nunc. Reprehenderit molestiae.
                                                </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="author-content">
                                    <figure class="auhtor-signature">
                                        <img src="assets/img/bloggable-img14.png" alt="">
                                    </figure>
                                    <div class="author-detail">
                                        <h6 class="author-name">MD WILLIAM HOUSTON</h6>
                                        <span class="author-prof">Event Organiser</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-about-place">
                    <div class="place-content">
                        <div class="place-icon">
                            <a href="event-detail.html">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                            </a>
                        </div>
                        <div class="place-detail">
                            <h5 class="place-title">WHERE IS THE EVENT :</h5>
                            <span class="place-discription">
                                    221B Baker Street, P.O Box 353 Park Road, San Francisco USA - 215431
                                </span>
                        </div>
                    </div>
                    <div class="place-content place-time">
                        <div class="place-icon">
                            <a href="event-detail.html">
                                <i aria-hidden="true" class="far fa-calendar-alt"></i>
                            </a>
                        </div>
                        <div class="place-detail">
                            <h5 class="place-title">WHEN IS THE EVENT :</h5>
                            <span class="place-discription">
                                    ( Sunday to Wednesday ) 20 January 2022 to 24 January 2022.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home progress section html start -->
        <div class="home-progress-section">
            <div class="container">
                <div class="counter-up-inner">
                    <div class="counter-item-wrap row">
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">220</span>+
                            </div>
                            <div class="Completed">
                                TOTAL JOURNALIST
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">35</span>+
                            </div>
                            <div class="Completed">
                                EVENT SPEAKERS
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">42</span>+
                            </div>
                            <div class="Completed">
                                EVENT SESSIONS
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6 counter-item">
                            <div class="counter-no">
                                <span class="counter">35</span>+
                            </div>
                            <span class="Completed">
                                    SPONSERS & PARTNERS
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home event section html start -->
        <section class="home-event-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-head-white text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">JOIN OUR EVENT</span>
                    <h3 class="section-title">
                        WHY ATTEND OUR EVENT?
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="type-of-event-wrap">
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-communication"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                01.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    IN PERSON NETWORKING </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-idea_generate"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                02.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    BOOST CREATIVITY
                                </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-drink"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                03.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    AFTER PARTY EVENT
                                </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-brain"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                04.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    SPARK CREATIVITY
                                </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-badge"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                05.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    TOP SPEAKERS
                                </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                    <div class="event-type">
                        <div class="event-icon-content">
                                <span class="event-icon">
                                    <a href="event-detail.html">
                                        <i aria-hidden="true" class="icon icon-team2"></i>
                                    </a>
                                </span>
                            <h2 class="event-num">
                                06.
                            </h2>
                        </div>
                        <div class="event-detail">
                            <h5 class="event-title">
                                <a href="event-detail.html">
                                    POTENTIAL CLIENTS
                                </a>
                            </h5>
                            <p>Nemo cubilia non, exercitationem ridiculus modi faucibus nullam animi suspendie in porttitor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home event speaker section html start -->
        <section class="speaker-event-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">EVENT SPEAKERS</span>
                    <h3 class="section-title">
                        OUR EVENT SPEAKERS
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="group-member">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img028.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">WILLIAM HOBB</a></h5>
                                        <span class="author-prof">Chief Executive Officer</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img025.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">ALISON WHITE</a></h5>
                                        <span class="author-prof">Managing Director</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img031.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">GEORGE SMITH</a></h5>
                                        <span class="author-prof">Marketing Officer</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img026.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">JENNY WATT</a></h5>
                                        <span class="author-prof">Executive Officer</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img032.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">MANNY HERDS</a></h5>
                                        <span class="author-prof">Business Supervisor</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img030.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">GARY WILSON</a></h5>
                                        <span class="author-prof">Market Supervisor</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img027.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">SALLY WART</a></h5>
                                        <span class="author-prof">Event Supervisor</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 px-2 px-sm-3">
                            <div class="team-member">
                                <figure class="team-img figure-round-border">
                                    <img src="assets/img/eventum-img029.jpg" alt="">
                                </figure>
                                <div class="team-member-info">
                                    <div class="team-content">
                                        <h5 class="author-name"> <a href="speaker-detail.html">JIMMY SCOTT</a></h5>
                                        <span class="author-prof">Event Speaker</span>
                                    </div>
                                    <div class="social-icon">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.youtube.com/">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-speaker-btn">
                    <a href="speaker-list.html" class="button-round-primary">VIEW ALL SPEAKERS</a>
                </div>
            </div>
        </section>
        <!-- home schedule section html start  -->
        <section class="home-schedule-section">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">SCHEDULE DETAILS</span>
                            <h3 class="section-title">
                                INFORMATION OF EVENT SCHEDULE !
                            </h3>
                            <p class="section-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="time-circle-wrapper">
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>23RD FEB</h5>
                                    <h6>SUNDAY</h6>
                                </div>
                            </div>
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>24TH FEB</h5>
                                    <h6>MONDAY</h6>
                                </div>
                            </div>
                            <div class="time-info">
                                <div class="time-txt">
                                    <h5>25TH FEB</h5>
                                    <h6>TUESDAY</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="routine-content">
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 9:30 to 11:30</span>
                            <h6 class="subject-title">BUSINESS LECTURE</h6>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">BUSINESS MANAGEMENT INFO</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img15.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img16.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 12:00 to 01:30</span>
                            <h6 class="subject-title">MARKET WORKSHOP</h6>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">DIGITAL MARKETING WORKSHOP</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img11.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img12.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 3:00 to 04:00</span>
                            <h6 class="subject-title">TEAM WORKSHOP</h6>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">CULTURE OF CREATIVITY</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img14.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img13.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="routine-detail">
                        <div class="time-detail">
                            <span class="time-title">From 4:30 to 06:00</span>
                            <h6 class="subject-title">MARKETING THEORY</h6>
                        </div>
                        <div class="routine-description">
                            <h5 class="chapter-title">BEST MARKETING STRATEGIES</h5>
                            <p class="ch-paragraph">
                                Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                            </p>
                            <span class="chapter-link">
                                    <a href="event-detail.html">LEARN MORE..</a>
                                </span>
                        </div>
                        <div class="lecture-image">
                            <figure class="author-img">
                                <img src="assets/img/eventum-img11.jpg" alt="">
                            </figure>
                            <figure class="author-img">
                                <img src="assets/img/eventum-img16.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="schedule-btn">
                    <a href="#" class="button-round-primary">VIEW MORE DETAILS</a>
                </div>
            </div>
        </section>
        <!-- home pricing section htm start -->
        <section class="home-pricing-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-head-white text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">PRICING TABLE</span>
                    <h3 class="section-title">
                        GET YOUR TICKET !!
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="pricing-table-inner">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 col-sm-6 ">
                            <div class="pricing-item">
                                <div class="pricing-detail">
                                    <div class="pricing-head">
                                        <span class="pricing-title">EARLY BIRD</span>
                                        <h2 class="cost">$25</h2>
                                        <p class="price-info">
                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.
                                        </p>
                                        <span class="tax-info">All prices exclude 25% VAT!</span>
                                    </div>
                                    <div class="skill-container">
                                        <div class="skill-wrapper">
                                            <div class="progress-wrapper">
                                                <div class="ab-progress example" data-progress data-value="65%"></div>
                                            </div>
                                            <span class="skill-titile">( 325 / 500 ) Available seat</span>
                                        </div>
                                    </div>
                                    <div class="ticket-btn">
                                        <a href="reservation.html" class="button-round-primary-transparent">BUY TICKET</a>
                                    </div>
                                </div>
                                <figure class="bottom-figure">
                                    <img src="assets/img/eventum-img41.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 middle-price">
                            <div class="pricing-item">
                                <div class="discount-offer">
                                    <h6>EXCLUSIVE OFFER!</h6>
                                </div>
                                <div class="pricing-detail">
                                    <div class="pricing-head">
                                        <span class="pricing-title">GOLD</span>
                                        <h2 class="cost">$75</h2>
                                        <p class="price-info">
                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.
                                        </p>
                                        <span class="tax-info">All prices exclude 25% VAT!</span>
                                    </div>
                                    <div class="skill-container">
                                        <div class="skill-wrapper">
                                            <div class="progress-wrapper">
                                                <div class="ab-progress example" data-progress data-value="80%"></div>
                                            </div>
                                            <span class="skill-titile">( 200 / 250 ) Available seat</span>
                                        </div>
                                    </div>
                                    <div class="ticket-btn">
                                        <a href="reservation.html" class="button-round-primary">BUY TICKET</a>
                                    </div>
                                </div>
                                <figure class="bottom-figure">
                                    <img src="assets/img/eventum-img41.png" alt="">
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="pricing-item">
                                <div class="pricing-detail">
                                    <div class="pricing-head">
                                        <span class="pricing-title">PLATINUM</span>
                                        <h2 class="cost">$44</h2>
                                        <p class="price-info">
                                            Consectetur wisi voluptatem nostra, magnis occaecat dictum, aenean quo.
                                        </p>
                                        <span class="tax-info">All prices exclude 25% VAT!</span>
                                    </div>
                                    <div class="skill-container">
                                        <div class="skill-wrapper">
                                            <div class="progress-wrapper">
                                                <div class="ab-progress example" data-progress data-value="65%"></div>
                                            </div>
                                            <span class="skill-titile">( 352 / 400 ) Available seat</span>
                                        </div>
                                    </div>
                                    <div class="ticket-btn">
                                        <a href="reservation.html" class="button-round-primary-transparent">BUY TICKET</a>
                                    </div>
                                </div>
                                <figure class="bottom-figure">
                                    <img src="assets/img/eventum-img41.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home gallery section html start -->
        <section class="home-gallery">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <span class="section-sub-title ">EVENT GALLERY</span>
                            <h3 class="section-title">
                                COLLECTION OF IMAGES FROM LAST YEAR!!
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-head">
                            <p class="section-paragraph">
                                Magnam corporis rem commodi dolore possimus varius justo litora ipsum suspendisse dignissimos. Odit, dolor, minima. Diam facilisis dignissimos metus, id delectus fuga doloribus qui, explicabo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gallery-container">
                    <div class="row grid">
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img6.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img17.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img19.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img019.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img8.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img23.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img10.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img20.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img24.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img24.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img9.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img21.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img7.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img22.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="single-gallery grid-item col-lg-3 col-md-4 col-sm-6">
                            <figure class="gallery-img">
                                <a href="assets/img/eventum-img18.jpg" data-fancybox="gallery">
                                    <img src="assets/img/eventum-img18.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home testimonial section html start -->
        <section class="home-testimonial">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">OUR TESTIMONIAL</span>
                    <h3 class="section-title">
                        WHAT OUR VISITOR'S SAY ?
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="row">
                    <div class="testimonial-slider">
                        <div class="client-content">
                            <figure class="client-img">
                                <img src="assets/img/eventum-img16.jpg" alt="">
                            </figure>
                            <div class="client-detail">
                                <p class="client-txt">
                                    "Habitant facilisis proident! Modi irure, modi blanditiis culpa! Soluta magnam maiores augue rutrum quia accumsan torquent venenatis. Facilis vel harum aspernatur orci, sit eleifend praesent, cupiditate, dignissimos sit proident, possimus proident distinctio wisi, odio quo."
                                </p>
                                <h5 class="client-name">
                                    ALITA SUNDERLAND
                                </h5>
                                <span class="client-prof">
                                        VISITOR
                                    </span>
                            </div>
                        </div>
                        <div class="client-content">
                            <figure class="client-img">
                                <img src="assets/img/eventum-img15.jpg" alt="">
                            </figure>
                            <div class="client-detail">
                                <p class="client-txt">
                                    "Habitant facilisis proident! Modi irure, modi blanditiis culpa! Soluta magnam maiores augue rutrum quia accumsan torquent venenatis. Facilis vel harum aspernatur orci, sit eleifend praesent, cupiditate, dignissimos sit proident, possimus proident distinctio wisi, odio quo."
                                </p>
                                <h5 class="client-name">
                                    GEORGE WILLINGTON
                                </h5>
                                <span class="client-prof">
                                        VISITOR
                                    </span>
                            </div>
                        </div>
                        <div class="client-content">
                            <figure class="client-img">
                                <img src="assets/img/eventum-img14.jpg" alt="">
                            </figure>
                            <div class="client-detail">
                                <p class="client-txt">
                                    "Habitant facilisis proident! Modi irure, modi blanditiis culpa! Soluta magnam maiores augue rutrum quia accumsan torquent venenatis. Facilis vel harum aspernatur orci, sit eleifend praesent, cupiditate, dignissimos sit proident, possimus proident distinctio wisi, odio quo."
                                </p>
                                <h5 class="client-name">
                                    ALISON WHITE
                                </h5>
                                <span class="client-prof">
                                        VISITOR
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home partner section html start -->
        <section class="home-partner">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-head-white text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">PRICING TABLE</span>
                    <h3 class="section-title">
                        GET YOUR TICKET !!
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="inner-partner-wrapper">
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client01.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client02.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client03.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client04.png" alt="">
                    </figure>
                    <figure class="partner-logo grid-middle">
                        <img src="assets/img/eventum-client05.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client06.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client07.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client08.png" alt="">
                    </figure>
                    <figure class="partner-logo">
                        <img src="assets/img/eventum-client09.png" alt="">
                    </figure>
                    <figure class="partner-logo grid-middle">
                        <img src="assets/img/eventum-client010.png" alt="">
                    </figure>
                </div>
                <div class="sponser-btn">
                    <a href="contact.html" class="button-round-primary">BECOME A SPONSER</a>
                </div>
            </div>
        </section>
        <!-- home-blog section-html start  -->
        <section class="home-blog-section">
            <div class="container">
                <div class="section-head text-center col-lg-8 offset-lg-2">
                    <span class="section-sub-title ">RECENT BLOG</span>
                    <h3 class="section-title">
                        LATEST NEWS AND BLOG
                    </h3>
                    <p class="section-paragraph">
                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                    </p>
                </div>
                <div class="inner-blog-wrapper">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="assets/img/eventum-img42.jpg" alt="">
                        </figure>
                        <div class="entry-content">
                            <h5>
                                <a href="single-blog.html">MARKETING AND BUSINESS MANAGING LECTURE</a>
                            </h5>
                            <div class="entry-meta">
                                    <span class="byline">
                                        <a href="blog-archive.html">Demoteam</a>
                                    </span>
                                <span class="posted-on">
                                        <a href="blog-archive.html">Aug 17, 2023</a>
                                    </span>
                                <span class="comment">
                                        <a href="blog-archive.html">No Comments</a>
                                    </span>
                            </div>
                            <span class="blog-link">
                                    <a href="single-blog.html">READ MORE..</a>
                                </span>
                        </div>
                    </article>
                    <article class="post">
                        <figure class="feature-image">
                            <img src="assets/img/eventum-img43.jpg" alt="">
                        </figure>
                        <div class="entry-content">
                            <h5>
                                <a href="single-blog.html">ICC WALES REPORTS RECORD BREAKING SUMMER</a>
                            </h5>
                            <div class="entry-meta">
                                    <span class="byline">
                                        <a href="blog-archive.html">Demoteam</a>
                                    </span>
                                <span class="posted-on">
                                        <a href="blog-archive.html">Aug 17, 2023</a>
                                    </span>
                                <span class="comment">
                                        <a href="blog-archive.html">No Comments</a>
                                    </span>
                            </div>
                            <span class="blog-link">
                                    <a href="single-blog.html">READ MORE..</a>
                                </span>
                        </div>
                    </article>
                    <article class="post">
                        <figure class="feature-image">
                            <img src="assets/img/eventum-img44.jpg" alt="">
                        </figure>
                        <div class="entry-content">
                            <h5>
                                <a href="single-blog.html">EVENT TECHNOLOGY AWARD FOR PEOPLE CHOICE</a>
                            </h5>
                            <div class="entry-meta">
                                    <span class="byline">
                                        <a href="blog-archive.html">Demoteam</a>
                                    </span>
                                <span class="posted-on">
                                        <a href="blog-archive.html">Aug 17, 2023</a>
                                    </span>
                                <span class="comment">
                                        <a href="blog-archive.html">No Comments</a>
                                    </span>
                            </div>
                            <span class="blog-link">
                                    <a href="single-blog.html">READ MORE..</a>
                                </span>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- home contct us section html start -->
        <section class="home-contact-section">
            <div class="container">
                <div class="contact-inner-content">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="contact-form row">
                                <p class="col-sm-6">
                                    <input type="text" name="name" placeholder="Your Name..">
                                </p>
                                <p class="col-sm-6">
                                    <input type="email" name="email" placeholder="Your Email..">
                                </p>
                                <p class="width-full">
                                    <textarea rows="9" placeholder="Enter Message.."></textarea>
                                </p>
                                <p class="width-full">
                                    <input type="submit" name="submit" value="SEND MESSAGE">
                                </p>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-detail">
                                <div class="section-head">
                                    <span class="section-sub-title ">GET IN TOUCH</span>
                                    <h3 class="section-title">
                                        CONTACT US FOR FURTHER INFORMATION
                                    </h3>
                                    <p class="section-paragraph">
                                        Quam amet tristique adipisicing incididunt arcu, excepturi molestie turpis deserunt ducimus malesuada minus mauris veniam.
                                    </p>
                                </div>
                                <div class="contact-location-inner">
                                    <div class="contact-location-item">
                                        <figure class="contact-icon">
                                            <i aria-hidden="true" class="icon icon-apartment1"></i>
                                        </figure>
                                        <div class="contact-place-content">
                                            <h5>EVENT VENUE :</h5>
                                            <span>
                                                    Hollywood Banquet Hall , Riverside Building Area
                                                </span>
                                        </div>
                                    </div>
                                    <div class="contact-location-item">
                                        <figure class="contact-icon">
                                            <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                        </figure>
                                        <div class="contact-place-content">
                                            <h5>LOCATION ADDRESS :</h5>
                                            <span>
                                                    5214 Sunset Blvd, Los Angeles CA 90027, USA
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-image-content">
                    <figure class="contact-img">
                        <img src="assets/img/eventum-img4.jpg" alt="">
                        <div class="facility-wrapper">
                            <div class="facility-content">
                                <h5 class="facility-title">
                                    Hollywood Banquet Hall
                                </h5>
                                <p class="facility-info">
                                    Magni nesciunt doloribus venenatis esse consectetu.
                                </p>
                                <a href="contact.html" class="button-round-primary">GET DIRECTION</a>
                            </div>
                        </div>
                    </figure>
                    <figure class="contact-img">
                        <img src="assets/img/eventum-img5.jpg" alt="">
                        <div class="facility-wrapper">
                            <div class="facility-content">
                                <h5 class="facility-title">
                                    Riverside Building Area
                                </h5>
                                <p class="facility-info">
                                    Magni nesciunt doloribus venenatis esse consectetu.
                                </p>
                                <a href="contact.html" class="button-round-primary">GET DIRECTION</a>
                            </div>
                        </div>
                    </figure>
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
