<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Image $image)
    {
        $image = Image::all();
        $i = 1;

        return view('main.gallery', compact('image', 'i'));
    }

    public function show()
    {
        $image = Image::paginate(5);
        $i = ($image->currentPage() - 1) * $image->perPage() + 1;

        if ( session('logged_in') ) {
            return view('admin.gallery.show', compact('image', 'i'));
        } else {
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('gambar');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img/gallery'), $imageName);

        $image = new Image();
        $image->gambar = $imageName;
        $image->judul = $request->input('judul');
        $image->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id);

        if ( session('logged_in') ) {
            return view('admin.gallery.edit', compact('image'));
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Image $image)
    {
        if ($request->hasFile('gambar')) {
            if ($image->gambar) {
                Storage::delete($image->gambar);
            }

            $image = $request->file('gambar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/gallery'), $imageName);

            $image->gambar = $imageName;
        }

        $image->judul = $request->input('judul');
        $image->save();

        return redirect()->route('image.show');
    }

    public function destroy(Image $image)
    {
        $image -> delete();
        return redirect()->back();
    }
}
