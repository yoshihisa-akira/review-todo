@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endsection

@section('content')

@if(session('message'))
<div class="success-alert">
    <span class="success-alert--text">{{ session('message') }}</span>
</div>
@endif

@foreach ($errors->all() as $error)
<div class="error-alert">
    <span class="error-alert--text">{{ $error }}</span>
</div>
@endforeach

<div class="Todo-form__content">
    <form class="create-form" action="/categories" method="post">
        @csrf
        <div class="form__group--create">
            <div class="form__input--text">
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div class="form__button">
                <button class="form__button-submit">作成</button>
            </div>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__title">
                <th class="todo-table__title--text">category</th>
            </tr>
            @foreach ($categories as $category)
                <tr class="todo-table__content">
                    <form class="edit-form" action="/categories" method="post">
                        @csrf
                        <th class="edit-form__text">
                            <input type="text" name="name" value="{{ $category['name'] }}">
                        </th>
                        <td class="edit-form__button">
                            <button class="edit-form__button-submit" type="submit">更新</button>
                        </td>
                    </form>
                    <form class="delete-form" action="" method="post">
                        @csrf
                        <td class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection