<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Actions\Banners\CreateBannerAction;
use App\Actions\Banners\UpdateBannerAction;
use App\DataTables\Banners\BannerDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\CreateBannerRequest;
use App\Models\Banner;

class BannersController extends Controller
{
    public function index(BannerDataTable $dataTable)
    {
        return $dataTable->render('admin.banners.index');
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(CreateBannerRequest $request, CreateBannerAction $createBannerAction)
    {
        try {
            $response = $createBannerAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create banner!');
            }

            return redirect()->route('banners.index')->withSuccess('banner created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Banner $banner, UpdateBannerAction $updatebannerAction, CreateBannerRequest $request)
    {
        try {
            $response = $updatebannerAction->execute(collect($request->validated()), $banner);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update banner!');
            }

            return redirect()->route('banners.index')->withSuccess('banner updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function destroy(Banner $banner)
    {
        try {
            $banner->delete();

            return response()->json(['status' => true, 'message' => 'Banner deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        }
    }
}
