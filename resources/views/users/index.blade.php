@extends('layouts.app')
@section('contect')
    <div class="row">
        <div class="col-md-2 register-left">
            <h3>Welcome</h3>
            <a name="" id="" class="btn btn-primary mx-auto" href="{{ route('users.create') }}" role="button">Create
                Users</a>
            <br /><br />
            @include('alert.message')
        </div>
        <div class="col-md-10 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Users List</h3>
                    <div class="row register-form">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">DOB</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @if (count($users) > 0)
                                @foreach ($users as $user)
                                    <tbody>
                                        <tr>
                                            <td scope="row">{{ $users->firstItem() + $loop->index ?? null }}</td>
                                            <td>{{ $user->name ?? null }}</td>
                                            <td>{{ $user->email ?? null }}</td>
                                            <td>{{ $user->password ?? null }}</td>
                                            <td>{{ $user->birth_date ?? null }}</td>
                                            <td>{{ $user->city ?? null }}</td>
                                            <td>{{ $user->country ?? null }}</td>
                                            <td>{{ $user->is_active == '1' ? 'Active' : 'Inactive' ?? null }}</td>
                                            <td>
                                                <a class="btn btn-sm btn btn-primary"
                                                    href="{{ route('users.edit', $user->id) }}">Edit</a> <br />
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
