@extends('prisonslayout.master')
@section('content')
<br><br><br><br>
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> {{$convict->name}}'s details</h2>
        </div>
        <table class="table">
        <tr>
            <th>Picture</h1>
            <td>
                <img class="img-responsive" width="350px" height="300px" src="/storage/upload/{{$convict->ppix}}" alt="{{$convict->name}}"/>
            </td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$convict->name}}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{$convict->dob}}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{$convict->gender}}</td>
        </tr>
        <tr>
            <th>Nationality</th>
            <td>{{$convict->Nationality}}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{$convict->state}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$convict->Address}}</td>
        </tr>
        <tr>
            <th>Crime</th>
            <td>{{$convict->crime}}</td>
        </tr>
        <tr>
            <th>Verdict</th>
            <td>{{$convict->Verdict}}</td>
        </tr>
        <tr>
            <th>Date Convicted</th>
            <td>{{$convict->dateconvicted}}</td>
        </tr>
        <tr>
            <th>Judge</th>
            <td>{{$convict->judge}}</td>
        </tr>
        </table>
    </div>
</div>
</div>
@endsection