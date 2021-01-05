<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Product extends Model
{
	protected $table = 'products';
	protected $guarded = ['id'];
	protected $fillable = [
		'name', 'price', 'employee_id'
	];
	
	public function employee(){
		return $this->belongsTo(Employee::class);
	}
}