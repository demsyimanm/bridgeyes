<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $table = 'gallery';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'event_id',
        'gambar'
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
