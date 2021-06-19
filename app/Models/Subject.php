<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Subject extends Model
{
    use Uuids;
    protected $table = 'subjects';

    public function topics()
    {
        return $this->hasMany('App\Models\Topic');
    }
}
