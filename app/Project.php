<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $fillable = ['name', 'content'];

	protected $guarded = ['id'];

}
