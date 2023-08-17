<?php

namespace App\Actions\Branches;

use App\Models\Branch;
use Illuminate\Support\Collection;

class CreateBranchAction
{
    public function execute(Collection $collection)
    {
        try {
            $branch = Branch::create($collection->toArray());
            if($branch){
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
