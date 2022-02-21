<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\TruyenRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Truyen;

class TruyenEloquentRepository extends EloquentRepository implements TruyenRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Truyen::class;
	}

}