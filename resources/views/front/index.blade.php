@extends('master.master')

@section('title-page', 'Webinar IR LAB')

@section('content')

    @include('master.part.nav')

    <div class="py-32 bg-fixed bg-opacity-50 bg dark:bg-dark bg-fixed mb-6">
        <div class="layout">

            <h2 class="text-4xl font-bold mb-2 text-white dark:text-gray-400">
                Webinar Information Retrieval Laboratory
            </h2>

            <h3 class="text-2xl mb-8 text-gray-200 dark:text-gray-400">
                Open Source Untuk kaum rebahan
            </h3>

            @include('master.part.modal')

        </div>
    </div>

    <section class="container mx-auto px-12 py-5">
        <div class="mx-auto my-5">
            <h5 class="font-semibold text-3xl text-black mb-5 dark:text-gray-400">What is it all about</h5>
            <div class="col-md-6 col-sm-12">
                <h6 class="leading-8 leading-relaxed font-semibold text-lg dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, aut cumque, deleniti eligendi et ex facilis fuga incidunt ipsum maiores modi natus pariatur perferendis perspiciatis placeat sint vel velit vitae.</h6>
            </div>
        </div>
    </section>

    <section class="layout py-5 mt-3">
        <h3 class="font-semibold text-4xl text-black-50 mb-5 dark:text-gray-400">Pembicara</h3>

        <div class="grid lg:grid-cols-3 lg:gap-5 sm:grid-cols-1 mt-5">

            <div class="mx-auto dark:bg-gray-50 max-w-xs rounded overflow-hidden shadow-lg my-5 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <img class="w-full h-100" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="lg:px-6 lg:py-4 md:px-4 md:py-3">
                    <div class="font-bold text-2xl mb-1 text-center">
                        Amru Fakharullah
                    </div>
                    <p class="text-center text-gray-800 dark:text-gray-400 font-semibold text-base mb-3">
                        Associate Shopee Developer
                    </p>
                    <div class="px-6 pt-1 pb-3 text-center">
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-instagram fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-github fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-whatsapp fa-2x"></i></span>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-xs rounded overflow-hidden shadow-lg my-5 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <img class="w-full h-100" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="lg:px-6 lg:py-4">
                    <div class="font-bold text-2xl mb-1 text-center">
                        Amru Fakharullah
                    </div>
                    <p class="text-center text-gray-700 font-semibold text-base mb-3">
                        Associate Shopee Developer
                    </p>
                    <div class="px-6 pt-1 pb-3 text-center">
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-instagram fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-github fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-whatsapp fa-2x"></i></span>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-xs rounded overflow-hidden shadow-lg my-5 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <img class="w-full h-100" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="lg:px-6 lg:py-4">
                    <div class="font-bold lg:text-2xl mb-1 sm:text-small text-center">
                        Amru Fakharullah
                    </div>
                    <p class="text-center text-gray-700 font-semibold text-base mb-3">
                        Associate Shopee Developer
                    </p>
                    <div class="px-6 pt-1 pb-3 text-center">
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-instagram fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-github fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-whatsapp fa-2x"></i></span>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-xs rounded overflow-hidden shadow-lg my-5 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-105">
                <img class="w-full h-100" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="lg:px-6 lg:py-4">
                    <div class="font-bold text-2xl mb-1 text-center">
                        Amru Fakharullah
                    </div>
                    <p class="text-center text-gray-700 font-semibold text-base mb-3">
                        Associate Shopee Developer
                    </p>
                    <div class="px-6 pt-1 pb-3 text-center">
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-instagram fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-github fa-2x"></i></span>
                        <span class="inline-block font-semibold text-gray-700 mr-2 mb-2"><i class="fab fa-whatsapp fa-2x"></i></span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="layout py-5">
        <h3 class="font-semibold text-4xl text-black-50 mb-8 text-center dark:text-gray-400">Sponsor</h3>
        <div class="grid justify-items-auto grid-cols-3 gap-4 py-4 items-center">
            <img class="mx-auto h-50" src="https://boost.11bits.es/assets/img/logo-spotify.png" alt="" height="35">
            <img class="mx-auto h-50" src="https://boost.11bits.es/assets/img/logo-google.png" alt="" height="35">
            <img class="mx-auto h-50" src="https://boost.11bits.es/assets/img/logo-uber.png" alt=""height="35">
        </div>
    </section>

    <hr class="mx-auto border-blue-500 my-5 w-1/4">

    <section class="layout py-5">
        <h3 class="font-semibold text-4xl text-black-50 mb-10 dark:text-gray-400">Jadwal</h3>
        <table class="table-auto w-full dark:text-gray-400">
            <thead>
            <tr>
                <th class="px-4 py-2 border-b-2 text-left font-semibold text-lg">Kegiatan</th>
                <th class="px-4 py-2 border-b-2 text-center font-semibold text-lg" width="10%">Waktu</th>
                <th class="px-4 py-2 border-b-2 text-center font-semibold text-lg" width="30%">Presenter</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td class="px-4 py-3 border-b-2 text-left font-semibold text-lg" >Opening</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">10:30</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">MC</td>
            </tr>

            <tr>
                <td class="px-4 py-3 border-b-2 text-left font-semibold text-lg" >Opening</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">10:30</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">MC</td>
            </tr>

            <tr>
                <td class="px-4 py-3 border-b-2 text-left font-semibold text-lg" >Opening</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">10:30</td>
                <td class="px-4 py-3 border-b-2 text-center font-semibold text-lg">MC</td>
            </tr>

            </tbody>
        </table>
    </section>

    <hr class="mx-auto border-blue-500 my-5 w-1/4">

    <div class="bg-gray-200 dark:bg-gray-700 py-5 mt-5">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Ready to dive in?</span>
                <span class="block text-indigo-600 dark:text-green-400">Segera daftar Kuota Terbatas!.</span>
            </h2>
            <div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    @include('master.part.modal')
                </div>
            </div>
        </div>
    </div>

    @include('master.part.footer')

@endsection

@section('js')

    <script>

        function modal() {
            return {
                state: 'CLOSED',
                open() {
                    this.state = 'TRANSITION'
                    setTimeout(() => { this.state = 'OPEN' }, 50)
                },
                close() {
                    this.state = 'TRANSITION'
                    setTimeout(() => { this.state = 'CLOSED' }, 300)
                },
                isOpen() { return this.state === 'OPEN' },
                isOpening() { return this.state !== 'CLOSED' },
            }
        }

        regisForm = () => {
            axios.defaults.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
            return {
                formData: {
                    nim: '',
                    nama:'',
                    email: '',
                    whatsapp: '',
                },
                message: '',
                submitData() {
                    this.message = ''

                    axios.post('/', this.formData)
                        .then(response => {

                            if (response.data.status === 'error')
                            {
                                swal({
                                    title: 'Error',
                                    text: response.data.message,
                                    icon: 'error',
                                    timer: 3500,
                                    button: false
                                });
                            }else {
                                swal({
                                    title: 'Success',
                                    text: response.data.message,
                                    icon: 'success',
                                    timer: 3500,
                                    button: false
                                });
                            }
                            document.getElementById("form").reset();
                        }).catch(error => {
                            swal({
                                title: 'Error',
                                text: error.response.message,
                                icon: 'error',
                                timer: 3500,
                                button: false
                            })
                            document.getElementById("form").reset();
                        })
                },

            };
        }

    </script>

@endsection
