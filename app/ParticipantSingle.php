<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParticipantSingle extends Model
{
    use SoftDeletes;

    protected $table = 'participant_single';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'nama',
        'team',
        'kategori',
        'event_id',
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }


}
