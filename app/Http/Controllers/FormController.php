<?php

namespace App\Http\Controllers;

use App\Models\Form;
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
        // Create a new Example model instance and populate it with form data
        $isi = new Form();
        $isi->field1 = $request->input('field1');
        $isi->field2 = $request->input('field2');
        $isi->field3 = $request->input('field3');
        // $isi->field4 = $request->input('field4');
        $isi->field4 = $request->file('field4')->store('public/uploads');
        $isi->field5 = $request->input('field5');
        
        // Save the model to the database
        $tersimpan = $isi->save();
        // Redirect to the success page
        if($tersimpan){
            return redirect()->route('form.success');
        }
        else {
            return redirect()->back()->with('error', 'Failed to save data');
    
        }
        
        
    }
    public function show($id) {
           $isiForm = Form::find($id);
           
           return view('dataForm', compact('isiForm'));
    }
    
}
