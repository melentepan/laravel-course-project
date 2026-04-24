<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.signin');
    }

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Ошибка валидации',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        return response()->json([
            'message' => 'Данные успешно прошли валидацию',
            'data' => $data,
        ]);
    }
}
