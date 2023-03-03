<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-2">
          <div class="text-right">
            @can('form3 create')
              <a href="{{route('admin.form3.create')}}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New post</a>
            @endcan
          </div>

        <div class="bg-white shadow-md rounded my-6">
          <table class="text-left w-full border-collapse">
            <thead>
              <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Fist Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Last Name</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">Email</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Title</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">Actions</th>
              </tr>
            </thead>
            <tbody>
              @can('form3 access')
                @foreach($forms as $forms)
                <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">{{$forms->name}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$forms->last_name}}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{$forms->email}}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{$forms->title}}</td>

                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('form3 edit')
                    <a href="#" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>
                    @endcan

                    @can('form3 delete')
                    <form action="{{ route('admin.form3.destroy', $forms->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                    </form>
                    @endcan
                  </td>
                </tr>
                @endforeach
                @endcan
            </tbody>
          </table>

     
        </div>

      </div>
  </main>
</div>
</x-app-layout>
