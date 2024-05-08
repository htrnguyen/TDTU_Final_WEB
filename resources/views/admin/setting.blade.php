@extends('layouts.admin')
<script src="{{asset('js/admin/scriptOdered.js')}}"></script>

@section('container-main')
    <div class="container-main-setting">
        <div class="setting-header">
            <div class="setting-search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-search"></i>
            </div>
        </div>
        <div class="setting-content">
            <h3>Account Settings</h3>
            <form action="#" method="POST" class="form-change-profile">
                <div class="sc-header-form">
                    <h3>Profile</h3>
                    <p>Update your name and email here</p>
                </div>
                <div class="sc-profile">
                    <h4>Photos</h4>
                    <div class="sc-image">
                        <img src="{{asset('images/avatar.jpg')}}" alt="">
                        <input type="file" name="image" id="image-setting">
                        <label for="image-setting">Change</label>
                        <button class="btn-remove">Remove</button>
                    </div>
                    <div class="sc-name">
                        <h4>Name</h4>
                        <input type="text" id="name-setting">
                    </div>
                    <div class="sc-username">
                        <h4>Username</h4>
                        <input type="text" id="username-setting">
                    </div>
                   <div class="sc-email">
                        <h4>Email</h4>
                        <input type="email" id="email-setting">
                    </div>
                   </div>
                </div>
                <div class="btn-submit">
                    <button type="reset">Cancel</button>
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection