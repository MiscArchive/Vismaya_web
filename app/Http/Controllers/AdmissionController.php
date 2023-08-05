<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admissionForm(Request $request)
    {
        $admission = new Admission();
        $admission->parent_name = $request->parent_name;
        $admission->child_name = $request->parent_name;
        $admission->child_age = $request->child_age;
        $admission->class = $request->class;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->save();

        return redirect()->back();
    }
}
