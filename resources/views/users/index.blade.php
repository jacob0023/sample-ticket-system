<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        #group{
            width:500px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('users.create') }}" class="btn btn-dark btn-sm">create a user</a>
                  <hr>
                <form><div class="input-group" id="group">
                       <input type="text" class="form-control" id="searchbox" name="searchbox">
                       <button type="submit" id="Search" class="btn btn-warning btn-sm">Search</button>
                       </div>
                    </form>
                    <hr>
                    <table class="table table-striped table-hover">
                    <thead class="table-dark"> 
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        @foreach ($users as $user)

                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date('M d, Y h:i',strtotime($user->created_at)) }}</td>
                            <td>{{ date('M d, Y h:i',strtotime($user->updated_at)) }}</td>
                            <td>

                        <a href="/users/{{ $user->id }}"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                        <form method="POST" action="/users/{{ $user->id }}">
                        @method('DELETE')
                        @csrf

                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                    </tr>
                                @endforeach
                        </table>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>