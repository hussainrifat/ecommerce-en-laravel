$(document).ready(function(){

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    // $("#login").on("click", function () {

    //     var number=$("#number").val();

    //     alert(number);

    // });


    $("#sign_up").on("click", function () {

        var name=$("#name").val();
        var email=$("#email").val();
        var number=$("#number").val();
        var address=$("#address").val();
        var district=$("#district").val();
        var postal_code=$("#postal_code").val();
        var password=$("#password").val();

        var formdata= new FormData;
        formdata.append('name',name);
        formdata.append('email',email);
        formdata.append('number',number);
        formdata.append('address',address);
        formdata.append('district',district);
        formdata.append('postal_code',postal_code);
        formdata.append('password',password);


        // alert(name+' '+email+' '+number+' '+address+' '+district+' '+postal_code+' '+password+' ');

        $.ajax({
            processData:false,
            contentType:false,
            data:formdata,
            type:"post",
            url:"create_user",
            success:function(data)
            {
            //   window.location.href ="instructor_courses"
              alert("Registration Completed");
              window.location.href ="sign_in";
        
            }
          });

    });

});