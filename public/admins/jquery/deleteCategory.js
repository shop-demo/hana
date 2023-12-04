/*DELETE*/
	$(document).ready(function(){
		
		$('.categoryDelete').on('click',function(e){
			e.preventDefault();
			var _href = $(this).attr('href');
			$('#form-delete').attr('action',_href);
			
			if(confirm('bạn có muốn xóa không')==false){
				 alert('Chưa có dữ liệu nào được xóa');
			}else{
				$('#form-delete').submit();
			}
			

		});//button
	

		//xóa nhiều bản ghi

		$('.allDelete').on('click',function(e){

			e.preventDefault();
			
			var _button = $(this).attr('href');
			
			var sub = $('form#deleteAll').attr('action',_button);
			

			if(confirm('bạn có muốn xóa không')==false){
				
				 window.location = 'http://localhost:8088/web/hanaShop/admin/categoryList';
				 
				 alert('Chưa có dữ liệu nào được xóa');
			
			}else{
				
				$('form#deleteAll').submit();
			
			}

		});






	});	

