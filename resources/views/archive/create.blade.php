@extends('layout.master')

@section('contents')
            @if(session()->has('archiveFailed'))
                <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-6 text-theme-6">
                    <i data-feather="alert-octagon" class="w-6 h-6 mr-2"></i>
                        {{ session('archiveFailed') }}
                    <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                </div>
            @endif
            <form action="{{ route('archive.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Arsipkan Surat
                    </h2>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0 gap-3">
                        <a href="{{ route('archive.index') }}" class="button text-white bg-blue-800 shadow-md flex items-center w-24">
                            <p class="text-center w-full">Back</p>
                        </a>
                        <button type="submit" class="button text-white bg-blue-800 shadow-md flex items-center w-24">
                            <p class="text-center w-full">Save</p>
                        </button>
                    </div>
                </div>
                <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: Post Content -->
                    <div class="intro-y col-span-12 lg:col-span-8">
                        <input type="text" name="title" id="title" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Judul">
                        <div class="post intro-y overflow-hidden box mt-10 h-96">
                            <div class="dropzone border-gray-200 border-dashed h-96">
                                <div class="fallback">
                                    <input name="file" id="file" type="file">
                                </div>
                                <div class="dz-message" data-dz-message>
                                    <div class="text-lg font-medium">
                                        Pilih File Surat
                                    </div>
                                    <div class="text-gray-600">
                                        Letakkan file disini
                                        <span class="font-medium">atau</span>
                                        klik untuk pilih file
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-4">
                        <div class="intro-y box p-5">
                            <div>
                                <label>Nomor Surat</label>
                                <input type="text" name="letter_number" id="letter_number" class="input w-full border border-gray-200 rounded mt-2" placeholder="Masukkan nomor surat">
                            </div>
                            <div class="mt-3">
                                <label>Kategori</label>
                                <div class="mt-2">
                                    <select name="categories_id" id="categories_id" data-placeholder="Pilih Kategori" class="select2 w-full" multiple>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
@endsection
