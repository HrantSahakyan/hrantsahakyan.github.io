@extends('layouts.app')
@section('title')Read blog @endsection

@section('section1')
    <section class="articles">
        <div class="container">
            <h1 class="text-center">Read articles</h1>
            <div class="blogs">
                @foreach( $posts->items() as $item )
                <div class="blog">
                    <a href="../article/{{$item->slug}}"><h3 class="text-center">{{$item->title}}</h3></a>
                    <p>{{$item->body}}</p>
                    <img src="{{asset('images/'.$item->theme.'.png')}}">
                    <address class="text-right font-italic">
                        Author: {{\Illuminate\Support\Facades\DB::table('users')->where('id',$item->author_id)->get()->first()->name . ' ' . \Illuminate\Support\Facades\DB::table('users')->where('id',$item->author_id)->get()->first()->lastname}} <br>
                        Last edited at: {{$item->updated_at}} <br>
                        Theme: <a href="../read/{{$item->theme}}">{{$item->theme}}</a>
                    </address>
                </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
@section('section2')
        <div class="d-flex justify-content-center pagination">
            {{ with($posts)->links() }}
        </div>

@endsection
{{--{{dd(with($posts))}}--}}
