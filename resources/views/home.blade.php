@extends('layouts.app')
@section('title') Home @endsection
@section('nav-bg') bg-transparent @endsection
@section('header-content')
    <div class="context">
        <h1 id="contextH1">Welcome to Blogosphere!</h1>
        <div class="wrapper">
            <button onclick="scroll_start()">
                Get started
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        @endsection

        @section('section1')
            <section class="we-write" id="we-write">
                <div class="container">
                    <h1>We Write About</h1>
                    <div class="themes">
                        <div class="theme">
                            <img src="{{asset('images/science.png')}}" alt="science image logo">
                            <a href="#"><h4>Science</h4></a>
                        </div>
                        <div class="theme">
                            <img src="{{asset('images/films.png')}}" alt="film image logo">
                            <a href="#"><h4>Films</h4></a>
                        </div>
                        <div class="theme">
                            <img src="{{asset('images/music.png')}}" alt="music image logo">
                            <a href="#"><h4>Music</h4></a>
                        </div>
                        <div class="theme">
                            <img src="{{asset('images/books.png')}}" alt="book image logo">
                            <a href="#"><h4>Books</h4></a>
                        </div>
                        <div class="theme">
                            <img src="{{asset('images/sport.png')}}" alt="sport image logo">
                            <a href="#"><h4>Sport</h4></a>
                        </div>
                        <div class="theme">
                            <img src="{{asset('images/education.png')}}" alt="education image logo">
                            <a href="#"><h4>Education</h4></a>
                        </div>
                    </div>
                </div>
            </section>
@endsection
{{--        @section('content')--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                            <div class="card-body">--}}
{{--                                @if (session('status'))--}}
{{--                                    <div class="alert alert-success" role="alert">--}}
{{--                                        {{ session('status') }}--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                {{ __('You are logged in!') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--@endsection--}}
