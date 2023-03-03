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
</style>


<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-2">
      <div class="text-right">
        @can('Municipal create')
        <a href="{{route('admin.municipal.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New post</a>
        @endcan
      </div>
      @can('Municipal report')


      <form action="{{route('admin.municipal.index')}}" method="get">
        @csrf
        @method('GET')

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full sh px-3 mb-6 md:mb-0">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-first-name">
              State Date
            </label>
            <input class="appearance-none block w-full text-gray-700 rounded-lg mb-3 leading-tight focus:outline-none focus:bg-white border-gray-300"  type="date" name="state_date">
          </div>

          <div class="w-full sh px-3">
            <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name">
            End Date
            </label>
            <input class="appearance-none block w-full text-gray-700 border border-gray-300 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" name="end_date">
          </div>
          <div class="shre">
          <label class="block tracking-widetext-gray-700 select-none font-medium mb-2" for="grid-last-name"></label>
          </div>
          <input class="appearance-none block  for-clr text-gray-700 border border-gray-300 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  type="submit" value="Submit">
        </div>
      </form>


        <!-- <a href="{{url('excel-downloade')}}"> Exical </a> -->
<br>
        <!-- <a href="{{url('pdf-downloade')}}"> pdf </a> -->

        
      @endcan

      <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
          <thead>
            <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">S.NO.</th>

              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Property Owner Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12"> Father Husband Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Mobile No.</th>
              <!-- <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Father's/Husband's Name of the Chairperson Mr.</th> -->
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Aadhaar No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Property No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Gender</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
            </tr>
          </thead>
          <tbody>
            
            @can('Municipal access')     

            <?php $i=1; ?>

            @foreach($surveyb  as $surveyb)
            
            <tr class="hover:bg-grey-lighter">
              <td class="py-4 px-6 border-b border-grey-light"> {{$i++}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->property_owner_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->father_husband_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->mobile_number}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->aadhar_card_no}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->property_no}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$surveyb->category}}</td>
              <td class="py-4 px-6 border-b border-grey-light text-right">

                @can('Municipal edit')
                <a href="{{route('admin.municipal.edit',$surveyb->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">View</a>
                @endcan

                <i class="bi bi-whatsapp"></i>


                @can('Municipal delete')
                <form action="{{ route('admin.municipal.destroy', $surveyb->id) }}" method="POST" class="inline">
                  @csrf
                  <!-- @method('delete')
                  <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                </form>
                @endcan -->
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