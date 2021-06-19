<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Algorithm extends Model
{
    use Uuids;
    protected $table = 'algorithms';

    public function content()
    {
        return $this->hasOne('App\Models\Content');
    }
}
