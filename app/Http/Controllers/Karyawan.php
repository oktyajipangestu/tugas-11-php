<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class Karyawan extends Controller
{
    public function getData() {
        $data = DB::table('tbl_karyawan')->get();
        if(count($data) > 0) {
            $res['message'] = "Success!";
            $res['value'] = $data;
            return response($res);
        } else {
            $res['message'] = "Empty!";
            return response($res);
        }
    }
}
