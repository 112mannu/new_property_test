<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-1 pb-16">
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form method="POST" action="{{ route('admin.district.store') }}">
            @csrf
           <div class="row">
           <label for="ulbtype" class="text-gray-700 select-none font-medium mb-2">State *</label>
            <div class="relative inline-flex colo-lg-6" style="width:100% !important; ">

              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">

              </svg>

              <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="state_id" style="width:100% !important;">
                <option>--Please Select---</option>

                @foreach(\App\Models\state::where(['name'=>0])->get() as $state)
                <option value="{{$state['id']}}">{{$state['name']}}</option>
                @endforeach
                
              </select>
            </div>
            <div class="flex flex-col space-y-2 col-lg-4 mt-3">
              <label for="city" class="text-gray-700 select-none font-medium">District *</label>
              <input type="text" name="name" placeholder="District" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>


            <div class="flex flex-col space-y-2 col-lg-4 mt-3">
              <label class="text-gray-700 select-none font-medium">district_code </label>
              <input type="text" name="district_code" placeholder="Code" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            


            <div class="text-center mt-16 mb-16 mt-5">
              <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
            </div>
        </div>
           </div>


      </div>
    </main>
  </div>
  </div>
</x-app-layout>