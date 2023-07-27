@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

@if(session('message'))
<div class="success-alert">
    <span class="success-alert--text">{{ session('message') }}</span>
</div>
@endif

@error('content')
<div class="error-alert">
    <span class="error-alert--text">{{ $errors->first('content') }}</span>
</div>
@enderror

<div class="Todo-form__content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="form__group--create">
            <div class="form__input--text">
                <input type="text" name="content" value="">
            </div>
            <div class="form__button">
                <button class="form__button-submit">作成</button>
            </div>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__title">
                <th class="todo-table__title--text">Todo</th>
            </tr>
            @foreach ($Todos as $todo)
                <tr class="todo-table__content">
                    <form class="edit-form" action="/todos/update" method="post">
                        @method('patch')
                        @csrf
                        <th class="edit-form__text">
                            <input type="text" name="content" value="{{ $todo['content'] }}">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                        </th>
                        <td class="edit-form__button">
                            <button class="edit-form__button-submit" type="submit">更新</button>
                        </td>
                    </form>
                    <form class="delete-form" action="/todos/delete" method="post">
                        @method('delete')
                        @csrf
                        <td class="delete-form__button">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection