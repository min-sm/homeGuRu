function previewFile() {
    var input = document.getElementById('clogo');
    var preview = document.getElementById('previewImage');
    var file = input.files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "../resources/img/common/blank photo.png";
    }
}