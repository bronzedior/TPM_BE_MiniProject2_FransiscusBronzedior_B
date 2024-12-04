<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConsultantController extends Controller
{
    public function welcome(){
        $consultants = Consultant::all();
        return view('welcome', compact('consultants'));
    }

    public function seedClients(){
        Artisan::call('migrate:fresh --seed');

        return response('Database refreshed and seeded successfully!', 200);
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'position' => 'required|min:3',
            'industry' => 'required|min:3',
            'expertise' => 'required|min:3',
            'hourlyRate' => 'required|gt:10',
            'availability' => 'required|date',
            'image' => 'required|mimes:png,jpg'
        ]);

        $filePath = public_path('storage/images');
        $file = $request->file('image');
        $fileName = $request->title . '-' . $request->author . '-' . $file->getClientOriginalName();
        $file->move($filePath, $fileName);

        Consultant::create([
            'name' => $request->name,
            'position' => $request->position,
            'industry' => $request->industry,
            'expertise' => $request->expertise,
            'hourlyRate' => $request->hourlyRate,
            'availability' => $request->availability,
            'client_id' => $request->client_needs,
            'image' => $fileName,
        ]);

        return redirect(route('welcome'));
    }

    public function addConsultant(){
        $clients = Client::all();
        return view('addConsultant', compact('clients'));
    }

    public function editConsultant($id){
        $consultant = Consultant::findOrFail($id);
        $clients = Client::all();
        return view('editConsultant', compact('consultant', 'clients'));
    }

    public function updateConsultant(Request $request, $id) {
        $consultant = Consultant::findOrFail($id);

        // $consultant->update([
        //     'name' => $request->name,
        //     'position' => $request->position,
        //     'industry' => $request->industry,
        //     'expertise' => $request->expertise,
        //     'hourlyRate' => $request->hourlyRate,
        //     'availability' => $request->availability,
        //     'client_id' => $request->client_needs,
        // ]);

        ///////

        // $data = [
        //     'name' => $request->name,
        //     'position' => $request->position,
        //     'industry' => $request->industry,
        //     'expertise' => $request->expertise,
        //     'hourlyRate' => $request->hourlyRate,
        //     'availability' => $request->availability,
        //     'client_id' => $request->client_needs,
        // ];

        // // Check if a new image file is uploaded
        // if ($request->hasFile('image')) {
        //     $filePath = public_path('storage/images');
        //     $file = $request->file('image');
        //     $fileName = $request->name . '-' . $file->getClientOriginalName();
        //     $file->move($filePath, $fileName);

        //     // Include the new image path in the update
        //     $data['image'] = $fileName;

        //     // Optionally, delete the old image if it exists
        //     if ($consultant->image && file_exists(public_path('storage/images/' . $consultant->image))) {
        //         unlink(public_path('storage/images/' . $consultant->image));
        //     }
        // }

        // Validate the input
    $request->validate([
        'name' => 'required|min:3',
        'position' => 'required',
        'industry' => 'required',
        'expertise' => 'required',
        'hourlyRate' => 'required|integer',
        'availability' => 'required|date',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $data = $request->only([
        'name', 'position', 'industry', 'expertise', 'hourlyRate', 'availability', 'client_needs',
    ]);

    // Handle the profile picture upload if a new file is provided
        if ($request->hasFile('image')) {
            $filePath = public_path('storage/images');
            $file = $request->file('image');
            $fileName = $request->name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($filePath, $fileName);

            // Delete the old image if it exists
            if ($consultant->image && file_exists(public_path('storage/images/' . $consultant->image))) {
                unlink(public_path('storage/images/' . $consultant->image));
            }

            $data['image'] = $fileName;
        }

        $consultant->update($data);

        return redirect(route('welcome'))->with('success', 'Consultant updated successfully!');
    }

    public function deleteConsultant($id){
        Consultant::destroy($id);

        return redirect(route('welcome'));
    }
}
