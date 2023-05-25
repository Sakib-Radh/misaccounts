<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\AccountHead;
use App\Models\Group;

class HierarchyController extends Controller
{
    public function getTableData()
    {
        // $groups = Group::whereNull('parent_id')->with('children')->get();

        $groups = Group::with('subGroups.accountHead.transactions')->get();

        // return( response() -> json($groups) );
        return view('table', compact('groups'));
    }

}
