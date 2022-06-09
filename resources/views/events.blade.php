@extends('layouts.layout')

@section('title')
    Усі події
@endsection

@section('content')

    <section class="posters-block all-posters">
        <div class="container">
            <h1>
                Усі події
            </h1>
            <hr>
            <div class="row">
                @if($events)
                    @foreach($events as $event)
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
                        Нема подій...
                    </h1>
                @endif
            </div>
        </div>
    </section>

@endsection
