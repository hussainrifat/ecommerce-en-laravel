$(document).ready(function(){

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $("#login").on("click", function () {

        var contact_number=$("#contact_number").val();

        alert(contact_number);

    });

});