<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accomodation;

class AccomodationController extends Controller
{
    public function index(Accomodation $accomodation)
    {
        $accomodation = Accomodation::all();
        $i = 1;

        return view('main.fasilitas', compact('accomodation', 'i'));
    }

    public function show()
    {
        $accomodation = Accomodation::paginate(5);
        $i = ($accomodation->currentPage() - 1) * $accomodation->perPage() + 1;

        if ( session('logged_in') ) {
            return view('admin.accomodation.show', compact('accomodation', 'i'));
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
        $image->move(public_path('img/fasilitas'), $imageName);

        $accomodation = new Accomodation();
        $accomodation->gambar = $imageName;
        $accomodation->nama = $request->input('nama');
        $accomodation->harga = $request->input('harga');
        $accomodation->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $accomodation = Accomodation::findOrFail($id);

        if ( session('logged_in') ) {
            return view('admin.accomodation.edit', compact('accomodation'));
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Accomodation $accomodation)
    {
        if ($request->hasFile('gambar')) {
            if ($accomodation->gambar) {
                Storage::delete($accomodation->gambar);
            }

            $image = $request->file('gambar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/fasilitas'), $imageName);

            $accomodation->gambar = $imageName;
        }

        $accomodation->nama = $request->input('nama');
        $accomodation->harga = $request->input('harga');
        $accomodation->save();

        return redirect()->route('accomodation.show');
    }

    public function destroy(Accomodation $accomodation)
    {
        $accomodation -> delete();
        return redirect()->back();
    }
}
