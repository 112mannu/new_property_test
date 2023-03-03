<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>





<x-app-layout>
  <div>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-1 pb-16">
        <div class="bg-white shadow-md rounded my-6 p-5">
          <form method="POST" name="RegForm"  id="fupForm" action="{{ route('admin.ulbtype.store') }}">
            @csrf
            <div class="flex flex-col space-y-2">
              <label for="ulbtype" class="text-gray-700 select-none font-medium">Urban Local Bodies Type *</label>
              <input id="name" type="text" name="ulbtype" placeholder="Urban Local Bodies Type" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            <div class="flex flex-col space-y-2">
              <label for="title" class="text-gray-700 select-none font-medium">Remark</label>
              <input id="remark" type="remark" name="remark" placeholder="Remark" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200" />
            </div>

            <div class="text-center mt-16 mb-16">
              <button type="submit" id="submitButton" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors update">Submit</button>
            </div>
        </div>
      </div>
    </main>
  </div>
  </div>
</x-app-layout>



<script>

$("#submitButton").click(function(){
name1 = $("#name").val();
line1 = $("#line").val();
var error_status = 0

if (name.trim() == '') {
    alert('BOI Filed Missing')
    error_status = 1;}

    if (error_status == 0) {


$('#fupForm').submit()
}


  //toastr.error("Name: " + name1 + "\nMessage: " + line1);


});
  </script>




<script>


$('.update').on('click', () => {

var name = $('#ulbtype').val()
// var last_name = $('#last_name').val()
// var email = $('#email').val()
// var bio = $('#bio').val()
// var image = $('#file').val()






// url = "{{url('admin/profile_update')}}";
// console.log(url);


var error_status = 0

if (name.trim() == '') {
    toastr.error('BOI Filed Missing')
    error_status = 1;


    console.log(name);

return false;



} else if (name.trim() == '') {
    toastr.error('Name Filed Missing')
    error_status = 1;
} else if (last_name.trim() == '') {
    toastr.error('Last Name Filed Missing');
    error_status = 1;

} else if (email.trim() == '') {
    toastr.error('Email Filed Missing');
    error_status = 1;

} else if (image.trim() == '') {
    toastr.error('Image Filed Missing');
    error_status = 1;
}


var gender = document.getElementsByName('gender');
for (i = 0; i < gender.length; i++) {
    if (gender[i].checked) {
        gender = gender[i].value

    }
}
if (gender.trim() == '') {
    toastr.error('Gender Filed Missing');
}

if (error_status == 0) {


    $('#fupForm').submit()
}
})


</script>