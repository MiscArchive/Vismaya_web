<?php

namespace App\Http\Controllers\Admin\Enquiry;

use App\Actions\Enquiry\CreateEnquiryAction;
use App\DataTables\Enquiry\EnquiryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Enquiry\EnquiryRequest;

class EnquiryController extends Controller
{
    public function index(EnquiryDataTable $dataTable)
    {
        return $dataTable->render('admin.Enquiries.index');
    }

    public function store(EnquiryRequest $request, CreateEnquiryAction $createEnquiryAction)
    {
        try {
            $response = $createEnquiryAction->execute(collect($request->validated()));

            if (!$response) {
                return redirect()->back()->withErrors(['error' => 'Something went wrong, Please try again!']);
            }
            if ($request->establishment_id == null) {
                return redirect()->route('welcomePage')->with('success', 'Enquiry submitted successfully. Thank you for reaching out. We will be in touch with you shortly.');
            } else {
                return redirect()->route('welcomePage')->with('success', 'Enquiry submitted successfully. Thank you for reaching out. We will be in touch with you shortly.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'Something went wrong, Please try again!']);
        }
    }
}