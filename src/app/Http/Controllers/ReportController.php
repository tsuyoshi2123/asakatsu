<?php

namespace App\Http\Controllers;

use App\Models\Report;

class ReportController extends Controller
{
    /**
     * 朝活一覧画面
     *
     * @return \Illuminate\Http\Response
     */
    public function reportIndex()
    {
        return view('report');
    }
}
