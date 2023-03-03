<style>
  .error{
  color : red!important;
  }
</style>
<!-- <link	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"	rel="stylesheet"/>
<link	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
	rel="stylesheet"	/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.staff.store')}}" id="signupForm" enctype="multipart/form-data">
                  @csrf
                  @method('post')
                <div class="row">
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="name" class="text-gray-700 select-none font-medium">First Name *</label>
                    <input id="name" type="text" name="name" placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="last_name" class="text-gray-700 select-none font-medium">Last Name *</label>
                    <input id="last_name" type="text" name="last_name" placeholder="Enter Last name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label  class="text-gray-700 select-none font-medium">Father's Name *</label>
                    <input  type="text" name="father_name" 
                      placeholder="Father Name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
        
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label class="text-gray-700 select-none font-medium">Dob</label>
                    <input  type="date" id="dob" name="dob" placeholder="Dob (dd/mm/yyyy)" max="2099-04-30" class="datepicker px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="phone" class="text-gray-700 select-none font-medium">Phone Number</label>
                    <input id="phone" type="text" name="phone" 
                      placeholder="Enter Phone Number" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" require />
                </div>
        
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="email" class="text-gray-700 select-none font-medium">Email</label>
                    <input id="email" type="text" name="email" 
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" require>
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Aadhar No. * </label>
                    <input id="aadhar_no" type="text" name="aadhar_no" placeholder="Enter Aadhar Number" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Remark </label>
                    <input id="aadhar_no" type="text" name="remark" placeholder="Enter Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

             
               
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Address * </label>
                    <textarea  id="aadhar_no" type="texbox" name="address" placeholder="Write Address" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                  ></textarea>

                </div>


                <!-- --- -->
                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Upload Photo </label>
                    <input id="aadhar_no" type="file" name="image" placeholder="Enter Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Upload Aadhar (Front) </label>
                    <input id="aadhar_front" type="file" name="aadhar_front" placeholder="Enter Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

                <div class="flex flex-col space-y-2 col-lg-6">
                    <label for="aadhar_no" class="text-gray-700 select-none font-medium">Upload Aadhar (Back) </label>
                    <input id="aadhar_back" type="file" name="aadhar_back" placeholder="Enter Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>  
                </div>

          <input  type="" name="roles[]" value="9" style="display:none">
                                  

                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Submit</button>
                </div>
              </div>

             
            </div>
        </main>
    </div>
</div>
</x-app-layout>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">	</script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">	</script>
<script>

$(document).ready(function () { 
            $("#signupForm").validate({
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
                   
                   
                },
                // in 'messages' user have to specify message as per rules
                messages: {
                    name: "This field is required.",
                    last_name: " This field is required.",
                    father_name:"This field is required. ",
                    phone:"This field is required. ",
                    aadhar_no:"This field is required.",
                    address:"This field is required.",
                    
                }
            });
        });


    </script>

	



