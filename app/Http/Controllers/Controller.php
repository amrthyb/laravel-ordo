<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return 'Buku baru';
    }
    public function show($nama)
    {
        return "Detail $nama";
    }

    public function store(Request $request)
    {
        $title = $request->input('title');

        //
    }
}
