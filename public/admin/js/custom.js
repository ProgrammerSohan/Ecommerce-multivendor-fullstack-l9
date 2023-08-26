$(document).ready(function(){
    //check admin password is correct or not
    $("#current_password").keyup(function(){
        var current_password = $("#current_password").val();
       // alert(current_password);
       $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'post',
        url: '/admin/check-admin-password',
        data:{current_password:current_password},
        success:function(resp){
            //alert(resp);
            if(resp=="false"){
      $("#check_password").html("<font color='red'>Current Password is Incorrect!</font>");

            }else if(resp=="true"){
     $("#check_password").html("<font color='green'>Current Password is correct!</font>");
            }

        },error:function(){
            alert('Error');
        }

       });

    })

});
