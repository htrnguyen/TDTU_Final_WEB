@extends('layouts.client')

@section('title', 'Shoe Store Home')

@section('content')

    {{-- Content --}}
    <div class="container mt-4 mb-4 ">
        <div class="row">
            <div class="col-md-3 offset-md-1">
                <div class="card py-3 px-4" style="background-color: #f7f7f79c">
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="{{ asset('images/avatar.jpg') }}" class="rounded-circle" style="width:100%"
                                alt="Profile Picture">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Hello</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Elite Markson</h6>
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
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('login') }}">
                                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                                </a>
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
                                <h5 class="card-title">Personal Information</h5>

                                <div class="media-body pt-3">
                                    <div class="form-group">
                                        <label for="name" class="pb-2">Name</label>
                                        <input type="text" class="form-control rounded rounded-4" id="name"
                                            value="Elite Markson" readonly>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label for="dob" class="pb-2">Date Of Birth</label>
                                        <input type="text" class="form-control rounded rounded-4" id="dob"
                                            value="20/01/1990" readonly>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="pb-2">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male"
                                                value="male" disabled checked>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female"
                                                value="female" disabled>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="pb-2" for="phone">Phone Number</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded rounded-4" id="phone"
                                                value="0136735326" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group pt-3">
                                        <label class="pb-2" for="email">Email</label>
                                        <input type="email" class="form-control rounded rounded-4" id="email"
                                            value="example@gmail.com" readonly>
                                    </div>
                                    <div class="form-group pt-3 d-flex justify-content-center">
                                        <p class="btn btn-edit btn-dark me-3 rounded rounded-4" id="editButton"
                                            onclick="enableEdit()"><i class="fa-solid fa-pen-to-square "></i>Edit
                                        </p>
                                        <p class="btn btn-secondary rounded rounded-4"
                                            id="cancelButton" style="display: none;" onclick="cancelEdit()">
                                            Cancel
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                <div class="card d-none" id="changePassword" style="background-color: #f7f7f79c">
                    <div class="card-body">
                        <div class="text-center">
                            <h3 class="card-title">Change your password</h3>
                            <!-- Display email dynamically if needed -->
                        </div>
                        <form method="post" action="{{ route('password.reset') }}">
                            <input type="hidden" name="token" value="{{ request()->query('token') }}">
                            <div class="mt-3 mb-3">
                                <input type="password" class="form-control py-2 rounded rounded-4" name="old_password"
                                    placeholder="Old password" required>
                            </div>
                            <div class="mt-3 mb-3">
                                <input type="password" class="form-control py-2 rounded rounded-4" name="password"
                                    placeholder="New password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control mb-3 py-2 rounded rounded-4"
                                    name="password_confirmation" placeholder="Confirm new Password" required>
                                <small class="form-text text-muted">
                                    <ul>
                                        <li>Minimum of 8 characters</li>
                                        <li>Uppercase, lowercase letters, and one number</li>
                                    </ul>
                                </small>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-3 rounded rounded-4">Cancel</button>
                                <button type="submit" class="btn btn-dark rounded rounded-4">Save</button>
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
    </div>
    </div>
@endsection
