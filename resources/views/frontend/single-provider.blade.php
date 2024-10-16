@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')
<style>
    .more-text {
        display: none;
    }

    .show-more-button {
        cursor: pointer;
        color: blue;
        text-decoration: underline;
    }
</style>

<main class="main">
    <section class="section-box">
        <div class="box-head-single box-head-single-candidate">
            <div class="container">
                <div class="heading-image-rd online">
                    <a href="#">
                        <figure><img alt="jobhub" src="assets/imgs/logo-dora.webp"></figure>
                    </a>
                </div>
                <div class="heading-main-info">
                    <h4>DORA</h4>
                    <div class="head-info-profile">
                        <span class="text-small mr-20"><i class="fi-rr-marker text-mutted"></i> Tashkent,
                            Uzbekistan</span>
                        <span class="text-small"><i class="fi-rr-clock text-mutted"></i> Since 2019</span>
                        <div class="rate-reviews-small">

                            <span><img src="/assets/imgs/template/icons/star.svg" alt="jobhub" /></span>
                            <span><img src="assets/imgs/template/icons/star.svg" alt="jobhub" /></span>
                            <span><img src="assets/imgs/template/icons/star.svg" alt="jobhub" /></span>
                            <span><img src="assets/imgs/template/icons/star.svg" alt="jobhub" /></span>
                            <span><img src="assets/imgs/template/icons/star.svg" alt="jobhub" /></span>
                            <span class="ml-10 text-muted text-small">(5.0)</span>
                        </div>
                        <div class="row align-items-end">
                        <div class="col-lg-6 mt-3">
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Social Media</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Marketing</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Email Marketing</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Website Creation</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Branding & Positioning</a>
                            <a href="#" class="btn btn-tags-sm mb-10 mr-5">Web Application</a>
                        </div>


                    </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="section-box">
        <div class="container">
            <div class="row" style="display:flex;">
                <div class="col-sm-12 col-lg-8">

                    <div class="links-box"
                        style="display: flex; border-bottom: 1px solid #D1D3D4; margin: 0 auto 40px; justify-content: start;">
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding:10px 28px; color: black;"><a
                                href="#1"><i class="fa-regular fa-file" style="margin-right: 7px;"></i>About</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#services"><i class="fa-solid fa-paintbrush" style="margin-right: 7px;"></i>Services</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#portfolio"><i class="fa-regular fa-images" style="margin-right: 7px;"></i>Portfolio</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#team"><i class="fa-solid fa-users" style="margin-right: 7px;"></i>Team</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#awards"><i class="fa-solid fa-award" style="margin-right: 7px;"></i>Awards</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#reviews"><i class="fa-regular fa-star" style="margin-right: 7px;"></i>Reviews</a></div>
                        <div class="link" style="padding: 10px 28px;"><a href="#contact"><i class="fa-regular fa-envelope"
                                    style="margin-right: 7px;"></i>Contact</a></div>
                    </div>

                    <section id="1">

                        <div class="content-single" >
                            <h4 class="mb-20">About Company</h4>
                            <p style="margin-bottom: 40px;">
                                Over the period of its existence, the DORA team, through its work and its
                                achievements, has
                                gained the trust of large companies in the field of plastic windows, furniture
                                manufacturing, pharmaceuticals in Uzbekistan, China and CIS countries.


                                During this period, cooperation with more than 200 companies has been established,
                                and the
                                number of partners is growing every day!


                                Our mission is to increase the sales volume of our customers and contribute to their
                                growth.
                            </p>
                        </div>

                    </section>




                    <section id="services" class="services-section">
                        <div class="box-faqs-inner-4">
                            <h2 class="title" style="font-size: 30px; margin-bottom: 15px;">Services</h2>
                            <div class="accordion accordion-flush accordion-style-2" id="accordionFAQS"
                                style="border: 1px solid #D1D3D4; border-radius: 16px">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne" style="display:flex; justify-content: space-between;">
                                            Social Media
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                 <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body">
                                            <h6 style="margin-bottom: 15px;">Description</h6>
                                            <div class="truncate-text" id="text-content-full-5" >
                                                <p>At DORA, we specialize in providing comprehensive social
                                                    media services
                                                    that elevate your brand's online presence. Our team excels
                                                    in creating
                                                    targeted social media marketing campaigns that drive
                                                    engagement and
                                                    deliver measurable results. With expertise in social
                                                    marketing and video
                                                    production, we craft compelling content that resonates with
                                                    your
                                                    audience.</p>
                                                <p>We are proficient in using Facebook Business Manager to
                                                    optimize your
                                                    advertising efforts and achieve your marketing goals. Our
                                                    social media
                                                    planning services ensure that your content is strategically
                                                    scheduled
                                                    and aligned with your overall business objectives.</p>
                                                <p>In addition to creating captivating social media ads, we
                                                    offer community
                                                    management to build and maintain a loyal follower base. Our
                                                    posts design
                                                    guidelines guarantee consistency and visual appeal across
                                                    all your
                                                    social media platforms.</p>
                                                <p>Through our social presence audits, we provide detailed
                                                    insights into
                                                    your current performance and actionable recommendations for
                                                    improvement.
                                                    Our content creation services cover a wide range of formats,
                                                    ensuring
                                                    that your social media channels are always fresh and
                                                    engaging.</p>
                                                <p>Choose DORA for a strategic, results-driven approach to
                                                    social media
                                                    marketing that amplifies your brand's voice and reaches your
                                                    target
                                                    audience effectively.</p>
                                            </div>
                                            <button data-target="text-content-full-5" class="show-more-button"
                                                style="border: none; background-color: transparent; padding: 0;">see
                                                more</button>

                                            <div class="skills-box" style="margin-top: 25px;">
                                                <h6 style="margin-bottom: 15px;">Skills</h6>
                                                <div class="box-tags-sidebar">
                                                    <p class="btn btn-neutral-100">Social Media Planning</p>
                                                    <p class="btn btn-neutral-100">Facebook Business Manager</p>
                                                    <p class="btn btn-neutral-100">Social Marketing</p>
                                                    <p class="btn btn-neutral-100">Social Media Marketing</p>
                                                    <p class="btn btn-neutral-100">Social Media Video Production
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="work-box" style="margin-top: 25px;">
                                                <h6 style="margin-bottom: 15px; padding: 5px;">Works</h6>
                                                <div class="box-list-jobs">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="card-job">
                                                                <div class="card-head"
                                                                    style="display: flex; flex-direction: column; align-items: flex-start;">
                                                                    <div
                                                                        style="width: 100%; height: 200px; border-radius: 8px; margin-bottom: 15px;">
                                                                        <img style=" width: 100%; object-fit: cover; height: 100%;border-radius: 8px;"
                                                                            src="../assets/imgs/page/job/msma.png"
                                                                            alt="">
                                                                    </div>
                                                                        <div style="display: flex; width: 100%; justify-content: space-between;">
                                                                        <div class="card-head-left">
                                                                            <a href="#">
                                                                                <h5 style="font-size: 18px;">
                                                                                    Insurance Life
                                                                                </h5>
                                                                            </a>
                                                                            <p class="text-md">by DORA</p>
                                                                        </div>
                                                                        <div class="card-head-right">
                                                                            <a href="#">
                                                                                <svg width="38" height="38"
                                                                                    viewBox="0 0 38 38" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <rect width="38" height="38" rx="19"
                                                                                        fill=""></rect>
                                                                                    <g clip-path="url(#clip0_26_2613)">
                                                                                        <path
                                                                                            d="M23.6537 16.8139L14.718 25.7497L13.25 24.2817L22.1847 15.3459H14.31V13.2695H25.7301V24.6897H23.6537V16.8139Z"
                                                                                            fill="#191919">
                                                                                        </path>
                                                                                    </g>
                                                                                    <defs>
                                                                                        <clippath id="clip0_26_2613">
                                                                                            <rect width="13" height="13"
                                                                                                fill="white"
                                                                                                transform="translate(13 13)">
                                                                                            </rect>
                                                                                        </clippath>
                                                                                    </defs>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="reviews-box" style="margin-top: 25px;">
                                                <h6 style="margin-bottom: 15px; padding: 5px;">Reviews</h6>
                                                <div class="card-testimonial col-lg-4">
                                                    <div class="card-rates">
                                                        <img src="/assets/imgs/template/icons/star.svg" alt="Star">
                                                        <img src="/assets/imgs/template/icons/star.svg" alt="Star">
                                                        <img src="/assets/imgs/template/icons/star.svg" alt="Star">
                                                        <img src="/assets/imgs/template/icons/star.svg" alt="Star">
                                                        <img src="/assets/imgs/template/icons/star.svg" alt="Star">
                                                    </div>
                                                    <div class="card-author">
                                                        <div class="author-info">
                                                            <span class="text-md author-name mr-10"
                                                                style="margin-top: 10px !important;">ROBERT
                                                                FOX</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo" style="display:flex; justify-content: space-between;">
                                            Marketing
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                   <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body" >
                                            Discover what sets this apart as the market's easiest and most
                                            powerful video
                                            interviewing platform, and why hiring managers consistently choose
                                            us over the
                                            competition. Discover what sets this apart as the market's easiest
                                            and most
                                            powerful video interviewing platform, and why hiring managers
                                            consistently
                                            choose us over the competition.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree"  style="display:flex; justify-content: space-between;">
                                            Email Marketing
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                   <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" style="margin:-5px"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body">
                                            Discover what sets this apart as the market's easiest and most
                                            powerful video
                                            interviewing platform, and why hiring managers consistently choose
                                            us over the
                                            competition. Discover what sets this apart as the market's easiest
                                            and most
                                            powerful video interviewing platform, and why hiring managers
                                            consistently
                                            choose us over the competition.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour"  style="display:flex; justify-content: space-between;">
                                            Website Creation
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                   <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body">
                                            Discover what sets this apart as the market's easiest and most
                                            powerful video
                                            interviewing platform, and why hiring managers consistently choose
                                            us over the
                                            competition. Discover what sets this apart as the market's easiest
                                            and most
                                            powerful video interviewing platform, and why hiring managers
                                            consistently
                                            choose us over the competition.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive" style="display: flex; justify-content: space-between;">
                                            Branding & Positioning
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                   <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body">
                                            Discover what sets this apart as the market's easiest and most
                                            powerful video
                                            interviewing platform, and why hiring managers consistently choose
                                            us over the
                                            competition. Discover what sets this apart as the market's easiest
                                            and most
                                            powerful video interviewing platform, and why hiring managers
                                            consistently
                                            choose us over the competition.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix" style="display: flex; justify-content: space-between;">
                                            Web Application
                                            <div style="display: flex; align-items: center;">
                                                <p class="d-none d-md-block " style="padding: 0 19px; font-size: 14px;">7 works</p>
                                                   <div class="card-rates d-none d-md-block border-start border-end " style="border-left:1px solid #D1D3D4; border-right: 1px solid #D1D3D4; padding: 0 20px;">
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
                                                <p style="padding: 0 19px; font-size: 14px;">$5,000 / <span>project</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFAQS">
                                        <div class="accordion-body">
                                            Discover what sets this apart as the market's easiest and most
                                            powerful video
                                            interviewing platform, and why hiring managers consistently choose
                                            us over the
                                            competition. Discover what sets this apart as the market's easiest
                                            and most
                                            powerful video interviewing platform, and why hiring managers
                                            consistently
                                            choose us over the competition.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>
                 <div class="col-sm-12 col-lg-4">
                    <div class="col-12 px-lg-15 mt-lg-30">
                        <div class="order-lg-first" style="margin-top: 15px;">
                            <div class="sidebar">
                                <div class="box-sidebar-rounded">

                                    <div class="sidebar-content">
                                        <div class="item-line">
                                            <div class="text-date-post text-16-bold">51 people</div>
                                            <p class="text-date-post-value text-md neutral-500">in their team</p>
                                        </div>
                                        <div class="item-line">
                                            <div class="text-date-expire text-16-bold">4 projects</div>
                                            <p class="text-date-post-value text-md neutral-500">in their portfolio
                                            </p>
                                        </div>
                                        <div class="item-line">
                                            <div class="text-salary text-16-bold">1 award</div>
                                            <p class="text-date-post-value text-md neutral-500">conferred</p>
                                        </div>
                                         <div class="item-line">
                                            <div class="text-location text-16-bold">Phone number:</div>
                                            <p class="text-date-post-value text-md neutral-500">+998 90 900 90 90
                                            </p>
                                        </div>
                                        <div class="item-line">
                                            <div class="text-date-lang text-16-bold">Arabic, Chinese, English,
                                                Russian,
                                                Uzbek</div>
                                        </div>
                                        <div class="item-line">
                                            <div class="text-date-founded text-16-bold">Founded in 2019</div>
                                        </div>
                                        <div class="box-button-sidebar"> <a class="btn btn-black btn-rounded"
                                                href="https://dora.uz/" target="_blank">Open website
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="8"
                                                    viewbox="0 0 22 8" fill="none">
                                                    <path
                                                        d="M22 4.00032L18.4791 0.479492V3.3074H0V4.69333H18.4791V7.52129L22 4.00032Z"
                                                        fill="">
                                                    </path>
                                                </svg></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-12">
                    <section id="portfolio" class="portfolios section" style="margin: 30px 0;">
                            <div class="box-list-news" style=" cursor: pointer;">
                                <h2 class="title" style="font-size: 30px; padding: 5px;">Portfolio</h2>
                                <div class="row portfolio-padding">
                                    <div id="card" class="col-lg-4 col-md-6">
                                        <div class="card-news-style-2">
                                            <div class="card-image ">
                                                <img src="/assets/imgs/page/blog/news.png" alt="Nivia"  >
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
                                                <div class="card-more" style="margin-bottom: 50px;">
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
                                                <img src="/assets/imgs/page/blog/news.png" alt="Nivia" >
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
                                                <div class="card-more" style="margin-bottom: 50px;">
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
                                        <div class="card-news-style-2" style="margin-bottom: 50px;"">
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
                                                <div class="card-more" >
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
                                        <div class="responsive-container-block bg " style="margin-bottom: 15px;">
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
                                    <div class="modal-description gap-5 row " >
                                        <div class="modal-description-left col-sm-12 col-lg-8" >
                                            <h4 style="margin-bottom: 15px;">Description</h4>
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
                                        <div class="modal-description-right  col-sm-12 col-lg-8" >
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
                    </section>

                    <section id="team" class="team-section">
                    <div class="row content-blog-2" style="padding: 15px;">
                                <h2 class="title" style="font-size: 30px; margin-bottom: 15px; padding: 0;">Team
                                </h2>
                                <div class="col-lg-12">
                                    <div class="box-list-news-2">
                                        <div class="row">
                                            <div class="col-md" style="padding: 0;">
                                                <div class="card-news-style-2 card-news-style-3">
                                                    <div class="card-image img-fluid" > <a href="blog-post.html"><img
                                                                src="/assets/imgs/page/blog/blog.png" alt="Nivia"></a></div>
                                                    <div class="card-info">
                                                        <div class="card-desc">
                                                            <p class="text-md neutral-500">Duis mollis, est non
                                                                commodo luctus,
                                                                nisi erat porttitor
                                                                ligula, eget lacinia odio sem nec elit. Nullam quis
                                                                risus eget
                                                                urna mollis ornare vel. Nulla
                                                                vitae elit libero, a pharetra augue. Praesent
                                                                commodo cursus
                                                                magna, vel scelerisque nisl
                                                                consectetur et. Sed posuere consectetur est at
                                                                lobortis. Cras
                                                                mattis consectetur purus sit
                                                                amet fermentum. Fusce dapibus, tellus ac cursus
                                                                commodo, tortor
                                                                mauris condimentum nibh.
                                                                Cras mattis consectetur purus sit amet fermentum.
                                                                Sed posuere
                                                                consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                    <section>

                    <section id="awards" class="awards-section" style="margin: 30px 15px 0;">
                            <div class="row">
                                <h2 class="title " style="font-size: 30px; margin-bottom: 15px; padding: 0;">Awards
                                </h2>
                                <div class="col-lg-3 col-sm-6" style="padding:0;">
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
                    </section>

                        <section id="reviews" class="reviews-section" style="margin: 30px 15px 0px !important;">
                            <h2 class="title" style="font-size: 30px; margin-bottom: 15px; padding: 0;">Reviews</h2>
                            <div class="row detail-term">
                                <div class="col-lg-12" style="padding:0;">
                                    <div class="list-change-log">
                                        <div class="item-log " style='margin-left:15px' >
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
                                                        <span data-target="text-content-full-1" class="show-more-button">see
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
                                                        <span data-target="text-content-full-2" class="show-more-button">see
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
                                                        <span data-target="text-content-full-3" class="show-more-button">see
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
                            <div style="border: 1px solid #ECEEF2; border-radius: 16px; padding: 20px; margin-top: 20px; display:flex; align-items: center;justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 15px;">
                                    <i style="font-size: 24px;" class="fa-regular fa-pen-to-square"></i>
                                    <div>
                                        <h3 style="font-size:22px;">Worked with comtogether?</h3>
                                        <p style="margin-bottom: 0;">Share your experience with us.</p>
                                    </div>
                                </div>
                                <a href="{{route('singleReviews')}}"><button class="btn btn-brand-4-medium" type="submit">Write a review</button></a>


                            </div>
                        </section>

                        <section id="contact" class="contact-section section-box box-get-touch-section box-contact-form"
                            style="margin: 30px -10px 0px;">

                            <div class="container" styles="padding:0;">
                                <div class="row">
                                    <h2 class="title"
                                        style="font-size: 30px; margin-bottom: 15px; padding: 0; margin-left: 12px;">Contact
                                    </h2>
                                    <div class="col-lg-6 mb-30">
                                        <div class="block-map">
                                            <div class="box-map">
                                                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0"
                                                        scrolling="no" marginheight="0" marginwidth="0"
                                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Chilanzar%20Street%202/2,%20Tashkent,%20Uzbekistan+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                                            href="https://www.gps.ie/">gps vehicle
                                                            tracker</a></iframe></div>
                                            </div>
                                            <!-- <p class="text-md neutral-600 text-center">Hours: 8:00 - 17:00, Mon - Sat </p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6" style="display:flex; flex-direction:column; padding: 40px 15px;">
                                        <h5>Details</h5>
                                        <button class="btn btn-brand-4-medium col-lg-6" style="justify-content: center; margin:30px 0;" onclick="openModal()">Contact DORA</button>
                                        <a target="_blank" href="https://dora.uz" style="border-top: 1px solid #ECEEF2; border-bottom: 1px solid #ECEEF2; padding: 20px 10px; font-size: 18px; color: black; display:flex;align-items:center; justify-content:space-between;">
                                            <div>
                                                <i class="fa-solid fa-earth-asia" style="margin-right:10px;"></i>
                                                <span>https://dora.uz</span>
                                            </div>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                        <div style="border-top: 1px solid #ECEEF2; border-bottom: 1px solid #ECEEF2; padding: 20px 10px; font-size: 18px; color: black;">
                                            <i class="fa-solid fa-location-dot" style="margin-right:10px;"></i>
                                            <span>Chilanzar Street 2/2, Tashkent, Uzbekistan</span>
                                        </div>
                                          <p class="text-lg title-follow neutral-0" style="color: black !important;     padding: 10px">Follow us
                        <div class="box-socials-footer"><a class="icon-socials icon-facebook" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/fb.svg"></a><a class="icon-socials icon-instagram" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/in.svg"></a><a class="icon-socials icon-twitter" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/tw.svg"></a><a class="icon-socials icon-be" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/be.svg"></a></div>
                      </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>

            </div>
        </div>
    </section>

