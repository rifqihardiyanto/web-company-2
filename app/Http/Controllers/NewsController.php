<?php

namespace App\Http\Controllers;

use App\Models\Categorynews;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        $category = Categorynews::all();
        return view('dashboard.news.index', compact('news', 'category'));
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
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'slug' => '',
            'id_kategori' => 'required',
            'sub_judul' => '',
            'isi_1' => 'required',
            'isi_2' => '',
            'isi_3' => '',
            'gambar_1' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_2' => 'required|image|mimes:jpg,png,jpeg,webp',
            'gambar_3' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        $input = $request->all();
        if ($request->has('gambar_1')){
            $gambar = $request->file('gambar_1');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_1'] =  $nama_gambar;
        }
        if ($request->has('gambar_2')){
            $gambar = $request->file('gambar_2');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_2'] =  $nama_gambar;
        }
        if ($request->has('gambar_3')){
            $gambar = $request->file('gambar_3');
            $nama_gambar = time() . rand(1,9) . '.' .$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_3'] =  $nama_gambar;
        }

        {
            News::create($input);
        }
        return redirect('dashboard/news')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = News::with('categorynews')->findOrFail($id);
        $category = Categorynews::all();
        return view('dashboard.news.edit', compact('news', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'slug' => '',
            'sub_judul' => 'required',
            'slug' => 'required',
            'id_kategori' => 'required',
            'sub_judul' => '',
            'isi_1' => 'required',
            'isi_2' => '',
            'isi_3' => '',
        ]);

        if ($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        
        if ($request->hasFile('gambar_1')) {
            // Delete the old image if it exists
            if ($news->gambar_1) {
                $oldImagePath = public_path('uploads/' . $news->gambar_1);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_1->getClientOriginalExtension();
            $request->gambar_1->move(public_path('uploads/'), $nama_gambar);
            $news->gambar_1 = $nama_gambar;
        }
        if ($request->hasFile('gambar_2')) {
            // Delete the old image if it exists
            if ($news->gambar_2) {
                $oldImagePath = public_path('uploads/' . $news->gambar_2);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_2->getClientOriginalExtension();
            $request->gambar_2->move(public_path('uploads/'), $nama_gambar);
            $news->gambar_2 = $nama_gambar;
        }
        if ($request->hasFile('gambar_3')) {
            // Delete the old image if it exists
            if ($news->gambar_3) {
                $oldImagePath = public_path('uploads/' . $news->gambar_3);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Upload the new image
            $nama_gambar = time() . '.' . $request->gambar_3->getClientOriginalExtension();
            $request->gambar_3->move(public_path('uploads/'), $nama_gambar);
            $news->gambar_3 = $nama_gambar;
        }


        $news->id_kategori = $request->id_kategori;
        $news->judul = $request->judul;
        $news->slug = $request->slug;
        $news->sub_judul = $request->sub_judul;
        $news->isi_1 = $request->isi_1;
        $news->isi_2 = $request->isi_2;
        $news->isi_3 = $request->isi_3;
        $news->save();
        return redirect('dashboard/news')->with('success', 'Data Berhasil Ditambah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        File::delete('uploads/' . $news->gambar);
        $news->delete();

        return redirect('dashboard/news')->with('success', 'Data Berhasil Ditambah!');
    }
}
