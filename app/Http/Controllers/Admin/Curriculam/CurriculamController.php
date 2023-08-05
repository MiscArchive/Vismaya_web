<?php

namespace App\Http\Controllers\Admin\Curriculam;

use App\Actions\Curriculum\CreateCurriculumAction;
use App\Actions\Curriculum\UpdateCurriculumAction;
use App\DataTables\Curriculam\CurriculumDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Curriculum\CreateCurriculumRequest;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class CurriculamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CurriculumDataTable $dataTable)
    {
        return $dataTable->render('admin.curriculam.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.curriculam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCurriculumRequest $request,CreateCurriculumAction $createCurriculumAction)
    {
        try {
            $response = $createCurriculumAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create curriculum!');
            }
            return redirect()->route('curriculam.index')->withSuccess('Curriculum created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curriculum $curriculam)
    {
        return view('admin.curriculam.edit', compact('curriculam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCurriculumRequest $request, Curriculum $curriculam, UpdateCurriculumAction $updateCurriculumAction)
    {
        try {
            $response = $updateCurriculumAction->execute(collect($request->validated()),$curriculam);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update curriculum!');
            }
            return redirect()->route('curriculam.index')->withSuccess('Curriculum updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curriculum $curriculam)
    {
        try {
            $curriculam->delete();
            return response()->json(['status' => true, 'message' => 'Curriculam deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        };
    }
}
