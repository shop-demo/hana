 $(document).ready(function(){

           $('#loginId').on('click',function(e){
           
            e.preventDefault();
            let email = $('#loginEmail').val();
            let password = $('#login_pwd').val();
            let _url = $('#urlLogin').val();
            let _token = $('input[name ="_token"]').val();

          $('.loi').text('');
          
          $('.mgs').text('');

            $.ajax({
              
               type:'POST',
                  url:_url,
                  data:{
                     email:email,
                    password:password,
                    _token :_token

                  },
              //location.reload();
              success:function(res){
                    if(res.data){
                      swal("Bạn vừa đăng nhập tài khoản thành công!")
                      .then((value) => {
                        if(value){
                          location.reload();
                        }
                      });
                     
                    }else{
                      
                      if(res.mgs){
                        $('.Info').text(res.mgs);
                      
                      }
                    
                    }//if
                
              },
              error:function(error){
                
                    let responseJSON = error.responseJSON.errors;
                    for(let key in responseJSON){
                       
                       $('.error_'+key).text(responseJSON[key]);
                   }  
               },

            });//ajax
           
           

           })//button click
           
     
    /*------------------------------------------------------------------*/
      //logout
    /*------------------------------------------------------------------*/
    
    $('#logoutName').on('click',function(ev){
          ev.preventDefault();
          let _href = $(this).attr('href');
          let _url = $('.rou_logout').val();
          let _token = $('input[name ="_token"]').val();
          let form = $('#form_logout').attr('action',_href);

                swal({
                  title: "Are you sure?",
                  text: "",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $('#form_logout').submit();
                    
                  } else {
                    swal("Your imaginary file is safe!");
                  }
                
                });
                         
         
    });//logout

   });//document