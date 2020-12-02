<div x-data="modal()">
    <button @click="open()" type="button" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-300 ease-in-out" data-toggle="modal" data-target="#exampleModalTwo">
        Register
    </button>

    <div x-show="isOpening()">

        <div
            :class="{ 'opacity-0': isOpening(), 'opacity-100': isOpen() }"
            class="fixed z-50 top-0 left-0 w-full h-full outline-none transition-opacity duration-300 linear"
            tabindex="-1"
            role="dialog"
            id="modal"
        >

            <div
                :class="{ 'mt-4': isOpening(), 'mt-8': isOpen() }"
                class="relative w-auto pointer-events-none max-w-lg mt-8 mx-auto transition-all duration-300 ease-out"
            >

                <div class="relative flex flex-col w-full pointer-events-auto bg-white border border-gray-300 rounded-lg shadow-xl">
                    <div class="flex items-start justify-between p-4 border-b border-gray-300 rounded-t">
                        <h5 class="mb-0 text-lg leading-normal">Register</h5>
                        <button
                            type="button"
                            class="close"
                            @click="close()"
                        >&times;</button>
                    </div>
                    <div class="relative flex p-4">

                        <div class="w-full max-w-lg">
                            <form id="form" x-data="regisForm()" @submit.prevent="submitData">
                                <div class="mb-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nim">
                                        NIM
                                    </label>
                                    <input x-model="formData.nim" placeholder="ex: 2017..." name="nim" id="nim" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                </div>

                                <div class="mb-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                                        Nama
                                    </label>
                                    <input x-model="formData.nama" placeholder="ex: Indah" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker focus:outline-none focus:shadow-outline">
                                </div>

                                <div class="mb-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                        Email
                                    </label>
                                    <input x-model="formData.email" placeholder="ex:a@b.com" name="email" id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker focus:outline-none focus:shadow-outline">
                                </div>

                                <div class="mb-3">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="whatsapp">
                                        Whatsapp
                                    </label>
                                    <input x-model="formData.whatsapp" placeholder="+6282321213" name="whatsapp" id="whatsapp" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker focus:outline-none focus:shadow-outline">
                                </div>
                                <p x-text="message"></p>
                            </form>
                        </div>

                    </div>
                    <div class="flex items-center justify-end p-4 border-t border-gray-300">
                        <button
                            @click="close()"
                            type="button"
                            class="inline-block font-normal text-center px-3 py-2 leading-normal text-base rounded cursor-pointer text-white bg-gray-600 mr-2"
                        >Close</button>
                        <button
                            id="register"
                            @click="close()"
                            form="form"
                            type="submit"
                            class="inline-block font-normal text-center px-3 py-2 leading-normal text-base rounded cursor-pointer text-white bg-blue-600"
                        >Register</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- BACKDROP -->
        <div
            :class="{ 'opacity-25': isOpen() }"
            class="z-40 fixed top-0 left-0 bottom-0 right-0 bg-black opacity-0 transition-opacity duration-200 linear"
        ></div>
    </div>
</div>

