<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getId(Request $request){

        $id = $request->id;

        return pelanggan::find($id);
    }
}
?>