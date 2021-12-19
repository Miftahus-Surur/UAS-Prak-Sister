<?php

namespace App\Http\Controllers;

use App\eiger;
use Illuminate\Http\Request;

class IdController extends Controller
{
    public function getId(Request $request){

        $id = $request->id;

        return eiger::find($id);
    }
}
?>