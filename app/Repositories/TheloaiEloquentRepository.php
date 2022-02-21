<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\TheloaiRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Theloai;

class TheloaiEloquentRepository extends EloquentRepository implements TheloaiRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Theloai::class;
	}

}