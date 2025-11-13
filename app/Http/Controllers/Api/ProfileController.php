<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // GET: /api/profile
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile;

        return response()->json([
            'message' => 'Data profil ditemukan',
            'data' => $profile
        ]);
    }

    // POST: /api/profile
    public function store(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'full_name' => 'nullable|string|max:255',
            'gender' => 'nullable|in:L,P',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $profile = Profile::updateOrCreate(
            ['user_id' => $user->id],
            $validated
        );

        return response()->json([
            'message' => 'Data profil berhasil disimpan',
            'data' => $profile
        ]);
    }
}
