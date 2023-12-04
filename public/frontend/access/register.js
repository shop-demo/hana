/*Register*/
$(document).ready(function(){

    $('.login-form-checkout').hide();
    $('#btn').on('click',function(){
     // $('.login-form-checkout').show();
     $('.login-form-checkout').toggle();
    });

    
      $('#formRegister').on('submit',function(e){
          e.preventDefault();
         // var formSubmit =  $('#formRegister').serialize();

          var name = $('#username').val();
          var email = $('#email').val();
          var pass = $('#pass').val();
          var _url = $('#urlForm').val();
          var _token = $('input[name ="_token"]').val();
          
          $('.error').text('');
          
          $('.mgs').text('');
          
           $.ajax({

                  type:'POST',
                  url:_url,
                  data:{
                    name: name,
                    email:email,
                    password:pass,
                    _token :_token

                  },

                  success:function(res){
                    let mgs = res.data;
                    
                    if(res.data=='success'){

                      Swal.fire({
  
                        text: "Bạn vừa đăng ký tài khoản thành công!",
                        icon: "success",
                        background: '#fff',
                        color:'black',
                        
                        }).then((result) => {
                          // Reload the Page
                          location.reload();
                        });//swal
                    }//if


                  },//\success ;
                  
                  error:function(error){
                    let responseJSON = error.responseJSON.errors;
                    for(let key in responseJSON){
                       $('.err_'+key).text(responseJSON[key]);
                      
                    }
   
                  }//errors

           })// \ajax login

      });
    
  

  








  });






  