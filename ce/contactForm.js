$(document).ready(function(){
    
    $('#con_form').submit(function(){
	conAddContact();
	return false;
    });
    
});


function conAddContact()
    {
        $.ajax({
            data:{
                name:$('#con_name').val(),
                email:$('#con_email').val(),
                comment:$('#con_comment').val()
            },
            url:'ce/addContact.php',
            dataType:'json',
            success:function(data){
                if(data.result == true){
                document.getElementById('#thanks').innerHTML = '<p>Thank you!</p>';}
            }});
    }