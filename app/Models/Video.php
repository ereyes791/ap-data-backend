<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\Uuids;
class Video extends Model
{
    use Uuids;
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    protected $table = 'videos';

    public function content()
    {
        return $this->hasOne(Content::class,'id');
    }

    public function key_Terms()
    {
        return $this->hasMany(KeyTerms::class);
    }
    /**
     * Attributes that cannot be mass assigned.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attribute to be used for storing the uuids.
     *
     * @var string
     */
    public $uuid = 'project_uuid';
}
