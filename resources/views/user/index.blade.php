@extends('layouts.app')

@section('content')
    <main class="sm:container sm:mx-auto sm:mt-10">

        <div class="w-full sm:px-6">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                <header class="font-semibold bg-gray-200 text-gray-700 py-2 px-2 sm:py-2 sm:px-8 sm:rounded-t-md">
                    User Dashboard
                </header>
                <div class="w-full p-3">
                    <p class="text-gray-700">
                        Prisijungėte kaip naudotojas!
                    </p>
                </div>
            </section>
        </div>

        <div><br><br></div>

        <table style="font-size: 50px; background: cornflowerblue; border-radius: 25px;" class="ml-5">
            <tbody>
            <tr>
                <th scope="row"></th>
                <td class="pt-5 pb-5"><table style="font-size: 50px;" class="table-borderless ml-5">
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td style="font-size: 25px;" class="pb-2">Identifikacija</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td >{{ $user->name }} {{ $user->surname }}</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td >------------------</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td style="font-size: 35px">1999-04-15</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td style="font-size: 35px" colspan="2">Antras Dešimtmetis</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td style="font-size: 20px; padding-top: 10px">100101011{{ $user->id }}</td>
                        </tr>
                        </tbody>
                    </table></td>
                <td style="font-size: 150px" class="pl-9 pr-6">QR</td>
            </tr>
            </tbody>
        </table>
    </main>
@endsection
