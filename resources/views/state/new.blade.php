

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>


<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-1 pb-16">
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form  id="department_add_frm" method="POST" action="{{route('admin.state.store')}}">
            @csrf
            <div class="flex flex-col space-y-2">
              <label for="ulbtype" class="text-gray-700 select-none font-medium">State Name *</label>
              <input  type="text" name="name" placeholder="State Name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            <div class="flex flex-col space-y-2">
              <label for="title" class="text-gray-700 select-none font-medium">State Code *</label>
              <input type="number" name="sates_code" placeholder="State Code" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            <div class="text-center mt-16 mb-16">
              <button type="submit" id="submitButton" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors update">Submit</button>
            </div>
        </div>
      </div>
    </main>
  </div>
  </div>
</x-app-layout>
