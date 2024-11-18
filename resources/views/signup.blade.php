@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
    <form action="{{route('signup')}}" method="post"> 
        @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Имя</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Почта</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>

@endsection