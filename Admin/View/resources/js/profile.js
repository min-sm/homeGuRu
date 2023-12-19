function previewImage(event) {
    var input = event.target;
    var img = document.getElementById('preview');
    var label = document.getElementById('imageLabel');

    var reader = new FileReader();
    reader.onload = function () {
        img.src = reader.result;        
    };
    reader.readAsDataURL(input.files[0]);
}

// Add click event to the displayed photo to trigger the input box
document.getElementById('preview').addEventListener('click', function () {
    document.getElementById('imageInput').click();
});