<?php

namespace App\Http\Controllers;

use App\redshift_table;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    //
    public function index(){
        return view('calculation');
    }

    public function store(){

        //$calculate = new redshift_table();

    /*
        if (isset($_POST['form_submit']) && $_POST['form_submit'] != "") :
            $userinput = $_POST['input'];
            ob_start();
            passthru(("python redshift.py " . $userinput));
            $output = ob_get_clean();
            echo($output);
        endif;
     */
       $redshift_result = 1;
       
        redshift_table::create(request(['assigned_calc_ID', 'optical_u', 'optical_g', 'optical_r', 'optical_i', 'optical_z', 'infrared_three_six', 'infrared_four_five', 'infrared_five_eight', 'infrared_eight_zero', 'infrared_J', 'infrared_K', 'radio_one_four', 'redshift_result']));

     //   $calculate->save();

        return redirect('/calculation');
    }
}
