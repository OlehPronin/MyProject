@extends('layout.main')

@section('page-title')
    {{ $article->title }}
@endsection

@section('content')
    <h1>{{ $article->title }} / Статья на Blog Spot</h1>
    <a href="/" class="back-button">На главную</a>
    <div class="articles one">
        <div class="post">
            <img src="/storage/img/articles/{{$article->image}}" alt="{{ $article->title }}"/>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->anons }}</p><br>
            <p>{!! $article->text !!}</p>

            <!-- Проверка на наличие пользователя -->
            <p><b>Автор:</b> {{ $article->user ? $article->user->name : 'Неизвестен' }}</p>

            @auth
                @if(Auth::user()->id == $article->user_id)
                    <br><hr>
                    <a href="/article/{{$article->id}}/edit">Изменить</a>
                    {!! Form::open(['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
                        {{ Form::submit('Удалить', ['class' => 'delete-button']) }}
                    {!! Form::close() !!}
                @endif
            @endauth
        </div>
    </div>

    <!-- Комментарии -->
    <div class="comments">
        <h2>Комментарии</h2>

        @foreach ($article->comments as $comment)
            <div class="comment">
                <p><strong>{{ $comment->user_name }}:</strong></p>
                <p>{{ $comment->content }}</p>
                <p><small>Добавлено {{ $comment->created_at->format('d.m.Y H:i') }}</small></p>
                <hr>
            </div>
        @endforeach

        @auth
            <h3>Добавить комментарий</h3>
            {!! Form::open(['route' => ['comments.store', $article->id]]) !!}
                <div class="form-group">
                    {!! Form::label('content', 'Ваш комментарий:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 4]) !!}
                </div>
                {!! Form::submit('Добавить комментарий', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        @endauth
    </div>
@endsection
