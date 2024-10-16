@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')
<main class="main">
      <section class="section-box box-content-contact">
        <div class="container">
          <div class="text-center contact-head"><span class="icon-1 shape-1"></span><span class="icon-2 shape-2"></span><span class="btn btn-brand-4-sm">Contact Us</span>
            <h2 class="heading-2 mb-20 mt-15">Get in Touch</h2>
            <div class="text-center">
              <nav class="container-breadcrumb" style="--bs-breadcrumb-divider: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&quot;);" aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="box-border-rounded">
            <div class="row align-items-center">
              <div class="col-lg-6"><a class="btn btn-brand-4-sm" href="#">Contact Us</a>
                <h3 class="mb-20 mt-20">To make requests for further information, contact us via our social channels.</h3>
                <p class="text-md neutral-700">Contact us below and we will get back to you shortly.</p>
                <div class="row mt-50">
                  <div class="col-lg-12">
                    <div class="card-feature-2">
                      <div class="card-image"><img src="assets/imgs/page/homepage3/marketing.svg"></div>
                      <div class="card-info">
                        <h3 class="text-22-bold">Address</h3>
                        <p class="text-md neutral-700">ул. Чиланзар 2/2, Tashkent, Узбекистан</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="card-feature-2">
                      <div class="card-image"><img src="assets/imgs/page/homepage3/digital.svg"></div>
                      <div class="card-info">
                        <h3 class="text-22-bold">Phone</h3>
                        <div class="text-md neutral-700">
                          <div class="row">
                            <div class="col-sm-6"><a href="tel:+1(800)9684021">+998 (93) 512 53 24</a><br><a href="tel:+(406)5550120">+998 (93) 180 53 24</a></div>
                            <div class="col-sm-6"><a href="tel:+1(800)9684021">+998 (93) 513 53 24</a><br><a href="tel:+(406)5550120">+998 (93) 705 74 72</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="card-feature-2">
                      <div class="card-image"><img src="assets/imgs/page/homepage3/digital.svg"></div>
                      <div class="card-info">
                        <h3 class="text-22-bold">Email</h3>
                        <div class="text-md neutral-700">
                          <div class="row">
                            <div class="col-sm-6"><a class="neutral-700" href="mailto:sale@nivia.com">info@marketing.uz</a></div>
                            <div class="col-sm-6"><a class="neutral-700" href="mailto:contact@nivia.com">info@dora.uz</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 text-center"><img src="assets/imgs/page/contact/img-contact.png"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box box-get-touch-section box-contact-form">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-30">
              <div class="block-map">
                <div class="box-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47963.39837018879!2d69.1584603486328!3d41.293363400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b7bb3e26fc1%3A0x93f3f483b0ab19c6!2sDORA!5e0!3m2!1sru!2s!4v1726039295615!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <p class="text-md neutral-600 text-center">Hours: 8:00 - 17:00, Mon - Sat </p>
              </div>
            </div>
            <div class="col-lg-6 mb-30"><a class="btn btn-brand-4-sm" href="#">Contact Us</a>
              <h2 class="mb-20 mt-20">Get in Touch</h2>
              <p class="text-md neutral-700">Contact us below and we will get back to you shortly.</p>
              <div class="block-form-contact mt-45">
                <form action="#">
                  <div class="form-group">
                    <label for="fullname">
                       Your Name *</label>
                    <input class="form-control" type="text" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="fullname">
                       Your Email *</label>
                    <input class="form-control" type="text" placeholder="email@website.com">
                  </div>
                  <div class="form-group">
                    <label for="fullname">
                       Message *</label>
                    <textarea class="form-control" rows="7" placeholder="How can we help you?"></textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-black btn-rounded" type="submit">Send Message
                      <svg width="22" height="8" viewbox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                      </svg>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
