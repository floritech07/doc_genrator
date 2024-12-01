<?php

use Illuminate\Http\Request;

Route::post('/webhook', function (Request $request) {
    \Log::info('Webhook received!', ['payload' => $request->all()]);
    return response()->json(['message' => 'Webhook received successfully!']);
});



