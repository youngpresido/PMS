@extends('prisonslayout.master')
@section('content')
<br><br><br><br>
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All Warders</h2>
        </div>
            @if ($warder->isEmpty())
            <p> There are no convicts.</p>
            @else
            <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Role</th>
                            <th>Make Admin</th>
                
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($warder as $key=>$convict)
                    <tr>
                    <td>{!! $key+1 !!}</td>
                    <td>{{$convict->name}}</a></td>
                    <td>{{$convict->email}}</td>
                    <td>{{$convict->region}}</td>
                    <td>
                        @if($convict->type === 'default')
                        Not an Admin
                        @else
                        {{$convict->type}}
                        @endif

                    </td>
                    <td>
                        @if($convict->type !== 'admin')
                        <form method="post">
                            @csrf
                        <input type="hidden" name="name" value="{{$convict->id}}">
                        <input type="hidden" name="type" value="admin">
                        <input type="submit" class="btn btn-lg btn-primary" value="make admin"/>
                    </form>
                        @else
                        <form method="post">
                            @csrf
                        <input type="hidden" name="name" value="{{$convict->id}}">
                        <input type="hidden" name="type" value="default">
                        <input type="submit" class="btn btn-lg btn-danger" value="Remove as Admin"/>

                    </form>
                    @endif
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
            @endif
        </div>

    </div>
    </div>
</div>

@endsection