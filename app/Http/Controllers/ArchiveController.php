<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArchiveRequest;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $archive = Archive::filter(request(['search']))->paginate(10)->withQueryString();
        $counting = Archive::count();
        return view('archive.index', [
            'title' => 'List Archive',
            'archive' => $archive,
            'counting' => $counting,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('archive.create', [
            'title' => 'Create Archive',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArchiveRequest $request) {
        $cat = Category::where('id', $request['categories_id'])->first();
        $archived = $request->validated();

        $archived['slug'] = Str::slug($archived['title'], '-');
        // $request->file('file')->store('files');
        if($request->file('file')) {
            if($request->oldfile) {
                Storage::delete($request->oldfile);
            }
            $archived['file'] = $request->file('file')->store($cat->code . '-archiver');
        }

        Archive::create($archived);
        return redirect()->route('archive.index')->with('archiveSuccess', 'Surat berhasil diarsipkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Archive $archive)
    {
        return view('archive.show', [
            'title' => 'Archive Detail ',
            'archive' => $archive
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Archive $archive) {
        return view('archive.edit', [
            'title' => 'Archive Edit',
            'archive' => $archive
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArchiveRequest $request, Archive $archive) {
        $cat = Category::where('id', $request['categories_id'])->first();
        $request['slug'] = $request['title'];
        $archived = $request->validated();
        if($request->file('file_name')) {
            if($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $archived['file_name'] = $request->file('file_name')->store($cat->code . '-archive');
        }
        $archive->update($archived);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archive) {
       if($archive->file_name) {
            Storage::delete($archive->file_name);
        }
        Archive::destroy($archive->id);
        return redirect()->route('archive.index')->with('archiveSuccess', 'Surat berhasil dihapus!');
    }
}
