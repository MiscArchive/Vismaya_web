<?php

namespace App\Http\Controllers\Admin\Branches;

use App\Actions\Branches\CreateBranchAction;
use App\Actions\Branches\UpdateBranchAction;
use App\DataTables\Branches\BranchDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Branches\CreateBranchRequest;
use App\Http\Requests\Branches\UpdateBranchRequest;
use App\Models\Branch;
use App\Models\Establishment;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BranchDataTable $dataTable)
    {
        return $dataTable->render('admin.branches.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $establishments = Establishment::active()->get();
        return view('admin.branches.create',compact('establishments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBranchRequest $request, CreateBranchAction $createBranchAction)
    {
        try {
            $response = $createBranchAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create branch!');
            }
            return redirect()->route('branches.index')->withSuccess('Branch created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        $establishments = Establishment::active()->get();
        return view('admin.branches.edit', compact(['branch', 'establishments']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBranchRequest $request, UpdateBranchAction $updateBranchAction, Branch $branch)
    {
        try {
            $response = $updateBranchAction->execute(collect($request->validated()), $branch);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update branch!');
            }
            return redirect()->route('branches.index')->withSuccess('Branch updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function destroy(Branch $branch)
    {
        try {
            $branch->delete();
            return response()->json(['status' => true, 'message' => 'Branch deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        };
    }
}
