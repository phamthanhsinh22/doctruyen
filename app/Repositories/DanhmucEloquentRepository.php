<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\DanhmucRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\DanhmucTruyen;

class DanhmucEloquentRepository extends EloquentRepository implements DanhmucRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\DanhmucTruyen::class;
	}

}