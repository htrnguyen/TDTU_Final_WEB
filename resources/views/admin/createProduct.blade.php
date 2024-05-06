@extends('layouts.admin')
@section('container-main')
<div class="container-main-create-product">
    <div class="back-product">
        <a href="{{route('product_admin')}}">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="bp-title">
            <p>Back to Products</p>
            <h1>Add New Product</h1>
        </div>
    </div>
    <div class="form-create-product">
        <form action="#" method="POST" enctype="multipart/form-data">
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
                            <p>Product Category</p>
                            <select name="" id="sl-category-1">
                                <option value="Athletic">Athletic</option>
                                <option value="Sporty">Sporty</option>
                                <option value="Performance">Performance</option>
                                <option value="Casual">Casual</option>
                                <option value="Urban">Urban</option>
                                <option value="Trendy">Trendy</option>
                            </select>
                            <p>Product Category</p>
                            <select name="" id="sl-category-2">
                                <option value="Stylish">Stylish</option>
                                <option value="Modern">Modern</option>
                                <option value="Active">Active</option>
                                <option value="Fashionable">Fashionable</option>
                                <option value="Classic">Classic</option>
                                <option value="Retro">Retro</option>
                                <option value="Iconic">Iconic</option>
                                <option value="Versatile">Versatile</option>
                                <option value="Innovative">Innovative</option>
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
                                    <i class="fa-solid fa-dollar-sign"></i>
                                    <input type="text" placeholder="Please typing information">
                                </div>
                            </div>
                            <div class="fg-pricing-2">
                                <p>Product Discount</p>
                                <div class="fg-pricing-discount-input">
                                    <i class="fa-solid fa-percent"></i>
                                    <input type="text" placeholder="Please typing information">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="btn-AddProduct">Add Product</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection