@extends('layouts.site')

@section('title','fio')
@section('content')
    <div class="leftcol">
        <table>
            <tr>
                <th>FIO</th>
                <th>Stage</th>
            </tr>
            @foreach($persons as $person)
                <tr>
                    <td>{{$person['fio']}}</td>
                    <td>{{$person['Stage']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
