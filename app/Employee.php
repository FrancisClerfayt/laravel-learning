<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Product;

class employee extends Model
{
	protected $table = 'employees';
	protected $guarded = ['id'];
	protected $fillable = [
		'last_name', 'first_name', 'position', 'phone', 'mail', 'company_id'
	];
	
	public function company(){
		return $this->belongsTo(Company::class);
	}
	
	public function product(){
		return $this->hasMany(Product::class);
	}
}
