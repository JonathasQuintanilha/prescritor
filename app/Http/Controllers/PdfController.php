<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
	}

    public function showpdf($id){
    	$pdf = \PDF::loadView('prescricao.show')->with($id);
    	return $pdf->download('invoice.pdf');
    }
}
