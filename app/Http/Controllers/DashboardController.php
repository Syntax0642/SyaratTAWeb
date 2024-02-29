<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexdashboard(){
        return view('dashboard/index',[
            'title' => 'dashboard',
        ]);
    }

    public function showkelas(){
        return view('dashboard.kelas.index',
            [
                'title' => 'kelas',
                'kelas' => Kelas::all()
            ]);
    }

    public function showsiwa(){

        $siswa = Siswa::latest()->filter(request(['search']))->simplePaginate(5)->onEachSide(3);
        $filter = Kelas::all();
        $title = 'Siswa';

        return view('dashboard.siswa.index', compact('siswa','filter', 'title'));
    }

    public function showdetailsiswa($siswa)
    {
        $siswamodels = Siswa::findOrFail($siswa);

        if (!$siswamodels) {
            return abort(404);
        }

        return view('dashboard.siswa.detail', [
            "title" => "DetailSiswa",
            "siswa" => $siswamodels,
        ]);
    }

    public function destroy($siswa)
    {
        try {
            $siswamodels = SIswa::findOrFail($siswa);
            $siswamodels->delete();
            return redirect()->route('dashboard.siswa.index')->with('success', 'Siswa berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.siswa.index')->with('error', 'Gagal menghapus siswa. Silakan coba lagi.');
        }
    }

    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::all();

        return view('dashboard.siswa.edit', [
            'title' => "Edit",
            'siswa' => $siswa,
            'kelas' => $kelas,
        ]);
    }

    public function store(Request $request )
    {
        $validated = $request->validate([
            'nama' => 'required',
            'NIS' => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Siswa::create($validated);

        if($result){
            return redirect('dashboard/siswa/index')->with('success', 'Data Siswa berhasil ditambahkan');

        }
    }


    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'NIS' => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
        ]);

        $result = Siswa::where('id',$siswa->id)->update($validatedData);


        if ($result) {
            return redirect('dashboard/siswa/index')->with('success', 'Data siswa berhasil diubah');

        }else {
            return redirect()->back()->with('error', 'Gagal mengubah data siswa. Silakan coba lagi.');
        }

    }

    public function add()
    {
        return view('dashboard.siswa.add', [
            'title' => 'Add Student Data',
            'kelas' => Kelas::all()
        ]);
    }

    public function destroys($kelas)
    {
        try {
            $kelasmodels = Kelas::findOrFail($kelas);
            $kelasmodels->delete();
            return redirect()->route('dashboard.kelas.index')->with('success', 'Kelas berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard.kelas.index')->with('error', 'Gagal menghapus kelas. Silakan coba lagi.');
        }
    }

    public function edits(Kelas $kelas)
    {

        return view('dashboard.kelas.edit', [
            'title' => "Edit",
            'kelas' => $kelas,
        ]);
    }

    public function stores(Request $request )
    {
        $validated = $request->validate([
            'kelas' => 'required',
        ]);

        $result = Kelas::create($validated);

        if($result){
            return redirect('dashboard/kelas/index')->with('success', 'Data Kelas berhasil ditambahkan');

        }
    }


    public function updates(Request $request, Kelas $kelas)
    {
        $validatedData = $request->validate([
            'kelas' => 'required',
        ]);

        $result = Kelas::where('id',$kelas->id)->update($validatedData);


        if ($result) {
            return redirect('dashboard/kelas/index')->with('success', 'Data Kelas berhasil diubah');

        }else {
            return redirect()->back()->with('error', 'Gagal mengubah data kelas. Silakan coba lagi.');
        }

    }

    public function adds()
    {
        return view('dashboard.kelas.add', [
            'title' => 'Add Kelas Data',
        ]);
    }

    public function filter(Request $request)
    {
        $spesialId = $request->input('kelas_id');

        if ($spesialId =="Semua Data") {
            $siswa = Siswa::simplePaginate(5)->onEachSide(3);
            $filter = Kelas::all();
            $title = 'filter';
            return view('dashboard.siswa.index', compact('siswa', 'filter','title'));
        }

        $siswa = Siswa::where('kelas_id', $spesialId)->paginate(5);
        $filter = Kelas::all();
        $title = 'filter';
        return view('dashboard.siswa.index', compact('siswa', 'filter','title'));
    }

}
