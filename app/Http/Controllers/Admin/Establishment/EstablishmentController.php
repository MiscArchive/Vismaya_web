<?php

namespace App\Http\Controllers\Admin\Establishment;

use App\Actions\Establishments\CreateEstablishmentAction;
use App\Actions\Establishments\UpdateEstablishmentAction;
use App\DataTables\Establishments\EstablishmentDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Establishments\CreateEstablishmentRequest;
use App\Http\Requests\Establishments\UpdateEstablishmentRequest;
use App\Models\Establishment;

class EstablishmentController extends Controller
{
    public function index(EstablishmentDataTable $dataTable){
        return $dataTable->render('admin.establishments.index');

    }

    public function create()
    {
        return view('admin.establishments.create');
    }

    public function store(CreateEstablishmentRequest $request, CreateEstablishmentAction $createEstablishmentAction)
    {
        try {
            $response = $createEstablishmentAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create establishment!');
            }
            return redirect()->route('establishments.index')->withSuccess('Establishment created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }


    public function edit(Establishment $establishment)
    {
        return view('admin.establishments.edit', compact('establishment'));
    }

    public function update(Establishment $establishment, UpdateEstablishmentAction $updateEstablishmentAction, UpdateEstablishmentRequest $request)
    {
        try {
            $response = $updateEstablishmentAction->execute(collect($request->validated()),$establishment);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update establishment!');
            }
            return redirect()->route('establishments.index')->withSuccess('Establishment updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function destroy(Establishment $establishment)
    {
        try {
            $establishment->delete();
            return response()->json(['status' => true, 'message' => 'Establishment deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        };
    }
}
