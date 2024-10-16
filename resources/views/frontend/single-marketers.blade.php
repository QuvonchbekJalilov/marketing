@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')

<!-- Content -->
<main class="main">
    <section class="section-box">
        <div class="box-head-single box-head-single-candidate">
            <div class="container container-single-marketers" style="width: 75%;">
                <div class="heading-image-rd online">
                    <a href="#">
                        <figure><img alt="jobhub" src="/assets/imgs/img-candidate.png"></figure>
                    </a>
                </div>
                <div class="heading-main-info">
                    <h4>Danica Lewis</h4>
                    <div class="head-info-profile">
                        <span class="text-small mr-20"><i class="fi-rr-marker text-mutted"></i> Chicago, US</span>
                        <span class="text-small mr-20"><i class="fi-rr-briefcase text-mutted"></i> Ui/UX design</span>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">App</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Digital</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-12" style="margin: 0 auto;">
                    <div class="links-box"
                        style="display: flex; border-bottom: 1px solid #D1D3D4; margin: 0 auto 40px; justify-content: center;">
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding:10px 20px; color: black;"><a
                                href="#biography"><i class="fa-regular fa-file"
                                    style="margin-right: 7px;"></i>Biography</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 20px; color: black;"><a
                                href="#portfolio"><i class="fa-solid fa-paintbrush"
                                    style="margin-right: 7px;"></i>Portfolio</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 20px; color: black;"><a
                                href="#experience"><i class="fa-solid fa-briefcase" style="margin-right: 7px;"></i>Experience</a>
                        </div>

                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 20px; color: black;"><a
                                href="#education"><i class="fa-solid fa-book"
                                    style="margin-right: 7px;"></i>Education</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 20px; color: black;"><a
                                href="#sertificates"><i class="fa-solid fa-certificate" style="margin-right: 7px;"></i>Sertificates</a>
                        </div>
                          <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 20px; color: black;"><a
                                href="#awards"><i class="fa-solid fa-award" style="margin-right: 7px;"></i>Awards</a>
                        </div>
                        <div class="link" style="padding: 10px 20px; color: black;"><a href="#reviews"><i
                                    class="fa-regular fa-star" style="margin-right: 7px;"></i>Reviews</a></div>
                        <!-- <div class="link" style="padding: 10px 28px;"><a href="#contact"><i class="fa-regular fa-envelope"
                                    style="margin-right: 7px;"></i>Contact</a></div> -->
                    </div>
                    <div class="temp-content-single">
                        <section id="biography">
                            <h4 class="mb-20">Biography</h4>
                            <p>
                                Hi, I am <strong>Danica Lewis,</strong> a professional Ui/Ux and Graphic designer with
                                4+
                                years of experience. I can design website ui, app ui, dashboard ui, thank you card,
                                logo,
                                flyer, brochure, banner, etc. If you need any help just give me a knock. Looking forward
                                to
                                working with you!
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates
                                nemo
                                blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae
                                mollitia!
                            </p>
                            <div class="divider"></div>
                        </section>
                        <section id="portfolio" class="portfolios section" style="margin: 30px 0;">
                            <div class="box-list-news" style=" cursor: pointer;">
                                <h2 class="title" style="font-size: 30px; margin-bottom: 15px;">Portfolio</h2>
                                <div class="row portfolio-padding">
                                    <div id="card" class="col-lg-4 col-md-6">
                                        <div class="card-news-style-2">
                                            <div class="card-image">
                                                <img src="/assets/imgs/page/blog/news.png" alt="Nivia">
                                            </div>
                                            <div class="card-info">
                                            <div>
                                                <h6 style="margin-bottom: 10px;">Amona Safii</h6>
                                            </div>
                                                <div class="card-meta">
                                                    <span class="btn btn-tag-sm">Branding & Positioning</span>
                                                    <span class="date-post">Mar 2024</span>
                                                </div>
                                                <div class="card-title">
                                                    <p class="link-new">
                                                        Project made for Amona Safii in the Clothing & Accessories
                                                        industry for
                                                        a B2C audience in 2024.
                                                    </p>
                                                </div>
                                                <div class="card-more">
                                                    <p class="btn btn-learmore-2">
                                                        Read More
                                                        <svg width="13" height="13" viewbox="0 0 13 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_599_4830)">
                                                                <path
                                                                    d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z"
                                                                    fill=""></path>
                                                            </g>
                                                            <defs>
                                                                <clippath id="clip0_599_4830">
                                                                    <rect width="13" height="13" fill="white">
                                                                    </rect>
                                                                </clippath>
                                                            </defs>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<div id="card" class="col-lg-4 col-md-6">
                                        <div class="card-news-style-2">
                                            <div class="card-image">
                                                <img src="/assets/imgs/page/blog/news.png" alt="Nivia">
                                            </div>
                                            <div class="card-info">
                                            <div>
                                                <h6 style="margin-bottom: 10px;">Amona Safii</h6>
                                            </div>
                                                <div class="card-meta">
                                                    <span class="btn btn-tag-sm">Branding & Positioning</span>
                                                    <span class="date-post">Mar 2024</span>
                                                </div>
                                                <div class="card-title">
                                                    <p class="link-new">
                                                        Project made for Amona Safii in the Clothing & Accessories
                                                        industry for
                                                        a B2C audience in 2024.
                                                    </p>
                                                </div>
                                                <div class="card-more">
                                                    <p class="btn btn-learmore-2">
                                                        Read More
                                                        <svg width="13" height="13" viewbox="0 0 13 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_599_4830)">
                                                                <path
                                                                    d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z"
                                                                    fill=""></path>
                                                            </g>
                                                            <defs>
                                                                <clippath id="clip0_599_4830">
                                                                    <rect width="13" height="13" fill="white">
                                                                    </rect>
                                                                </clippath>
                                                            </defs>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="card" class="col-lg-4 col-md-6">
                                        <div class="card-news-style-2">
                                            <div class="card-image">
                                                <img src="/assets/imgs/page/blog/news.png" alt="Nivia">
                                            </div>
                                            <div class="card-info">
                                            <div>
                                                <h6 style="margin-bottom: 10px;">Amona Safii</h6>
                                            </div>
                                                <div class="card-meta">
                                                    <span class="btn btn-tag-sm">Branding & Positioning</span>
                                                    <span class="date-post">Mar 2024</span>
                                                </div>
                                                <div class="card-title">
                                                    <p class="link-new">
                                                        Project made for Amona Safii in the Clothing & Accessories
                                                        industry for
                                                        a B2C audience in 2024.
                                                    </p>
                                                </div>
                                                <div class="card-more">
                                                    <p class="btn btn-learmore-2">
                                                        Read More
                                                        <svg width="13" height="13" viewbox="0 0 13 13" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_599_4830)">
                                                                <path
                                                                    d="M10.6537 3.8149L1.71801 12.7506L0.25 11.2826L9.18469 2.3469H1.31V0.270508H12.7301V11.6906H10.6537V3.8149Z"
                                                                    fill=""></path>
                                                            </g>
                                                            <defs>
                                                                <clippath id="clip0_599_4830">
                                                                    <rect width="13" height="13" fill="white">
                                                                    </rect>
                                                                </clippath>
                                                            </defs>
                                                        </svg>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="imageModal" class="image-modal-single">
                                <span class="image-modal-close">&times;</span>
                                <img class="image-modal-content" id="imgInImageModal">
                                <a class="image-modal-prev">&#10094;</a>
                                <a class="image-modal-next">&#10095;</a>
                            </div>
                            <div id="modal" class="modal-single" style="display: none;">
                                <div class="modal-content">
                                    <div class="album">
                                        <div class="responsive-container-block bg">
                                            <div class="responsive-container-block img-cont">
                                                <img class="img img-small"
                                                    src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/PP5.4.svg">
                                                <img class="img img-small" src="/assets/imgs/image5.jpg">
                                            </div>
                                            <div class="responsive-container-block img-cont">
                                                <img class="img img-big img-last" src="/assets/imgs/image3.jpg">
                                            </div>
                                            <div class="responsive-container-block img-cont">
                                                <img class="img img-small" src="/assets/imgs/image2.jpg">
                                                <img class="img img-small" src="/assets/imgs/image1.jpg">
                                            </div>
                                        </div>


                                    </div>

                                    <style>
                                        .img-cont {
                                            width: 33%;
                                            height: 100%;
                                        }

                                        .img-cont img {
                                            object-fit: cover;
                                    </style>
                                    <div class="modal-description" style="display: flex; gap: 30px;">
                                        <div class="modal-description-left" style="width: 60%;">
                                            <h4>Description</h4>
                                            <p>Harmony of Tradition and Innovation: The logo was created using
                                                simplicity, and
                                                the brand name also utilizes the word 'oyna' (glass). Through the
                                                brand book,
                                                the company emphasizes that its products attract users not only
                                                through quality
                                                but also through design and aesthetic aspects. The branding strategy
                                                is based on
                                                the principles of transparency and reliability, which give customers
                                                confidence
                                                in the quality of the products.</p>
                                        </div>
                                        <div class="modal-description-right" style="width: 40%;">
                                            <div class="sidebar">
                                                <div class="box-sidebar-rounded">
                                                    <div class="sidebar-content">
                                                        <div class="item-line">
                                                            <div class="text-date-post text-16-bold">Client</div>
                                                            <p class="text-date-post-value text-md neutral-500">
                                                                AYNEK</p>
                                                        </div>
                                                        <div class="item-line">
                                                            <div class="text-date-expire text-16-bold">Sector</div>
                                                            <p class="text-date-post-value text-md neutral-500">Home
                                                                Services
                                                            </p>
                                                        </div>
                                                        <div class="item-line">
                                                            <div class="text-location text-16-bold">Location:</div>
                                                            <p class="text-date-post-value text-md neutral-500">
                                                                Tashkent,
                                                                Uzbekistan</p>
                                                        </div>
                                                        <div class="item-line">
                                                            <div class="text-salary text-16-bold">Audience</div>
                                                            <p class="text-date-post-value text-md neutral-500">B2B,
                                                                B2C</p>
                                                        </div>
                                                        <div class="item-line"
                                                            style="display: flex; flex-direction: column;">
                                                            <div class="text-date-lang text-16-bold">Expertise</div>
                                                            <p class="text-date-post-value text-md neutral-500">
                                                                Branding &
                                                                Positioning</p>
                                                        </div>
                                                        <div class="item-line">
                                                            <div class="text-date-founded text-16-bold">Date</div>
                                                            <p class="text-date-post-value text-md neutral-500">Jan
                                                                2023 -
                                                                ongoing</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <span id="image-modal-close-footer" class="image-modal-close-footer">&times;</span>
                            </div>
                            <div class="divider"></div>
                        </section>
                        <section id="experience">
                            <h4 class="mb-20 mt-25">Work Experience</h4>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Design</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        NY, UK<br />
                                        Jan 2021 — Present
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Accounting</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        pxdraft Ltd, UK<br>
                                        Jan 2018 — Dec 2021
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Creative</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        AT Studio, UK<br>
                                        Jan 2017 — May 2017
                                    </span>
                                </div>

                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Social</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        NY, UK<br />
                                        Jan 2021 — Present
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Search</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        NY, UK<br />
                                        Jan 2021 — Present
                                    </span>
                                </div>
                                <div class="col-md-4 col-sm-6 col-12 mb-10">
                                    <strong class="temp-text-md-bold">Behance Video</strong>
                                    <span class="dis-block text-muted text-md-lh24">
                                        NY, UK<br />
                                        Jan 2021 — Present
                                    </span>
                                </div>
                            </div>
                            <div class="divider"></div>
                        </section>

                        <section id="education">
                            <h4 class="mt-30 mb-30">Education</h4>
                            <div class="row" id='education'>
                                <div class="col-lg-6">
                                    <ul>
                                        <li>Cambridge University(2001-2004)</li>
                                        <li>Brads University(2004-2006)</li>
                                        <li>Cambridge University(2006-2010)</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-muted lh-32">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga
                                        eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque
                                    </p>
                                </div>
                                <div class="divider"></div>
                            </div>
                        </section>
                        <section id="sertificates">
                                <h4 class="mb-20 mt-25">Sertificates</h4>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Design</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Accounting</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            pxdraft Ltd, UK<br>
                                            Jan 2018 — Dec 2021
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Creative</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            AT Studio, UK<br>
                                            Jan 2017 — May 2017
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Social</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Search</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="temp-text-md-bold">Behance Video</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                </div>
                                <div class="divider"></div>
                        </section>
                        <section id="awards" class="awards-section" style="margin: 30px 15px 0;">
                            <div class="row">
                                <h2 class="title" style="font-size: 30px; margin-bottom: 15px; padding: 0;">Awards
                                </h2>
                                <div class="col-lg-4 col-sm-6" style="padding:0;">
                                    <div class="card-features-5">
                                        <div class="card-image"><i class="fa-solid fa-award"></i></div>

                                        <div class="card-info">
                                            <h6 style="text-transform: uppercase;">Brend of the Year</h6>
                                            <p class="text-sm neutral-500">2023-5-1</p>
                                            <div style="margin-top: 10px ;" class="card-meta"><a class="btn btn-tag-sm"
                                                    href="blog-post.html">Marketing</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        </section>

                        <section id="reviews" class="reviews-section" style="margin: 30px 15px 0px !important;">
                            <h2 class="title" style="font-size: 30px; margin-bottom: 15px; padding: 0;">Reviews</h2>
                            <div class="row detail-term">
                                <div class="col-lg-12" style="padding:0;">
                                    <div class="list-change-log">
                                        <div class="item-log">
                                            <div class="date-log">
                                                <span style="padding: 15px; margin-bottom: 25px"
                                                    class="btn btn-brand-4-sm">DA</span>
                                                <div style="font-weight: bold">Davron</div>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <div style="font-weight: bold">Services</div>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <div style="font-weight: bold">Sectoer</div>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <div style="font-weight: bold">Team</div>
                                                <p>50-150</p>
                                            </div>
                                            <div class="line-log"></div>
                                            <div style="display: flex; justify-content: space-between" class="info-log">
                                                <div style="width: 100%" class="">
                                                    <h5 style="font-size: 18px; ">What was the objective behind your
                                                        collaboration?</h5>
                                                    <div id="text-container" style="margin-bottom: 20px;">
                                                        <div id="text-content" class="text-md neutral-500"
                                                            style="line-height: 1.5; margin-top: 15px">
                                                            <div class="truncate-text" id="text-content-full-1">
                                                                We collaborated with DORA to develop a comprehensive
                                                                website for
                                                                our window and door manufacturing company. Our main
                                                                objective
                                                                was to create a user-friendly platform that provides
                                                                detailed
                                                                information about our products and services, as well
                                                                as
                                                                facilitate customer interactions through features
                                                                like search
                                                                engines, product series information, company
                                                                details, a customer
                                                                calculator, and booking services.
                                                            </div>
                                                        </div>
                                                        <span data-target="text-content-full-1"
                                                            class="show-more-button">see
                                                            more</span>
                                                    </div>
                                                    <h5 style="font-size: 18px;">What did you enjoy the most during
                                                        your
                                                        collaboration?</h5>
                                                    <div id="text-container" style="margin-bottom: 20px;">
                                                        <div id="text-content" class="text-md neutral-500"
                                                            style="line-height: 1.5; margin-top: 15px">
                                                            <div class="truncate-text" id="text-content-full-2">
                                                                The aspect we enjoyed the most during our
                                                                collaboration with
                                                                DORA was their dedication to understanding our
                                                                business needs
                                                                and translating them into a functional and
                                                                aesthetically
                                                                pleasing website. Their attention to detail and
                                                                commitment to
                                                                quality were evident in every step of the project,
                                                                from initial
                                                                planning to final execution.
                                                            </div>
                                                        </div>
                                                        <span data-target="text-content-full-2"
                                                            class="show-more-button">see
                                                            more</span>
                                                    </div>
                                                    <h5 style="font-size: 18px;">Are there any areas for
                                                        improvements?</h5>
                                                    <div id="text-container" style="margin-bottom: 20px;">
                                                        <div id="text-content" class="text-md neutral-500"
                                                            style="line-height: 1.5; margin-top: 15px">
                                                            <div class="truncate-text" id="text-content-full-3">
                                                                DORAprovided us with a complete website development
                                                                service,
                                                                which included the implementation of search engines,
                                                                detailed
                                                                product information for our window and door series,
                                                                comprehensive company details, a customer
                                                                calculator, and
                                                                booking services.
                                                            </div>
                                                        </div>
                                                        <span data-target="text-content-full-3"
                                                            class="show-more-button">see
                                                            more</span>
                                                    </div>
                                                    <div class="stars stars-responsive">
                                                        <div>
                                                            <div class="" style="margin-top: 20px;">Budget</div>
                                                            <div class="card-rates">
                                                                <img src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="" style="margin-top: 20px;">Quality</div>
                                                            <div class="card-rates">
                                                                <img src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="" style="margin-top: 20px;">Schedule</div>
                                                            <div class="card-rates">
                                                                <img src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" />

                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="" style="margin-top: 20px;">Collaboration
                                                            </div>
                                                            <div class="card-rates">
                                                                <img src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" /><img
                                                                    src="/assets/imgs/template/icons/star.svg"
                                                                    alt="Nivia" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="review-link-box"
                                style="border: 1px solid #ECEEF2; border-radius: 16px; padding: 20px; margin-top: 20px; display:flex; align-items: center;justify-content: space-between;">
                                <div style="display: flex; align-items: center; gap: 15px;">
                                    <i style="font-size: 24px;" class="fa-regular fa-pen-to-square"></i>
                                    <div>
                                        <h3 style="font-size:22px;">Worked with comtogether?</h3>
                                        <p style="margin-bottom: 0;">Share your experience with us.</p>
                                    </div>
                                </div>
                                <a href="{{route('singleReviews')}}"><button class="btn btn-brand-4-medium"
                                        type="submit">Write a review</button></a>


                            </div>
                        </section>


                    </div>



                </div>

            </div>
        </div>
    </section>

    <section class="section-box mt-50 mb-60">
        <div class="container">
            <div class="box-newsletter">
                <h5 class="text-md-newsletter">Sign up to get</h5>
                <h6 class="text-lg-newsletter">the latest jobs</h6>
                <div class="box-form-newsletter mt-30">
                    <form class="form-newsletter">
                        <input type="text" class="input-newsletter" value=""
                            placeholder="contact.alithemes@gmail.com" />
                        <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="box-newsletter-bottom">
                <div class="newsletter-bottom"></div>
            </div>
        </div>
    </section>
</main>
<!-- End Content -->

@endsection
