<?php
//  error_reporting(E_ALL);
//  ini_set('display_errors', 1);
  
 
include('include/session.php');

unset($_SESSION['CART_MEMBERSHIP']);
unset($_SESSION['CONFIRM_MEMBERSHIP']);

$sql= "select * from membership_defination where promotion = 1 order by popular desc";
 
$query = $database->query($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 
    <title>Golf Promotions at Foxbridge Golf Club</title>

  <meta name="description" content="Special offers from Foxbridge - only $49.99 18 holes for 2 Golf cart included - Purchase online before Dec 24, 2021" />

 
 
  <link rel="icon" href="images/fave_icon.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/mutual-temp.css">
	<script src="https://kit.fontawesome.com/07aba6530d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="owl/css/owl.carousel.css">
	    
        <script src="js/jquery.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-226072037-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-226072037-1');
</script>

  </head>
 
  <body> 
  <?php echo implode('',file('include/header.php' )); ?>

  <div class="membershipbanner">
  <div class="container">
  <h2 class="meberTilte">This promotion has expired on Dec 24th 2021</h2>
  </div>
  </div>
   <section id="counter" class="sec-padding mainMebership">
		<div class="container">
        
			<div class="row sameheight" data-aos="fade-down" data-aos-delay="100">


			<?php

			
					while($membershipData = mysqli_fetch_assoc($query)){


						echo ' <div class="col-md-4 " onclick="location.href=\'process.php?newMembership='.$membershipData['membership_name'].'\';">
						<div class="membershipbox p-2" >';

						if($membershipData['popular']){
						echo '<div class="popular">POPULAR</div>';
						}

						echo '
							<div class="row p-1">
						   <div class="col-md-12 col-12 borderright text-right"><div class="memberprice">$'.number_format($membershipData['offer_price']).' <sup class="currency">CAD</sup> </div><div class="beforeafter">before Dec, 24th \'21</div></div>
							
							 <div class="col-md-12"><div class="membershipTitle pt-4 pb-4">'.$membershipData['membership_name'].'</div>
							 <div class="col-md-12"><p class="p-2">'.$membershipData['description'].'</p>
							 </div>
		
							 <a class="btn btn-dark"  href="process.php?newMembership='.$membershipData['membership_name'].'"  >SELECT  <span class="float-end pe-4"><i class="far fa-chevron-right"></i></span> </a>
							</div>
							</div>
							
						 </div>   
						</div>';
						
					}



?>
		
                
         
				
			</div>
		</div>
        
        
        <div class="container"  data-aos="fade-up" data-aos-delay="100">
        
        <h2 class="meberTilte p-5">ADD - ONS</h2>
        
        <div class="row sameheight">
				
                <div class="col-md-4 ">
                <div class="membershipbox p-2" >
					<div class="row p-1">
                   <div class="col-md-12"><div class="memberprice">$0</div></div>
                   
                     <div class="col-md-12"><div class="membershipTitle pt-4 pb-4"><span class="golfcarticon"></span> Golf Cart (Included)</div>
                     <div class="col-md-12"><p class="p-2">Unlimited cart use only at Foxbridge Golf Club. Cart riders may be paired up with another paying cart rider in the same group (unless gov. regulations specify otherwise)</p>
                     </div>
                    </div>
                    </div>
                    
                 </div>   
				</div>
                
                <div class="col-md-4 ">
                <div class="membershipbox p-2">
					<div class="row p-1">
                   
                   <div class="col-md-12"><div class="memberprice">$0</div></div>
                     <div class="col-md-12"><div class="membershipTitle pt-4 pb-4"><span class="pullcarticon"></span> Pull Cart</div>
                     <div class="col-md-12"><p class="p-2">Unlimited cart use only at Foxbridge Golf Club. Cart riders may be paired up with another paying cart rider in the same group</p>
                     </div>
                    </div>
                    </div>
                    
                 </div>   
				</div>
                
				
			</div>
        
        
			   
				</div>
                
 
        </div>
        </div>
        
        
        
	</section>     


    <?php echo implode('',file('include/footer.php'));?>
   
<a href="#" ID="backToTop"></a>     
        
                   
                    <script src="owl/js/owl.carousel.js"></script>
                    <script src="js/custom.js"></script>
                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                    <script>
  AOS.init();
</script>
                    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


</body>
 </html>
   
                    