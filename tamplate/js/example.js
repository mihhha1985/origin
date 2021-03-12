$('#commentForm').on('submit', function(e){
	e.preventDefault();
	var details = $('#commentForm').serialize();
	$.post('/form', details, function(data){
		//alert(data);
		
		var obj = JSON.parse(data);
		if(obj.type == 'success'){
			var box = '<div class="comment-box"><p>' + obj.text + '</p><h6>' + obj.date + '</h6></div>';
			$('.comment-layout').prepend(box);	
		}else{
			alert(obj.text);
		}
			
	});
});

