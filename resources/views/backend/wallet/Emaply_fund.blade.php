@extends('backend.layout.app')
@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Wallet</h3>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="dashboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>

                        <li class="breadcrumb-item active">Wallet</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- @can('ULB Ward create')
    <div class="card-body order-datatable pt-2">
        <div class="btn-popup pull-right">
            <a href="{{route('admin.ulbward.create')}}"> <button type="button" class="btn btn-primary">Add ULB ward</button></a>
        </div>
    </div>
    @endcan -->


    <div class="card-body order-datatable">
        <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">

            <table class="display table jsgrid dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                <thead>


                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No.: activate to sort column descending" style="min-width: 100px;">
                            S.No.
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="min-width: 187px;"> Name</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 187px;">Logn Id</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 100px;">Blance</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 100px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="min-width: 150px;">Remark</th>
                    </tr>
                </thead>
                <?php $i = 1 ?>
                <tbody>
                @can('ULB Ward access')
              
              @foreach($blance as $blance)

                    <tr role="row" class="odd">

                        <td class="sorting_1">{{$i++}}</td>
                        <td>{{$blance->user->name}}</td>
                        <td>{{$blance->user->unique_id}}</td>
                        <td>{{$blance->balance}}</td>
                       
                         
                        
                            @if($blance->admin_status == '1')                             
                                <td><span class="text-success">Approve</span></td>

                            @elseif($blance->admin_status == 'null') 
                            
                             <td>    </td>

                             @elseif($blance->admin_status == '0') 
                            
                             <td><span class="text-danger">In Approve</span></td>
                                                   
                            @endif

                                        </td>
                                    <td>

                                   {{ $blance->remark}}
                                        
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