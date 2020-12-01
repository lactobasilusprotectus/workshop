@extends('admin.admin')

@section('title-page', 'peserta')

@section('admin-title', 'Peserta')

@section('admin-content')

    <div x-data="{ data: getData() }">
{{--        <div x-init="--}}
{{--            axios.get('peserta/all').then(response => {--}}
{{--              this.data = response--}}
{{--            })--}}
{{--        ">--}}

        <div x-text="data.data"></div>

        </div>
    </div>

    <table class="table-auto">
        <thead>
        <tr>
            <th class="border px-4 py-2">#</th>
            <th class="border px-4 py-2">NIM</th>
            <th class="border px-4 py-2">Nama</th>
            <th class="border px-4 py-2">Whatsapp</th>
            <th class="border px-4 py-2">Telepon</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

@endsection

@section('js')

    <script>

        const getData = async () => {
            let data = '';

            let getValue = await axios.get('peserta/all')

            return data = getValue.data
        }

    </script>

@endsection
