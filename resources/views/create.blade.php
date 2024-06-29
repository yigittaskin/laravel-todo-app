@extends('layout.master')

@section('content')

<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="row my-5">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Yapılacaklar Ekle</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="todo-baslik">Yapılacak Görevin Başlığı</label>
                        <input type="text" class="form-control" id="todo-baslik" name="title">
                        <small id="todoTitle" class="form-text text-muted">Örn: Kedi bakımı, market alışveriş listesi vs.</small>
                    </div>
                    <div class="form-group">
                        <label for="todo-aciklama">Yapılacak Görevin İçeriği</label>
                        <textarea class="form-control" id="todo-aciklama" name="description" rows="3"></textarea>
                        <small id="todoTitle" class="form-text text-muted">Örn: Marketten domates, salatalık, yoğurt, içecek, peynir ve süt alınacak.</small>
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Yapılacaklar Listesine Ekle!</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection