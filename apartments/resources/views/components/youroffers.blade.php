@extends('main')

@section('main')
    <div class="d-flex">
      @foreach ($offers as $offer)
        <div div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">Подборка: {{$offer->id}}</h5>
              <p class="card-text">ФИО сотрудника: {{$offer->name ?? NULL}}</p>
              <span class="badge bg-info text-dark">Дата создания: {{$offer->created_at ?? NULL}}</span><br>
              <span class="badge bg-info text-dark">Дата истечения действия подборки: {{$offer->date_end ?? NULL}}</span><br>
              <a href="{{ route('offer.show', $offer->id) }}" class="btn btn-primary m-1">Посмотреть подборку</a>
            </div>
          </div>
      @endforeach
    </div>
@endsection