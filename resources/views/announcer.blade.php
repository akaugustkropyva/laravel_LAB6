@extends('layouts.layout')

@section('title')
    {{$announcer->name}}
@endsection

@section('content')

    <section class="posters-block">
        <div class="container">
            @if($announcer)
                <h1>
                    {{$announcer->name}}
                </h1>
                <hr>
                <div class="row">
                    @if($announcer->events)
                        @foreach($announcer->events as $event)
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
                        <hr>
                    @endif
                </div>
            @else
                <h1>
                    Нема ведучого...
                </h1>
                <hr>
            @endif
        </div>
    </section>

@endsection
