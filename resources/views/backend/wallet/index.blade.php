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
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 187px;">Admin Name</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 100px;">Blance</th>
                        <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 150px;">Status</th>
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
                        <td>{{$blance->admin->name}}</td>
                        <td>{{$blance->balance}}</td>


                        @if($blance->status == '1')  

                        <td> <span class="text-success">Active</span></td>

                        @elseif($blance->status == '0') 
                            
                            <td><span class="text-danger">In Approve</span></td>
                                                  
                           @endif
                                               
 
                                    <td>
                                    <a data-id="{{$blance->id}}" class="list">  <button  type="buttons"  class="btn btn-primarys" data-toggle="modal" data-target="#addblog"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                        
                                    </td>
                    </tr>

                    @endforeach
                    @endcan

                </tbody>
            </table>
        </div>
        </div>
    </div>


    <div class="modal fade" id="addblog"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Remark</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>
                    </button>
                </div>


                @foreach(\App\Models\Wallet::where('user_id')->where('credit', '!=', '')->orderBy('id', 'desc')->limit(1) ->get() as $state)
                 {{  $state->credit}}


                               @endforeach


                <div class="modal-body" id="correct_email">
                    <form class="needs-validation" method="Post" action="{{route('admin.wallet.update', $blance->id)}}" >
                    @csrf
                    @method ('PUT')
                
                        <div class="form">

                        

                            <div class="form-group">
                                <label for="validationCustom02" class="mb-1">Request Fund</label>
                                <select class="form-control" name="status">
                                    <option value="1" >Approved</option>
                                    <option value="0">In Approved</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="validationCustom02" class="mb-1">Remark </label>
                                <textarea class="form-control" name="remark" placeholder="Remark" rows="3"></textarea>
                            </div>

                            <input type="hidden" id="update" name="user_id" >

                           
                           
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>

 $(".list").on('click', function() { 

 var data= $(this).data("id");

//  $('#update').modle(show);

// $("#update").html("<span>" + error +  "</span>")


document.getElementById('update').value = data;



});



</script>

@endsection