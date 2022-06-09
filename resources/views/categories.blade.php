@extends('layouts.layout')

@section('title')
    Категорії
@endsection

@section('content')

    <section class="all">
        <div class="container">
            <h1>
                Всі категорії
            </h1>
            <hr>
            <div class="row">
                @if($categories)
                    @foreach($categories as $category)
                        <div class="col-6 col-xl-2">
                            <div class="name">
                                <a href="{{route('category', $category->id)}}">{{$category->name}}</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1>
                        Нема категорій...
                    </h1>
                @endif
            </div>
        </div>
    </section>

@endsection
