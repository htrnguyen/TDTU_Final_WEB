@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')

    {{-- Content --}}
    <div class="container mt-4 mb-4 ">
        <div class="row">
            <div class="col-md-3 offset-md-1">
                <div class="card py-3 px-4" style="background-color: #f7f7f79c">
                    <div class="row">

                        <div class="text-center">
                            <form action="{{ route('account.avatar.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="avatar-container">
                                    <label for="avatar">
                                        <img id="imagePreview" src="{{ asset($user->avatar_url) }}"
                                            class="rounded-circle img-thumbnail" alt="Profile Picture"
                                            style="width: 100px; height: 100px; object-fit: cover;">
                                    </label>
                                    <input type="file" id="avatar" name="avatar" accept="image/*" hidden
                                        onchange="previewImage(event)">
                                    <button class="sdii-edit btn btn-sm btn-dark mt-3" type="submit">
                                        Save <i class="fa-solid fa-pen"></i>
                                    </button>
                                </div>
                            </form>

                            <div class="">
                                <div class="card-body">
                                    {{-- <h4 class="card-title">Hello</h4> --}}
                                    <h2 class="card-subtitle mb-2 text-muted">
                                        {{ $user->first_name . ' ' . $user->last_name }}</h2>
                                </div>
                            </div>
                        </div>


                        <ul class="nav flex-column mt-3">
                            <li class="nav-item border-bottom border-top">
                                <a class="nav-link active text-dark" href="#" onclick="showMyAccount()">
                                    <i class="fa-regular fa-user"></i> My Accounts
                                </a>
                            </li>
                            <li class="nav-item border-bottom">
                                <a class="nav-link text-dark" href="#" onclick="showMyOrders()">
                                    <i class="fa-solid fa-cart-shopping"></i> My Orders
                                </a>
                            </li>
                            <li class="nav-item border-bottom">
                                <a class="nav-link text-dark" href="#" onclick="showChangePassword()">
                                    <i class="fa-solid fa-key"></i> Change Password
                                </a>
                            </li>
                            <li class="nav-item border-bottom">
                                <a class="nav-link text-dark"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-danger "
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-trash"></i> Delete your account
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-7" id="contentToShow">
                <!-- My Account -->
                <div class="card d-none" id="myAccount" style="background-color: #f7f7f79c">
                    <div class="card-body">
                        <div class="row">
                            <div class="media mb-3">
                                <h5 class="card-title fw-bold">Personal Information</h5>
                                <form action="#" method="POST">
                                    @csrf
                                    <div class="media-body pt-3">
                                        <div class="form-group">
                                            <label for="name" class="pb-2">First name</label>
                                            <input type="text" class="form-control " id="name"
                                                value="{{ $user->first_name }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="pb-2">Last name</label>
                                            <input type="text" class="form-control " id="name"
                                                value="{{ $user->last_name }}" readonly>
                                        </div>
                                        <div class="form-group pt-3">
                                            <label for="dob" class="pb-2">Date Of Birth</label>
                                            <input type="text" class="form-control " name="date_of_birth" id="dob"
                                                placeholder="Empty" value="{{ $user->date_of_birth ?? '' }}" readonly>
                                        </div>
                                        <div class="form-group pt-3">
                                            <label class="pb-2">Gender</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="male" value="male"
                                                    :checked="{{ ($user->gender ?? '') === 'male' }}"> <label
                                                    class="form-check-label" for="male">Male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="female" value="female"
                                                    :checked="{{ ($user->gender ?? '') === 'female' }}"> <label
                                                    class="form-check-label" for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="pb-2" for="phone">Phone Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control " name="phone_number" id="phone" placeholder="Empty" value="{{ $user->phone_number }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="pb-2" for="email">Email</label>
                                        <input type="email" class="form-control rounded rounded-4" id="email" name="email" value="{{ $user->email }}" readonly>
                                    </div>
                                    <div class="form-group pt-3 d-flex justify-content-center">
                                        <p class="btn btn-edit btn-dark me-3 px-4" id="editButton"
                                            onclick="enableEdit()"><i class="fa-solid fa-pen-to-square "></i>Edit
                                        </p>
                                        <p class="btn btn-secondary rounded rounded-4" id="cancelButton"
                                            style="display: none;" onclick="cancelEdit()">
                                            Cancel
                                        </p>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- Change Password -->
                <div class="card d-none" id="changePassword" style="background-color: #f7f7f79c">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title fw-bold">Change your password</h3>
                            <!-- Display email dynamically if needed -->
                        </div>
                        <form method="post" action="{{ route('password.change') }}">
                            @csrf
                            <div class="mt-3 mb-3">
                                <input type="password" class="form-control py-2" name="old_password"
                                    placeholder="Old password" required>
                            </div>
                            <div class="mt-3 mb-3">
                                <input type="password" class="form-control py-2" name="password"
                                    placeholder="New password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control mb-3 py-2" name="password_confirmation"
                                    placeholder="Confirm new Password" required>
                                <small class="form-text text-muted">
                                    <ul>
                                        <li>Minimum of 8 characters</li>
                                        <li>Uppercase, lowercase letters, and one number</li>
                                    </ul>
                                </small>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-outline-dark me-3">Cancel</button>
                                <button type="submit" class="btn btn-dark">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- My Orders -->
                <div class="card d-none" id="myOrders" style="background-color: #f7f7f79c ">
                    <div class="card-body">
                        <div class="row">
                            <h3>Orders</h3>
                            <div class="card mb-3 mt-3 no-border">
                                <div class="row no-gutters align-items-center ">
                                    <div class="col-md-3">
                                        <img src="{{ asset('images/shoe1-black.jpg') }}" alt="Strutter shoe"
                                            style="width:100%">
                                    </div>
                                    <div class="col-md-3 py-2 px-2">
                                        <p class="mt-2" style="font-weight: bold">Nike Air Max Pulse</p>
                                        <p>Women's Shoes<br>
                                            White<br>
                                            Size
                                            <select class="custom-select no-border readonly">
                                                <option selected>S</option>
                                                <option selected>M</option>
                                                <option selected>L</option>
                                                <option selected>XL</option>
                                            </select>
                                        </p>
                                        <button type="button" class="btn btn-light rounded rounded-5">
                                            Rate
                                        </button>
                                        <a href="#" class="btn btn-dark rounded-5 ">Buy Again</a>
                                    </div>
                                    <div class="col-md-2">
                                        <p style="font-weight: bold">$422.40</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Quantity: <br>1</p>
                                    </div>
                                    <div class="col-md-2">
                                        <i class="btn btn-light rounded rounded-5"
                                            style="font-weight: bold; color: rgb(1, 125, 1); ">Completed</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <script>
        $(document).ready(function() {
            showMyAccount()
            $('#imageUpload').on('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
