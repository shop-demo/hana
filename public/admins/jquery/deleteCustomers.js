$(document).ready(function(){
		
		$('.customeDelete').on('click',function(e){
			e.preventDefault();
			var _href = $(this).attr('href');
			$('#form_cusDelete').attr('action',_href);
			if(confirm('bạn có muốn xóa không')==false){
				 alert('Chưa có dữ liệu nào được xóa');
			}else{
				$('#form_cusDelete').submit();
			}
			

		});//button



		//xóa nhiều bản ghi

		$('.deleteAll').on('click',function(e){

			e.preventDefault();
			var _button = $(this).attr('href');
			var sub = $('form#form_customeDestroy').attr('action',_button);
			var url = $(this).data('id');
			
			
			if(confirm('bạn có muốn xóa không')==false){
				window.location.href = url ;
				 alert('Chưa có dữ liệu nào được xóa');
			
			}else{
				
				$('form#form_customeDestroy').submit();
			
			}

		});

		//active status
		$('.btn_cusNotActive').on('click',function(e){
			e.preventDefault();
			var _href = $(this).attr('href');
			var submit =$('form#form_active').attr('action',_href);
			$('form#form_active').submit();

		});//cloze button

		//noActive

		$('.btn_cusActive').on('click',function(e){
			e.preventDefault();
			var _href = $(this).attr('href');
			var submit =$('form#form_active').attr('action',_href);
			$('form#form_active').submit();

		});//cloze button

})