<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
	protected $table = 'kategori';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public $incrementing = true;

	protected $fillable = array(
		'nama'
	);

	protected $SoftDelete = true;
	protected $dates = ['deleted_at'];

	public function artikels()
	{
		return $this->hasMany('App\Artikel');
	}
}
