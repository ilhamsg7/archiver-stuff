@extends('layout.master')

@section('contents')
    <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Profile Layout
                    </h2>
                </div>
                <!-- BEGIN: Profile Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <div class="flex flex-col lg:flex-row border-b border-gray-200 pb-5 -mx-5">
                        <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                                <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('images/KTM.jpg') }}">
                            </div>
                            <div class="ml-5">
                                <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Ilham Sinatrio Gumelar</div>
                                <div class="text-gray-600">NIM. 2141764031</div>
                                <div class="text-gray-600">Est. September 30, 2022</div>
                            </div>
                        </div>
                        <div class="flex mt-6 lg:mt-0 items-center lg:items-start flex-1 flex-col justify-center text-gray-600 px-5 border-l border-r border-gray-200 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> sinatrio20@gmail.com </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram" class="w-4 h-4 mr-2"></i> @ilh.am_s </div>
                            <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter" class="w-4 h-4 mr-2"></i> @SIN_atR </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-gray-200 pt-5 lg:pt-0">
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-semibold text-theme-1 text-lg">201</div>
                                <div class="text-gray-600">Orders</div>
                            </div>
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-semibold text-theme-1 text-lg">1k</div>
                                <div class="text-gray-600">Purchases</div>
                            </div>
                            <div class="text-center rounded-md w-20 py-3">
                                <div class="font-semibold text-theme-1 text-lg">492</div>
                                <div class="text-gray-600">Reviews</div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-tabs flex flex-col sm:flex-row justify-center lg:justify-start">
                        <a data-toggle="tab" data-target="#profile" href="javascript:;" class="py-4 sm:mr-8 flex items-center active"> <i class="w-4 h-4 mr-2" data-feather="user"></i> Profile </a>
                        <a data-toggle="tab" data-target="#account" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i class="w-4 h-4 mr-2" data-feather="shield"></i> Account </a>
                        <a data-toggle="tab" data-target="#change-password" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i class="w-4 h-4 mr-2" data-feather="lock"></i> Change Password </a>
                        <a data-toggle="tab" data-target="#settings" href="javascript:;" class="py-4 sm:mr-8 flex items-center"> <i class="w-4 h-4 mr-2" data-feather="settings"></i> Settings </a>
                    </div>
                </div>
@endsection
