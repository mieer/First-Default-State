<!DOCTYPE HTML>
<html>
	<head>
		<title>Local IT</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Hulp nodig met IT gerelateerde vragen? Mirceau is uw antwoord." />
		<meta name="keywords" content="Mirceau, Mieer Darwesh, Webdeveloper, Host, IT, Infrastructure, IP, Local, Almere, The Netherlands" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/jsjquery.dropotron.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-panels.min.js"></script>
		<script src="/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/css/skel-noscript.css" />
			<link rel="stylesheet" href="/css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
   
	</head>
	<body>
    
    
  <div id="banner">
				<div class="container">
	

   
    
<?php 
				//mail(to,subject,message,headers,parameters)
			
					
					// Check if the "from" input field is filled out
					//if (isset($_POST['from'])) 
					//{}
					  $to = 'mdvariety@gmail.com'; // me
					  $subject = $_POST['subject']; //naam klant
					  
					  $feedback = 'alert';
					  $header  = $_POST['email']; //Email klant
					  
					  $message = $_POST['message'];
					  $message = wordwrap($message, 70);
					  
					  $message = <<<EMAIL
Dear Health Care Centre,

$message

-------------------
Name Sender: $subject
Email Sender: $header


EMAIL;

							
					  
								  
					  
					  // send mail
					  if($_POST){ 
					  mail($to, $subject, $message, $header);
					  
					  echo $feedback;
					  			}
					  
					   //<!--p id="feedback"><!--?php echo $feedback;?-->
					  			
												
	
?>

</div>
  </div>
</body>
</html><br><br>
<li><a href="index.php" class="button"><span>Home</span></a></li>

