<?php include('doctop.php') ?>
	<title>Contact Us | Brewhaha</title>
	<meta name="description" content="Contact the Brewhaha team" />
	<meta name="keywords" content="contact, feedback" />
	<meta name="author" content="brewhahablog.com" />
<?php include('docmid.php') ?>
        
    <h1>Contact Us</h1>

    <form id="con_form" name="con_form" method="POST" action=".">
        <label for="con_name">
            Name: <input type="text" name="con_name" id="con_name" />
        </label>
        <br />
        <label for="con_email">
            Email: <input type="text" name="con_email" id="con_email" />
        </label>
        <br />
        <label for="con_comment">
            Comment: <textarea name="con_comment" id="con_comment"></textarea>
        </label>
        <br />
        <input type="submit" value="Submit" />
    </form>
    
    <div id="thanks">
        <p id="thk"></p>
    </div>
        
<?php include('docbottom.php') ?>
