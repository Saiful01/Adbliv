@extends('layout.common')

@section('title', 'Home')

@section('content')
    <!-- Banner -->
  @include('home.slider')

    <!-- Banner END -->
    <!-- Main Content -->
    <div class="main-content">
    @include('home.about')
    @include('home.overview')
    @include('home.service')
    @include('home.inventory')
    <!-- portfolio -->
    @include('home.portfolio')
        <!-- portfolio END -->
        <!-- Gallery  -->
    @include('home.gallery')
        <!-- Gallery END -->
        <!-- Works -->
    @include('home.publisher')
        <!-- Works END -->
        <!-- Our Clients -->
    @include('home.client')
        <!-- Our Clients END -->
        <!-- Our Clients Testimonial -->
    @include('home.testimonial')
        <!-- Our Clients Testimonial END -->
        <!-- Our Contact -->
    @include('home.contact')
        <!-- Our Contact END -->

    </div>


@endsection
