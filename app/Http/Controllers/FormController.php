<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormData;
use Exception;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'json' => 'required|array',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }

        $form = Form::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => auth()->user()->id,
        ]);

        FormData::create([
            'form_id' => $form->id,
            'data' => json_encode($request->json),
        ]);

        return response()->json([
            'message' => 'Form created successfully',
        ], 200);
    }
}
