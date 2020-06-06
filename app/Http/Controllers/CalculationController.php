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

    public function home(){
       

        if (request()->has('galaxy_id')){
            $calculations= redshift_table::orderByDesc('assigned_calc_ID')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('optical_u')){
            $calculations= redshift_table::orderByDesc('optical_u')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('optical_g')){
            $calculations= redshift_table::orderByDesc('optical_g')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('optical_r')){
            $calculations= redshift_table::orderByDesc('optical_r')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('optical_i')){
            $calculations= redshift_table::orderByDesc('optical_i')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('optical_z')){
            $calculations= redshift_table::orderByDesc('optical_z')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_three_six')){
            $calculations= redshift_table::orderByDesc('infrared_three_six')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_four_five')){
            $calculations= redshift_table::orderByDesc('infrared_four_five')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_five_eight')){
            $calculations= redshift_table::orderByDesc('infrared_five_eight')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_eight_zero')){
            $calculations= redshift_table::orderByDesc('infrared_eight_zero')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_J')){
            $calculations= redshift_table::orderByDesc('infrared_J')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('infrared_K')){
            $calculations= redshift_table::orderByDesc('infrared_K')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('radio_1.4')){
            $calculations= redshift_table::orderByDesc('radio_one_four')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else if (request()->has('redshift_result')){
            $calculations= redshift_table::orderByDesc('redshift_result')
                                        ->where('user_ID', auth()->id())->paginate(12);
        }
        else{
         $calculations= redshift_table::where('user_ID', auth()->id())->paginate(12);}
      
        return view('history', compact('calculations'));
    }
 public function show($id)
    {
        //
    }
    public function store(){
+

        //$calculated = new redshift_table();

        // redshift_table::create(request(['assigned_calc_ID', 'user_ID', 'optical_u', 'optical_g', 'optical_r', 'optical_i', 'optical_z', 'infrared_three_six', 'infrared_four_five', 'infrared_five_eight', 'infrared_eight_zero', 'infrared_J', 'infrared_K', 'radio_one_four', 'redshift_result']));

        //$calculated->save();

        // return redirect('/calculation');


         $calculated = new redshift_table();
		$calculated->assigned_calc_ID = $request->input('assigned_calc_ID');
    	$calculated->optical_u = $request->input('optical_u');
    	$calculated->optical_g = $request->input('optical_g');
    	$calculated->optical_r = $request->input('optical_r');
    	$calculated->optical_i = $request->input('optical_i');
    	$calculated->optical_z = $request->input('optical_z');
    	$calculated->infrared_three_six = $request->input('infrared_three_six');
    	$calculated->infrared_four_five = $request->input('infrared_four_five');
    	$calculated->infrared_five_eight = $request->input('infrared_five_eight');
    	$calculated->infrared_eight_zero = $request->input('infrared_eight_zero');
    	$calculated->infrared_J = $request->input('infrared_J');
    	$calculated->infrared_K = $request->input('infrared_K');
        $calculated->radio_one_four = $request->input('radio_one_four');
    	$calculated->user_ID = 2;
    	// optical g + optical u
    	$str =  $calculated->optical_u . " " . $calculated->optical_g . " " . $calculated->optical_r  . " " . $calculated->optical_i . " " . $calculated->optical_z .  " " . $calculated->infrared_three_six . " " . $calculated->infrared_four_five . " " . $calculated->infrared_five_eight . " " . $calculated->infrared_eight_zero . " " . $calculated->infrared_J . " " . $calculated->infrared_K  . " " .  $calculated->radio_one_four;
   		$str = escapeshellcmd($str);
    	$process = new Process('python testWebPy.py ' . $str);
    	try {
  			  $process->mustRun();
   			  $calculated->redshift_result = $process->getOutput();
		} catch (ProcessFailedException $exception) {
   			echo $exception->getMessage();
        	$calculated->redshift_result = -1;
        }
       
        $calculated->save();
      
        // return redirect('/calculation')->with(['result', $calculated]);
        return view('/calculation');
    }
}
