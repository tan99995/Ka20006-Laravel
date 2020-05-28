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
                            <label for="assigned_calc_ID" class="col-md-4 col-form-label text-md-right">{{ __('Calculation ID') }}</label>

                            <div class="col-md-6">
                                <input id="assigned_calc_ID" type="text" class="form-control @error('assigned_calc_ID') is-invalid @enderror" name="assigned_calc_ID" value="{{ old('assigned_calc_ID') }}" required autocomplete="assigned_calc_ID" autofocus>

                                @error('assigned_calc_ID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="optical_u" class="col-md-4 col-form-label text-md-right">{{ __('Optical u') }}</label>

                            <div class="col-md-6">
                                <input id="optical_u" type="text" class="form-control @error('optical_u') is-invalid @enderror" name="optical_u" value="{{ old('optical_u') }}" required autocomplete="optical_u" autofocus>

                                @error('optical_u')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="optical_g" class="col-md-4 col-form-label text-md-right">{{ __(' Optical g') }}</label>

                            <div class="col-md-6">
                                <input id="optical_g" stepped="o.o001" type="number" class="form-control @error('c_optical_gid') is-invalid @enderror" name="optical_g" value="{{ old('optical_g') }}" required autocomplete="optical_g" autofocus>

                                @error('optical_g')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="optical_r" class="col-md-4 col-form-label text-md-right">{{ __('Optical r') }}</label>

                            <div class="col-md-6">
                                <input id="optical_r" stepped="o.o1" type="number" class="form-control @error('optical_r') is-invalid @enderror" name="optical_r" value="{{ old('optical_r') }}" required autocomplete="optical_r" autofocus>

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
                                <input id="optical_i" stepped="o.o1" type="number" class="form-control @error('optical_i') is-invalid @enderror" name="optical_i" value="{{ old('optical_i') }}" required autocomplete="optical_i" autofocus>

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
                                <input id="optical_z" stepped="o.o1" type="number" class="form-control @error('optical_z') is-invalid @enderror" name="optical_z" value="{{ old('optical_z') }}" required autocomplete="optical_z" autofocus>

                                @error('c_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_three_six" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 3.6') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_three_six" stepped="o.o1" type="number" class="form-control @error('infrared_three_six') is-invalid @enderror" name="infrared_three_six" value="{{ old('infrared_three_six') }}" required autocomplete="infrared_three_six" autofocus>

                                @error('infrared_three_six')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_four_five" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 4.5') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_four_five" stepped="o.o1" type="number" class="form-control @error('infrared_four_five') is-invalid @enderror" name="infrared_four_five" value="{{ old('infrared_four_five') }}" required autocomplete="infrared_four_five" autofocus>

                                @error('infrared_four_five')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_five_eight" class="col-md-4 col-form-label text-md-right">{{ __('Infrared five_eight') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_five_eight" stepped="o.o1" type="number" class="form-control @error('infrared_five_eight') is-invalid @enderror" name="infrared_five_eight" value="{{ old('infrared_five_eight') }}" required autocomplete="infrared_five_eight" autofocus>

                                @error('infrared_five_eight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_eight_zero" class="col-md-4 col-form-label text-md-right">{{ __('Infrared 8.0') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_eight_zero" stepped="o.o1" type="number" class="form-control @error('infrared_eight_zero') is-invalid @enderror" name="infrared_eight_zero" value="{{ old('infrared_eight_zero') }}" required autocomplete="infrared_eight_zero" autofocus>

                                @error('infrared_eight_zero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_J" class="col-md-4 col-form-label text-md-right">{{ __('Infrared J') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_J" stepped="o.o1" type="number" class="form-control @error('infrared_J') is-invalid @enderror" name="infrared_J" value="{{ old('infrared_J') }}" required autocomplete="infrared_J" autofocus>

                                @error('infrared_J')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="infrared_K" class="col-md-4 col-form-label text-md-right">{{ __('Infrared K') }}</label>

                            <div class="col-md-6">
                                <input id="infrared_K" stepped="o.o1" type="number" class="form-control @error('infrared_K') is-invalid @enderror" name="infrared_K" value="{{ old('infrared_K') }}" required autocomplete="infrared_K" autofocus>

                                @error('infrared_K')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="radio_one_four" class="col-md-4 col-form-label text-md-right">{{ __('Radio 1.4') }}</label>

                            <div class="col-md-6">
                                <input id="radio_one_four" stepped="o.o1" type="number" class="form-control @error('radio_one_four') is-invalid @enderror" name="radio_one_four" value="{{ old('radio_one_four') }}" required autocomplete="radio_one_four" autofocus>

                                @error('radio_one_four')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="redshift_result" class="col-md-4 col-form-label text-md-right">{{ __('Redshift') }}</label>

                            <div class="col-md-6">
                                <input id="redshift_result" type="number" class="form-control @error('redshift_result') is-invalid @enderror" name="redshift_result" value="{{ old('redshift_result') }}" required autocomplete="redshift_result" autofocus>

                                @error('redshift_result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-6">
                            <div class="col-md-20 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Calculate') }}
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
