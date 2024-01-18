<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;
class Url extends Model
{
    protected $fillable = ['url'];
    // use HasFactory;
    public function resolveRouteBinding($value, $field = null)
	{
		return $this->find(Hashids::decode($value)[0] ?? null);
	}
}
