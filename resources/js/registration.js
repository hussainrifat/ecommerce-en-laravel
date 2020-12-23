$(document).ready(function(){

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    


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




    $("#forget_password").on("click", function () {

      var email=$("#email").val();
      var old_password=$("#old_password").val();
      var new_password=$("#new_password").val();
  

      var formdata= new FormData;
      formdata.append('email',email);
      formdata.append('old_password',old_password);
      formdata.append('new_password',new_password);


      // alert(email+' '+old_password+' '+new_password);
      $.ajax({
          processData:false,
          contentType:false,
          data:formdata,
          type:"post",
          url:"reset_password",
          success:function(data)
          {
            var msg= $.trim(data);
            if(msg=='ok')
            {
              alert("Password Changed Successfully");
              window.location.href ="sign_in";
            }
    
            else 
            alert("Old Password Doesn't Matched");

         
          }
        });

  });


});