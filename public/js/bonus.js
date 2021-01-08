
$(document).ready(function(){
    $('.deleteForm').click(function(evt){
        var product_name=$(this).data("product_name");
        var form=$(this).closest("form");

        evt.preventDefault();
        swal({
            title: 'ต้องการลบข้อมูลสินค้าหรือไม่? ',
            text: "ถ้าลบแล้วไม่สามารถกู้คืนข้อมูลได้",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                form.submit();
              swal("ลบข้อมูลสินค้าสำเร็จ", {
                icon: "success",
              });
            } else {
              //swal("Your imaginary file is safe!");
            }
          });

    });

    $('.sizeForm').click(function(evt){
      evt.preventDefault();
      swal({
        title:"ตารางไซส์",
        text: "ไซส์เสื้อเเเ",
        imageUrl:"https://sv1.picz.in.th/images/2021/01/04/lNGgjQ.th.jpg",
        imageAlt:'custom image'
    
        })

        });

  });