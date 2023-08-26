<?php

namespace App\Http\Controllers\Admin\CardItem;

use App\Actions\CardItems\CreateCardItemAction;
use App\Actions\CardItems\UpdateCardItemAction;
use App\DataTables\CardItems\CardItemDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CardItems\CreateCardItemRequest;
use App\Http\Requests\CardItems\UpdateCardItemRequest;
use App\Models\CardItem;
use App\Models\Establishment;

class CardItemController extends Controller
{

  /**
     * Display a listing of the resource.
     */
    public function index(CardItemDataTable $dataTable)
    {
        return $dataTable->render('admin.cardItems.index');

    }

    public function create()
    {
        $establishments = Establishment::active()->get();
        return view('admin.cardItems.create',compact('establishments'));
    }

    public function store(CreateCardItemRequest $request, CreateCardItemAction $createCardItemAction)
    {
        try {
            $response = $createCardItemAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors('Failed to create Card Item!');
            }

            return redirect()->route('card-items.index')->withSuccess('Card item created successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }

    public function edit(CardItem $cardItem)
    {
        $establishments = Establishment::active()->get();
        return view('admin.cardItems.edit',compact(['establishments', 'cardItem']));
    }

    public function update(UpdateCardItemRequest $request, UpdateCardItemAction $updateCardItemAction, CardItem $cardItem)
    {
        try {
            $response = $updateCardItemAction->execute(collect($request->validated()), $cardItem);

            if (!$response) {
                return redirect()->back()->withErrors('Failed to update Item!');
            }
            return redirect()->route('card-items.index')->withSuccess('Item updated successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Something went wrong,Please try again!');
        }
    }



    public function destroy(CardItem $cardItem)
    {
        try {
            $cardItem->delete();
            return response()->json(['status' => true, 'message' => 'Item deleted successfully.']);
        } catch (\Throwable $th) {
            return response()->json(['status' => false, 'message' => 'Something went wrong,Please try again!.']);
        };
    }


}
