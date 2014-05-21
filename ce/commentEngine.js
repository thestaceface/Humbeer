$(document).ready(function(){
			
//			$('#ce').html('<div id="ce_comments"><h2>Comments</h2><div id="ce_list"></div><form id="ce_form" name="ce_form" method="POST" action="">Name: <input type="text" name="ce_name" id="ce_name" /><br />Comment: <textarea name="ce_comment" id="ce_comment"></textarea><br /><input type="submit" value="Add Comment" /></form></div>');
			
			$('#ce_form').submit(function(){
				ceAddComment();
				return false;
			});
			
			ceLoadComments();
			
		});
		
		function ceLoadComments()
		{
			//console.log('load comments 2');
			$.ajax({
				cache: false,
				url:'ce/loadComment.php',
				dataType:'json',
				success:function(data){
					//console.log('success');
					$('#ce_list').html("<ul></ul>");
				
					$.each(data, function(){
//						console.log(this.name);
//						$('#ce_list ul').append(
//							"<li>"+this.name+"<br />"+
//							this.comment+"<br /> Posted: "+
//							this.date+"</li>");
                                                $('#ce_list ul').append(
                                                        "<li><p>"+this.comment+"</p><span>Posted by: <strong>"+
                                                        this.name+" on "+this.date+"</strong></span></li>");
					});
				}});
		}
		
		function ceAddComment()
		{
			$.ajax({
				data:{
					name:$('#ce_name').val(),
					comment:$('#ce_comment').val()
				},
				url:'ce/addComment.php',
				dataType:'json',
				success:function(data){
					//console.log('data.result'+data.result);
					if(data.result == true) {
					 ceLoadComments();
					}
				}});
			$('#ce_name').val(""); 
			$('#ce_comment').val(""); 	
		}