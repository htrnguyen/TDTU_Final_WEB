@extends('layouts.admin')
@section('container-main')
<div class="container-main-create-product">
    <div class="back-product">
        <a href="{{route('product_admin')}}">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="bp-title">
            <p>Back to Products</p>
            <h2>Add New Product</h2>
        </div>
    </div>
    <div class="form-create-product">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="form-group-1">
                    <div class="fg-description">
                        <h3>Description</h3>
                        <div class="fg-description-details">
                            <p>Product Name</p>
                            <input type="text" placeholder="Please typing information">
                            <p>Business Description</p>
                            <textarea name="description" id="" cols="30" rows="10" placeholder="Please typing information"></textarea>
                        </div>
                    </div>
                    <div class="fg-category">
                        <h3>Category</h3>
                        <div class="fg-category-details">
                            <p>Gender</p>
                            <select name="" id="sl-category-1">
                                <option value="Athletic">Men</option>
                                <option value="Sporty">Women</option>
                                <option value="Performance">Kids</option>
                            </select>
                            <p>Size</p>
                            <select name="" id="sl-category-2 multiple">
                                <option value="5.5">5.5</option>
                                <option value="6">6</option>
                                <option value="6.5">6.5</option>
                                <option value="7">7</option>
                                <option value="7.5">7.5</option>
                                <option value="8">8</option>
                                <option value="8.5">8.5</option>
                                <option value="9">9</option>
                                <option value="9.5">9.5</option>
                            </select>
                        </div>
                    </div>
                    <div class="fg-color">
                        <h3>Color</h3>
                        <div class="fg-color-details">
                            <p>Product Color</p>
                            <select name="" id="sl-color">
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                                <option value="Red">Red</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Orange">Orange</option>
                                <option value="Purple">Purple</option>
                                <option value="Pink">Pink</option>
                                <option value="Brown">Brown</option>
                                <option value="Gray">Gray</option>
                                <option value="Beige">Beige</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Bronze">Bronze</option>
                                <option value="Copper">Copper</option>
                                <option value="Metallic">Metallic</option>
                                <option value="Multicolor">Multicolor</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group-2">
                    <div class="fg-image">
                        <h3>Product Images</h3>
                        <div class="fg-image-details">
                            <input type="file" id="file-input" accept="image/png, image/jpeg" multiple onchange="preview()">
                            <label for="file-input">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i> Choose A Photo
                            </label>
                            <div id="images-place"></div>
                        </div>
                    </div>
                    <div class="fg-pricing">
                        <h3>Pricing</h3>
                        <div class="fg-pricing-details">
                            <div class="fg-pricing-1">
                                <p>Product Price</p>
                                <div class="fg-pricing-input">
                                    <input type="text" placeholder="299$">
                                </div>
                            </div>
                            <div class="fg-pricing-2">
                                <p>Product Discount</p>
                                <div class="fg-pricing-discount-input">
                                    <input type="text" placeholder="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fg-quantity">
                        <h3>Quantity</h3>
                        <div class="fg-quantity-details">
                            <p>Product Quantity</p>
                            <input type="text" placeholder="100">
                        </div>
                    </div>
                    <button type="submit" id="btn-AddProduct">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Upload multiple images and preview them
    let fileInput = document.getElementById('file-input');
    let imageContainer = document.getElementById('images-place');

    function preview() {
        for (let i of fileInput.files) {
            let reader = new FileReader();
            let div = document.createElement('div');
            div.classList.add('image-wrapper');

            reader.onload = () => {
                let img = document.createElement('img');
                img.setAttribute('src', reader.result);
                div.appendChild(img);

                let deleteButton = document.createElement('button');
                deleteButton.innerHTML = 'Remove';
                deleteButton.addEventListener('click', function() {
                    div.remove(); // Remove the div element when the delete button is clicked
                });
                div.appendChild(deleteButton); // Append the delete button to the div element
                div.addEventListener('mouseover', function() {
                    deleteButton.style.display = 'block'; // Show the delete button when the mouse is over the div element
                    div.style.scale = '0.9'; // Scale the div element when the mouse is over it
                    div.style.transition = 'all 0.5s ease'; // Add a transition effect to the div element
                });
                div.addEventListener('mouseout', function() {
                    deleteButton.style.display = 'none'; // Hide the delete button when the mouse is not over the div element
                    div.style.scale = '1'; // Scale the div element when the mouse is over it
                    div.style.transition = 'all 0.5s ease'; // Add a transition effect to the div element
                });
            }

            imageContainer.appendChild(div);
            reader.readAsDataURL(i);
        }
    }

    $(document).ready(function() {
        $("#btn-AddProduct").click(function() {
            // Get values of all form fields
            var productName = $("input[name='product_name']").val();
            var description = $("textarea[name='description']").val();
            var color = $("#sl-color").val();
            var price = $("input[name='price']").val();
            var quantity = $("input[name='quantity']").val();

            // Get selected gender and category values
            var gender = $("#sl-category-1").val();
            var category = $("#sl-category-2").val();

            // Create an object to store all form data
            var formData = {
                name: productName,
                description: description,
                color: color,
                price: price,
                stock_quantity: quantity,
                gender: gender,
                sizer: gender,
                category: category
            };

            // Make a POST request to the API endpoint using AJAX
            $.ajax({
                url: "{{ route('submit.createproduct') }}",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(formData),
                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(xhr.responseText);
                }
            });
        });
    });

    // select multple value for size, color
    MultiSelectTag('sl-category-2');
</script>
@endsection