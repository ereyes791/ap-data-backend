<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Content extends Model
{
    use Uuids;
    protected $table = 'contents';

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
}
