@extends('layouts.app_boot')
@section('title', 'Calculation Page' )
@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'RedShift') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('history') }}">{{ __('History') }}</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" >
                        <!-- Authentication Links -->
                       

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    
                             
                   
                    </ul>
                </div>
            </div>
        </nav>
  <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="background-image: url('/images/bg1.jpg')">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body" >
                    <h2 class="title">Guest Calculation Form</h2>
                    <form method="POST" action="{{ route('calculation') }}" style="align-items:center;">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Calculation ID</label>
                                    <input id="assigned_calc_ID" type="text" class="input--style-4" name="assigned_calc_ID" value="{{ old('assigned_calc_ID') }}" required autocomplete="assigned_calc_ID" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                        <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Optical U</label>
                                    <input id="optical_u" type="text" class="input--style-4" name="optical_u" value="{{ old('optical_u') }}" required autocomplete="optical_u" autofocus>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Optical R</label>
                                    <input id="optical_r" type="text" class="input--style-4" name="optical_r" value="{{ old('optical_r') }}" required autocomplete="optical_r" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                         <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Optical I</label>
                                    <input id="optical_i" type="text" class="input--style-4" name="optical_i" value="{{ old('optical_i') }}" required autocomplete="optical_i" autofocus>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Optical G</label>
                                    <input id="optical_g" type="text" class="input--style-4" name="optical_g" value="{{ old('optical_g') }}" required autocomplete="optical_g" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                         <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Optical Z</label>
                                    <input id="optical_z" type="text" class="input--style-4" name="optical_z" value="{{ old('optical_z') }}" required autocomplete="optical_z" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                         <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared 3.6</label>
                                    <input id="infrared_three_six" type="text" class="input--style-4" name="infrared_three_six" value="{{ old('infrared_three_six') }}" required autocomplete="infrared_three_six" autofocus>
                                </div>
                            </div>
                             <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared 4.5</label>
                                    <input id="infrared_four_five" type="text" class="input--style-4" name="infrared_four_five" value="{{ old('infrared_four_five') }}" required autocomplete="infrared_four_five" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                         <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared 5.8</label>
                                    <input id="infrared_five_eight" type="text" class="input--style-4" name="infrared_five_eight" value="{{ old('infrared_five_eight') }}" required autocomplete="infrared_five_eight" autofocus>
                                </div>
                            </div>
                             <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared 8.0</label>
                                    <input id="infrared_eight_zero" type="text" class="input--style-4" name="infrared_eight_zero" value="{{ old('infrared_eight_zero') }}" required autocomplete="infrared_eight_zero" autofocus>
                                </div>
                            </div>
                        <!-- </div>
                        <div class="row"> -->
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared J</label>
                                    <input id="infrared_J" type="text" class="input--style-4" name="infrared_J" value="{{ old('infrared_J') }}" required autocomplete="infrared_J" autofocus>
                                </div>
                            </div>
                             <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Infrared K</label>
                                    <input id="infrared_K" type="text" class="input--style-4" name="infrared_K" value="{{ old('infrared_K') }}" required autocomplete="infrared_K" autofocus>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label text-md-right">Radio 1.4</label>
                                    <input id="radio_one_four" type="text" class="input--style-4" name="radio_one_four" value="{{ old('radio_one_four') }}" required autocomplete="radio_one_four" autofocus>
                                </div>
                                <div class="input-group">
                                    <label class="label text-md-right">Redshift</label>
                                    <input id="redshift_result" type="text" class="input--style-4" name="redshift_result" value="{{ old('redshift_result') }}" required autocomplete="redshift_result" autofocus>
                                </div>
                                 <div class="input-group">
                                    <label class="label text-md-right">User</label>
                                    <input id="user_ID" type="text" class="input--style-4" name="user_ID" value="{{ old('user_ID') }}" required autocomplete="user_ID" autofocus>
                                </div>
                            </div>
                            </div>


                      
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Calculate</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    
 @endsection
