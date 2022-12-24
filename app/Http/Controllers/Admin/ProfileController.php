<?php
//このページが、【PHP/Laravel】03 ControllerとRoutingの関係について理解しよう。の課題です。

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function add()
    {
        //これは、admiフォルダのprofileフォルダのcreate.blade.phpを指している。
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }
    public function edit()
    {
        //これは、admiフォルダのprofileフォルダのedit.blade.phpを指している。
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
