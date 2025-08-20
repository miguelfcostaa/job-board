<?php

namespace App\Http\Controllers;

use App\Http\Requests\AvatarUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    /**
     * Upload and update user avatar
     */
    public function update(AvatarUpdateRequest $request)
    {
        $user = Auth::user();
        
        // Remove avatar antigo se existir
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Upload novo avatar
        $avatarPath = $request->file('avatar')->store('avatars', 'public');

        // Atualizar usuário
        $user->update(['avatar' => $avatarPath]);

        return redirect()->back()->with('success', 'Avatar atualizado com sucesso!');
    }

    /**
     * Remove user avatar
     */
    public function destroy()
    {
        $user = Auth::user();
        
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
            $user->update(['avatar' => null]);
        }

        return redirect()->back()->with('success', 'Avatar removido com sucesso!');
    }
}