<div id="doraModal"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index:999;">

        <div class="box-border-rounded p-3"
            style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; width: 50%; max-height: 90%; overflow-y: auto; background-color: white; border-radius: 10px;">
            <div class="my-3 p-3">
                <h4 class="mb-3">Send a message to DORA</h4>
                <h6 class="mb-2" style="font-size:18px;">Who are you?</h6>

                <div class="row">

                    <div class="col-sm-12 col-lg-6 my-2">
                        <label style="width: 100%;">
                            First name
                            <input type="text" placeholder="First name">
                        </label>
                    </div>

                    <div class="col-sm-12 col-lg-6 my-2">
                        <label style="width: 100%;">
                            Last name
                            <input type="text" placeholder="Last name">
                        </label>
                    </div>

                    <div class="col-12 my-2">
                        <label style="width: 100%;">
                            Company name (optional)
                            <input type="text" placeholder="Company name (optional)">
                        </label>
                    </div>

                    <div class="col-sm-12 col-lg-6 my-2">
                        <label style="width: 100%;">
                            Professional email
                            <input type="text" placeholder="Professional email">
                        </label>
                    </div>

                    <div class="col-sm-12 col-lg-6 my-2">
                        <label style="width: 100%;">
                            Phone number (optional)
                            <input type="text" placeholder="Phone number (optional)">
                        </label>
                    </div>



                </div>

                <h6 class="my-2" style="font-size:18px";>Message</h6>

                <div class="row">

                    <div class="col-12 my-2">
                       <label style="width: 100%;">
                            Why do you want to contact DORA?
                            <select style="border: 1px solid #ececec; border-radius: 10px; height: 50px; box-shadow: none; padding-left: 20px; font-size: 16px; width: 100%; background-color: white;">
                                <option value="#">Request information for my project</option>
                                <option value="#">Just exploring for a future project</option>
                                <option value="#">Sell them my solution</option>
                                <option value="#">Looking for a job or internship</option>
                            </select>
                        </label>
                    </div>

                    <div class="col-12 my-2">
                        <label style="width: 100%;">
                            Your message
                            <textarea placeholder="Enter your text here..." style="width: 100%; height: 100px;"></textarea>
                        </label>
                    </div>

                    <div class="col-12 my-2 d-flex justify-content-end">
                        <button class="btn btn-brand-4-medium">Send</button>
                    </div>

                </div>
            </div>

        </div>

</div>

<script>
    function openModal() {
        document.getElementById('doraModal').style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Orqa ekranni harakatsiz qilish
    }

    function closeModal() {
        document.getElementById('doraModal').style.display = 'none';
        document.body.style.overflow = ''; // Orqa ekranni yana harakatga keltirish
    }

    // Modal tashqarisiga bosilganda yopilish
    window.onclick = function(event) {
        var modal = document.getElementById('doraModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>

</main>


@endsection
