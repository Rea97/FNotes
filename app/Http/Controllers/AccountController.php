<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use File;

class AccountController extends Controller
{
    public function index()
    {
        return view('sections.account.index');
    }

    public function saveProfilePhoto(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image'
            //Fixme No se está validando correctamente la imagen
        ]);
        $user_id = $request->user()->id;
        $file = $request->file('photo');
        $nombre = $user_id.'/pp/'.$file->getClientOriginalName();
        //TODO Guardar nombre de foto en un campo en la tabla de usuarios
        Storage::disk('public')->put($nombre, File::get($file));
        return redirect()
                ->to('/account')
                ->with('message', 'Foto de perfil actualizada correctamente.');
    }
}
