<?php require_once 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ChatBox</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

	<div id="container">
        <header>
            <h1>ChatBox</h1>
        </header>
        <div id="shout">
            <ul id="allShouts">
            	
            </ul>
        </div>
        <div id="input">
           
           	<?php if (isset($_GET['error'])) : ?>
       			<div class="error">
       				<?php echo $_GET['error'] ?> 
       			</div>           		
           	<?php endif ?>
            <form action="process.php" method="post" id="chatform">
                <input type="text" name="user" id="username" placeholder="Enter your name">
                <input type="text" name="message" id="message" placeholder="Enter your message">
                <input type="submit" name="submit" id="submitBtn" value="Send" class="shout-btn">
            </form>
        </div>
    </div>

    <script src="jquery3.1.1.js"></script>

    <script>
    	$('#chatform').on('submit', function(e){
    		e.preventDefault();
 			let form = $(this);
    		let data = form.serialize();
    		let url = form.attr('action');
    		$.post(url, data, function(msgData){
    			// 
    		})
    	})

    	function readAndUpdate(){
    		$.ajax({
    			url: 'display.php',
    			type: 'post',
    			success: function(data){
    				if (!data.error) {
    					$('#allShouts').html(data);
    					$('#chatform').reset();
    				}
    			}
    		});
    	};

    	setInterval(function(){
    		readAndUpdate();
    	}, 2000)
    </script>


	
</body>
</html>
