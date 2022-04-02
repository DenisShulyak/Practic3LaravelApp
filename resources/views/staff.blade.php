@extends('layouts.site')

@section('title','Staff')
@section('content')
    <div class="leftcol">
        <table>
            <tr>
                <th>Staff</th>
            </tr>
            @foreach($staffs as $staff)
                <tr>
                    <td>{{$staff['staff']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
