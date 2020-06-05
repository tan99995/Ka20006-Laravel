
@extends('layouts.app_boot')
@section('title','History')
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
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
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

<body style="background-image: url('/images/bg1.jpg')">
<div class="card">
<div class="overflow-auto">


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Optical u</th>
       <th scope="col">Optical g</th>
        <th scope="col">Optical r</th>
         <th scope="col">Optical i</th>
          <th scope="col">Optical z</th>
          <th scope="col">Infrared 3.6</th>
          <th scope="col">Infrared 4.5</th>
          <th scope="col">Infrared 5.8</th>
          <th scope="col">Infrared 8.0</th>
          <th scope="col">Infrared j</th>

          <th scope="col">Infrared k</th>
          <th scope="col">Radio 1.4</th>
          <th scope="col">Redshift Result</th>

      
    </tr>
  </thead>
  <tbody>
   
        @foreach($calculations as $calculation)
         <tr>
    <th scope="row">{{ $calculation->calculation_ID }}</th>
      <td>{{ $calculation->optical_u }}</td>
      <td>{{ $calculation->optical_g }}</td>
     <td>{{ $calculation->optical_r }}</td>
    <td>{{ $calculation->optical_i }}</td>
      <td>{{ $calculation->optical_z }}</td>
      <td>{{ $calculation->infrared_three_six }}</td>
      <td>{{ $calculation->infrared_four_five }}</td>
      <td>{{ $calculation->infrared_five_eight }}</td>
      <td>{{ $calculation->infrared_eight_zero }}</td>
      <td>{{ $calculation->infrared_J }}</td>
      <td>{{ $calculation->infrared_K }}</td>
      <td>{{ $calculation->radio_one_four }}</td>
      <td>{{ $calculation->redshift_result }}</td>
 </tr>
        @endforeach
     
  </tbody>
</table>
</div>
</div>
</body>
         @endsection