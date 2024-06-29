@extends('layout.master')

@section('content')

    <div class="row my-5">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Görev Detayı</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="todo-baslik">Görev Başlığı</label>
                        <input type="text" class="form-control" id="todo-baslik" name="title" value="{{$todo->title}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="todo-aciklama">Görev İçeriği</label>
                        <textarea class="form-control" id="todo-aciklama" name="description" rows="3" readonly>{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="todo-aciklama">Görev Durumu: </label>
                        <span class="badge badge-danger">{{$todo->complated == 0 ? 'Bekliyor' : ''}}</span>
                        <span class="badge badge-success">{{$todo->complated == 1 ? 'Tamamlandı' : ''}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection