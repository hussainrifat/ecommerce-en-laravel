$(document).ready(function(){

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $("#add_product").on("click", function () {

        var product_name=$("#product_name").val();
        var product_category=$("#product_category").val();
        var product_selling_price=$("#product_selling_price").val();
        var product_discount_price=$("#product_discount_price").val();
        var product_long_description=$("#product_long_description").val();
        var product_short_description=$("#product_short_description").val();
        var product_quantity=$("#product_quantity").val();


        var product_status=$("#product_status").val();



        // alert(product_name+' '+product_category+' '+product_regular_price+' '+product_discount_price+' '+product_status+' '+product_description+' '+product_image);

 

        var formdata= new FormData;
        formdata.append('product_name',product_name);
        formdata.append('product_category',product_category);
        formdata.append('product_selling_price',product_selling_price);
        formdata.append('product_discount_price',product_discount_price);
        formdata.append('product_short_description',product_short_description);
        formdata.append('product_long_description',product_long_description);
        formdata.append('product_quantity',product_quantity);

        // alert(product_long_description+' '+product_short_description+' '+product_quantity);

        formdata.append('product_image',$('#product_image')[0].files[0]);
        formdata.append('product_status',product_status);


        $.ajax({
            processData:false,
            contentType:false,
            data:formdata,
            type:"post",
            url:"add_new_product",
            success:function(data)
            {
            //   window.location.href ="instructor_courses"
              alert("Product Added");
              window.location.reload();
        
            }
          });

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