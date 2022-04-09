<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidateController extends Controller
{
    // imageValidator
    public function imageValidator(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    // documentValidator
    public function documentValidator(Request $request)
    {
        $this->validate($request, [
            'document' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
        ]);
    }
}
