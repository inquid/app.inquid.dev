<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CentralAmericaController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('central_america_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.centralAmericas.index');
    }
}
