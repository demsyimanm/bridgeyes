<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'event';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'judul',
        'konten',
        'tanggal',
        'hasil'
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
