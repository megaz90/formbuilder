<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormData;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $user = Auth::user();
        if ($user->forms) {
            return response()->json([
                'message' => 'You can only create 1 form'
            ], 202);
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

    public function show()
    {
        return view('show');
    }

    public function getForm()
    {
        $user = Auth::user();
        $form = $user->form->form_data;
        $data = json_decode($form->data);

        return response()->json($data);
    }

    public function check(Request $request)
    {
        dd($request->all());
    }
}
