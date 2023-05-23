<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\AccountHead;
use App\Models\Group;

class DataInsertion extends Controller
{
    public function insertTransaction(Request $request)
    {
        $transaction = new Transaction();
        $transaction -> account_head_id = $request -> input('account_head_id');
        $transaction -> date = $request -> input('date');
        $transaction -> debit = $request -> input('debit');
        $transaction -> credit = $request -> input('credit');

        $transaction -> save();
    }

    public function insertAccountHead(Request $request)
    {
        $accountHead = new AccountHead();
        $accountHead -> name = $request -> input('name');
        $accountHead -> parent_id = $request -> input('parent_id');

        $accountHead-> save();
    }

    public function insertGroup(Request $request)
    {
        $group = new Group();
        $group -> name = $request -> input('name');
        $group -> parent_id = $request -> input('parent_id');

        $group -> save();
    }
}
