@extends('prisonslayout.master')
@section('content')
<br><br><br><br>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Prisoner') }}</div>

                <div class="card-body">
                
                    <form method="POST" action="{{ route('submitPrisoner') }}" enctype="multipart/form-data">
                    @if(session('msg'))
                    <div class="alert alert-success">{{session('msg')}}</div>
                    @endif
                    
                    @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                    @endforeach
                        
                        
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">

                               <select name="gender">
                                <option value="male">Male</option>
                                <option value="female">female</option>
                               </select>

                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        </div>
                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>

                            <div class="col-md-6">

                               <input id="nationality" type="text" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="Nationality" value="{{ old('Nationality') }}" required autofocus>

                                @if ($errors->has('Nationality'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">

                               
                                <input type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">

                               <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus>

                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">

                               
                                <textarea  rows="4" cols="3" class="form-control{{ $errors->has('Address') ? ' is-invalid' : '' }}" name="Address" value="{{ old('Address') }}" required autofocus></textarea>
                                @if ($errors->has('Address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="crime" class="col-md-4 col-form-label text-md-right">{{ __('Crime') }}</label>

                            <div class="col-md-6">

                               
                                <textarea rows="4" cols="3" class="form-control{{ $errors->has('crime') ? ' is-invalid' : '' }}" name="crime" value="{{ old('crime') }}" required autofocus></textarea>
                                @if ($errors->has('Address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('crime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Verdict" class="col-md-4 col-form-label text-md-right">{{ __('Verdict') }}</label>

                            <div class="col-md-6">

                               
                                <textarea rows="4" cols="3" class="form-control{{ $errors->has('Verdict') ? ' is-invalid' : '' }}" name="Verdict" value="{{ old('Verdict') }}" required autofocus></textarea>
                                @if ($errors->has('Verdict'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Verdict') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dateconvicted" class="col-md-4 col-form-label text-md-right">{{ __('Date convicted') }}</label>

                            <div class="col-md-6">

                               
                                <input type="date" class="form-control{{ $errors->has('datecoonvicted') ? ' is-invalid' : '' }}" name="dateconvicted" value="{{ old('dateconvicted') }}" required autofocus>
                                @if ($errors->has('dateconvicted'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dateconvicted') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        
                        <div class="form-group row">
                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>

                            <div class="col-md-6">
                                <input id="region" type="text" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" value="{{ old('region') }}" required autofocus>

                                @if ($errors->has('region'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judge" class="col-md-4 col-form-label text-md-right">{{ __('Judge') }}</label>

                            <div class="col-md-6">
                                <input id="judge" type="text" class="form-control{{ $errors->has('judge') ? ' is-invalid' : '' }}" name="judge" value="{{ old('judge') }}" required autofocus>

                                @if ($errors->has('judge'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('judge') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ppix" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                            <div class="col-md-6">
                                <input id="region" type="file" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="ppix" value="{{ old('ppix') }}" required autofocus>

                                @if ($errors->has('ppix'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ppix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection