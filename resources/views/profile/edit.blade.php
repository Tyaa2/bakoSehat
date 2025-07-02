<x-app-layout>

    <div class="mt-20 text-sm relative pt-10">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div
                class="absolute bg-center top-0 left-0 w-full h-[120px] z-0 bg-[url('https://i.pinimg.com/736x/a8/d2/fb/a8d2fb572ed0bc5a01a17da91d058ac6.jpg')] rounded-xl">
            </div>
            <div class="relative px-6 max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="relative flex flex-col w-full h-full text-gray-700 bg-white rounded-xl bg-clip-border">
                            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                                <div class="flex items-center justify-between gap-8 mb-8">
                                    @include('profile.partials.update-profile-information-form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                    <div class="p-6 text-gray-900">
                        <div class="relative flex flex-col w-full h-full text-gray-700 bg-white rounded-xl bg-clip-border">
                            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                                <div class="flex items-center justify-between gap-8 mb-8">
                                     @include('profile.partials.update-password-form')
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>


            </div>
        </div>
    </div>
    



</x-app-layout>
