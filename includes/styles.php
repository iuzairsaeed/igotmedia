
<?php 

if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}

?>

<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">

<link rel="canonical" href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/nav.css">

<!-- cards -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="The design hub for all your digital needs!" />
<meta property="og:description" content="Get all your designing needs fulfilled by the best in the business! We provide affordable designing solutions for your business needs." />
<meta property="og:url" content="https://www.thewebeez.com/" />
<meta property="og:site_name" content="thewebeez" />
<meta property="article:publisher" content="https://www.facebook.com/thewebeez" />
<meta property="og:image" content="https://www.thewebeez.com/images/home/logo.png" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:creator" content="@webeezUS" />
<meta name="twitter:site" content="@webeezUS" />
<meta name="twitter:image:src" content="https://www.thewebeez.com/images/home/logo.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-190446749-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-190446749-1');
</script>


<style>
.phoneNumberHe:hover{
	color:#68bef1;
	text-decoration:none;
	transition:.4s ease-in-out;
}
</style>