@extends('backend.layout.app')
@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>State List </h3>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="dashboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>

                        <li class="breadcrumb-item active">State List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    @can('State add')
    <div class="card-body order-datatable pt-2">
        <div class="btn-popup pull-right">
            <a href="{{route('admin.state.create')}}"> <button type="button" class="btn btn-primary">Add State</button></a>
        </div>
    </div>
    @endcan

    <div class="card-body order-datatable">
        <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">

            <table class="display table jsgrid dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                <thead>


                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No.: activate to sort column descending" style="width: 184px;">
                            S.No.
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 184px;">State Name	</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 184px;">State Code</th>
                        <!-- <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 184px;">ULB ward No.</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 184px;">Remark</th> -->
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 184px;">Action</th>
                    </tr>
                </thead>
                <?php $i = 1 ?>
                <tbody>
                @can('State access')
                @foreach($state as $state)

                    <tr role="row" class="odd">

                        <td class="sorting_1">{{$i++}}</td>
                        <td>{{$state->name}}</td>
                  
                        <td>{{$state->sates_code}}</td>
                                             
                        <td >
                            <!-- <label class="label-switch switch-primary">
                                <input type="checkbox" hidden="hidden" id="username">
                                <label class="switch-btn" for="username"></label>
                            </label> -->
                           <div class="cutom-edit-del">
                           @can('State edit')
                            <a href="{{route('admin.state.edit',$state->id)}}"> <button class="jsgrid-button jsgrid-edit-button" data-toggle="modal" data-target="#editblog" type="button" class="inline" title="Edit"></button></a>
                            @endcan


                            @can('ULB Ward delete')
                            <form action="{{ route('admin.state.destroy',$state->id)}}" method="POST" class="inline">
                                @csrf
                                @method('delete')
                                <button id="update" class="jsgrid-button jsgrid-delete-button"></button>
                            </form>
                            @endcan
                           </div>
                        </td>

                    </tr>
                    @endforeach
                    @endcan

                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection