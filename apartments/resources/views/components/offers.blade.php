@extends('main')

@section('main')
<div class="container" >
  <form method="POST" enctype="multipart/form-data" action="{{ route('offers.create') }}">
    @csrf
    <div class="mb-3">
      <label class="form-label">id контакта</label>
      <input name="b24_contact_id" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">id сделки</label>
        <input name="b24_deal_id" type="text" class="form-control">
    </div>

      <div class="mb-3">
        <label class="form-label">id сотрудника</label>
        <input name="b24_manager_id" type="text" class="form-control">
    </div>

      <div class="mb-3">
        <label class="form-label">ФИО сотрудника</label>
        <input name="name" type="text"  class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Должность сотрудника</label>
      <input name="position" type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Телефон сотрудника</label>
      <input name="phone" type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Фото сотрудника</label>
      <input name="avatar" type="file" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Статус обработки</label>
      <input name="status" type="text" class="form-control">
    </div>

    <div class="mb-3">
      <label class="form-label">Дата истечения действия подборки</label>
      <input name="date_end" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Отправить</button>
  </form>
</div>
@endsection