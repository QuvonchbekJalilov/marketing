@extends('frontend.layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')
<main class="main">
    <style>
        .size-text {
            display: -webkit-box;
            -webkit-line-clamp: 4; /* Matnni 4 qatorda cheklash */
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis; /* Ortib ketgan matnni '...' bilan ko'rsatish */
        }
    </style>
{{--  <section class="section-box box-connecting">--}}
{{--    <div class="box-connecting-inner"><span class="planet shape-1"></span><span class="arrow-left shape-2"></span>--}}
{{--      <div class="container">--}}
{{--        <div class="text-center"><a class="btn btn-brand-4-sm" href="#">Connecting platforms</a>--}}
{{--          <h2 class="heading-2 mb-15 mt-15">Integrated with tools you <br class="d-none d-lg-block">already know & love</h2>--}}
{{--          <p class="text-lg neutral-500 mb-15">Easily connect the tools you use every day</p>--}}
{{--        </div>--}}
{{--        <div class="mt-55 text-center">--}}
{{--          <div class="box-logo-integration"><img src="/assets/imgs/page/integration/logo.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo2.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo3.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo4.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo5.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo6.png" alt="Nivia"><br class="d-none d-lg-block"><img src="/assets/imgs/page/integration/logo7.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo8.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo9.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo10.png" alt="Nivia"><img src="/assets/imgs/page/integration/logo11.png" alt="Nivia"></div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
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
          <button id="change-filter-btn" class="filter-button-responsive" onClick="toggleFilter()">
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
            @if ($providers->isNotEmpty())
                @foreach($providers as $provider)
                    <div class="col-lg-6 col-md-6 card-integration-big">
                        <div class="card-integration">
                            <div class="card-image">
                                <div class="card-image-left" ><img  style="border-radius: 50%;" src="{{ asset('storage/' . $provider->logo) }} " alt="Nivia"></div>
                                <div class="card-image-info">
                                    <h5>{{ $provider->name }}</h5>
                                    <p class="text-md neutral-500">Company</p>
                                </div>
                            </div>
                            <div class="card-info">
                                <p class="text-md size-text">{{ $provider->description }}</p>
                                <a class="btn btn-learmore-2" href="{{ route('singleProviders') }}"><span>
                          <svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_24_999)">
                              <path d="M10.6557 3.81393L1.71996 12.7497L0.251953 11.2817L9.18664 2.34592H1.31195V0.269531H12.7321V11.6897H10.6557V3.81393Z" fill="#191919"></path>
                            </g>
                            <defs>
                              <clippath id="clip0_24_999">
                                <rect width="13" height="13" fill="white"></rect>
                              </clippath>
                            </defs>
                          </svg></span>View Integration</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No providers available</p>
            @endif

            <div class="text-center card-integration-big">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <!-- Previous sahifaga o'tish -->
                        @if ($providers->onFirstPage())
                            <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                            <path d="M10 3.33398L5.33333 8.00065L10 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $providers->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path d="M10 3.33398L5.33333 8.00065L10 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                                </a>
                            </li>
                        @endif

                        <!-- Sahifalar -->
                        @foreach ($providers->links()->elements[0] as $page => $url)
                            @if ($page == $providers->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        <!-- Next sahifaga o'tish -->
                        @if ($providers->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $providers->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path d="M6 3.33398L10.6667 8.00065L6 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                            <path d="M6 3.33398L10.6667 8.00065L6 12.6673" stroke="#191919" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>

{{--            <style>--}}
{{--                .page-link.active {--}}
{{--                    background-color: #c5ff41 !important; /* Active bo'lgandagi rang */--}}
{{--                    color: #191919; /* Matn rangi */--}}
{{--                    border-color: #c5ff41; /* Chegarasi ham active rangda bo'ladi */--}}
{{--                }--}}
{{--            </style>--}}


            <script>
                $(document).ready(function() {
                    $('.pagination .page-link').on('click', function(e) {
                        e.preventDefault(); // Linkni sahifaga o'tishni to'xtatish uchun
                        $('.pagination .page-link').removeClass('active'); // Barcha active klasslarini olib tashlash
                        $(this).addClass('active'); // Bosilgan linkka active klassini qo'shish
                    });
                });
            </script>

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
