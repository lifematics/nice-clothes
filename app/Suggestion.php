<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Suggestion extends Model
{
	protected $table = 'Suggestion';
	public function getData($value,$d)
	{
	$data = \DB::table('Suggestion')->where("$value","$d")->get();
	$id = \DB::table('Suggestion')->where("$value",$d)->pluck('id');
	return $id;
	}
	public function get2Data($value,$d)
	{
	$data = \DB::table('Suggestion')->where("$value","$d")->get();
	return $data;
	}
}
