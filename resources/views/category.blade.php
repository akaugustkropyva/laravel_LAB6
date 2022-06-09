@extends('layouts.layout')

@section('title')
    {{$category->name}}
@endsection

@section('content')

    <section class="posters-block">
        <div class="container">
            @if($category)
                <h1>
                    {{$category->name}}
                </h1>
                <hr>
                <div class="row">
                    @if($category->events)
                        @foreach($category->events as $event)
                            <div class="col-6 col-xl-4">
                                <div class="poster">
                                    <p class="name">{{$event->name}}</p>
                                    <img src="../images/{{$event->img}}.jpg" alt="">
                                    <a href="{{route('event', $event->id)}}">Детальніше</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>
                            Нема івентів...
                        </h1>
                    @endif
                </div>
            @else
                <h1>
                    Нема категорії...
                </h1>
            @endif
        </div>
    </section>

@endsection
