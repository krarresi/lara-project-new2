@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Создать новую заявку</h2>
    <form action="{{ route('applications.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="service_type" class="form-label">Тип услуги</label>
            <select name="service_type" id="service_type" class="form-select" required>
                <option value="">Выберите услугу</option>
                <option value="Генеральная уборка">Генеральная уборка</option>
                <option value="Уборка после ремонта">Уборка после ремонта</option>
                <option value="Уборка офиса">Уборка офиса</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="date_time" class="form-label">Дата и время</label>
            <input type="datetime-local" name="date_time" id="date_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Адрес</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
@endsection
