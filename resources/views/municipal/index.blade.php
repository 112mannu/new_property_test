<style>
.sh{
  width: 25%!important;
}

input.for-clr{
  background-color: #3b82f6;
    height: 38px;
    padding: 0px 14px;
    color: #fff;
    margin-top: 32px;
}
input.sur-fo{
  margin-top: 34px;
    border: none;
    height: 35px;
    border-radius: 6px;
    margin-right: 16px;
}
</style>

<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->


<x-app-layout>


<meta name="_token" content="{{ csrf_token() }}">

  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-2">
      <!-- <div class="text-right">
        @can('Municipal create')
        <a href="{{route('admin.municipal.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New post</a>
        @endcan
      </div> -->


      @can('Municipal report')


      <form action="{{url('search')}}" method="get">
        @csrf
        @method('GET')

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
              State Date
            </label>
            <input class="appearance-none block w-full text-gray-700 rounded-lg mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  type="date" name="state_date">
          </div>
          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            End Date
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="end_date">
          </div>

          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Name
            </label>
            <input placeholder="Name" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="name">
          </div>


          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Unique Id
            </label>
            <input placeholder="Unique Id" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="unique_id">
          </div>


          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Mobile Number
            </label>
            <input placeholder="Mobile Number" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="mobile">
          </div>
          <!-- <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Mobile Number
            </label>
            <input placeholder="Mobile Number" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="mobile">
          </div> -->

          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Aadhaar Number
            </label>
            <input placeholder="Aadhaar Number" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="aadhaar">
          </div>

          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            Staff Login Id
            </label>
            <input placeholder="Staff Login Id" class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight" type="text" name="Staff_unique">
          </div>
       <input   class="btn btn-primary quck-save-btn" type="submit" value="Search"> 
      </form>
<br>
      
      <!-- <form action="{{url('filter')}}" method="get"> -->
      <!-- <input type="text" placeholder="Staff Name" class="form-controller" name="staff_name"></input> -->
      <!-- <input type="text" placeholder="Staff Unique Id"  class="form-controller" name="Staff_unique"></input>
       <input   class="btn btn-primary quck-save-btn" type="submit" value="Search">
       </form> -->

      <a href="{{url('excel-downloade')}}">   <button type="button"  class="btn btn-primary quck-save-btn"> Download </button></a>


        <!-- <a href="{{url('pdf-downloade')}}"> pdf </a> -->


      @endcan

      <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
          <thead>
            <tr>
            <!-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">S.NO.</th> -->
            <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Unique Id	</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Property Owner Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12"> Father Husband Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Mobile No.</th>
              
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Aadhaar No.</th>
              <!-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Property No.</th> -->
              <!-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Gender</th> -->
              <!-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Gender</th> -->

            <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Staff Name</th>

              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
            </tr>
          </thead>
          <tbody>
            
            @can('Municipal access')     
            @foreach($municipal  as $municipal)
            
            <tr class="hover:bg-grey-lighter">
             
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->unique_id}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->property_owner_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->father_husband_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->mobile_number}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->aadhar_card_no}}</td>
              <!-- <td class="py-4 px-6 border-b border-grey-light">{{$municipal->property_no}}</td> -->
              <!-- <td class="py-4 px-6 border-b border-grey-light">{{$municipal->category}}</td> -->


              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->username->name}}</td>


              
              <td class="py-4 px-6 border-b border-grey-light text-right">

                @can('Municipal edit')
                <a href="{{route('admin.municipal.show',$municipal->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400"> View </a>
                @endcan

                <i class="bi bi-whatsapp"></i>


                @can('Municipal delete')
                <form action="{{ route('admin.municipal.destroy', $municipal->id) }}" method="POST" class="inline">
                  @csrf
                  <!-- @method('delete')
                  <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                </form>-->
                @endcan 
              </td>
            </tr>

            @endforeach
            @endcan
          </tbody>
        </table>
      </div>

    </div>

    
  </main>
  </div>
</x-app-layout>


<!-- 
<script>
    $('#search').on('keyup', function() {
        $value = $(this).val();

        $.ajax({
            type: 'get',
            url: 'search',

            data: {
                'search': $value
            },
            success: function(data) {
                // console.log(data)

                $('.tbody').html(data);

            }
        });

    })
</script> -->