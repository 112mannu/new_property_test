<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>

<div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
          <thead>
            <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Unique id</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Name MR./MRS.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Father/Husband Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Mobile No. </th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Aadhar Card No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Property No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Genter</th>
            </tr>
          </thead>
   

@foreach($municipal  as $municipal)
            

<td class="py-4 px-6 border-b border-grey-light">{{$municipal->unique_id}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->property_owner_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->father_husband_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->mobile_number}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->aadhar_card_no}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->property_no}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->category}}</td>
              @endforeach


</body>
</html>