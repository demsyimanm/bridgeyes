<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{
    use SoftDeletes;

    protected $table = 'artikel';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = array(
        'judul',
        'konten',
        'tanggal',
        'users_id',
        'kategori_id'
    );
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }


}
