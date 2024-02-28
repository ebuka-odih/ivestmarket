<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    protected $guarded = [];

    public function withdraw()
    {
        return $this->hasMany(Withdraw::class);
    }
}
