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
        <div class="setting-details">
            <div class="sd-title">
                <h2>Settings</h2>
            </div>
            <div class="sd-edit">
                <div class="sd-sidebar">
                    <a href="#">My Profile</a>
                    <a href="#">Security</a>
                    <a href="#">Notifications</a>
                    <a href="#">Language</a>
                    <a href="#">Privacy</a>
                    <button id="btn-delete-account">
                        Delete Account
                    </button>
                </div>
                <div class="sd-inform">
                    <div class="sdi-subject">
                        <h3>My Profile</h3>
                    </div>
                    <div class="sdi-img">
                        <div class="sdi-img-name">
                            <img src="{{asset('images/avatar.jpg')}}" alt="admin" id="image">
                            <div class="sdii-name">
                                <h3 id="edit-name">Nhat Toan</h3>
                                <p id="role">Admin</p>
                                <p id="position">Manage System</p>
                            </div>
                        </div>
                        <button class="sdii-edit" onclick="editImage()">
                            Edit
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </div>
                    <div class="sdi-personal-details">
                        <div class="sdi-p-edit">
                            <h3>Personal Details</h3>
                            <button class="sdi-p-edit-btn" onclick="editPersonalDetails()">
                                Edit
                                <i class="fa-solid fa-pen"></i>
                        </div>
                        <div class="sdi-pd-details">
                            <div class="adi-fullname">
                                <div class="sdi-p-fn">
                                    <p>First Name</p>
                                     <h5 id="fn">Toan</h5>
                                </div>
                                <div class="sdi-p-ln">
                                    <p>Last Name</p>
                                    <h5 id="ln">Dang Nhat</h5>
                                </div>
                            </div>
                            <div class="sdi-email-phone">
                                <div class="sdi-p-email">
                                    <p>Email</p>
                                    <h5 id="email">nhattoan664t@gmail.com</h5>
                                </div>
                                <div class="sdi-p-phone">
                                    <p>Phone</p>
                                    <h5 id="phone">0552642759</h5>
                                </div>
                            </div>
                           <div class="sdi-p-bio">
                                <p>Bio</p>
                                <h5 id="bio">Amin Say Hi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="sdi-address">
                        <div class="sdi-a-edit">
                            <h3>Address</h3>
                            <button class="sdi-a-edit-btn" onclick="editAddress()">
                                Edit
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </div>
                        <div class="sdi-a-details">
                            <div class="sdi-a-street">
                                <p>Country</p>
                                <h5 id="country">VietNam</h5>
                            </div>
                            <div class="sdi-a-city">
                                <p>City/State</p>
                                <h5 id="city">District 7</h5>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-mask"></div>
        <div class="sdi-img-name-display">
            <div class="change-img">
                <input type="file" id="file" accept="image/*">
                <label for="file" style="cursor: pointer">
                    <img src="{{asset('images/avatar.jpg')}}" alt="admin" id="preview-image">
                    <i class="fa-solid fa-camera"></i>
                </label>
                <div class="btn-confirm-edit">
                    <button class="btn-cancel">Cancel</button>
                    <button class="btn-edit">Done</button>
                </div>
            </div>
            <div class="sdii-name-edit">
                <div class="edit-name">
                    <p>Name</p>
                    <input type="text" value="Nhat Toan" id="name-input">
                </div>
                <div class="edit-position">
                    <p>Role</p>
                    <input type="text" value="Admin" id="role-input">
                </div>
                <div class="edit-other-major">
                    <p>Position</p>
                    <input type="text" value="Manage System" id="position-input">
                </div>
            </div>
        </div>
        <div class="sid-personal-details-edit">
            <div class="adi-fullname-edit">
                <div class="sdi-p-fn-edit">
                    <p>First Name</p>
                    <input type="text" value="Toan" id="fn-input">
                </div>
                <div class="sdi-p-ln-edit">
                    <p>Last Name</p>
                    <input type="text" value="Dang Nhat" id="ln-input">
                </div>
            </div>
            <div class="sdi-email-phone-edit">
                <div class="sdi-p-email-edit">
                    <p>Email</p>
                    <input type="text" value="nhattoan664t@gmail.com" id="email-input">
                </div>
                <div class="sdi-p-phone-edit">
                    <p>Phone</p>
                    <input type="text" value="0552642759" id="phone-input">
                </div>
            </div>
            <div class="sdi-p-info-confirm-edit">
                <div class="sdi-p-bio-edit">
                        <p>Bio</p>
                        <input type="text" value="Amin Say Hi" id="bio-input">
                </div>
                <div class="btn-confirm-edit">
                    <button class="btn-cancel-details">Cancel</button>
                    <button class="btn-edit-details">Done</button>
                </div>
            </div>
        </div>
        <div class="sdi-address-edit">
            <div class="sdi-address-group">
                <div class="sdi-a-street-edit">
                    <p>Country</p>
                    <input type="text" value="VietNam" id="country-input">
                </div>
                <div class="sdi-a-city-edit">
                    <p>City/State</p>
                    <input type="text" value="District 7" id="city-input">
                </div>
            </div>
            <div class="btn-confirm-edit">
                <button class="btn-cancel-address">Cancel</button>
                <button class="btn-edit-address">Done</button>
            </div>
        </div>
    </div>
    <script>
        // Change image
        const file = document.querySelector('#file');
        const label = document.querySelector('label');
        const previewImage = document.querySelector('#preview-image');
        file.addEventListener('change', function() {
            const fileData = this.files[0];
            if(fileData) {
                const reader = new FileReader();
                reader.onload = function() {
                    previewImage.setAttribute('src', this.result);
                }
                reader.readAsDataURL(fileData);
            }
        });

        // edit 
        function editImage() {
            var mask = document.querySelector('.edit-mask');
            var display = document.querySelector('.sdi-img-name-display');
            mask.style.visibility = 'visible';
            display.style.visibility = 'visible';
            var cancel = document.querySelector('.btn-cancel');
            var confirm = document.querySelector('.btn-edit');
            if(mask.style.visibility === 'visible' && display.style.visibility === 'visible') {
                cancel.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                });
                confirm.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                    var newName = document.getElementById('name-input').value;
                    var newRole = document.getElementById('role-input').value;
                    var newPosition = document.getElementById('position-input').value;
                    var image = document.getElementById('preview-image').src;

                    var nameDiv = document.getElementById('edit-name').innerText = newName;
                    var roleDiv = document.getElementById('role').innerText = newRole;
                    var positionDiv = document.getElementById('position').innerText = newPosition;
                    var imageDiv = document.getElementById('image').innerText = image;

                });

            }
        }

        function editPersonalDetails() {
            var mask = document.querySelector('.edit-mask');
            var display = document.querySelector('.sid-personal-details-edit');
            mask.style.visibility = 'visible';
            display.style.visibility = 'visible';
            var cancel = document.querySelector('.btn-cancel-details');
            var confirm = document.querySelector('.btn-edit-details');
            if(mask.style.visibility === 'visible' && display.style.visibility === 'visible') {
                cancel.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                });
                confirm.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                    var newFirstName = document.getElementById('fn-input').value;
                    var newLastName = document.getElementById('ln-input').value;
                    var newEmail = document.getElementById('email-input').value;
                    var newPhone = document.getElementById('phone-input').value;
                    var newBio = document.getElementById('bio-input').value;

                    var firstNameDiv = document.getElementById('fn').innerText = newFirstName;
                    var lastNameDiv = document.getElementById('ln').innerText = newLastName;
                    var emailDiv = document.getElementById('email').innerText = newEmail;
                    var phoneDiv = document.getElementById('phone').innerText = newPhone;
                    var bioDiv = document.getElementById('bio').innerText = newBio;
                });
            }
        }

        function editAddress () {
            var mask = document.querySelector('.edit-mask');
            var display = document.querySelector('.sdi-address-edit');
            mask.style.visibility = 'visible';
            display.style.visibility = 'visible';
            var cancel = document.querySelector('.btn-cancel-address');
            var confirm = document.querySelector('.btn-edit-address');
            if(mask.style.visibility === 'visible' && display.style.visibility === 'visible') {
                cancel.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                });
                confirm.addEventListener('click', function() {
                    mask.style.visibility = 'hidden';
                    display.style.visibility = 'hidden';
                    var newCountry = document.getElementById('country-input').value;
                    var newCity = document.getElementById('city-input').value;

                    var countryDiv = document.getElementById('country').innerText = newCountry;
                    var cityDiv = document.getElementById('city').innerText = newCity;
                });
            }
        }
    </script>
@endsection