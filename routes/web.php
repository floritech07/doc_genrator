<?php

use Illuminate\Http\Request;

Route::get('/test', [App\Http\Controllers\SimpleController::class, 'example']);

Route::post('/webhook', function (Request $request) {
    \Log::info('Webhook received!', ['payload' => $request->all()]);
    return response()->json(['message' => 'Webhook received successfully!']);
});



