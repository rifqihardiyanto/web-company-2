<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('dashboard.about.edit', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar_1')) {
            // Delete the old image if it exists
            if ($about->gambar_1) {
                $oldImagePath = public_path('uploads/' . $about->gambar_1);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_1->getClientOriginalExtension();
            $request->gambar_1->move(public_path('uploads/'), $nama_gambar);
            $about->gambar_1 = $nama_gambar;
        }
        if ($request->hasFile('gambar_2')) {
            // Delete the old image if it exists
            if ($about->gambar_2) {
                $oldImagePath = public_path('uploads/' . $about->gambar_2);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_2->getClientOriginalExtension();
            $request->gambar_2->move(public_path('uploads/'), $nama_gambar);
            $about->gambar_2 = $nama_gambar;
        }


        $about->judul = $request->judul;
        $about->deskripsi = $request->deskripsi;
        $about->save();
        return redirect('dashboard/about')->with('success' , 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}
