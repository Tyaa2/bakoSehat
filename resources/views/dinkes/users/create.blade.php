<x-app-layout>
    <div>


        {{-- @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

<div class="m-10 pt-10 text-sm">
        <a href="http://" class="font-bold">Dashboard</a>
        <a href="">> Pendaftaran BPJS Gratis</a>
        <a href="">> Detail</a>
    </div>


    <div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   

<div class="">



  
    <div>
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <h5
          class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
          Edit Peserta Pendaftaran
        </h5>
        <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
          Edit Informasi terkait Peserta Pendaftaran BPJS Gratis. Perhatikan dengan seksama sebelum mengupload data. Data yang telah diupload masuk ke antrian baru.
        </p>
      </div>
    <div class="border-b border-gray-900/10 pb-12">
      
      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-2 sm:col-start-1">
            <h2 class="text-base/7 font-semibold text-gray-900">Informasi Pribadi</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Gunakan informasi yang valid dan sesuai dengan data KTP.</p>
        </div>
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-gray-900">Username</label>
          <div class="mt-2">
            <input type="text" name="name" id="name" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>

        

        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="text" name="email" id="email" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>




        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="region" class="block text-sm/6 font-medium text-gray-900">Role</label>
          <div class="mt-2">
            <select name="role" class="block w-full rounded-md bg-blue-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
                @foreach($roles as $role)
                <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                @endforeach
            </select>




            <div class="mb-6">
                                                                    <label for="target_kelurahan_id"
                                                                        class="block text-sm font-medium text-blue-700 mb-1">
                                                                        Surat Domisili akan Dikeluarkan Oleh
                                                                    </label>
                                                                    <div class="relative">
                                                                        <select name="target_kelurahan_id"
                                                                            id="target_kelurahan_id" required
                                                                            class="w-full appearance-none  bg-gray-50 text-gray-600 border text-sm border-gray-300 rounded-xl py-2 px-4 pr-10 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                                                            <option value="" disabled selected
                                                                                class="text-gray-400">
                                                                                -- Pilih Role Tujuan --
                                                                            </option>
                                                                            @foreach ($roles as $role)
                                                                                <option  value="{{ $role }}">{{ ucfirst($role) }}">
                                                                                    
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                        <div
                                                                            class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-gray-400">
                                                                            <!-- Icon panah bawaan dropdown -->
                                                                            <svg class="w-4 h-4" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                viewBox="0 0 24 24">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    d="M19 9l-7 7-7-7" />
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>

        
          </div>
        </div>






        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password
        <span class="text-red-600">(kosongkan jika tidak ingin ganti password)</span></label>
          <div class="mt-2">
            <input type="password"  name="password" id="password" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>




         




        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="alamat" class="block text-sm/6 font-medium text-gray-900">alamat</label>
          <div class="mt-2">
            <input type="text" name="alamat" id="alamat" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        
        <div class="sm:col-span-4">
          <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Upload User Profile</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm/6 text-gray-600">
              <label for="profile" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-blue-500">
                  <span>Upload a file</span>
                  <input id="profile" name="profile" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
      </div>
    </div>




  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Save</button>
  </div>
</form>

    </div>
</div>
              </div>
            </div>
        </div>
    </div>








    
</div>

</x-app-layout>














{{-- <x-app-layout>

<div class="container">
    <h2>Tambah User Baru</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                @foreach($roles as $role)
                <option value="{{ $role }}">{{ ucfirst($role) }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <button class="btn btn-success" type="submit">Simpan</button>
    </form>
</div>

</x-app-layout> --}}
