<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShareController extends Controller
{
    public function index()
    {
        return View('admin.share');
    }
}
