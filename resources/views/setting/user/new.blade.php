<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">

  
                <form method="POST" action="{{ route('admin.users.store')}}">
                  @csrf
                  @method('post')
                <div class="row">
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="name" class="text-gray-700 select-none font-medium">Fist Name</label>
                    <input id="name" type="text" name="name" 
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="last_name" class="text-gray-700 select-none font-medium">Last Name</label>
                    <input id="last_name" type="text" name="last_name" 
                      placeholder="Enter Last name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="phone" class="text-gray-700 select-none font-medium">Phone Number</label>
                    <input id="phone" type="text" name="phone" 
                      placeholder="Enter Phone Number" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
        
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                    <input id="email" type="text" name="email" 
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                </div>

                <!-- <label for="ulbtype" class="text-gray-700 select-none font-medium">Urban Local Bodies Type *</label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select id="category" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="upbtype_id" style="width:100% !important;">
                <option>--Please Select---</option>
                @foreach(\App\Models\Ulbtype::where(['ulbtype'=>0])->get() as $ulbtype)
                <option value="{{$ulbtype['id']}}">{{$ulbtype['ulbtype']}}</option>
                @endforeach
              </select>
            </div>

            <label for="ulbtype" class="text-gray-700 select-none font-medium">City/Town </label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select  id="subcategory" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="city_id" style="width:100% !important;">
               <option  >--Please Select City---</option>
              </select>
            </div>

            
            <label for="ulbtype" class="text-gray-700 select-none font-medium">Please Select Ward </label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select  id="ward" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="ward_id" style="width:100% !important;">
               <option>--Please Select Ward---</option>
              </select>
            </div>   -->

                
                <!-- <div class="flex flex-col space-y-2">
                    <label for="password" class="text-gray-700 select-none font-medium">Password</label>
                    <input id="password" type="password" name="password" value="{{ old('password') }}"
                      placeholder="Enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                
                <div class="flex flex-col space-y-2">
                    <label for="password_confirmation" class="text-gray-700 select-none font-medium">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Re-enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div> -->

                <h3 class="text-xl my-4 text-gray-600">Role</h3>
                <div class="grid" style="width: 20%; ">
                  @foreach($roles as $role)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center ">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                </div>
                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                </div>
              </div>

             
            </div>
        </main>
    </div>
</div>
</x-app-layout>
<script>






</script>