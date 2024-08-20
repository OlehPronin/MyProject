@extends('layout.main')

@section('page-title')
{{ $title }}
@endsection

@section('content')
    <div class="block">
    <h1>Про нас</h1>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, adipisci in ratione, reiciendis nihil nobis recusandae voluptates, beatae iusto laudantium non debitis eius modi. Sint quidem odio veritatis non harum? </p>

    @if(count($params) > 0 )
    <ul>
        @foreach ($params as $el)
            <li>{{$el}}</li>    
        @endforeach
    </ul>
    @endif
    </div>
@endsection
