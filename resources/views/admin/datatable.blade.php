@extends('admin.base')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            @auth
            <div class="container-fluid">
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5>All Users</h5>
                                    <div>
                                        @if (auth()->user()->role === 'Admin')
                                        <!-- Signup modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#signup-modal">New User</button>
                                        <div class="modal fade" id="signup-modal" tabindex="-1"
                                            aria-labelledby="signup-modal-label" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <a href="index.html" class="text-success">
                                                                <img src="assets/images/logo-dark.png" alt=""
                                                                    height="18">
                                                            </a>
                                                        </div>

                                                        <form class="ps-2 pe-2" method="POST"
                                                            action="{{ route('create-user') }}">
                                                            @csrf

                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">First Name</label>
                                                                <input class="form-control" type="text" id="username"
                                                                    name="name" value="{{ old('name') }}" required 
                                                                    autofocus autocomplete="name" placeholder="First Name" pattern="[a-zA-Z]+$">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Last Name</label>
                                                                <input class="form-control" type="text" id="username"
                                                                    name="lname" value="{{ old('lname') }}" required
                                                                    autofocus autocomplete="name" placeholder="Last Name" pattern="[a-zA-Z]+$">
                                                                @error('lname')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="emailaddress" class="form-label">Email
                                                                    address</label>
                                                                <input class="form-control" type="email" name="email"
                                                                    value="{{ old('email') }}" required
                                                                    autocomplete="email"
                                                                    placeholder="ex: example@hotmail.com">
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                               <input class="form-control" type="password" name="password"
                                                                      required
                                                                      minlength="8"
                                                                      pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$"
                                                                      placeholder="Password">
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="role" class="form-label">Role</label>
                                                                <select class="form-select" name="role" required
                                                                    autocomplete="role">
                                                                    <option value="user">Farmer</option>
                                                                    <!-- <option value="admin">Admin</option> -->
                                                                    <option value="agronomist">Agronomist</option>
                                                                </select>
                                                                @error('role')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3 text-center">
                                                                <button class="btn btn-primary"
                                                                    type="submit">{{ __('Add User') }}</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @endif
                            <div class="tab-content">
                                @if (count($users) == 0)
                                    <div class="alert alert-info">
                                        <strong>Info </strong>
                                        <span>No  data found</span>
                                    </div>
                                @else
                                    <div class="tab-pane show active" id="buttons-table-preview">
                                        <table id="datatable-buttons"
                                            class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Registered At</th>
                                                   
                                                        @if (auth()->user()->role === 'Admin')
                                                            <th>Action</th>
                                                    </tr>
                                                @else
                                    @endif
                                
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ str_pad($loop->index + 1, 2, 0, STR_PAD_LEFT) }}
                                            </td>
                                            <td>{{ ucfirst($user->name) }}</td>
                                            <td>{{ strtoupper($user->lname) }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->created_at->diffForHumans() }}</td>
                                            <!-- @if (auth()->user()->role === 'Admin') -->
                                            
                                            <td>
                                                <button type="button" class="btn btn-small btn-info" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $user->id }}">
                                                    Edit Info
                                                </button>
                                                <button type="button" class="btn btn-small btn-danger"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#danger-header-modal-{{ $user->id }}">
                                                    Delete
                                                </button>
                                                <form action="{{ route('destroy-user', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <!-- Delete Confirmation Modal -->
                                                    <div class="modal fade" id="danger-header-modal-{{ $user->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <h4 class="modal-title"
                                                                        id="danger-header-modal-{{ $user->id }}">
                                                                        Delete User</h4>
                                                                    <button type="button"
                                                                        class="btn-close btn-close-white"
                                                                        data-bs-dismiss="modal"
                                                                        aria-hidden="true"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete {{ $user->name }}?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </div><!-- /.modal-content -->
                                                        </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                </form>

                                            </td>
                                        </tr>
                                       

                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <form action="{{ route('update-user', $user->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('put')

                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">First
                                                                    Name</label>
                                                                <input class="form-control" type="text" id="username"
                                                                    name="name" value="{{ $user->name }}" required
                                                                    autofocus autocomplete="name"
                                                                    placeholder="First Name">
                                                                @error('name')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="username" class="form-label">Last
                                                                    Name</label>
                                                                <input class="form-control" type="text" id="username"
                                                                    name="lname" value="{{ $user->lname }}" required
                                                                    autofocus autocomplete="name" placeholder="Last Name">
                                                                @error('lname')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="emailaddress" class="form-label">Email
                                                                    address</label>
                                                                <input class="form-control" type="email" name="email"
                                                                    value="{{ $user->email }}" required
                                                                    autocomplete="email"
                                                                    placeholder="ex: example@hotmail.com">
                                                                @error('email')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <input class="form-control" type="password"
                                                                    name="password" autocomplete="new-password">
                                                                @error('password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="role" class="form-label">Role</label>
                                                                <select class="form-select" name="role" required
                                                                    autocomplete="role">
                                                                    <option value="{{ $user->role }}">
                                                                        {{ $user->role }}</option>
                                                                    <option value="user">Farmer</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="agronomist">Agronomist
                                                                    </option>
                                                                </select>
                                                                @error('role')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="mb-3 text-center">
                                                                <button class="btn btn-primary"
                                                                    type="submit">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @endif
                                    @endforeach
                                </tbody>
                                
                                </table>
                                @endif
                                
                            </div> <!-- end preview-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div> <!-- end row-->
    </div> <!-- container -->
    </div> <!-- content -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    </div>
    @endauth
    <!-- END wrapper -->
@endsection
