<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<style> 
.listeds_u{
  width: 100% !important;
}

.dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
  position: relative;
    cursor: pointer;
    display: inline-block;
    padding: 9px 50px 9px 10px;
    border: 1px solid #ccc;
    width: 100%;
    border-radius: 21px;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 17px;
    top: 27%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
}

.dropdown-check-list.visible .anchor {
  color: #0094ff;
}

.dropdown-check-list.visible .items {
  display: block;
}



</style>

<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-1 pb-16">
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form method="POST" action="{{ route('admin.work-assign.store')}}">
            @csrf
           

         <div class="container">
          <div class="row">
         <div class="col-lg-6">
         <label for="ulbtype" class="text-gray-700 select-none font-medium ">User <span class="text-danger">*</span></label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none my-2" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="user_id"  style="width:100% !important;">
                <option>--Please Select User---</option>
                @foreach(\App\Models\User::where(['name'=>0])->get() as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
                @endforeach
              </select>
            </div>
         </div>


         <div class="col-lg-6">
            <label for="ulbtype" class="text-gray-700 select-none font-medium ">Urban Local Bodies Type *</label>
            <div class="relative inline-flex my-2" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
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
          <label for="ulbtype" class="text-gray-700 select-none font-medium">City/Town </label>
            <div class="relative inline-flex my-2" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <select id="subcategory" class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="city_id" style="width:100% !important;">
                <option>--Please Select City---</option>
              </select>
            </div>
          </div>


            <div class="col-lg-6">
            <label for="ulbtype" class="text-gray-700 select-none font-medium">Please Select Ward </label>
            <div class="relative inline-flex" style="width:100% !important;">
              <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
              </svg> 


              <div id="list1" class="dropdown-check-list listeds_u"  >
              <span class="anchor">--Please Select Ward---</span>
             <ul class="items">
   
  </ul>
</div>

              <!-- <select id="ward" multiple class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="ward_no[]" style="width:100% !important;">
                <option>--Please Select City---</option>

                <div id="ward" name="ward_no[]">
              </select>
              -->

            </div>
            </div>
            </div>
            <div class="text-center mt-16 mb-16">
              <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
            </div>
          </div>


         </div>
        </div>
      </div>
    </main>
  </div>
  </div>
</x-app-layout>


<script>
  $(document).ready(function() {
    // var option = $('#subcategory');
    $("#category").on("change", function() {
      var selectedVal = this.value;
      $.post(`{{url('getcity')}}`, {
        selectedVal,
        "_token": "{{ csrf_token() }}"
      }, (data) => {
        console.log(data)
        $('#subcategory').html(data);
      }, 'html')
    });
  });
</script>


<script>
  $(document).ready(function() {
    // var option = $('#subcategory');
    $("#subcategory").on("change", function() {
      var selectedVal = this.value;
      $.post(`{{url('getward')}}`, {
        selectedVal,
        "_token": "{{ csrf_token() }}"
      }, (data) => {
        console.log(data)
        $('.items').html(data);
      }, 'html')
    });
  });
</script>


<script> 

var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}
</script>