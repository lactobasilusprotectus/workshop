@extends('admin.admin')

@section('title-page', 'Dashboard')

@section('admin-title', 'Dashboard')

@section('admin-content')

    <div class="container">
        <div class="row">

            <div class="col mt-8">
                <div class="max-w-sm rounded overflow-hidden shadow-lg text-center">
                    <img class="h-32 w-32 flex mx-auto" src="{{ asset('images/peserta.webp') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">0 Peserta</div>
                        <p class="text-gray-700 text-base">

                        </p>
                    </div>
                </div>
            </div>

            <div class="col mt-8">
                <div class="max-w-sm rounded overflow-hidden shadow-lg text-center">
                    <img class="h-32 w-32 flex mx-auto" src="{{ asset('images/peserta.webp') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">0 Pembicara</div>
                        <p class="text-gray-700 text-base">

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
