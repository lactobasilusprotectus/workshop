@extends('admin.admin')

@section('title-page', 'Setup')

@section('admin-title', 'Dashboard')

@section('admin-content')

    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Setup</h3>
                    <p class="mt-1 text-sm leading-5 text-gray-600">
                        Informasi ini akan ditampilkan untuk umum, jadi berhati-hatilah dengan apa yang kamu bagikan.
                    </p>
                </div>
            </div>
            <div class="md:mt-0 md:col-span-2">
                <form x-data="{ data: '' }"
                      x-init="
                        axios.get('setup/all').then(response => data = response);
                    "
                      action="#" method="POST" id="form">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white sm:p-6">

                            <div class="mb-2">
                                <label for="institute" class="block text-sm leading-5 font-medium text-gray-700">
                                    Webinar Institute Title
                                </label>
                                <input x-bind:value="data.data.data.title_institute" type="text" id="highlight_institute" name="highlight_institute" class="py-2 px-3 shadow form-textarea mt-1 block w-full border rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mb-2">
                                <label for="title" class="block text-sm leading-5 font-medium text-gray-700">
                                    Title
                                </label>
                                <input x-bind:value="data.data.data.title_webinar" type="text" id="title_webinar" name="title_webinar" class="py-2 px-3 shadow form-textarea mt-1 block w-full border rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:outline-none focus:shadow-outline">
                            </div>

                            <div class="mt-6">
                                <label for="about" class="block text-sm leading-5 font-medium text-gray-700">
                                    Penjelasan
                                </label>
                                <div class="rounded-md shadow-sm">
                                    <textarea x-text='data.data.data.explain' id="explain_webinar" name="explain_webinar" rows="3" class="py-2 px-3 form-textarea mt-1 block w-full border rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:outline-none focus:shadow-outline" placeholder="you@example.com"></textarea>
                                </div>
                                <p class="mt-2 text-sm font-semibold text-gray-500">
                                    Penjelasan singkat Workshop
                                </p>
                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span class="inline-flex rounded-md shadow-sm">
                              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                Update
                              </button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

@endsection

@section('js')

    <script>
        axios.get('setup/all').then(response => console.log(response))
        document.getElementById("form").addEventListener("submit", (e) =>{
            e.preventDefault()

            axios.post('setup', {
                title_institute: document.getElementById('highlight_institute').value,
                title_webinar: document.getElementById('title_webinar').value,
                explain: document.getElementById('explain_webinar').value,
            }).then(response => {
                if (response.data.data){
                    swal({
                        title: 'Success',
                        text: 'Update Berhasil!',
                        icon: 'success',
                        timer: 3500,
                        button: false
                    })
                }
            }).catch(error => {
                console.log(error.response)
            })

            console.log(document.getElementById('title_institute').value)
        });

    </script>


@endsection
