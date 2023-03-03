<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-1 pb-16">
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form method="POST" action="{{ route('admin.ulbward.store') }}">
            @csrf
            <div class="container">
          <div class="row">
          <div class="col-lg-6">
            <label for="ulbtype" class="text-gray-700 select-none font-medium">Urban Local Bodies Type *</label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none my-2" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select id="category" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="upbtype_id" style="width:100% !important;">
                <option>--Please Select---</option>
                @foreach(\App\Models\Ulbtype::where(['ulbtype'=>0])->get() as $ulbtype)
                <option value="{{$ulbtype['id']}}">{{$ulbtype['ulbtype']}}</option>
                @endforeach
              </select>
            </div>
          </div>

            <div class="col-lg-6">
            <label for="ulbtype" class="text-gray-700 select-none font-medium">City/Town *</label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none my-2" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select  id="subcategory" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="city_id" style="width:100% !important;">
               <option  >--Please Select City---</option>
              </select>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="flex flex-col space-y-2">
              <label class="text-gray-700 select-none font-medium ">UBL Ward  *</label>
              <input type="tesx" id="ward_no" name="ward_no" placeholder="UBL Ward" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200 " />
            </div>
            </div>

            <div class="col-lg-6">
            <div class="flex flex-col space-y-2">
              <label for="title" class="text-gray-700 select-none font-medium">Remark</label>
              <input id="remark" type="remark" name="remark"  placeholder="Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>
            </div>

          </div>
            </div>
            <div class="text-center mt-16 mb-16">
              <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
            </div>
        </div>



        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



      </div>
    </main>
  </div>
  </div>
</x-app-layout>


<script>
  $(document).ready(function(){
  // var option = $('#subcategory');
  $("#category").on("change",function(){
    var selectedVal = this.value;
    $.post(`{{url('getcity')}}`,{selectedVal,"_token": "{{ csrf_token() }}"},(data)=>{
      $('#subcategory').html(data);
    },'html')
 });  
});

</script>