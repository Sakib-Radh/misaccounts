<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccountHead;
class Transaction extends Model
{
    use HasFactory;

    public function accountHead()
    {
        return $this->belongsTo(AccountHead::class);
    }
}
