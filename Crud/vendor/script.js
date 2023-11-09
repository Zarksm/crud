function previewImage() {
    var fileInput = document.getElementById('fileInput');
    var preview = document.getElementById('preview');

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    } else {
        preview.src = '';
    }
}