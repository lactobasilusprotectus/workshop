@extends('master.master')

@section('title-page', 'Login')

@section('content')

    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <div>
                <img class="mx-auto h-12 w-auto" src="https://labsimpel-itpln.online/images/logo.webp" alt="Mantap">
                <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                    Admin Portal
                </h2>
            </div>
            <form x-data="formLogin()" class="mt-8" @submit.prevent="authLogin">

                <div class="rounded-md shadow-sm">
                    <div>
                        <input x-model="dataForm.id" aria-label="Unique IDs" name="id" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Unique IDs">
                    </div>
                    <div class="-mt-px">
                        <input x-model="dataForm.password" aria-label="Password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password">
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                        <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
                              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                          </span>
                        Sign in
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection

@section('js')

    <script>

        formLogin = () => {
            axios.defaults.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
            return {
                dataForm: {
                    id: '',
                    password: ''
                },
                authLogin(){
                    axios.post('/login', this.dataForm,)
                        .then(response => {
                        if (response.data.status == 'Error'){
                            swal({
                                title: 'Error!',
                                text:   response.data.message,
                                icon: 'error',
                                timer: 3500,
                                button: false
                            });

                        }else {
                            swal({
                                title: 'Berhasil!',
                                text: 'Login Berhasil Gan!!',
                                icon: 'success',
                                timer: 3500,
                                button: false
                            });
                            setTimeout(() => {
                                window.location.href = '/admin/dashboard';
                            }, 5000);

                        }

                    }).catch(error => {
                        console.log(error.response)
                        swal({
                            title: 'Error!',
                            text:   'ID tidak di temukan',
                            icon: 'error',
                            timer: 3500,
                            button: false
                        });
                    });
                }
            }
        }


    </script>

@endsection
