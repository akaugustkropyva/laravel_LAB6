@extends('layouts.layout')

@section('title')
    Ведучі
@endsection

@section('content')

    <section class="all">
        <div class="container">
            <h1>
                Всі ведучі
            </h1>
            <hr>
            <div class="row">
                @if($announcers)
                    @foreach($announcers as $announcer)
                        <div class="col-6 col-xl-4">
                            <div class="name">
                                <a href="{{route('announcer', $announcer->id)}}">{{$announcer->name}}</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>
                        Нема ведучих...
                    </h1>
                @endif
            </div>
        </div>
    </section>

@endsection
