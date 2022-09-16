<?php

namespace Devshimul\Customblade\Http\Controllers;

use App\Http\Controllers\Controller;
use Devshimul\Customblade\Models\PackageTest;
use Illuminate\Http\Request;

class CustomBladeController extends Controller 
{
    public function index(){
        $data = PackageTest::all();
        return view('Customblade::test', compact('data'));
    }

    public function storeTest(Request $request){
        PackageTest::create($request->all());
        return back();
    }


}
