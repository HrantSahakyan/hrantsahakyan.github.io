@extends('layouts.app')
@section('title') Article @endsection
@section('section1')
{{--    {{dd(with($post->title))}}--}}
<section>
    <div class="container">
        <div class="article-single ">
            <h3 class="title-blue text-center">{{with($post->title)}}</h3>
            <p>{{with($post->body)}}</p>
            <div class="article-single-image">
                <img src="{{asset('images/'.$post->theme.'.png')}}">
            </div>
            <address class="text-right font-italic">
                Author: {{\Illuminate\Support\Facades\DB::table('users')->where('id',$post->author_id)->get()->first()->name . ' ' . \Illuminate\Support\Facades\DB::table('users')->where('id',$post->author_id)->get()->first()->lastname}} <br>
                Last edited at: {{$post->updated_at}} <br>
                Theme: <a href="../read/{{$post->theme}}">{{$post->theme}}</a>
            </address>
        </div>
    </div>
</section>

@endsection
@section('section2')
    <section class="read-also mt-5">
        <div class="container">
            <h3 class="title-blue text-center">Read also</h3>
            <div class="read-also-articles">
                @foreach($last_posts as $last_post)
                    <div class="read-also-article">
                        <a href="../article/{{$last_post->slug}}"><h3 class="text-center">{{$last_post->title}}</h3></a>
                        <p>{{$last_post->body}}</p>
                        <img src="{{asset('images/'.$last_post->theme.'.png')}}">
                        <address class="text-right font-italic">
                            Author: {{\Illuminate\Support\Facades\DB::table('users')->where('id',$last_post->author_id)->get()->first()->name . ' ' . \Illuminate\Support\Facades\DB::table('users')->where('id',$last_post->author_id)->get()->first()->lastname}} <br>
                            Last edited at: {{$last_post->updated_at}} <br>
                            Theme: <a href="../read/{{$last_post->theme}}">{{$last_post->theme}}</a>
                        </address>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
