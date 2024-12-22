@extends('layouts.app')

@section('title', 'Charity Foundation - Home')

@section('jumbotoron')
    <div class="container-fluid jumbotoron p-5" style="background: url({{ asset('images/background.jpg') }});">
        <div class="container p-5">
            <h1>Charity Foundation</h1>
            <p class="">8 Years of Enduring Impact</p>
            <a href="" class="btn btn-dark learn-more">Learn More</a>
        </div>
    </div>
@endsection
@section('who-we-are')
    <div class="container-fluid p-5" style="background-color: #d6d6d6">
        <div class="container">
                <div class="">
                    <h2>Who we Are</h3>
                </div>
                <div class="">
                    <p>The Asia Foundation is a nonprofit international development organization committed to improving lives and expanding opportunities across Asia and the Pacific. </p>
                    <p>Informed by 70 years of experience and deep local knowledge, our work is focused on governance, education and leadership, environment and climate resilience, inclusive growth, international cooperation, and women’s empowerment and gender equality.</p>
                    <a href="" class="link text-decoration-none text-white">Explore our Work &rarr;</a>
                </div>
        </div>
    </div>
@endsection
@section('our-work')
    <div class="container-fluid p-5">
        <div class="text-center">
            <h2>Our Work</h2>
            <p>Locally grounded and globally connected, we work on the most critical issues facing Asia and the Pacific.</p>
        </div>
        <div class="row">
            {{-- Card --}}
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/reports1.jpg')}}" alt="" style="width: 100%; height: 300px; object-fit:cover" class="img-fluid rounded-1 shadow-xl">
                    </div>
                    <div>
                        <h3>Governance</h3>
                    </div>
                </div>
            </div>
            {{-- Card --}}
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/reports2.jpg')}}" alt="" style="width: 100%; height: 300px; object-fit:cover" class="img-fluid rounded-1 shadow-xl">
                    </div>
                    <div>
                        <h3>Education and Leadership</h3>
                    </div>
                </div>
            </div>
            {{-- Card --}}
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body">
                        <img src="{{ asset('images/reports3.jpg')}}" alt="" style="width: 100%; height: 300px; object-fit:cover" class="img-fluid rounded-1 shadow-xl">
                    </div>
                    <div>
                        <h3>Women's Empowerment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection