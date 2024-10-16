@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')
<main class="main">
{{--      <section class="section-box box-content-feature box-content-feature-2">--}}
{{--            <div class="container"> --}}
{{--              <div class="text-center"> <span class="btn btn-bg-brand-4 mb-25"><span>--}}
{{--                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                      <path d="M22.0532 15.1551L12.3032 1.65509C12.2684 1.60707 12.2228 1.56797 12.17 1.54102C12.1172 1.51406 12.0587 1.5 11.9994 1.5C11.9402 1.5 11.8817 1.51406 11.8289 1.54102C11.7761 1.56797 11.7305 1.60707 11.6957 1.65509L1.9457 15.1551C1.91663 15.1955 1.89588 15.2412 1.88466 15.2897C1.87344 15.3381 1.87198 15.3883 1.88035 15.4374C1.88873 15.4864 1.90678 15.5333 1.93345 15.5753C1.96012 15.6173 1.99487 15.6535 2.0357 15.682L11.7857 22.432C11.8485 22.4755 11.923 22.4988 11.9994 22.4988C12.0758 22.4988 12.1504 22.4755 12.2132 22.432L21.9632 15.682C22.004 15.6535 22.0388 15.6173 22.0654 15.5753C22.0921 15.5333 22.1102 15.4864 22.1185 15.4374C22.1269 15.3883 22.1254 15.3381 22.1142 15.2897C22.103 15.2412 22.0823 15.1955 22.0532 15.1551ZM11.9994 15.6445L8.6882 12.9951L11.9994 3.05946L15.3107 12.997L11.9994 15.6445ZM7.94945 12.832L3.22257 14.6676L10.8744 4.08134L7.94945 12.832ZM8.18382 13.5463L11.6244 16.312V21.4157L3.11195 15.5151L8.18382 13.5463ZM12.3744 16.312L15.8169 13.5501L20.9469 15.4738L12.3744 21.4082V16.312ZM16.0494 12.8432L13.1244 4.08134L20.7126 14.5813L16.0494 12.8432Z" fill=""></path>--}}
{{--                    </svg></span>Marketers</span>--}}
{{--                <h2 class="mt-15 mb-15">What You Get From Nivia Platform</h2>--}}
{{--                <p class="text-lg neutral-500 mb-25">Let's browse through all the great features you'll get when<br class="d-none d-lg-block">you're in the Nivia ecosystem</p>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--        </section>--}}
  <section class="section-box box-all-integrations">
        <div class="container" style="display: flex; gap: 30px;">
          <div id="filter-box-1" class="sidebar-shadow none-shadow mb-30 filter-box" style="width: 27%; padding: 30px 20px; background-color: #E9ECEF; border-radius: 16px; margin-bottom: 30px !important; height: 100%;">
            <div class="sidebar-filters">
                <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-15" style="font-size: 20px;">Keywords</h5>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Type keywords, skills..." />
                    </div>
                </div>
                <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-15" style="font-size: 20px;">Location</h5>
                    <div class="form-group">
                        <input type="text" class="form-control form-icons" placeholder="Location" />
                        <i class="fi-rr-marker"></i>
                    </div>
                </div>
                <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-15" style="font-size: 20px;">Industry experience</h5>
                    <div class="form-group select-style select-style-icon">
                        <select class="form-control form-icons select-active">
                            <option>Accounting</option>
                            <option>Architecture & Planning</option>
                            <option>Art & Handcraft</option>
                            <option>Automotive</option>
                        </select>
                        <i class="fi-rr-briefcase"></i>
                    </div>
                </div>
                <div class="filter-block mb-40">
                    <h5 class="medium-heading mb-25" style="font-size: 20px;">Salary Range</h5>
                    <div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="lb-slider">From</label>
                                <div class="form-group minus-input">
                                    <input type="text" name="min-value-money" class="input-disabled form-control min-value-money" value="" />
                                    <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="lb-slider">To</label>
                                <div class="form-group">
                                    <input type="text" name="max-value-money" class="input-disabled form-control max-value-money" value="" />
                                    <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="card-conteiner">
                            <div class="card-content">
                                <div class="rangeslider">
                                    <input class="min input-ranges" name="range_1" type="range" min="1" max="10000" value="735">
                                    <input class="max input-ranges" name="range_1" type="range" min="1" max="10000" value="6465">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-15" style="font-size: 20px;">Languages</h5>
                    <div class="form-group select-style select-style-icon">
                        <select class="form-control form-icons select-active">
                            <option>Uzbek</option>
                            <option>English</option>
                            <option>Russian</option>
                        </select>
                        <i class="fi-rr-briefcase"></i>
                    </div>
                </div>
                <div class="filter-block mb-30">
                    <h5 class="medium-heading mb-15" style="font-size: 20px;">Team size</h5>
                    <div class="form-group select-style select-style-icon">
                        <select class="form-control form-icons select-active">
                            <option>Freelance (1)</option>
                            <option>Studio (2-10)</option>
                            <option>Agency (11-50)</option>
                            <option>Group (50+)</option>
                        </select>
                        <i class="fi-rr-briefcase"></i>
                    </div>
                </div>
                <div class="buttons-filter">
                    <button class="btn btn-default" style="background-color: #C5FF41; border-radius: 8px;">Apply filter</button>
                    <button class="btn">Reset filter</button>
                </div>
            </div>
        </div>

          <div style="width: 70%;" class="right-side-search-provider">
            <div class="row">
              <button id="change-filter-btn" class="filter-button-responsive">
                Show Filter
            </button>

                <div id="filter-box-2" class="sidebar-shadow none-shadow mb-30 filter-box-responsive" style="border:none; border-radius:0 !important; box-shadow: 0 0 0 0 rgba(0, 0, 0, 0); width: 100%; padding: 30px 20px; background-color: #E9ECEF; margin-bottom: 30px !important; height: 100%; position:fixed; top:0; z-index:999; overflow: auto;">
                  <div class="sidebar-filters ">
                      <div class="filter-block mb-30">
                          <h5 class="medium-heading mb-15" style="font-size: 20px;">Keywords</h5>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Type keywords, skills..." />
                          </div>
                      </div>
                      <div class="filter-block mb-30">
                          <h5 class="medium-heading mb-15" style="font-size: 20px;">Location</h5>
                          <div class="form-group">
                              <input type="text" class="form-control form-icons" placeholder="Location" />
                              <i class="fi-rr-marker"></i>
                          </div>
                      </div>
                      <div class="filter-block mb-30">
                          <h5 class="medium-heading mb-15" style="font-size: 20px;">Industry experience</h5>
                          <div class="form-group select-style select-style-icon">
                              <select class="form-control form-icons select-active">
                                  <option>Accounting</option>
                                  <option>Architecture & Planning</option>
                                  <option>Art & Handcraft</option>
                                  <option>Automotive</option>
                              </select>
                              <i class="fi-rr-briefcase"></i>
                          </div>
                      </div>
                      <div class="filter-block mb-40">
                          <h5 class="medium-heading mb-25" style="font-size: 20px;">Salary Range</h5>
                          <div class="">
                              <div class="row" style="display: flex;">
                                  <div class="col-lg-6 col-sm-6" style="width: 50%;">
                                      <label class="lb-slider">From</label>
                                      <div class="form-group minus-input">
                                          <input  type="text" name="min-value-money" class="input-disabled form-control min-value-money"  value="" />
                                          <input type="hidden" name="min-value" class="form-control min-value" value="" />
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-sm-6" style="width: 50%;">
                                      <label class="lb-slider">To</label>
                                      <div class="form-group">
                                          <input input type="text" name="max-value-money" class="input-disabled form-control max-value-money" value="" />
                                          <input type="hidden" name="max-value" class="form-control max-value" value="" />
                                      </div>
                                  </div>
                              </div>
                              <div class="card-conteiner">
                                <div class="card-content" style="max-width: 100%;">
                                  <div class="rangeslider">
                                    <input class="min input-ranges" name="range_1" type="range" min="1" max="10000" value="735">
                                    <input class="max input-ranges" name="range_1" type="range" min="1" max="10000" value="6465">
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="filter-block mb-30">
                          <h5 class="medium-heading mb-15" style="font-size: 20px;">Languages</h5>
                          <div class="form-group select-style select-style-icon">
                              <select class="form-control form-icons select-active">
                                  <option>Uzbek</option>
                                  <option>English</option>
                                  <option>Russian</option>
                              </select>
                              <i class="fi-rr-briefcase"></i>
                          </div>
                      </div>
                      <div class="filter-block mb-30">
                          <h5 class="medium-heading mb-15" style="font-size: 20px;">Team size</h5>
                          <div class="form-group select-style select-style-icon">
                              <select class="form-control form-icons select-active">
                                  <option>Freelance (1)</option>
                                  <option>Studion (2-10)</option>
                                  <option>Agency (11-50)</option>
                                  <option>Group (50+)</option>
                              </select>
                              <i class="fi-rr-briefcase"></i>
                          </div>
                      </div>
                      <div class="buttons-filter" style= "display: flex; justify-content: center;";>
                          <button class="btn btn-default" style="background-color: transparent; border: 2px solid #C5FF41; border-radius: 8px; font-size: 16px !important;" id="change-filter-btn-2">Cancel</button>
                          <button class="btn" style="font-size: 16px !important;">Reset filter</button>
                          <button class="btn btn-default" style="background-color: #C5FF41; border-radius: 8px; font-size: 16px !important;">Apply filter</button>
                      </div>
                  </div>
              </div>
           <div style="width: 100%;" class="right-side-search-provider">
                        <div class="content-page">

                            <div class="row" >
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-link">
                                            <a href="#"><i class="fi-rr-shield-check"></i></a>
                                            <a href="#"><i class="fi-rr-bookmark"></i></a>
                                        </div>
                                        <div class="text-center card-grid-2-image-rd online">
                                            <a href="{{ route('singleMarketers') }}">
                                                <figure><img alt="jobhub" src="/assets/imgs/img-candidate.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="card-profile">
                                                 <a href="{{ route('singleMarketers') }}"><strong>Esther Howard</strong></a>
                                                <span class="text-sm">UI/UX Designer</span>
                                                <div class="rate-reviews-small">
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span class="ml-10 text-muted text-small">(5.0)</span>
                                                </div>
                                            </div>
                                            <div class="employers-info d-flex align-items-center justify-content-center mt-15">
                                                <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> Chicago, US</span>
                                                <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>Software</span>
                                            </div>
                                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">App</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Digital</a>
                                                </div>
                                                <div class="text-center mt-25 mb-5">
                                                    <a href="{{ route('singleMarketers') }}" class="btn btn-brand-4-medium hover-up" style="margin: 0 auto; display:inline">View profile</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-link">
                                            <a href="#"><i class="fi-rr-shield-check"></i></a>
                                            <a href="#"><i class="fi-rr-bookmark"></i></a>
                                        </div>
                                        <div class="text-center card-grid-2-image-rd online">
                                            <a href="{{ route('singleMarketers') }}">
                                                <figure><img alt="jobhub" src="/assets/imgs/img-candidate.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="card-profile">
                                                 <a href="{{ route('singleMarketers') }}"><strong>Esther Howard</strong></a>
                                                <span class="text-sm">UI/UX Designer</span>
                                                <div class="rate-reviews-small">
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span class="ml-10 text-muted text-small">(5.0)</span>
                                                </div>
                                            </div>
                                            <div class="employers-info d-flex align-items-center justify-content-center mt-15">
                                                <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> Chicago, US</span>
                                                <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>Software</span>
                                            </div>
                                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">App</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Digital</a>
                                                </div>
                                                <div class="text-center mt-25 mb-5">
                                                    <a href="{{ route('singleMarketers') }}" class="btn btn-brand-4-medium hover-up" style="margin: 0 auto; display:inline">View profile</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card-grid-2 hover-up">
                                        <div class="card-grid-2-link">
                                            <a href="#"><i class="fi-rr-shield-check"></i></a>
                                            <a href="#"><i class="fi-rr-bookmark"></i></a>
                                        </div>
                                        <div class="text-center card-grid-2-image-rd online">
                                            <a href="{{ route('singleMarketers') }}">
                                                <figure><img alt="jobhub" src="/assets/imgs/img-candidate.png" /></figure>
                                            </a>
                                        </div>
                                        <div class="card-block-info">
                                            <div class="card-profile">
                                                 <a href="{{ route('singleMarketers') }}"><strong>Esther Howard</strong></a>
                                                <span class="text-sm">UI/UX Designer</span>
                                                <div class="rate-reviews-small">
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span><img src="/assets/imgs/icons/star.svg" alt="jobhub" /></span>
                                                    <span class="ml-10 text-muted text-small">(5.0)</span>
                                                </div>
                                            </div>
                                            <div class="employers-info d-flex align-items-center justify-content-center mt-15">
                                                <span class="d-flex align-items-center"><i class="fi-rr-marker mr-5 ml-0"></i> Chicago, US</span>
                                                <span class="d-flex align-items-center ml-25"><i class="fi-rr-briefcase mr-5"></i>Software</span>
                                            </div>
                                            <div class="card-2-bottom card-2-bottom-candidate mt-30">
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Figma</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Adobe XD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">PSD</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">App</a>
                                                    <a href="#" class="btn btn-tags-sm mb-10 mr-5">Digital</a>
                                                </div>
                                                <div class="text-center mt-25 mb-5">
                                                    <a href="{{ route('singleMarketers') }}" class="btn btn-brand-4-medium hover-up" style="margin: 0 auto; display:inline">View profile</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>



                <div class="text-center card-integration-big">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                              <path d="M10 3.33398L5.33333 8.00065L10 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></span></a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link active" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item"><a class="page-link" href="#">6</a></li>
                      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                              <path d="M6 3.33398L10.6667 8.00065L6 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
          </div>
        </div>
      </section>
  <section class="section-box wow animate__animated animate__fadeIn box-how-it-work">
    <div class="container"><a class="btn btn-brand-4-sm" href="#">How It Works</a>
      <h2 class="mt-15 mb-20">Just 3 simple and quick steps to have a<br class="d-none d-lg-block">perfect automatic money making system</h2>
{{--      <p class="text-lg neutral-500 mb-55">Bole nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conididunt ut labore et dolore<br class="d-none d-lg-block">magna aliqua ut enim ad minim veniam</p>--}}
      <div class="row">
        <div class="col-lg-4">
          <div class="box-border-rounded">
            <div class="card-casestudy">
              <div class="card-title">
                <h6><span class="number">1</span>Signup for Service</h6>
              </div>
              <div class="card-desc">
                <p>This process is straightforward and swift, prioritizing your convenience and experience. It enables you to access tailored solutions and special offers swiftly, ensuring you can quickly begin enjoying our services.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-border-rounded">
            <div class="card-casestudy">
              <div class="card-title">
                <h6><span class="number">2</span>Research & Development</h6>
              </div>
              <div class="card-desc">
                <p>We delve deeply into understanding your needs and objectives. We construct a customized strategy and solutions to ensure they reflect your goals and meet your expectations.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="box-border-rounded">
            <div class="card-casestudy">
              <div class="card-title">
                <h6><span class="number">3</span>Sales & Earning</h6>
              </div>
              <div class="card-desc">
                <p>We monitor performance, optimize campaigns, and make certain that you attain the results you anticipate. This is the ultimate step to ensure you are well on your way to achieving success and revenue from your project.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-25">
      <div class="box-newsletter">
        <div class="newsletter-left">
          <h2>Join our community</h2>
          <p class="text-md neutral-600">Work smarter with this time management and not hard join our newsletter for a better expertrience</p>
        </div>
        <div class="newsletter-right">
          <form action="#">
            <input class="form-control" type="text" placeholder="Email address...">
            <button class="btn btn-subscribe" type="submit">Subscribe
              <svg width="22" height="22" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 10.9993L18.4791 7.47852V10.3064H0V11.6924H18.4791V14.5203L22 10.9993Z" fill=""></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
