<?php

namespace App\Http\Controllers;

use App\Models\DateCount;
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
        $userList = User::get();
        $loginUser = User::find(Auth::id());

        $rankToDesc = [];
        $dateArray = ['weekly', 'month', 'yearly'];
        foreach ($dateArray as $date) {
            $rankToDesc[$date] = DateCount::get()->sortByDesc($date . '_count')->values()->toArray();
        }

        $outPutRanks = [];
        foreach($rankToDesc as $date => $dateRanks) {
            foreach($dateRanks as $index => $rank) {
                $outPutRanks[$date][$index]['name'] = User::find($rank['user_id'])->name;
                $outPutRanks[$date][$index]['count'] = $rank[$date . '_count'];
            }
        }

        return view('report', compact(
            'userList',
            'loginUser',
            'outPutRanks'
        ));
    }
}
