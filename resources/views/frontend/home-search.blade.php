@extends('frontend.layouts.main')

@section('title', 'Маркетинговая Ассоциация Узбекистана')
@section('description', 'Маркетинговая Ассоциация Узбекистана. Цель Ассоциации: объединение юридических лиц и экспертов, заинтересованных в развитии маркетинга в Узбекистане, представление профессиональных интересов, совершенствование профессиональных норм и развитие кадрового потенциала маркетинговой отрасли.')

@section('content')
    <main class="main">
        <section class="section-box wow animate__animated animate__fadeIn box-how-it-work">
            <div class="container">
                <h2 class="mt-35 mb-15 text-center">Search Results - {{ $query }}</h2>
                <p class="text-lg neutral-500 mb-45 text-center">Here are the results for your search query. Explore the categories and providers that match your requirements.</p>

                <div class="row">
                    @if($query)
                        @if($results->isNotEmpty())
                            <div class="col-lg-12">
                                <h4>Categories</h4>
                                @foreach($results as $category)
                                    <div class="col-lg-4">
                                        <div class="box-border-rounded">
                                            <div class="card-casestudy">
                                                <div class="card-title mb-30">
                                                    <h6 style="font-size: 22px !important;">
                                                        {{ $category->name }}
                                                    </h6>
                                                </div>
                                                <div class="card-desc">
                                                    @if ($category->services->isNotEmpty())
                                                        <ul class="list-unstyled">
                                                            @foreach ($category->services as $service)
                                                                <li>
                                                                    <a href="{{ route('services-providers', $service->id) }}">
                                                                        {{ $service->name_en }} <i class="fa-solid fa-arrow-right"></i>
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        <p>No services available</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if($providers->isNotEmpty())
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <ul class="list-unstyled">
                                        @foreach($providers as $provider)
                                            <li>
                                                <h4><a href="{{ route('singleProviders') }}">{{ $provider->name }}</a></h4>
                                                <p class="text-dark">{{ $provider->description }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if($results->isEmpty() && $providers->isEmpty())
                            <h2 class="text-center">🤷‍♂️ No results found.</h2>
                        @endif
                    @else
                        <p class="text-center">Please enter a search query.</p>
                    @endif
                </div>
            </div>
            <div class="container mt-25">
                <div class="box-newsletter mb-0" style="background-image: url('https://marketing.uz/uploads/sections/846/original.jpg'); background-size: cover; height: 347px;">
                </div>
            </div>
        </section>
    </main>
@endsection
