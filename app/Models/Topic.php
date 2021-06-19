<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Topic extends Model
{
    use Uuids;

    protected $table = 'topics';

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }

    public function papers()
    {
        return $this->hasMany('App\Models\Paper');
    }

    public function algorithms()
    {
        return $this->hasMany('App\Models\Algorithm');
    }
}
