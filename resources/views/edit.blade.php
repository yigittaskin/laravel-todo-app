@extends('layout.master')

@section('content')

<form action="{{ route('update', $todo->id) }}" method="POST">
    @csrf
    <div class="row my-5">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Görevi Düzenle</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="todo-baslik">Yapılacak Görevin Başlığı</label>
                        <input type="text" class="form-control" id="todo-baslik" name="title" value="{{$todo->title}}">
                    </div>
                    <div class="form-group">
                        <label for="todo-aciklama">Yapılacak Görevin İçeriği</label>
                        <textarea class="form-control" id="todo-aciklama" name="description" rows="3">{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="todo-aciklama">Bu Görev Tamamlandı mı?</label>
                        <select class="form-control" id="todo-aciklama" name="complated">
                            <option value="0" {{$todo->complated == 0 ? 'selected':''}}>Hayır</option>
                            <option value="1" {{$todo->complated == 1 ? 'selected':''}}>Evet</option>
                        </select>
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