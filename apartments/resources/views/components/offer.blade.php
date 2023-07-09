@extends('main')

@section('main')
    <p>Фото сотрудника: </p>
    <img src="{{ $offer->avatar ?? NULL }}" width="150" alt="">
    <p class="card-text">id контакт: {{$offer->b24_contact_id ?? NULL}}</p>
    <p class="card-text">id сделки: {{$offer->b24_deal_id ?? NULL}}</p>
    <p class="card-text">id сотрудника: {{$offer->b24_manager_id ?? NULL}}</p>
    <p class="card-text">ФИО сотрудника: {{$offer->name ?? NULL}}</p>
    <p class="card-text">Должность: {{$offer->position ?? NULL}}</p>
    <p class="card-text">Телефон сотрудника: {{$offer->phone ?? NULL}}</p>
    <p class="card-text">Статус: {{$offer->status ?? NULL}}</p>
    <p class="card-text">Дата создания: {{$offer->created_at ?? NULL}}</p>
    <p class="card-text">Дата окончания действия подборки для клиента: {{$offer->date_end ?? NULL}}</p>
    <hr>
    <h5>Подборки:</h5>
    @foreach ($offer->items as $val)
        <div class="card m-2" style="width:50%">
            <div class="card-header">
            Название: {{ $val->complex }}
            </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Тип квартиры: {{ $val->type }}, Площадь: {{ $val->square }}</li>
            <li class="list-group-item">Описание: {{ $val->description }}</li>
            <li class="list-group-item">Отметок нравится: {{ $val->like }}</li>
            </ul>
        </div>
    @endforeach
@endsection