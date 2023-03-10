<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Nagar Sahayak</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset('img/splash_screens.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/splash_screens.png')}}" type="image/x-icon">

    
        <!-- Google font-->
        <link href="{{asset('backend/css/google-fonts.css')}}">

<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/fontawesome.css')}}">

<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/flag-icon.css')}}">

<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/icofont.css')}}">

<!-- Prism css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/prism.css')}}">

<!-- Chartist css -->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/chartist.css')}}">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.css')}}">
<!-- Dropzone css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/dropzone.css')}}">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/admin.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/custom.css')}}">

<!-- jsgrid table css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/jsgrid.css')}}">

<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/themify-icons.css')}}">

<!-- owlcarousel css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/owlcarousel.css')}}">

<!-- Rating css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/rating.css')}}">

<!-- Datatables css-->
<link rel="stylesheet" type="text/css" href="{{asset('backend/css/datatables.css')}}">

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->



<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        
            @include('backend.layout.header')

            <!-- @if(\Session::has('success'))
                        <div class="text-green-600 pt-5 pl-5">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    
                    @if(\Session::has('error'))
                        <div class="text-green-600 pt-5 pl-5">
                            <ul>
                                <li>{!! \Session::get('error') !!}</li>
                            </ul>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="text-red-600  pt-5 pl-5">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->



                    @if (\Session::has('success'))
    <div class="alert alert-success">
       <p>{{ \Session::get('success') }}</p>
    </div>
@endif
@if (\Session::has('failure'))
    <div class="alert alert-danger">
       <p>{{ \Session::get('failure') }}</p>
    </div>
@endif







            @include('backend.layout.sidebar')
            @yield('content')

            @include('backend.layout.footer').


            
<!-- touchspin js-->



<!-- <script src="{{asset('backend/js/touchspin/vendors.min.js')}}"></script> -->
    <script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>



<!-- ckeditor js-->

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>



<!-- Bootstrap js-->
<script src="{{asset('backend/js/popper.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('backend/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('backend/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('backend/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('backend/js/chart/chartist/chartist.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('backend/js/chart/chartjs/chart.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backend/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('backend/js/prism/prism.min.js')}}"></script>
<script src="{{asset('backend/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('backend/js/custom-card/custom-card.js')}}"></script>


<!--peity chart js-->
<script src="{{asset('backend/js/chart/peity-chart/peity.jquery.js')}}"></script>

<!--sparkline chart js-->
<script src="{{asset('backend/js/chart/sparkline/sparkline.js')}}"></script>



<!--dashboard custom js-->
<!-- <script src="{{asset('backend/js/dashboard/default.js')}}"></script> -->

<!--right sidebar js-->
<script src="{{asset('backend/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('backend/js/height-equal.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('backend/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{asset('backend/js/admin-script.js')}}"></script>


<!-- Owlcarousel js-->
<script src="{{asset('backend/js/owlcarousel/owl.carousel.js')}}"></script>
<!-- <script src="{{asset('backend/js/dashboard/product-carousel.js')}}"></script> -->

<!-- Datatable js-->
<script src="{{asset('backend/js/datatables/jquery.dataTables.min.js')}}"></script>
<!-- <script src="{{asset('backend/js/datatables/custom-basic.js')}}"></script> -->

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js')}}"></script> -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js')}}"></script> -->

<script src="https://code.jquery.com/jquery-latest.min.js"> </script>


    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">	</script>


<script>

$(document).ready(function () { 
    $("#NewStaff").validate({

               
                // in 'rules' user have to specify all the constraints for respective fields
                rules: {

                  name: {
                        required: true,
                        minlength: 2,
                        maxlength:50
                    },

                  last_name: {
                        required: true,
                        minlength: 2 //for length of lastname
                    },

                    father_name:{
                       required: true,
                       minlength: 2,
                       maxlength:50                    
                    },

                    dob: {
                        required: true,                        
                      
                      //  Format : "dd-mm-yyyy",
                    },
                
                    email: {
                        required: true,
                        email: true
                    },
                    phone:{
                       required: true,
                       minlength: 2,
                       maxlength:12,
                       

                    },  
                    aadhar_no:{
                       required: true,
                       minlength: 2,
                       maxlength:14
                    },  

                    address:{
                       required: true,
                       minlength: 2,
   
                    },  

                    image:{
                       required: true,
                         
                    },  

                    aadhar_front:{
                       required: true,
                         
                    },  

                    aadhar_back:{
                       required: true,
                         
                    },  
   
                },
               
                messages: {
                    name: "Please Enter Your Fist Name.",
                    last_name: "Please Enter Your Last Name.",
                    father_name:"Please Enter Your Father's Name.",
                    phone:"Please Enter Your Mobile Number.",
                    email:"Please Enter Your Email ID",
                    aadhar_no:"Please Enter Your Aadhar card Number.",
                    address:"Please Enter Your Address.",
                    image:"Please uploade Your Profile image.",
                    dob:"Please Enter Your Birth of Date.",
                    aadhar_front:"Please Uploade Aadhar card image (front)",
                    aadhar_back:"Please Uploade Aadhar card image (Back)",
                    
                }
            });
        });

    </script>




<script>
  $(document).ready(function(){

  $("#category").on("change",function(){
    var selectedVal = this.value;
    $.post(`{{url('getcity')}}`,{selectedVal,"_token": "{{ csrf_token() }}"},(data)=>{
      $('#subcategory').html(data);
    },'html')
 });  
});

</script>












<script>

$('.update').on('click', () => {
        var fund = $('#fund').val()
        // var last_name = $('#last_name').val()
      
        // console.log(url);
        var error_status = 0
        if (fund.trim() == '') {
            toastr.error('fund Filed Missing')
            error_status = 1;
        } 
    

        if (error_status == 0) {
            $('#fupForm').submit()
        }
    })
    
</script>




 <script>
      $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="width:80px;height:80px;" class="mr-3 mt-3">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#getimage').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
  </script>



</body>
</html>
