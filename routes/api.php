<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return response()->json($request->user());
})->middleware('auth:api');

Route::get('/logout', function (Request $request) {
    // $request->user()->token()->revoke();
    // Auth::guard('api')->user();
    // $request->session()->flush();
    // $request->session()->regenerate();
    $token = DB::table('oauth_access_tokens')->where('user_id', Auth::user()->id)->first();
    DB::table('oauth_refresh_tokens')->where('access_token_id', $token->id)->delete();
    DB::table('oauth_access_tokens')->where('user_id', Auth::user()->id)->delete();
    $json = [
        'success' => true,
        'code' => 200,
        'message' => $token,
    ];
    return response()->json($json, '200');
})->middleware('auth:api');
