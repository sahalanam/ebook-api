<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Name' => 'Jamal Yuda',
            'Kelas' => 'XII RPL 6',
            'No tlp' => '912831923',
        ];
    }
}
