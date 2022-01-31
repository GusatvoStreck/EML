@extends('layouts.main')
@section('title', $teacher->name)
@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/teachers/{{ $teacher->image }}" class="img-fluid" alt="">
            </div>
            <div id="info-container" class="col-md-6">
                <h1> {{ $teacher->name }} @auth @if(Auth::user()->id == $teacher->user_id)<a href="/teacher/editar/{{ $teacher->id }}"> <ion-icon name="brush-sharp" style="font-size: 28px; color: black;"></ion-icon></a>@endif @endauth</h1>
                <p class="teacher-price"><ion-icon name="pricetags-outline"></ion-icon> R${{ $teacher->prices }} por aula
                @if($teacher->addprices != "null")
                @foreach($teacher->addprices as $add)
                @if($add != "null")
                    + {{$add}}
                @endif
                @endforeach
                @endif
                </p>
                <p class="teacher-city"><ion-icon name="location-outline"></ion-icon>   {{ $teacher->city }} - {{ $teacher->state }}</p>
                <p class="teacher-class">
                <ul id="item-list">
                    @foreach($teacher->class as $class)
                  <li><ion-icon name="pin-outline"></ion-icon>{{ $class }}</li>
                    @endforeach
                </ul>
            </p>
                <p class="teacher-instruments"><p class="title">Instrumentos: 
                </p>
                <ul id="item-list">
                    @foreach($teacher->instruments as $instruments)
                    @if($instruments != NULL)
                    <li><ion-icon name="play-outline"></ion-icon>{{ $instruments }}</li>
                    @endif
                    @endforeach
                </ul>
            </p>
            </div>
           <div class="col-md-3 offset-md-3">
            <p class="teacher-email"><ion-icon name="mail-outline"></ion-icon> {{ $teacherId['email'] }} </p>
            </div>
            <div class="col-md-6 offset-md-3" id="description-container">
                <h3>Sobre o professor(a):</h3>
                <p class="teacher-description">{{ $teacher->biography }}</p>
            </div>
        </div>
    </div>

@endsection