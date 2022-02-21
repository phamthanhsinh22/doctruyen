<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\ChapterRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Chapter;

class ChapterEloquentRepository extends EloquentRepository implements ChapterRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Chapter::class;
	}

}