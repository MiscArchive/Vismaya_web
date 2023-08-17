<?php

namespace App\Actions\Branches;

use App\Models\Branch;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateBranchAction
{
    public function execute(Collection $collection, Branch $branch)
    {
        try {
           $updateBranch = $branch->update($collection->toArray());
            if ($updateBranch) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
