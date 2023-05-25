<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccountHead;
use App\Models\Transaction;

class Group extends Model
{
    use HasFactory;

    public function parentGroup()
    {
        return $this->belongsTo(Group::class, 'parent_id');
    }

    public function subGroups()
    {
        return $this->hasMany(Group::class, 'parent_id');
    }

    public function accountHead()
    {
        return $this->hasMany(AccountHead::class);
    }

    public function getTotalAmount()
    {
        $totalAmount = 0;
 
        foreach ($this->accountHead as $accountHead) {
            $totalAmount = $totalAmount + $accountHead -> getTotalAmount();
        }

        return $totalAmount;
    }
}
