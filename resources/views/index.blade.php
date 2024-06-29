@extends('layout.master')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Yapılacaklar Listesi</h2>
            <h5 class="my-2">Toplam Görev: <span class="badge badge-info">{{$todos->count()}}</span></h5>
        </div>
        <div class="col-md-12">
            <a href="{{route('create')}}" class="btn btn-dark my-3">Listeye Görev Ekle</a>
        </div>
        <div class="col-md-12">
            @foreach ($todos as $todo)
            <div class="col-md-12 flex-wrap md:flex-nowrap d-flex justify-content-between align-items-center my-3 todo-box {{$todo->complated =='0'? 'bg-bekliyor' : 'bg-tamamlandi'}}">
                <div class="col-4 col-md-3">
                @if($todo->complated == '0')
                    <svg fill="#000000" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 502 502" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M428.483,73.516C381.076,26.108,318.045,0,251,0S120.924,26.108,73.517,73.516C26.108,120.925,0,183.957,0,251 s26.108,130.075,73.517,177.484C120.924,475.892,183.955,502,251,502s130.076-26.108,177.483-73.516 C475.892,381.075,502,318.043,502,251S475.892,120.925,428.483,73.516z M414.341,414.342C370.711,457.972,312.702,482,251,482 s-119.711-24.028-163.341-67.658C44.028,370.71,20,312.702,20,251S44.028,131.29,87.659,87.658C131.289,44.028,189.298,20,251,20 s119.711,24.028,163.341,67.658C457.972,131.29,482,189.298,482,251S457.972,370.71,414.341,414.342z"></path> <path d="M251,60.756C146.099,60.756,60.756,146.099,60.756,251S146.099,441.244,251,441.244S441.244,355.901,441.244,251 S355.901,60.756,251,60.756z M251,421.244c-93.873,0-170.244-76.371-170.244-170.244S157.127,80.756,251,80.756 S421.244,157.127,421.244,251S344.873,421.244,251,421.244z"></path> <path d="M343,243h-83V107c0-5.523-4.478-10-10-10c-5.522,0-10,4.477-10,10v146c0,5.523,4.478,10,10,10h93c5.522,0,10-4.477,10-10 S348.522,243,343,243z"></path> <path d="M250,385c-53.294,0-101.078-31.746-121.738-80.876c-2.142-5.092-8.007-7.481-13.094-5.342 c-5.092,2.141-7.484,8.004-5.342,13.095C133.613,368.447,188.636,405,250,405c5.522,0,10-4.477,10-10S255.522,385,250,385z"></path> <path d="M111.008,283.892c5.464-0.81,9.236-5.895,8.426-11.358C118.482,266.115,118,259.542,118,253c0-5.523-4.478-10-10-10 c-5.522,0-10,4.477-10,10c0,7.521,0.555,15.079,1.65,22.467c0.735,4.966,5.005,8.535,9.879,8.535 C110.018,284.002,110.512,283.966,111.008,283.892z"></path> </g> </g> </g> </g></svg>
                @else
                    <svg width="45px" height="45px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-width:20px;}</style> </defs> <g data-name="Layer 2" id="Layer_2"> <g data-name="E408, Success, Media, media player, multimedia" id="E408_Success_Media_media_player_multimedia"> <circle class="cls-1" cx="256" cy="256" r="246"></circle> <polyline class="cls-1" points="115.54 268.77 200.67 353.9 396.46 158.1"></polyline> </g> </g> </g></svg>
                @endif
                </div>
                <div class="col-4 col-md-3">
                    <span>Başlık: </span><br><h6 class="baslik">{{ \Illuminate\Support\Str::limit($todo->title, 38, '...') }}</h6>
                </div>
                <div class="col-4 col-md-3">
                    <span>Açıklama: </span><br><span class="aciklama">{{ \Illuminate\Support\Str::limit($todo->description, 10, '...') }}</span>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-between align-items-center flex-wrap actions">
                    <a href="{{route('show', $todo->id)}}" class="btn btn-info m-1">Detay</a>
                    <a href="{{route('edit', $todo->id)}}" class="btn btn-warning m-1">Düzenle</a>
                    <a href="{{route('destroy', $todo->id)}}" class="btn btn-danger m-1">Sil</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection