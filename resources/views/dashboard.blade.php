<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">

                    <tbody>

                        <tr>
                            <th scope="row">Name</th>
                            <td>
                                {{ $user->name }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>
                                {{ $user->email }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phone No</th>
                            <td>
                                {{ $user->phone }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">State</th>
                            <td>
                                {{ $state->name }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">City</th>
                            <td>
                                {{ $city->name }}
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
