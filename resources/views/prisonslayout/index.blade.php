@extends('prisonslayout.master')
@section('content')
<br><br><br><br>
<div class="container">
            <div align="center">
            <form method="get">
              @csrf
              <input placeholder="Search" type="text" name="query">
              <input type="submit"/>
            </form>
          
        </div>
        <br><br>
<div class="row justify-content-center">

        <div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All Prisoners</h2>
        </div>
            @if ($convicts->isEmpty())
            <p> There are no convicts.</p>
            @else
            <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>State</th>
                            <th>Sentence</th>
                            <th>Date Convicted</th>
                
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($convicts as $key=>$convict)
                    <tr>
                    <td>{!! $key+1 !!}</td>
                    <td><a href="{{ route('prisoners.show',$convict->id)}}">{{$convict->name}}</a></td>
                    <td>{{$convict->gender}}</td>
                    <td>{{$convict->state}}</td>
                    <td>{{$convict->Verdict}}</td>
                    <td>{{$convict->dateconvicted}}</td>
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