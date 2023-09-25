<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'field1' => 'required|string',
            'field2' => 'required|numeric',
            'field3' => 'required|string',
            'field4' => 'required|image|mimes:jpeg,png|max:2048', // Max size: 2MB
            'field5' => 'required|numeric|between:2.50,99.99',
        ]);
    
        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }
    
        // Process the form data here
        // You can save the uploaded image and other fields to the database
    
        // Redirect to the success page
        return redirect()->route('form.success');
    }
    
}
