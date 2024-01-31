<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logo = Logo::first();
        return view('dashboard.logo.edit', compact('logo'));
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
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        if ($request->hasFile('logo')) {
            // Delete the old image if it exists
            if ($logo->logo) {
                $oldImagePath = public_path('uploads/' . $logo->logo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('uploads/'), $nama_gambar);
            $logo->logo = $nama_gambar;
        }
        if ($request->hasFile('logo_title')) {
            // Delete the old image if it exists
            if ($logo->logo_title) {
                $oldImagePath = public_path('uploads/' . $logo->logo_title);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->logo_title->getClientOriginalExtension();
            $request->logo_title->move(public_path('uploads/'), $nama_gambar);
            $logo->logo_title = $nama_gambar;
        }

        $logo->save();
        return redirect('dashboard/logo')->with('success' , 'Data Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}
