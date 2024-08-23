@extends('layout.main')

@section('page-title')
Изменение статьи
@endsection

@section('content')
    <h1>Изменение статьи</h1>
    
    <a href="/" class="back-button">На главную</a>
    {!! Form::open(['class' => 'article-form', 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        {{ Form::label('title', 'Название статьи') }}
        {{ Form::text('title', $article->title, ['placeholder' => 'Введите название статьи']) }}

        {{ Form::label('anons', 'Анонс статьи') }}
        {{ Form::textarea('anons', $article->anons, ['placeholder' => 'Введите анонс статьи']) }}

        {{ Form::label('main_image', 'фото статьи')}}
        {{ Form::file('main_image') }}

        {{ Form::label('text', 'Основной текст статьи') }}
        {{ Form::textarea('text', $article->text, ['placeholder' => 'Введите текст статьи', 'id' => 'editor']) }}

        {{ Form::submit('Изменить', ['class' => 'add-button']) }}
    {!! Form::close() !!}
@endsection
<!-- добавление редактора текста -->
@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/ckeditor5-build-classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    document.querySelector('#editor').style.display = 'block'; /* Показываем редактор после инициализации */
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection