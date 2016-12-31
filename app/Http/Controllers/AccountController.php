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

    public function saveProfilePicture(Request $request)
    {
        /*$this->validate($request, [
            'photo' => 'required|image'
            //Fixme No se está validando correctamente la imagen
        ]);*/
        $user = $request->user();
        $userId = $user->id;
        $file = $request->file('photo');
        //dd($file->getClientOriginalName());
        $nombre = $userId.'/profile_picture/'.$file->getClientOriginalName();
        Storage::disk('public')->put($nombre, File::get($file));
        if ($file->isValid()) {
            $user->profile_picture = '/storage/'.$nombre;
            $user->save();
            $message = 'Foto de perfil actualizada correctamente.';
        } else {
            $message = 'Ha ocurrido un error al intentar actualizar tu foto de perfil. ';
            $message .= 'Intenta de nuevo mas tarde.';
        }
        return redirect()
                ->to('/account')
                ->with('message', $message);
    }
}
