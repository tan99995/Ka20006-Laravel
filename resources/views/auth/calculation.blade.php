@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Calculation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('calculation') }}"> 
                    <div class="form-group row">
                            <label for="calculationID" class="col-md-4 col-form-label text-md-right">{{ __('Calculation ID') }}</label>

                            <div class="col-md-6">
                                <input id="calculationID" type="text" name="calculationID" value="{{ old('calculationID') }}" required autocomplete="calculationID" autofocus>
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="optical" class="col-md-4 col-form-label text-md-right">{{ __('Optical') }}</label>

                            <div class="col-md-6">
                                <input id="optical" type="text" class="form-control @error('optical') is-invalid @enderror" name="optical" value="{{ old('optical') }}" required autocomplete="optical" autofocus>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
