@extends('layouts.layout')

@section('title')
    {{$event->name}}
@endsection

@section('content')

    <section class="poster-main-info">
        <div class="container">
            @if($event)
                <h1>
                    {{$event->name}}
                </h1>
                <hr>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="block">
                            <img src="../images/{{$event->img}}.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="full-poster-info">
                            <div class="written-info">
                                <p>Ведучий:</p>
                                @if($event->announcer)
                                    <a href="{{route('announcer', $event->announcer->id)}}">
                                        <p>{{$event->announcer->name}}</p>
                                    </a>
                                @else
                                    <p>Нема ведучого</p>
                                @endif
                            </div>
                            <div class="written-info">
                                <p>Жанри:</p>
                                @if($event->categories)
                                    @foreach($event->categories as $category)
                                        <a href="{{route('category', $category->id)}}">
                                            <p>{{$category->name}}</p>
                                        </a>
                                    @endforeach
                                @else
                                    <p>Нема категорій...</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h1>
                    Нема івенту...
                </h1>
            @endif
        </div>
    </section>

@endsection
