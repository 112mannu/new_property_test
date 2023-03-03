<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
          <div class="text-right">
        
              <a href="{{route('admin.state.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Add New State</a>
       
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">S.No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">State Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">State Code</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Status</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>  
            <tbody>

            <?php $i = 1; ?>
          
            
                @foreach($state as $state)
                <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">{{$state->id}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$state->name}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$state->sates_code}}</td>

                <td>
                                            @php
                                                $active_disable = $inactive_disable = "";
                                            @endphp
                                            @if($state->status == 1)
                                                @php
                                                    $inactive_disable = "style=display:none";
                                                @endphp
                                            @else
                                                @php
                                                    $active_disable = "style=display:none";
                                                @endphp
                                            @endif
                                                <button type="button" {{$active_disable}} title="Change status" data-id="{{$state->id}}" data-status="0" class="status_{{$state->id}}_0 status_change btn btn-primary btn_actives">Active</button>
                                            
                                                <button type="button" {{$inactive_disable}} title="Change status" data-id="{{$state->id}}" data-status="1" class="status_{{$state->id}}_1 status_change btn btn-primary btn_inactives">In Active</button>
                                        </td>
          

                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('State edit')
                    <a href="{{route('admin.state.edit',$state->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                    @endcan

                    @can('State delete')
                    <form action="{{ route('admin.state.destroy',$state->id)}}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button id="update" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                    </form>
                    @endcan
                  </td>
                </tr> 
                @endforeach
          
            </tbody>  
          </table>
        </div>

      </div>
  </main>
</div>


</x-app-layout>
