@extends('layouts.app')
@section('title')My profile @endsection

@section('section1')
    <section class="my-page mt-3">
        <div class="container">
            <h1 class="text-center">My page</h1>
            <div class="profile ">
                <div class="prof-pic">
                    <img src="{{asset(\Illuminate\Support\Facades\Auth::user()->image)}}" alt="prof pic">
                </div>
                <div class="prof-info">
                    <h4>{{\Illuminate\Support\Facades\Auth::user()->name .' '.\Illuminate\Support\Facades\Auth::user()->lastname}}</h4>
                    <h4>In Blogosphere from: {{\Illuminate\Support\Facades\Auth::user()->created_at}}</h4>
                    <h4>Created articles: {{$posts->total()}}</h4>
                </div>
            </div>
        </div>
        @if(session()->has('message-success'))
            <div class="alert alert-success success-message">
                {{ session()->get('message-success') }}
            </div>
        @endif
        @if(session()->has('message-error'))
            <div class="alert alert-danger success-message">
                {{ session()->get('message-error') }}
            </div>
        @endif
    </section>

@endsection
@section('section2')
    <section class="articles">
        <div class="container">
            <h1 class="text-center">Read articles</h1>
            <div class="blogs">
                @foreach( $posts->items() as $item )
                    <div class="blog">
                        <a href="article/{{$item->slug}}"><h3 class="text-center">{{$item->title}}</h3></a>
                        <p>{{$item->body}}</p>
                        <img src="images/{{$item->theme}}.png">
                        <address class="text-right font-italic">
                            Author: {{\Illuminate\Support\Facades\DB::table('users')->where('id',$item->author_id)->get()->first()->name . ' ' . \Illuminate\Support\Facades\DB::table('users')->where('id',$item->author_id)->get()->first()->lastname}} <br>
                            Last edited at: {{$item->updated_at}} <br>
                            Theme: <a href="read/{{$item->theme}}">{{$item->theme}}</a>
                        </address>
                        <div class="delete-edit float-right">
                            <a class="edit" href="edit/{{$item->slug}}"><i class="fa fa-2x fa-pencil"></i></a>
                            <a class="delete" href="edit/delete/{{$item->slug}}"><i class="fa fa-2x fa-trash"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center pagination">
        {{ with($posts)->links() }}
    </div>
{{--    {{dd(with($message))}}--}}
@endsection

