<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index()
    {
        $apprentices =  Apprentice::all();
        return response()->json($apprentices);
    }
    public function store(Request $request)
    {
        $request->validate([
            'document_type' => 'required',
            'document_number' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'data_sheet' => 'required',
            'state' =>
            'required|in:P,FJ,
            FI,MF',
            'date' => 'required',
        ]);
        return Apprentice::create($request->all());
    }
    public function show(string $id)
    {
        return Apprentice::findOrFail($id);
    }
    public function update(Request $request, string $id)
    {
        $apprentices = Apprentice::findOrFail($id);

        $request->validate([
            'document_type' => 'required',
            'document_number' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'data_sheet' => 'required',
            'state' =>
            'required|in:P,FJ,
            FI,MF',
            'date' => 'required',
        ]);

        $apprentices->update($request->all());

        return $apprentices;
    }
    public function destroy(string $id)
    {
        $apprentices = Apprentice::findOrFail($id);
        $apprentices->delete();

        return response()->json([
            'message' => 'Aprendiz elimando exitosamente'
        ]);
    }
}
