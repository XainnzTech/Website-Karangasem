<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{

    public function index(Package $package)
    {
        $package = Package::all();
        $i = 1;
        // $kegiatan = explode(',', $package->kegiatan);

        return view('main.paket', compact('package', 'i'));
    }

    public function show()
    {
        $package = Package::paginate(5);
        $i = ($package->currentPage() - 1) * $package->perPage() + 1;

        if ( session('logged_in') ) {
            return view('admin.package.show', compact('package', 'i'));
        } else {
            return redirect()->route('login');
        }
    }

    public function detail($id)
    {
        $detail = Package::findOrFail($id);
        return redirect()->route('package.index')->with('detail');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('gambar');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('img/paket'), $imageName);

        $package = new Package();
        $package->gambar = $imageName;
        $package->nama_paket = $request->input('nama_paket');
        $package->deskripsi = $request->input('deskripsi');
        $package->kegiatan = $request->input('kegiatan');
        $package->harga = $request->input('harga');
        $package->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);

        if ( session('logged_in') ) {
            return view('admin.package.edit', compact('package'));
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Package $package)
    {
        if ($request->hasFile('gambar')) {
            if ($package->gambar) {
                Storage::delete($package->gambar);
            }

            $image = $request->file('gambar');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('img/paket'), $imageName);

            $package->gambar = $imageName;
        }

        $package->nama_paket = $request->input('nama_paket');
        $package->deskripsi = $request->input('deskripsi');
        $package->kegiatan = $request->input('kegiatan');
        $package->harga = $request->input('harga');
        $package->save();

        return redirect()->route('package.show');
    }

    public function destroy(Package $package)
    {
        $package -> delete();
        return redirect()->back();
    }
}
