<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Paper extends Model
{
    use Uuids;
    protected $table = 'papers';

    public function content()
    {
        return $this->hasOne('App\Models\Content');
    }
}
