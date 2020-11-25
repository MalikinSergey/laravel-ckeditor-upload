<?php

use Illuminate\Support\Facades\Storage;

Route::middleware(config('ckeditor-upload.middleware'))->group(function () {

    Route::post(config('ckeditor-upload.upload_url'), function (\Illuminate\Http\Request $request) {

        $file = $request->file('upload');

        $disk = config('ckeditor-upload.disk');

        $directory = config('ckeditor-upload.directory');

        $path = Storage::disk($disk)->putFile($directory, $file);

        $url = Storage::disk($disk)->url($path);

        return ['url' => $url];
    });

    Route::get(config('ckeditor-upload.config_url'), function (\Illuminate\Http\Request $request) {

        return [

        ];

    });

});

