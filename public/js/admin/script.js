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


// Checkbox for all checkboxes
let checkbox = document.getElementById('checkAllProduct');
checkbox.addEventListener('click', function() {
    let checkboxes = document.querySelectorAll('.Select-product');
    for (let i of checkboxes) {
        if(checkbox.checked) {
            i.checked = true;
        } else {
            i.checked = false;
        }
    }
});