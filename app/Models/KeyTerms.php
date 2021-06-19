<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class KeyTerms extends Model
{
    use Uuids;
    protected $table = 'terms';
}
