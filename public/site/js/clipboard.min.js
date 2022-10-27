// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.

/* ***********************************************************************
 * defaultImagePlaceholderId = camera icon (span) that is shown by default
 * linkTriggerId = hyperlink that will be used to open file uploader
 * hiddenFileUploaderId = input type file for sending the image in server
 * imagePreviewerId = image tag for showing the image preview
*************************************************************************/
function bindProfilePictureUploader(defaultImagePlaceholderId,
    linkTriggerId,
    hiddenFileUploaderId,
    imagePreviewerId) {

    $('#' + linkTriggerId).click(function () { $('#' + hiddenFileUploaderId).trigger('click'); });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + imagePreviewerId).attr('src', e.target.result);
                $('#' + defaultImagePlaceholderId).hide();
                $('#' + imagePreviewerId).show();
            }
            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#" + hiddenFileUploaderId).change(function () {
        readURL(this);
    });
}