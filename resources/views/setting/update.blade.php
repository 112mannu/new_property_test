<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form method="POST" action="{{ route('admin.password.update')}}" enctype="multipart/form-data">
            @csrf
            @method('put')
        
            <div class="flex flex-col space-y-2">
              <label for="Password" class="text-gray-700 select-none font-medium">Update Password</label>
              <input id="password" type="password" name="password" placeholder="Update Password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            <div class="flex flex-col space-y-2">
              <label for="password_confirmation" class="text-gray-700 select-none font-medium">Confirm Password</label>
              <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

        </div>  
      </div>
  </div>

  <div class="text-center mt-16 mb-16">
    <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
  </div>
  </div>
  </div>
  </main>
  </div>
  </div>

</x-app-layout>