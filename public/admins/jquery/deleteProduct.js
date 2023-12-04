$(document).ready(function(){

		$('.DeleteSp').on('click',function(e){
			e.preventDefault();
			var _href = $(this).attr('href');
			
			$('#pro_form').attr('action',_href);
			if(confirm('bạn có muốn xóa không')==false){
				 window.location = 'http://localhost:8088/web/hanaShop/admin/productList';
				 alert('Chưa có dữ liệu nào được xóa');
			}else{
				$('#pro_form').submit();
			}


		});//btnDeleteSp

});	
