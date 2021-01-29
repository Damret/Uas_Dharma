<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\season;

class CrudController extends Controller
{
    public function tampilmusim() {
    	$datamusim = musim::orderBy('musim', 'asc')->paginate(5);
    	return view('pages/admin/season', ['datamusim' => $datamusim]);
    }

    public function tambahmusim(Request $req) {
        $this->validate($req, [
            'musim' => 'required',
            'deskripsi' => 'required'
        ]);
        musim::create([
            'musim' => $req->musim,
            'deskripsi' => $req->deskripsi
        ]);
        return redirect()->back();
    }

    public function hapusmusim($id)
    {
        $musim = musim::find($id);
        $musim->delete();
        return redirect()->back();
    }
}
