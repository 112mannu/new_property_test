<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.roles.store')}}">
                  @csrf
                  @method('post')
                <div class="flex flex-col space-y-2">
                  <label for="role_name" class="text-gray-700 select-none font-medium">Role Name</label>
                  <input
                    id="role_name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter role"
                    class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                  />
                </div>

                <!-- <h3 class="text-xl my-4 text-gray-600">Permissions</h3>
                <div class="grid grid-cols-3 gap-4">
                  @foreach($permissions as $permission)
                
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col"> -->
                          <!-- <span class="ml-2 text-gray-700">{{ $permission->access }}</span> -->
                              <!-- <label class="inline-flex items-center mt-4">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="permissions[]" value="{{$permission->id}}"
                                  >
                                 
                                  <span class="ml-2 text-gray-700">{{ $permission->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                </div> -->
 
       

                <div class="row mb-4">
            <div class="col-lg-12">
                <table id="property-list" class="table table-bordered tbl  text-center">
                    <thead>
                        <tr class="table-style_gh">
                            <th scope="col">S N.</th>

                            <th scope="col">Function Name</th>
                            <th>
                                <div class="td_parent">
                                    <div class="text-t">View</div>
                                    <div  class="icon_t"> <i class="fa fa-eye" aria-hidden="true"></i></div>
                                </div>
                            </th>
                            <th>
                                <div class="td_parent">
                                    <div class="text-t">Add</div>
                                    <div class="icon_t "><i class="fa fa-plus-square" aria-hidden="true"></i></div>
                                </div>
                            </th>
                            </th>
                            <th>
                                <div class="td_parent">
                                    <div class="text-t">Edit</div>
                                    <div class="icon_t"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                                </div>
                            </th>
                            <th>
                                <div class="td_parent">
                                    <div class="text-t">Delete</div>
                                    <div class="icon_t icon-text"><i class="fa fa-trash-o" aria-hidden="true"></i></div>
                                </div>
                            </th>
                            <tr>
                            <?php $i = 1; ?>
                        
                           
      @foreach($permissions  as $permission ) 
                        
                        <tr class="tables-data-stylen-r">    
                                 
                            <td>
                            {{ $permission->id}}
                            </td>
                           
                            <td>
                            {{ $permission->access }}
                            </td>
                        
                            <td >
                                    <input type="checkbox"  name="permissions[]" value="{{$permission->id}}" />
                                    <div class="control_indica"></div>
                                    {{ $permission->name }}
                                </label>
                                    
                            </td>



                            <!-- <td>
                                <label class="control control-checkbox">

                                    <input type="checkbox"  value="" />
                                    <div class="control_indica"></div>
                                </label>
                            </td>
                            <td><label class="control control-checkbox">

                                    <input type="checkbox"  value="1"/>
                                    <div class="control_indica"></div>
                                </label></td>
                            <td><label class="control control-checkbox">
                                    <input type="checkbox" >
                                    <div class="control_indica" value="1"></div>
                                </label></td> -->
                               
                        </tr>
                        @endforeach
                    
              </div>

              
              <div class="text-center mt-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                </div>

            </div>
        </main>
    </div>
</div>

</x-app-layout>

