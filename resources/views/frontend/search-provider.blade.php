@extends('layouts.main')

@section('title', 'Page Title')
@section('description', 'Page description')


@section('content')
    <main class="main">
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
              <div style="padding: 0 10px;">
                <div id="filter-box-2" class="sidebar-shadow none-shadow mb-30 filter-box-responsive" style="width: 25%; padding: 30px 20px; background-color: #E9ECEF; border-radius: 16px; margin-bottom: 30px !important; height: 100%;">
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
                      <div class="buttons-filter">
                          <button class="btn btn-default" style="background-color: #C5FF41; border-radius: 8px;">Apply filter</button>
                          <button class="btn">Reset filter</button>
                      </div>
                  </div>
              </div>
              </div>
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Spotify</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo4.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Hublot</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo11.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Dumani</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo10.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Webflow</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo2.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Shopify</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
                <div class="col-lg-6 col-md-6 card-integration-big">
                  <div class="card-integration">
                    <div class="card-image">
                      <div class="card-image-left"><img src="/assets/imgs/page/integration/logo3.png" alt="Nivia"></div>
                      <div class="card-image-info">
                        <h5>Kickstar</h5>
                        <p class="text-md neutral-500">Company</p>
                      </div>
                    </div>
                    <div class="card-info">
                      <p class="text-md">Aut inventore unde id aliquid sint aut laudantium explicabo qui earum fugit. Est rerum possimus hic sunt temporibus rem deserunt consequatur sit mollitia alias aut</p><a class="btn btn-learmore-2" href="#"><span>
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
    
    </main>

     
    
    </main>


     
    
 




@endsection