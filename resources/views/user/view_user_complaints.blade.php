@extends('layouts.app')
@section('content')
    <div class="container">
        <div style="text-align: center">
            <h1>Filed Complaints By You</h1>
        </div>
        <br><br>
        <table class="table" width="100%">
            <tr>
                <th width="20%">Added Date</th>
                <th width="70%">Complaint</th>
                <th width="10%"></th>
            </tr>
            @foreach(Auth::user()->user_complaints as $complaint)
                <tr>
                    <td>{{$complaint->created_at}}</td>
                    <td>{{$complaint->complaint}}</td>
                    <td>
                        <form action=""><input type="button" value="Delete" class="btn btn-danger"></form></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection