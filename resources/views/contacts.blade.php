@extends('layouts.app')


@section('title')
    Страница контактов
@endsection

@section('content')

    <h1>Страница контактов</h1>

    <form action="{{ route('submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">
                Мы никогда не будем делиться вашей электронной почтой с кем-либо еще.
            </div>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Тема сообщения</label>
            <input type="text" class="form-control" id="subject" name="subject" >
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea type="text" class="form-control" id="message" name="message"></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Отправить</button>
    </form>

@endsection
