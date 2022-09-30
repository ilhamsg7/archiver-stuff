<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadArchiveController extends Controller
{
    public function downloadArchive($slug) {
        $archived = Archive::where('slug', $slug)->value("file");;
        // $pathToFile = storage_path(''.$archived->file);
        return Storage::download($archived);
    }
}
