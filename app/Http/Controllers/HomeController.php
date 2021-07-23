<?php

namespace App\Http\Controllers;

use App\Models\Pdfinsert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $pdfs = Pdfinsert::all();
        return view('pdfs', compact('pdfs'));
    }

    public function store(Request $req){

        $req->validate([
            'imageFile' => 'required',
        ]);

        if (request('imageFile')) {
            $inputs['imageFile'] = request('imageFile')->store('uploads', 'public');
            $pdf = new Pdfinsert();
            $pdf->pdf = $inputs['imageFile'];;
            $pdf->save();
        }

        return redirect()->back();
        }

}
