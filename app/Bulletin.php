<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bulletin extends Model
{
    use SoftDeletes;

    protected $table = 'bulletin';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'tanggal',
        'file',
        'event_id'
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }


}
