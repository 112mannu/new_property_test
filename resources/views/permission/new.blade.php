<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" id="fupForm" enctype="multipart/form-data"   action="{{route('admin.has-permission.store')}}">
                  @csrf
                  @method('post')


                  <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="role_id" style="width:100% !important;">
                <option>--Please Select Role---</option>
            @foreach($roles as $role)
          
             <option value="{{$role['id']}}"> {{ $role->name }}</option>
                        @endforeach   
                        </select>


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
                        
                            <?php $i = 1; ?>
                            @foreach(\App\Models\Premission::get() as $ulbtype)
                        </tr>

                        <tr class="tables-data-stylen-r">                 
                            <td>
                           {{ $i++;}}
                            </td>
                           
                            <td>
                            {{$ulbtype['name']}}
                            </td>
                            <input type="hidden" id="permissions_id" name="permissions_id[]"  value="{{$ulbtype['id']}}" />
                                    <div class="control_indica"></div>
                            
                            <td>
                                <label class="control control-checkbox">

                                    <input type="checkbox" id="view"  name="view[]" value="{{$ulbtype['id']}}_1" />
                                    <div class="control_indica"></div>
                                </label>
                            </td>

                            <td>
                                <label class="control control-checkbox">

                                    <input type="checkbox" id="add" name="add[]"  value="{{$ulbtype['id']}}_1" />
                                    <div class="control_indica"></div>
                                </label>
                            </td>

                            <td><label class="control control-checkbox">

                                    <input type="checkbox" id="edit" name="edit[]"  value="{{$ulbtype['id']}}_1"/>
                                    <div class="control_indica"></div>
                                </label></td>
                            <td><label class="control control-checkbox">
                                    <input type="checkbox" id="delete" name="delete[]" value="{{$ulbtype['id']}}_1">
                                    <div class="control_indica" ></div>
                                </label></td>
                        </tr> 
              </div>
            </div>
              @endforeach

              <div class="text-center mt-16">
                  <button type="submit"  id="update" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors update">Submit</button>
                </div>

            </div>
        </main>
    </div>
</div>

</x-app-layout>


