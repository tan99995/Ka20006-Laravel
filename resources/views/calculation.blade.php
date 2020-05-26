@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Redshift Estimator') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('calculation') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="c_id" class="col-md-4 col-form-label text-md-right">{{ __('Calculation ID') }}</label>

                            <div class="col-md-4">
                                <input id="c_id" type="text" class="form-control @error('c_id') is-invalid @enderror" name="c_id" value="{{ old('c_id') }}" required autocomplete="c_id" autofocus>

                                @error('c_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label for="optical_u" class="col-md-2 col-form-label text-md-right">{{ __('Optical u') }}</label>

                            <div class="col-md-2">
                                <input id="optical_u" type="text" class="form-control @error('optical_u') is-invalid @enderror" name="optical_u" value="{{ old('optical_u') }}" required autocomplete="optical_u" autofocus>

                                @error('optical_u')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        <!-- </div>
                        <div class="form-group col"> -->
                            <label for="optical_g" class="col-md-2 col-form-label text-md-right">{{ __(' Optical g') }}</label>

                            <div class="col-md-2">
                                <input id="optical_g" stepped="o.o1" type="number" class="form-control @error('c_optical_gid') is-invalid @enderror" name="optical_g" value="{{ old('optical_g') }}" required autocomplete="optical_g" autofocus>

                                @error('optical_g')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div>
                        <div class="form-group row"> -->
                            <label for="optical_r" class="col-md-2 col-form-label text-md-right">{{ __('Optical r') }}</label>

                            <div class="col-md-2">
                                <input id="optical_r" type="text" class="form-control @error('optical_r') is-invalid @enderror" name="optical_r" value="{{ old('optical_r') }}" required autocomplete="optical_r" autofocus>

                                @error('optical_r')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="optical_i" class="col-md-4 col-form-label text-md-right">{{ __('Optical i') }}</label>

                            <div class="col-md-6">
                                <input id="optical_i" type="text" class="form-control @error('optical_i') is-invalid @enderror" name="optical_i" value="{{ old('optical_i') }}" required autocomplete="optical_i" autofocus>

                                @error('optical_i')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="optical_z" class="col-md-4 col-form-label text-md-right">{{ __('Optical z') }}</label>

                            <div class="col-md-6">
                                <input id="optical_z" type="text" class="form-control @error('optical_z') is-invalid @enderror" name="optical_z" value="{{ old('optical_z') }}" required autocomplete="optical_z" autofocus>

                                @error('c_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_3.6" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 3.6') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_3.6" type="text" class="form-control @error('infrared_3.6') is-invalid @enderror" name="infrared_3.6" value="{{ old('infrared_3.6') }}" required autocomplete="infrared_3.6" autofocus>

                                @error('infrared_3.6')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_4.5" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 4.5') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_4.5" type="text" class="form-control @error('infrared_4.5') is-invalid @enderror" name="infrared_4.5" value="{{ old('infrared_4.5') }}" required autocomplete="infrared_4.5" autofocus>

                                @error('infrared_4.5')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_5.8" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 5.8') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_5.8" type="text" class="form-control @error('infrared_5.8') is-invalid @enderror" name="infrared_5.8" value="{{ old('infrared_5.8') }}" required autocomplete="infrared_5.8" autofocus>

                                @error('infrared_5.8')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_8.0" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 8.0') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_8.0" type="text" class="form-control @error('infrared_8.0') is-invalid @enderror" name="infrared_8.0" value="{{ old('infrared_8.0') }}" required autocomplete="infrared_8.0" autofocus>

                                @error('infrared_8.0')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_J" class="col-md-4 col-form-label text-md-right">{{ __('Infrared J') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_J" type="text" class="form-control @error('infrared_J') is-invalid @enderror" name="infrared_J" value="{{ old('infrared_J') }}" required autocomplete="infrared_J" autofocus>

                                @error('infrared_I')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_K" class="col-md-4 col-form-label text-md-right">{{ __('Infrared K') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_K" type="text" class="form-control @error('infrared_K') is-invalid @enderror" name="infrared_K" value="{{ old('infrared_K') }}" required autocomplete="infrared_K" autofocus>

                                @error('infrared_K')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="radio_1.4" class="col-md-4 col-form-label text-md-right">{{ __('Radio 1.4') }}</label>

                            <div class="col-md-6">
                                <input id="radio_1.4" type="text" class="form-control @error('radio_1.4') is-invalid @enderror" name="radio_1.4" value="{{ old('radio_1.4') }}" required autocomplete="radio_1.4" autofocus>

                                @error('radio_1.4')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-6">
                            <div class="col-md-20 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Calculate') }}
                                </button>
                            </div>
                        </div>
  
                       

                    </form>
                     <div class="form-group row">
                            <label for="redShift" class="col-md-4 col-form-label text-md-right">{{ __('RedShift') }}</label>

                            <div class="col-md-6">
                              

                                @error('redShift')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 @endsection
