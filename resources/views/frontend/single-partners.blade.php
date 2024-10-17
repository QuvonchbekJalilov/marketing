@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')

<!-- Content -->
   <main class="main">
        <section class="section-box">
            <div class="box-head-single box-head-single-candidate">
                <div class="container">
                    <div class="heading-image-rd online">
                        <a href="#">
                            <figure><img alt="jobhub" src="assets/imgs/employer-12.png"></figure>
                        </a>
                    </div>
                    <div class="heading-main-info">
                        <h4>Behance Studio</h4>
                        <div class="head-info-profile">
                            <span class="text-small mr-20"><i class="fi-rr-marker text-mutted"></i> Chicago, US</span>
                            <span class="text-small mr-20"><i class="fi-rr-briefcase text-mutted"></i> Accounting / Finance</span>
                            <span class="text-small"><i class="fi-rr-clock text-mutted"></i> Since 2012</span>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-lg-6">
                                <a href="job-grid.html" class="btn btn-tags-sm mb-10 mr-5">12 open jobs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-box">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="links-box"
                        style="display: flex; justify-content: center !important; border-bottom: 1px solid #D1D3D4; margin: 0 auto 60px; justify-content: start;">
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding:10px 30px; color: black;"><a
                                href="#about"><i class="fa-regular fa-file" style="margin-right: 7px;"></i>About</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 30px; color: black;"><a
                                href="#sertificate"><i class="fa-solid fa-certificate" style="margin-right: 7px;"></i>Sertificates</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 30px; color: black;"><a
                                href="#office"><i class="fa-regular fa-building" style="margin-right: 7px;"></i>Our office</a>
                        </div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 30px; color: black;"><a
                                href="#awards"><i class="fa-solid fa-award" style="margin-right: 7px;"></i>Awards</a></div>
                        <div class="link" style="padding: 10px 30px; color: black;"><a
                                href="#vacancies"><i class="fa-solid fa-circle-check" style="margin-right: 7px;"></i>Vacancies</a></div>
                        <!--<div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#awards"><i class="fa-solid fa-award" style="margin-right: 7px;"></i>Awards</a></div>
                        <div class="link" style="border-right: 1px solid  #D1D3D4; padding: 10px 28px; color: black;"><a
                                href="#reviews"><i class="fa-regular fa-star" style="margin-right: 7px;"></i>Reviews</a></div>
                        <div class="link" style="padding: 10px 28px;"><a href="#contact"><i class="fa-regular fa-envelope"
                                    style="margin-right: 7px;"></i>Contact</a></div> -->
                        </div>
                    </div>
                           <div class="col-lg-8 col-sm-12">
                                    <section id="about">
                                    <h4 class="mb-20">About Company</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque, ipsa, dolore beatae voluptates nemo blanditiis iste eius officia minus. Id nisi, consequuntur sunt impedit quidem, vitae mollitia!
                                    </p>
                                    <div class="divider"></div>
                                </section>
                                <section id="sertificate">
                                    <h4 class="mb-20 mt-25">Sertificates</h4>
                                    <div class="row">
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Design</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Accounting</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            pxdraft Ltd, UK<br>
                                            Jan 2018 — Dec 2021
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Creative</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            AT Studio, UK<br>
                                            Jan 2017 — May 2017
                                        </span>
                                    </div>

                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Social</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Search</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-12 mb-10">
                                        <strong class="text-md-bold">Behance Video</strong>
                                        <span class="dis-block text-muted text-md-lh24">
                                            NY, UK<br />
                                            Jan 2021 — Present
                                        </span>
                                    </div>
                                    </div>
                                    <div class="divider"></div>
                                </section>
                           </div>

                         <div class="col-sm-12 col-lg-4">
                            <div class="col-12 pl-lg-15 mt-lg-30">
                                <div class="order-lg-first mt-15">
                                    <div class="sidebar">
                                        <div class="box-sidebar-rounded">
                                            <div class="sidebar-content">
                                                <div class="item-line">
                                                    <div class="text-date-post text-16-bold">51 people</div>
                                                    <p class="text-date-post-value text-md neutral-500">in their team</p>
                                                </div>
                                                <div class="item-line">
                                                    <div class="text-date-expire text-16-bold">4 projects</div>
                                                </div>
                                                <div class="item-line">
                                                    <div class="text-location text-16-bold">Location:</div>
                                                    <p class="text-date-post-value text-md neutral-500">Tashkent, Uzbekistan</p>
                                                </div>
                                                <div class="item-line">
                                                    <div class="text-salary text-16-bold">1 award</div>
                                                    <p class="text-date-post-value text-md neutral-500">conferred</p>
                                                </div>
                                                <div class="item-line">
                                                    <div class="text-date-lang text-16-bold">Arabic, Chinese, English, Russian, Uzbek</div>
                                                </div>
                                                <div class="item-line">
                                                    <div class="text-date-founded text-16-bold">Founded in 2019</div>
                                                </div>
                                                <div class="box-button-sidebar">
                                                    <a class="btn btn-black btn-rounded" href="https://dora.uz/" target="_blank">
                                                        Open website
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="8" viewBox="0 0 22 8" fill="none">
                                                            <path d="M22 4.00032L18.4791 0.479492V3.3074H0V4.69333H18.4791V7.52129L22 4.00032Z" fill="">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                            <div class="col-lg-12 col-sm-12">
                                <section id="office">
                                <h4 class="mt-30 mb-30">Our Office</h4>
                                <img src="/assets/imgs/img-1.png" alt="jobhub">
                                <div class="divider"></div>
                                </section>
                                <section id="awards" class="awards-section" style="margin: 30px 15px 0;">
                                    <div class="row">
                                    <h2 class="title" style="font-size: 30px; margin-bottom: 15px; padding: 0;">Awards</h2>
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
                                <section id="vacancies">
                                    <h4 class="mt-30 mb-30">Vacancies</h4>
                                    <div class="row">
                                    <div class="col-lg-6">
                                        <ul>
                                            <li>Digital Designer - 03 person </li>
                                            <li>Digital Marketing - 04 persons</li>
                                            <li>Project Manager - 02 persons</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-muted lh-32">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis illum fuga eveniet. Deleniti asperiores, commodi quae ipsum quas est itaque
                                        </p>
                                    </div>
                                    </div>
                                </section>
                                 <section id="contact" class="contact-section section-box box-get-touch-section box-contact-form"
                            style="margin: 30px 0px 0px;">

                            <div class="container" style="padding:0;">
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
                                    <div class="col-lg-6" style="display:flex; flex-direction:column; padding: 40px 30px;">
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
                                          <p class="text-lg title-follow neutral-0" style="color: black !important;">Follow us
                                    <div class="box-socials-footer"><a class="icon-socials icon-facebook" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/fb.svg"></a><a class="icon-socials icon-instagram" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/in.svg"></a><a class="icon-socials icon-twitter" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/tw.svg"></a><a class="icon-socials icon-be" href="#"><img alt="Nivia" src="/assets/imgs/template/icons/be.svg"></a></div>
                                     </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                            </div>




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
                            <input type="text" class="input-newsletter" value="" placeholder="contact.alithemes@gmail.com" />
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
    <div id="doraModal"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index:999;">

        <div class="box-border-rounded p-3 modal-form"
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
    <!-- End Content -->

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

@endsection
