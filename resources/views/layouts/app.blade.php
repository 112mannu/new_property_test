<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('img/splash_screens.png')}}">

        <!-- <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title> -->
        <title>Nagar Sahayak </title>

        <!-- Fonts -->
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css') }}">

        <!-- Google font-->



        <!-- ----------------Bootstrap-cdn -->

    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"> </script>



    <link	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"	rel="stylesheet"/>
<link	href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
	rel="stylesheet"	/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


        <!-- --------bootrap-cdn----------------- -->
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        
            @include('layouts.sidebar')

            <div class="flex-1 flex flex-col overflow-scroll">

                    @include('layouts.header')

                    @if(\Session::has('success'))
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
                    @endif

                    {{ $slot }}
                    
            </div>
        </div>
    </body>
</html>
