<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // tampil profil
    public function getProfile()
    {
        $user = User::find(1);

        return response()->json($user);
    }

    // update profil + foto
    public function updateProfile(Request $request)
    {
        $user = User::find(1);

        $user->nama = $request->nama;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->gender = $request->gender;
        $user->email = $request->email;

        // upload foto
        if ($request->hasFile('foto')) {

            $file = $request->file('foto');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('profile'), $filename);

            $user->foto = $filename;
        }

        $user->save();

        return response()->json([
            'message' => 'Profil berhasil diupdate',
            'data' => $user
        ]);
    }
}