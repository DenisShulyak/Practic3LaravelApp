@extends('layouts.site')

@section('title','Резюме')

@section('content')
<div class="leftcol"><!--**************Основное содержание страницы************-->
    <div class="pinline1">
        <img class="pic" src="{{asset('storage/images/'.$avatar)}}">
    </div>

    <p class="pinline second">
        {{$last_name}}

        <br>
        Телефон:
        {{$phone}}

    </p>

    <p  class="pinline third">
        {{$prof}}
        <br>

        Стаж:
        {{$staj}}

    </p>
</div>
@endsection
