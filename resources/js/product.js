$(document).ready(function(){

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $("#add_product").on("click", function () {

        var product_name=$("#product_name").val();
        var product_category=$("#product_category").val();
        var product_regular_price=$("#product_regular_price").val();
        var product_discount_price=$("#product_discount_price").val();
        var edit=$("#edit").val();
        var product_status=$("#product_status").val();

        alert(product_category);

        // var email=$("#email").val();
        // var number=$("#number").val();
        // var address=$("#address").val();
        // var district=$("#district").val();
        // var postal_code=$("#postal_code").val();
        // var password=$("#password").val();

        // var formdata= new FormData;
        // formdata.append('name',name);
        // formdata.append('email',email);
        // formdata.append('number',number);
        // formdata.append('address',address);
        // formdata.append('district',district);
        // formdata.append('postal_code',postal_code);
        // formdata.append('password',password);


        // // alert(name+' '+email+' '+number+' '+address+' '+district+' '+postal_code+' '+password+' ');

        // $.ajax({
        //     processData:false,
        //     contentType:false,
        //     data:formdata,
        //     type:"post",
        //     url:"create_user",
        //     success:function(data)
        //     {
        //     //   window.location.href ="instructor_courses"
        //       alert("Registration Completed");
        //       window.location.href ="sign_in";
        
        //     }
        //   });

    });


    // function readURL(input) {
    //     if (input.files && input.files[0]) {
      
    //       var reader = new FileReader();
      
    //       reader.onload = function(e) {
      
    //         $('.insert_product_image').attr('src', e.target.result);
      
    //         $('.insert_product_image_label').html(input.files[0].name);
    //       };
      
    //       reader.readAsDataURL(input.files[0]);
      
    //     } else {
    //       removeUpload();
    //     }
    //   }
    


      




});