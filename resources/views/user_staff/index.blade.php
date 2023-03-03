<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
        <div class="text-right">
          @can('Staff add')
          <a href="{{route('admin.staff.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Staff</a>
          @endcan
        </div>

       <form action="{{url('admin/filter')}}" method="get">
      <input type="text" placeholder="Employee Name	" class="form-controller" name="name"></input>
      <input type="text" placeholder="Login Id"  class="form-controller" name="unique_id"></input>
       <input   class="btn btn-primary quck-save-btn" type="submit" value="Search">
       </form>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">S. No.</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Employee Name	</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Farther Name </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Mobile No.	 </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Aadhar No.	 </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Login Id	 </th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1 ?>
              @can('Staff access')
              @foreach($users as $user)
              <tr class="hover:bg-grey-lighter">
              <td class="py-4 px-6 border-b border-grey-light"> {{$i++}} </td>
                <td class="py-4 px-6 border-b border-grey-light">{{ $user->name }} {{ $user->last_name }} </td>
                <td class="py-4 px-6 border-b border-grey-light">{{ $user->father_name }}  </td>
                <td class="py-4 px-6 border-b border-grey-light">{{ $user->phone }}  </td>
                <td class="py-4 px-6 border-b border-grey-light">{{ $user->aadhar_no }}  </td>

                
                <!-- <td class="py-4 px-6 border-b border-grey-light">{{ $user->unique_id }}  </td> -->
                
                <!-- <td class="py-4 px-6 border-b border-grey-light">
                  @foreach($user->roles as $role)
                  <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-white bg-gray-500 rounded-full">{{ $user->father_name }}</span>
                  @endforeach
                </td>

                -------->

                <td class="py-4 px-6 border-b border-grey-light">{{ $user->unique_id }} </td>

                <td class="py-4 px-6 border-b border-grey-light text-right">
                  @can('Staff edit')
                  <a href="{{route('admin.users.edit',$user->id)}}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                  @endcan

                  @can('Staff delete')
                  <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                    @csrf
                    @method('Staff delete')
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
  </div>
</x-app-layout>