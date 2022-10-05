<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * 朝活一覧画面
     *
     * @return \Illuminate\Http\Response
     */
    public function reportIndex()
    {
        $loginUser = User::find(Auth::id());
        $userList = User::get();
        $ranks = User::get();
        $ranks = $ranks->sortBy('total_cumulative')->values()->toArray();
        return view('report', compact(
            'userList',
            'loginUser',
            'ranks'
        ));
    }
}
