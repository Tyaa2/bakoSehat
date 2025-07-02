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


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li> 	
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   

<div class="">



  
    <div>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
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
            <input type="text" name="name" value="{{ old('name', $user->name) }}" id="name" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>

        

        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
          <div class="mt-2">
            <input type="text" name="email" value="{{old('email', $user->email)}}" id="email" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>




        <div class="sm:col-span-2 sm:col-start-1">
        </div>

        <div class="sm:col-span-4">
          <label for="region" class="block text-sm/6 font-medium text-gray-900">Role</label>
          <div class="mt-2">
            <select name="role" class="block w-full rounded-md bg-blue-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
            @foreach($roles as $role)
                <option value="{{ $role }}" {{ $user->role == $role ? 'selected' : '' }}>{{ ucfirst($role) }}</option>
            @endforeach
        </select><br><br>
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
          <label for="alamat" class="block text-sm/6 font-medium text-gray-900">Alamat</label>
          <div class="mt-2">
            <input type="text"  name="alamat" value="{{ old('alamat', $user->alamat) }}" id="alamat" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
          </div>
        </div>





        
        





         

         <div class="sm:col-span-2 sm:col-start-1">
        </div>

        
        <div class="sm:col-span-4">
          <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Upload User Profile</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
<div class="text-center">
              @if($user->profile)
                  <img id="profileImage" src="{{ asset('storage/' . $user->profile) }}" alt="Profile Image" class="border border-gray-300 rounded-full w-20 h-20 object-cover mr-4 cursor-pointer" onclick="openModal()">
                  
                  <!-- Modal -->
                  <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm  items-center justify-center hidden" onclick="closeModal()">
                    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                      <div class="p-4">
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                          Profile Image Preview
                        </h6>
                        <p class="text-slate-600 leading-normal font-light">
                          Preview of the current profile image. Click outside the image or press ESC to close.
                        </p>
                        
                      </div>
                      <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                        <img id="modalProfileImage" src="{{ asset('storage/' . $user->profile) }}" alt="Profile Image" class="w-full h-full object-contain rounded-md shadow-lg">
                      </div>
                    </div>
                  </div>

                  <script>
                    function openModal() {
                      document.getElementById('imageModal').classList.remove('hidden');
                    }
                    function closeModal() {
                      document.getElementById('imageModal').classList.add('hidden');
                    }
                    document.addEventListener('keydown', function(event) {
                      if(event.key === "Escape") {
                        closeModal();
                      }
                    });
                  </script>
                @endif
              <div>
                
                <label for="profile" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-600 focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-blue-500">
                  <span>Upload a new file</span>
                  <input id="profile" name="profile" type="file" class="sr-only">
                </label>
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





