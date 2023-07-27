@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<!--if session('message')
<div class="success-alert">
    <span class="success-alert--text">{{ session('message') }}</span>
</div>
endif
-->
<div class="todo__content">
    <div class="todo__create-form">
        <form action="" class="form">
            <div class="form-title">
                <h2 class="form-title--text">新規作成</h2>
            </div>
            <div class="todo__create-form__item">
                <div class="form__TextBox">
                    <input type="text" name="content">
                </div>
                <div class="form__SelectBox">
                    <select class="form__SelectBox--select">
                        <option value="">カテゴリ</option>
                    </select>
                </div>
                <div class="form__button">
                    <button class="form__button-submit">作成</button>
                </div>
            </div>
        </form>
    </div>
    <div class="todo__search-form">
        <form action="" class="form">
            <div class="form-title">
                <h2 class="form-title--text">Todo検索</h2>
            </div>
            <div class="todo__search-form__item">
                <div class="form__TextBox">
                    <input type="text" name="">
                </div>
                <div class="form__SelectBox">
                    <select class="form__SelectBox--select">
                        <option value="">カテゴリ</option>
                    </select>
                </div>
                <div class="form__button">
                    <button class="form__button-submit">検索</button>
                </div>
            </div>
        </form>
    </div>
    <div class="todo__table">
        <div class="table-title">
            <h3>Todo</h3>
            <h3>カテゴリ</h3>
        </div>
        <table class="table__inner">
            <tr class="table__content">
                <form class="update-form">
                    <td class="edit-form__text">
                        <input type="text" name="">
                    </td>
                    <td class="edit-form__text">
                        <input type="text" name="">
                    </td>
                    <td class="edit-form__button">
                        <button class="edit-form__button-submit" type="submit">更新</button>
                    </td>
                </form>
                <form class="delete-form">
                    <td class="delete-form__button">
                        <button class="delete-form__button-submit" type="submit">削除</button>
                    </td>
                </form>
            </tr>
        </table>
    </div>
@endsection