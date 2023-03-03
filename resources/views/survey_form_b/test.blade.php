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
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Name of the plot / building owner Mr. / Mrs.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Name of the building owner's father/husband Mr.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Name of the plot/building occupier Mr./Mrs.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Father's/Husband's Name of the Chairperson Mr.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Plot / Building No.</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">coloney</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
            </tr>
          </thead>
   

@foreach($municipal  as $municipal)
            

<td class="py-4 px-6 border-b border-grey-light">{{$municipal->owner_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->owner_father_husband}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->occupier_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->presbyter_name}}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->polt_number}}</td>

              <td class="py-4 px-6 border-b border-grey-light">{{$municipal->coloney}}</td>
              @endforeach


</body>
</html>