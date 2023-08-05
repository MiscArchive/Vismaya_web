<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Actions\Gallery\CreateGalleryAction;
use App\Actions\Gallery\UpdateGalleryAction;
use App\DataTables\Gallery\GalleryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\CreateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index(GalleryDataTable $dataTable)
    {
        return $dataTable->render('admin.gallery.index');
    }


    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(CreateGalleryRequest $request, CreateGalleryAction $createGalleryAction)
    {
        try {
            $response = $createGalleryAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create Galley!');
            }
            return redirect()->route('gallery.index')->withSuccess('Gallery created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit',compact('gallery'));
    }

    public function update(CreateGalleryRequest $request, Gallery $gallery, UpdateGalleryAction $updateGalleryAction)
    {
        try {
            $response = $updateGalleryAction->execute(collect($request->validated()),$gallery);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update gallery!');
            }
            return redirect()->route('gallery.index')->withSuccess('Gallery updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function destroy(Gallery $gallery)
    {
        try {
            $gallery->delete();
            return response()->json(['status' => true, 'message' => 'Gallery deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        };
    }
}
