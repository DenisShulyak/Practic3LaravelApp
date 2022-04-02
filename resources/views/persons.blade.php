@extends('layouts.site')

@section('title','Фамилии')
@section('content')
    <div class="leftcol">
        <table>
            <tr>
                <th>FIO</th>
            </tr>
            @foreach($persons as $person)
                <tr>
                    <td>{{$person['fio']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
