@extends('layout.master')

@section('contents')
    <!-- END: Top Bar -->

            @if(session()->has('archiveSuccess'))
                <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-9 text-theme-9">
                    <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i>
                        {{ session('archiveSuccess') }}
                    <i data-feather="x" class="w-4 h-4 ml-auto"></i>
                </div>
            @endif
                <h2 class="intro-y text-lg font-medium mt-10">
                    Arsip Surat
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
                        <a href="{{ route('archive.create') }}" class="button text-white bg-theme-1 shadow-md mr-2">Arsipkan Surat</a>
                        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of {{ $counting }} entries</div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-gray-700">
                                <form action="{{ route('archive.index') }}" method="GET">
                                    <input value="{{ request('search') }}" id="search" name="search" type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Cari Surat">
                                        <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-no-wrap">Nomor Surat</th>
                                    <th class="whitespace-no-wrap">Kategori</th>
                                    <th class="text-center whitespace-no-wrap">Judul</th>
                                    <th class="text-center whitespace-no-wrap">Waktu Pengarsipan</th>
                                    <th class="text-center whitespace-no-wrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($archive as $archives)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            {{ $archives->letter_number }}
                                        </td>
                                        <td>
                                            {{ $archives->category->category_name }}
                                        </td>
                                        <td class="text-center">{{ $archives->title }}</td>
                                        <td class="w-40">
                                            {{ $archives->created_at->format('d M Y / H:i:s') }} WIB
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="{{ route('archive.show', $archives) }}"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> Lihat </a>
                                                <a class="flex items-center mr-3" href="{{ route('downloads.archive', $archives->slug) }}"> <i data-feather="download" class="w-4 h-4 mr-1"></i> Unduh </a>
                                                <form action="{{ route('archive.destroy', $archives) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('Apakah anda yakin menghapus?')" class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
                        <ul class="pagination">
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                            </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li> <a class="pagination__link" href="">1</a> </li>
                            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                            <li> <a class="pagination__link" href="">3</a> </li>
                            <li> <a class="pagination__link" href="">...</a> </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                            </li>
                            <li>
                                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                            </li>
                        </ul>
                        <select class="w-20 input box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- BEGIN: Delete Confirmation Modal -->
                <div class="modal" id="delete-confirmation-modal">
                    <div class="modal__content">
                        <div class="p-5 text-center">
                            <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                            <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                        </div>
                    </div>
                </div>
@endsection
