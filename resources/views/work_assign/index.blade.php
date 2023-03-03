<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
            @can('UlbType create')
              <a href="{{route('admin.work-assign.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Work Assign</a>
            @endcan
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">User Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">ULB Type</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">City</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">ward No.</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>  

            <tbody>
              @can('Work assign access')
                @foreach($workassign as $workassign)
                <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">{{$workassign->user->name}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$workassign->ulbtype->ulbtype}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$workassign->ulbboder->city}}</td>

             <td class="py-4 px-6 border-b border-grey-light">{{$workassign->ward_no}}</td> 

          
                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('Work assign edit')
                    <a href="{{route('admin.work-assign.edit',$workassign->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                    @endcan

                    @can('Work assign delete')
                    <form action="{{ route('admin.work-assign.destroy',$workassign->id)}}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                    </form>
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
