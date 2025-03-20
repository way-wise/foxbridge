<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "include/session.php";
include 'include/mandrill/Mandrill.php';
include "include/creditcard_class.php";
 
require_once 'include/moneris/mpgClasses.php';

require_once('include/reCaptcha/autoload.php');



class Process
{
    /* Class constructor */

 
    public $currency = 'CAD';
    private $mandrillKey = 'PGwmwdQrRHT5HFpKSocFJw';

    public $monerisLiveApiKey = 'ZgJAQ62BuCvltfG4k07e';
    public $monerisTestApiKey = 'yesguy';

    public $monerisLiveStoreId = 'gwca052075';
    public $monerisTestStoreId = 'store2';
 


    public function __construct()
    {
        global $session, $database;

 

   

        if (isset($_SERVER['HTTP_ORIGIN']) || isset($_SERVER['HTTP_REFERER'])) {

            $site = (isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : $_SERVER['HTTP_REFERER']);

  
            if (stripos($site, 'foxbridge') !== false || stripos($site, 's1-stage.flightomart.com') !== false || stripos($site, 'localhost') !== false || stripos($site, 'underpar') !== false ) {

                header('Access-Control-Allow-Headers: Requested-By');
                header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
                header("content-type: application/json");
            }

            else{
 
              echo("HTTP/1.1-1 403 Forbidden");
              exit;
            }
        }

        else{

 
          echo("HTTP/1.1-2 403 Forbidden");
          exit;
        }




 

 
  

        if (isset($_GET['newMembership'])) {

            $sql = "select * from membership_defination  where membership_name = '" . $_GET['newMembership'] . "' order by popular desc";



            $query = $database->query($sql);
            $data = mysqli_fetch_assoc($query);

            $data['membership']= true;

            $_SESSION['CART_MEMBERSHIP'] = $data;

            header("Location: checkout.php");
        }
     else    if (isset($_POST['league_id'])) {



 
            $sql = "select * from leagues  where id = '" . $_POST['league_id'] . "' limit 1";



            $query = $database->query($sql);
            $data = mysqli_fetch_assoc($query);


            $selectedLeague['id'] = $data ['id'];

            $selectedLeague['image'] = $data['image'];


 

            $selectedLeague['league'] = true;
            $selectedLeague['offer_price'] = $data[$_POST['holes'].'_hole_round_'.$_POST['rounds']];
            $selectedLeague['membership_name'] =$_POST['holes'].' hole '. $data['name'];
         
            $selectedLeague['description'] = '<b>'.$data['timing_description'].'</b><br />'.$data['free_content'];
            $selectedLeague['cart'] = ['price'=>0];    
            if($_POST['cart'] == 'pull_cart'){

                $selectedLeague['cart'] = ['description'=>'Pull cart','price'=>floatVal(($data[$_POST['holes'].'_hole_cart_pull'] * $_POST['rounds']))];


            }

            else if($_POST['cart']=='golf_cart' ){
                $selectedLeague['cart'] = ['description'=>'Golf cart','price'=>floatVal(($data[$_POST['holes'].'_hole_cart_golf'] * $_POST['rounds']))];


            }

            if(isset($_POST['rounds'])){

                $selectedLeague['rounds'] = $_POST['rounds'];

                $selectedLeague['membership_name'].=' - '.$_POST['rounds'].' Rounds';
            }
 
 




            $totalCost = ($selectedLeague['cart']['price'] + $selectedLeague['offer_price']);

            $selectedLeague['taxes'] = round( (($totalCost / 100) * 13),2);

            $selectedLeague['totalPrice'] = round(($totalCost + $selectedLeague['taxes']),2);

            
            $_SESSION['CART_MEMBERSHIP'] = $selectedLeague;



   
            
     
    
            header("Location: checkout.php");
        }
         else if (isset($_POST['registerMembership'])) {


 
            $this->newMembership($_POST);
        } else if (isset($_POST['applyJob'])) {
            $this->applyJob($_POST);
         
    } else if (isset($_POST['contactForm'])) {
        $this->contactForm($_POST);
    }
        else if (isset($_POST['restaurant_order'])) {

            $this->restaurantOrder($_POST);
         
        } else if (isset($_POST['confirmRestaurantOrder'])) {

            $this->confirmRestaurantOrder($_POST);
        } 
        

   
        else {

            $request_body = json_decode(strval(file_get_contents('php://input')), true);

 

     

            if (isset($request_body['newMembership'])) {

                $this->newMembership($request_body);
            } 

            else if(isset($request_body['api_key'])){

            
                $this->newUnderParVoucher($request_body);
            }

            
            
            
            else {
                header("Location: /");
            }
        }
    }



    public function restaurantOrder($data)
    {
        global $database, $session, $form;


        $_SESSION['order'] = ['items'=>[],'total'=>0];


        $sql="select * from menu_items";

        
$query_menuitems = $database->query($sql);

$menuItems = [];

while($row_menuitems = mysqli_fetch_assoc($query_menuitems)){ 


    $menuItems[str_replace(' ','_',$row_menuitems['item_name'])] = $row_menuitems['item_price'];


}

        foreach ($data as $item=>$count){

            if($count > 0 && $item != 'restaurant_order'){
            $_SESSION['order']['items'][] = array('name'=> $item,'count' => $count,'price'=>$menuItems[$item] );

            $_SESSION['order']['total']+= ($menuItems[$item] * $count);
            }



        }



      
        header("Location: items_summary.php");



    }


    public function confirmRestaurantOrder($data){
        global $database, $session, $form;

       

         
        $sql="select * from menu_items";
$query_menuitems = $database->query($sql);

$menuItems = [];

while($row_menuitems = mysqli_fetch_assoc($query_menuitems)){ 


    $menuItems[$session->encode(str_replace(' ','_',$row_menuitems['item_name']))] = $row_menuitems['item_price'];


}

$sql="select * from menu_item_options";
$query_menuitem_options = $database->query($sql);

$menuOptions = [];

while($row_menuitem_options = mysqli_fetch_assoc($query_menuitem_options)){ 


    $menuOptions[$session->encode(str_replace(' ','_',$row_menuitem_options['item_name']))] = $row_menuitem_options;


}


 
 
$orderHtml ='<table border="1"  >

<tr>
<th> Item Name</th>
<th> Quantity</th>
<th> Option selected</th>
<th>Price (each)</th>
<th> Price (total)</th>
 
</tr>
';


$orderItems = [];

print_r($menuItems);
  
$expectedTime = strtotime($data['date'].' '.$data['time']);
$placedTime = time();
$orderPrice = 0;
$totalItems = 0;



foreach ($data as $key=>$value){


if(stripos($key,'_option') !==false){



if(isset($menuOptions[str_replace('_option','',$key)])){


    $optionData[str_replace('_option','',$key)] = $menuOptions[str_replace('_option','',$key)];
  

}

 


}

}
 

 

foreach ($data as $key=>$value){

   

    if(isset($menuItems[$key]) ){
     
    
 
        $orderItems[] = ['count'=>$value,'name'=>str_replace('_',' ',$session->decode($key)),'price'=>$menuItems[$key],'option'=>(isset($optionData[$key]) ? $optionData[$key] : [])];


        $itemPrice = $menuItems[$key];
        $optionName = '';

        if(isset($optionData[$key])){
            $itemPrice+= $optionData[$key]['additional_price'];
            $optionName = $optionData[$key]['option_name'];

        }

      

        $orderHtml.='<tr><td>'.str_replace('_',' ',$session->decode($key)).'</td><td>'.$value.'</td><td>'.$optionName.'</td><td>$'.$itemPrice.'</td><td>$'.($itemPrice*$value).'</td><td></tr>';


        $orderPrice += ($itemPrice*$value);
        $totalItems+= $value;

    }

  
}


$orderTax = (($orderPrice/100)*13);

$orderHtml.='</table>';


 

$sql="INSERT INTO `restaurant_orders` ( 
`placed_timestamp`, 
`expected_timestamp`,
 `name`,
  `email`,
   `guests`,
    `order_details`,
     `order_value`,
      `order_tax`,
       `order_total`,
        `total_item_count`,`comments`) VALUES (
            '".$placedTime."',
             '".$expectedTime."',
              '".$data['full_name']."',
               '".$data['email']."',
                '".$data['guests']."',
                 '".serialize($orderItems)."',
                  '".$orderPrice."',
                 '".$orderTax."',
                    '".($orderPrice+$orderTax)."',
                     '".$totalItems."','".$data['comments']."')";


             
                     $database->query($sql);


$sql="select * from restaurant_orders where placed_timestamp = '".$placedTime."' ";


$query = $database->query($sql);


$row = mysqli_fetch_assoc($query);
 
 

$orderId = $row['order_id'];
 




$orderHtml='<Table border="1">

<tr><Td><b>Order Id</b></td><td>'.$orderId.'</td></tr>
<tr><Td><b>Name</b></td><td>'.$data['full_name'].'</td></tr>
<tr><Td><b>Email</b></td><td>'.$data['email'].'</td></tr>
<tr><Td><b>Placed on</b></td><td>'.date('j/M/y  h:i a',$placedTime).'</td></tr>
<tr><Td><b>Expected by</b></td><td>'.date('j/M/y  h:i a',$expectedTime).'</td></tr>
<tr><Td><b>Guests</b></td><td>'.$data['guests'].'</td></tr>
<tr><Td><b>Total Items</b></td><td> '.$totalItems.'</td></tr>
<tr><Td><b>Order Value</b></td><td> $'.round($orderPrice,2).'</td></tr>
<tr><Td><b>HST</b></td><td > $'.round($orderTax,2).'</td></tr>
<tr><Td><b>Order Total</b></td><td> $'.round(($orderPrice+$orderTax),2).'</td></tr>


</table> <Br /> <Br/>'.$orderHtml;



$orderHtml.='<br/> <br /><p> <b> Additional Comments: </b> <br/>'.$data['comments'].'</p>';



$mandrill = new Mandrill('PGwmwdQrRHT5HFpKSocFJw');

$message = array(
    'html' => $orderHtml,
    'subject' => 'Online order:'.$orderId.' placed by '.$data['full_name'],
    'from_email' => 'no-reply@foxbridge.ca',
    'from_name' => 'Foxbridge Golf Club',
 
    'important' => true,
    'track_opens' => null,
    'track_clicks' => null,
    'auto_text' => null,
    'auto_html' => null,
    'inline_css' => null,
    'url_strip_qs' => null,
    'preserve_recipients' => null,
    'view_content_link' => null,
    'bcc_address' => null,
    'tracking_domain' => null,
    'signing_domain' => null,
    'return_path_domain' => null,
    'merge' => true,
    'merge_language' => null,
    'global_merge_vars' => array(),
    'merge_vars' => array(),
    'tags' => array(
        'void-request'
    )
);

$send_email = array('nishant@skybooker.com','scrambles@foxbridge.ca','nadeem@foxbridge.ca');
$send = array();
foreach ($send_email as $bc) {
    $send[] = array(
        'email' => $bc,
        'type' => 'to'
    );
}

$message['to'] = $send;
$async = false;
$ip_pool = 'Main Pool';


exit;

$result = $mandrill->messages->send($message, $async, $ip_pool, '');


$_SESSION['order'] = array('order_id'=>$orderId,'items'=>$orderItems,'orderTotal'=>$orderPrice,'orderTax'=>$orderTax,'expected'=>$expectedTime,'guests'=>$data['guests'],'name'=>$data['full_name']);

header("Location: order_confirm.php");

 }


 public function contactForm($data){


    global $database, $session, $form;


   

    $body = "<h1>Contact form inquiry by " .$data['first_name'].' '.$data['last_name'] . " </h1> <Br /> <br />";

    $body .= "Contact form submitted  by <b>" . $data['first_name'] . ' ' . $data['last_name'] . "</b>, regarding <b>".$data['subject']."</b> <Br /> Message: <p> ".$data['message']." </p>   <small>-  Foxbridge Golf Club </small>";


    $body .= "<br />   Submitted Details: <Br />";

    $body.='Name: <b>'.$data['first_name'].' '.$data['last_name'].'</b> <br />';
    $body.='Email: <b>'.$data['email'].'</b><br />'  ;
    $body.='Phone: <b>'.$data['phone'].'</b><br />'  ;
 


    $title = "Contact form inquiry from " . $data['first_name'] . ' ' . $data['last_name'] . " - Foxbridge";



    $recaptcha = new \ReCaptcha\ReCaptcha($session->captchaSecretKey);
    $resp = $recaptcha->verify($data['g-recaptcha-response']);
    
     
    
    
    
     
    if (!$resp->isSuccess()){
    
        $_SESSION['contactForm']['status'] = false;
        $_SESSION['contactForm']['remarks'] = "Captcha verification failed, please try again.";
       
        $_SESSION['value_array'] = $data;
        $_SESSION['error_array'] =['captcha'=>'Captcha verification failed, please try again.'];
   
    
        header("Location: ".$data['redirectTo'].'#contact-us');
    
        exit;
    
    }

    $mandrill = new Mandrill('PGwmwdQrRHT5HFpKSocFJw');

    $message = array(
        'html' => $body,
        'subject' => $title,
        'from_email' => 'no-reply@foxbridge.ca',
        'from_name' => 'Foxbridge Golf Club',

 
        'important' => true,
        'track_opens' => null,
        'track_clicks' => null,
        'auto_text' => null,
        'auto_html' => null,
        'inline_css' => null,
        'url_strip_qs' => null,
        'preserve_recipients' => null,
        'view_content_link' => null,
        'bcc_address' => null,
        'tracking_domain' => null,
        'signing_domain' => null,
        'return_path_domain' => null,
        'merge' => true,
        'merge_language' => null,
        'global_merge_vars' => array(),
        'merge_vars' => array(),
        'tags' => array(
            'void-request'
        )
    );

    $send_email = array('nadeem@foxbridge.ca', 'proshop@foxbridge.ca');
    $send = array();
    foreach ($send_email as $bc) {
        $send[] = array(
            'email' => $bc,
            'type' => 'to'
        );
    }

    $message['to'] = $send;
    $async = false;
    $ip_pool = 'Main Pool';



    $result = $mandrill->messages->send($message, $async, $ip_pool, '');


    if ($result[0]['status'] == 'queued' || $result[0]['status'] == "sent") {

        $_SESSION['contactForm']['status'] = true;
        $_SESSION['contactForm']['remarks'] =  " Thank you for contacting us <br />Your message has been successfully sent. We will get in touch with you soon!";
    }
    

    
    
    else {
        $_SESSION['contactForm']['status'] = false;
        $_SESSION['contactForm']['remarks'] = " Failed to send your message, please try again.";
    }



    header("Location: ".$data['redirectTo'].'#contact-us');



 }

    public function applyJob($data)
    {


 


        global $database, $session, $form;
 
 
        $body = "<h1> New job application for " . $data['title'] . " </h1> <Br /> <br />";

        $body .= "Job applied by <b>" . $data['first_name'] . ' ' . $data['last_name'] . " </b>, resume attached. <Br /> <br /> <Br /> <small> Foxbridge Jobs </small>";



        $title = "New job application for " . $data['title'] . " from " . $data['first_name'] . ' ' . $data['last_name'] . " - Foxbridge";



        $recaptcha = new \ReCaptcha\ReCaptcha($session->captchaSecretKey);
$resp = $recaptcha->verify($data['g-recaptcha-response']);

 



 
if (!$resp->isSuccess()){

    $_SESSION['applyJob']['status'] = false;
    $_SESSION['applyJob']['remarks'] = "Captcha verification failed, please try again.";

    header("Location: jobs.php#apply-jobs");

    exit;

}

      if (!empty($_FILES['resume'])) {

            $resume = base64_encode(file_get_contents($_FILES["resume"]["tmp_name"]));


            $resumeName = $_FILES['resume']['name'];
        }

 

 





        $mandrill = new Mandrill('PGwmwdQrRHT5HFpKSocFJw');

        $message = array(
            'html' => $body,
            'subject' => $title,
            'from_email' => 'no-reply@foxbridge.ca',
            'from_name' => 'Foxbridge Golf Club',

            // 'headers' => array('Reply-To' => ''),
            "attachments" => array(
                array(
                    'content' => $resume,

                    'name' => $resumeName,
                )
            ),
            'important' => true,
            'track_opens' => null,
            'track_clicks' => null,
            'auto_text' => null,
            'auto_html' => null,
            'inline_css' => null,
            'url_strip_qs' => null,
            'preserve_recipients' => null,
            'view_content_link' => null,
            'bcc_address' => null,
            'tracking_domain' => null,
            'signing_domain' => null,
            'return_path_domain' => null,
            'merge' => true,
            'merge_language' => null,
            'global_merge_vars' => array(),
            'merge_vars' => array(),
            'tags' => array(
                'void-request'
            )
        );

        $send_email = array('nishant@skybooker.com', 'nadeem@foxbridge.ca','proshop@foxbridge.ca');
        $send = array();
        foreach ($send_email as $bc) {
            $send[] = array(
                'email' => $bc,
                'type' => 'to'
            );
        }

        $message['to'] = $send;
        $async = false;
        $ip_pool = 'Main Pool';



        $result = $mandrill->messages->send($message, $async, $ip_pool, '');


        if ($result[0]['status'] == 'queued' || $result[0]['status'] == "sent") {

            $_SESSION['applyJob']['status'] = true;
            $_SESSION['applyJob']['remarks'] = $data['first_name'] . ' ' . $data['last_name'] . ", Your job application for " . $data['title'] . " has been successfully submitted";
        }
        

        
        
        else {
            $_SESSION['applyJob']['status'] = false;
            $_SESSION['applyJob']['remarks'] = $data['first_name'] . ' ' . $data['last_name'] . ", Your job application for " . $data['title'] . " has failed, please try again later";
        }



        header("Location: jobs.php#apply-jobs");
    }

    public function newMembership($data)
    {


        global $database, $session, $form;


        //    /* Username error checking */
        //    $field = "user"; //Use field name for username
        //    if (!$subuser || strlen($subuser = trim($subuser)) == 0) {
        //        $form->setError($field, "* Username not entered");
        //    }


        $selectedMembership = $_SESSION['CART_MEMBERSHIP'];


   

    //     if(!empty($data['discountCode'])){

    //       $discountCode = strtoupper($data['discountCode']);

    //       $sql="select * from membership_discount where code = '".$discountCode."' limit 0,1";
        
    //       $query = $database->query($sql);
        
    //       $discountDetails = mysqli_fetch_assoc($query);
        
        
        
    //       if(!isset($discountDetails['id'])){
    //         $invalidDiscountCode =true;
    //         $discountCode = '';
        
    //       }
        
    //       else{
        
    //         $selectedMembership['discount_details'] = $discountDetails;
        
    //       if( $discountDetails['percent'] > 0){
        
    //         $selectedMembership['discount_details']['discountAmount'] = ($selectedMembership['offer_price']/100)*$discountDetails['percent'];
         
    //       }
        
    //       else {
        
    //           $selectedMembership['discount_details']['discountAmount'] =  $discountDetails['value'];
              
    //        }

    //        $_SESSION['CART_MEMBERSHIP'] = $selectedMembership  ;


   

    //     }

    // }




 

        $billAmount = floatval($selectedMembership['offer_price']);


        if(isset($selectedMembership['totalPrice'])){
            $billAmount = floatVal($selectedMembership['totalPrice']);
        }

        $addons = [];
        $addonString = '';
        $addons_db_string = '';
        $addonsHtml = '';

        if (isset($data['addons'])) {




            foreach ($data['addons'] as $val) {
                $addonString .= "'" . $val . "',";
            }


        
            $sql = "select * from membership_addons where id in (" . substr($addonString, 0, -1) . ") ";
 

           

            $query = $database->query($sql);

            while ($addons_row = mysqli_fetch_assoc($query)) {


                $addons[] = $addons_row;

                $billAmount += number_format($addons_row['offer_price'],2);

                $addons_db_string .= strtoupper($addons_row['addon_name'] . ', ');


                $addonsHtml .= '   <tr>
            <td align="center" valign="top" style="padding-bottom:5px; padding-top:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <td align="center" valign="top"><table width="441" border="0" cellspacing="0" cellpadding="0" align="left" style="width:441px;" class="sp_wrapper">
                      <tr>
                        <td align="left"  valign="top" class="sp_defaultlink" mc:edit="mc_txt10" style="font:16px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  color:#373737;">' . $addons_row['addon_name'] . '</td>
                      </tr>
                    </table></td>
                  <td width="10" style="width:10px;"></td>
                  <td align="center" valign="top"><table width="75" border="0" cellspacing="0" cellpadding="0" align="right" style="width:75px;" class="sp_wrapper">
                      <tr>
                        <td align="right"  valign="top" class="sp_defaultlink" mc:edit="mc_txt11" style="font:bold 18px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  text-transform:uppercase; color:#4a4848;"><strong>$' . $addons_row['offer_price'] . '</strong></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td height="1" style="height:1px; line-height:0px; font-size:0px;" bgcolor="#f9c898"><img src="images/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
          </tr>';
            }
        }


        else if(!empty($selectedMembership['cart']['price'])){

            $addons_db_string = strtoupper($selectedMembership['cart']['description']);

            $addonsHtml .= '   <tr>
            <td align="center" valign="top" style="padding-bottom:5px; padding-top:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                  <td align="center" valign="top"><table width="441" border="0" cellspacing="0" cellpadding="0" align="left" style="width:441px;" class="sp_wrapper">
                      <tr>
                        <td align="left"  valign="top" class="sp_defaultlink" mc:edit="mc_txt10" style="font:16px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  color:#373737;">' . $addons_db_string . '</td>
                      </tr>
                    </table></td>
                  <td width="10" style="width:10px;"></td>
                  <td align="center" valign="top"><table width="75" border="0" cellspacing="0" cellpadding="0" align="right" style="width:75px;" class="sp_wrapper">
                      <tr>
                        <td align="right"  valign="top" class="sp_defaultlink" mc:edit="mc_txt11" style="font:bold 18px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  text-transform:uppercase; color:#4a4848;"><strong>$' . $selectedMembership['cart']['price'] . '</strong></td>
                      </tr>
                    </table></td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td height="1" style="height:1px; line-height:0px; font-size:0px;" bgcolor="#f9c898"><img src="images/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
          </tr>';





        }


        
if(!empty($selectedMembership['discount_details']['discountAmount']) && $selectedMembership['discount_details']['discountAmount'] > 0 ){

    $discountAmount = number_format($selectedMembership['discount_details']['discountAmount'],2);
    $billAmount =  ($billAmount  - $discountAmount);

    $addonsHtml .= '   <tr>
    <td align="center" valign="top" style="padding-bottom:5px; padding-top:5px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td align="center" valign="top"><table width="441" border="0" cellspacing="0" cellpadding="0" align="left" style="width:441px;" class="sp_wrapper">
              <tr>
                <td align="left"  valign="top" class="sp_defaultlink" mc:edit="mc_txt10" style="font:16px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  color:#373737;">Discount</td>
              </tr>
            </table></td>
          <td width="10" style="width:10px;"></td>
          <td align="center" valign="top"><table width="75" border="0" cellspacing="0" cellpadding="0" align="right" style="width:75px;" class="sp_wrapper">
              <tr>
                <td align="right"  valign="top" class="sp_defaultlink" mc:edit="mc_txt11" style="font:bold 18px/21px \'Open Sans\', Arial, Helvetica, sans-serif;  text-transform:uppercase; color:#4a4848;"><strong>-$' . $discountAmount . '</strong></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="1" style="height:1px; line-height:0px; font-size:0px;" bgcolor="#f9c898"><img src="images/spacer.gif" width="1" height="1" alt="" border="0" style="display:block;" /></td>
  </tr>';

 
  }
  
  else{
    $discountAmount = 0;
 
  }



  if(isset($selectedMembership['totalPrice'])){


    $totalTaxes = $selectedMembership['taxes'];
    $totalAmount = $selectedMembership['totalPrice'];

  }
  else{
    $totalTaxes = round( (($billAmount / 100) * 13),2);

    $totalAmount = round ($billAmount + $totalTaxes,2);

  }

  


        $data['addons'] = $addons;




        $comments = strtoupper('FOXBRIDGE_' . str_replace(' ', '_', $selectedMembership['membership_name']) . '_' . $data['lastName']);
        // validate credit card first


 

 
  
        $validateCC =  $this->validateCreditCard($data, $totalAmount, true, $comments);


    
 
       

        if ($validateCC !== false) {

            // $memberPhoto = '';

            // if (!empty($_FILES['photo'])) {

            //     $memberPhoto = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
            // }
            // insert into db the values


            $table_name = 'members';

            if(isset($selectedMembership['league'])){
                $table_name = 'league_bookings';
            }

            $sql = "INSERT INTO `".$table_name."`
     (
     `timestamp`,
     `membership`,
     ".(!empty($selectedMembership['rounds']) ? "`rounds`,":'')."
      `first_name`, 
      `last_name`,
       `email`,
        `phone`,
         `age`,
          `address`,
           `city`, 
           `postalcode`,
            `card_name`,
             `card_number`,
              `card_expiry`,
               `card_cvv`,
                `charge_amount`,
             
                 `addons`,
                 `payment_string`,
              
                 `discount_code`,
                 `discount_value`,
                 `membership_year`
                 
                 )
                  VALUES ( '" . time() . "', 
                  '" . $selectedMembership['membership_name'] . "',
         ".(!empty($selectedMembership['rounds']) ?   $selectedMembership['rounds'].',' : '')."
                  '" . $data['firstName'] . "',
                  '" . $data['lastName'] . "',
                   '" . $data['email'] . "', 
                   '" . $data['phoneNumber'] . "', 
                   '" . $data['age'] . "', 
                   '" . $data['address'] . "', 
                   '" . $data['city'] . "', 
                   '" . $data['postalCode'] . "', 
                   '" . $data['cardName'] . "', 
                   '" . base64_encode($data['cardNumber']) . "', 
                   '" . (strlen($data['cardMonth']) == 1 ? '0' . $data['cardMonth'] : $data['cardMonth']) . substr($data['cardYear'], 2, 2) . "', 
                   '" . $data['cardCvv'] . "',
                    '" . $totalAmount . "',
                     '" . substr($addons_db_string, 0, -2) . "',
                     '" . $this->paymentString. "',
               
                     '" . (isset($selectedMembership['discount_details']['code']) ? $selectedMembership['discount_details']['code'] : '')  . "',
                     '" . (isset($selectedMembership['discount_details']['discountAmount']) ? $selectedMembership['discount_details']['discountAmount'] : '')  . "',
                  '2024'
                    ); ";

 
 
        
            $database->query($sql);

            $_SESSION['CONFIRM_MEMBERSHIP'] = $data;


            $sql = "select * from `".$table_name."` where email = '" . $data['email'] . "' order by id desc limit 1";



            $row = mysqli_fetch_array($database->query($sql));

            $membershipId = $row['id'];
            // print_r($_FILES['photo']);

            // print_r($selectedMembership);

            // print_r($data);

            // exit;

            // send email 



            $html = implode('', file('email_notifications/membership_confirmation.html'));



            $search = array('TYPE_OF_BOOKING','MEMBERSHIP_NAME', 'MEMBERSHIP_DESCRIPTION', 'MEMBERSHIP_COST', 'TOTAL_TAX', 'TOTAL_AMOUNT', 'FULL_NAME', 'ADDONS_HTML', 'MEMBERSHIP_ID');
            $replace = array(
                (isset($selectedMembership['league']) ? 'League' : 'Membership'),
                $selectedMembership['membership_name'],
                $selectedMembership['description'],
                $selectedMembership['offer_price'],
                $totalTaxes,   $totalAmount,
                $data['firstName'] . ' ' . $data['lastName'], $addonsHtml, $membershipId
            );


            $html = str_replace($search, $replace, $html);





            $mandrill = new Mandrill('PGwmwdQrRHT5HFpKSocFJw');

            $message = array(
                'html' => $html,
                'subject' => (isset($selectedMembership['league']) ? 'Confirmation and receipt of league ID #'  : 'Confirmation and receipt of membership ID #').$membershipId,
                'from_email' => 'no-reply@foxbridge.ca',
                'from_name' => 'Foxbridge Golf Club',

                // 'headers' => array('Reply-To' => ''),

                'important' => true,
                'track_opens' => null,
                'track_clicks' => null,
                'auto_text' => null,
                'auto_html' => null,
                'inline_css' => null,
                'url_strip_qs' => null,
                'preserve_recipients' => null,
                'view_content_link' => null,
                'bcc_address' => null,
                'tracking_domain' => null,
                'signing_domain' => null,
                'return_path_domain' => null,
                'merge' => true,
                'merge_language' => null,
                'global_merge_vars' => array(),
                'merge_vars' => array(),
                'tags' => array(
                    'void-request'
                )
            );

            $send_email = array('nishant@skybooker.com',  $data['email'] , 'nadeem@foxbridge.ca');
            $send = array();
            foreach ($send_email as $bc) {
                $send[] = array(
                    'email' => $bc,
                    'type' => 'to'
                );
            }

            $message['to'] = $send;
            $async = false;
            $ip_pool = 'Main Pool';



            $result = $mandrill->messages->send($message, $async, $ip_pool, '');
 
      

         header("Location: confirm.php");
        } else {


            $_SESSION['CARD_ERROR'] = true;

            $_SESSION['value_array'] = $data;
            $_SESSION['error_array'] = $form->getErrorArray();
              header("Location: checkout.php");
        }
    }

    public function validateCreditCard($data, $amount, $capture, $comments)
    {





   
 
        global $database, $session;
 
        $success = false;

        try {


 

                ##
                

                /**************************** Request Variables *******************************/
      
                /*********************** Transactional Associative Array **********************/
                $txnArray=array('type'=>'purchase',
                'order_id'=>'ord-'.date("d/m/y-G:i:s").'_'.$data['firstName'].'_'.$data['lastName'],
                'cust_id'=>rand(1111,999999),
                'amount'=>number_format($amount,2,'.',''),
 

                
                'pan'=>preg_replace("/[^0-9]/", '', $data['cardNumber']),
                'expdate'=>substr($data['cardYear'],2,2).(strlen($data['cardMonth']) == 1 ? '0'.$data['cardMonth'] : $data['cardMonth']),
                'crypt_type'=>'7',
                'dynamic_descriptor'=>$comments
                //,'wallet_indicator' => '' //Refer to documentation for details
                //,'cm_id' => '8nAK8712sGaAkls56' //set only for usage with Offlinx - Unique max 50 alphanumeric characters transaction id generated by merchant
       
                );


       
                /**************************** Transaction Object *****************************/
                $mpgTxn = new mpgTransaction($txnArray);

                // /******************* Credential on File **********************************/
                // $cof = new CofInfo();
                // $cof->setPaymentIndicator("U");
                // $cof->setPaymentInformation("2");
                // $cof->setIssuerId("168451306048014");
                // $mpgTxn->setCofInfo($cof);
                $cvdTemplate = array(
                    'cvd_indicator' => '1',
                    'cvd_value' => $data['cardCvv']
                );



                if ($_SERVER['SERVER_NAME'] != 's1-stage.flightomart.com' && $data['email'] != 'nishant@skybooker.com') {

                $cvdTxn = new mpgCvdInfo($cvdTemplate);

               $mpgTxn->setCvdInfo($cvdTxn);

                }

                /****************************** Request Object *******************************/
                $mpgRequest = new mpgRequest($mpgTxn);
           
                $mpgRequest->setProcCountryCode("CA"); //"US" for sending transaction to US environment
             

                /***************************** HTTPS Post Object *****************************/
                /* Status Check Example
                $mpgHttpPost =new mpgHttpsPostStatus($store_id,$api_token,$status_check,$mpgRequest);
                */

                $test = false;
                if ($_SERVER['SERVER_NAME'] == 's1-stage.flightomart.com' || $data['email'] == 'nishant@skybooker.com') {

                $mpgHttpPost = new mpgHttpsPost($this->monerisTestStoreId,$this->monerisTestApiKey,$mpgRequest);
                $mpgRequest->setTestMode(true); //false or comment out this line for production transactions
                $test= true;

            

                }

                else{
                    $mpgHttpPost = new mpgHttpsPost($this->monerisLiveStoreId,$this->monerisLiveApiKey,$mpgRequest);
                    $mpgRequest->setTestMode(false); //false or comment out this line for production transactions

                }

                /******************************* Response ************************************/
                $mpgResponse=$mpgHttpPost->getMpgResponse();


                // print_r('code'.$mpgResponse->getResponseCode());
                // print_r($mpgResponse->responseData);

                // print("\nCardType = " . $mpgResponse->getCardType());
                // print("\nTransAmount = " . $mpgResponse->getTransAmount());
                // print("\nTxnNumber = " . $mpgResponse->getTxnNumber());
                // print("\nReceiptId = " . $mpgResponse->getReceiptId());
                // print("\nTransType = " . $mpgResponse->getTransType());
                // print("\nReferenceNum = " . $mpgResponse->getReferenceNum());
                // print("\nResponseCode = " . $mpgResponse->getResponseCode());
                // print("\nISO = " . $mpgResponse->getISO());
                // print("\nMessage = " . $mpgResponse->getMessage());
                // print("\nIsVisaDebit = " . $mpgResponse->getIsVisaDebit());
                // print("\nAuthCode = " . $mpgResponse->getAuthCode());
                // print("\nComplete = " . $mpgResponse->getComplete());
                // print("\nTransDate = " . $mpgResponse->getTransDate());
                // print("\nTransTime = " . $mpgResponse->getTransTime());
                // print("\nTicket = " . $mpgResponse->getTicket());
                // print("\nTimedOut = " . $mpgResponse->getTimedOut());
                // print("\nStatusCode = " . $mpgResponse->getStatusCode());
                // print("\nStatusMessage = " . $mpgResponse->getStatusMessage());
                // print("\nHostId = " . $mpgResponse->getHostId());
                // print("\nIssuerId = " . $mpgResponse->getIssuerId());
               

                if(stripos($mpgResponse->getMessage(),'APPROVED') !== false){

                    $success = true;
                }

                else{
                    $success = false;
                }
 
 
        }   catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe


            // print_r('error occured');

            // print_r($e);

            $success = false;
        }



        if($success === true){


            $payment['captured'] = true;
            $payment['amount'] = $mpgResponse->getTransAmount();
            $payment['txn'] = $mpgResponse->getTxnNumber();
            

            $payment['details'] = $mpgResponse->responseData;
            $payment['response'] = $mpgResponse->getMessage();
            
            $payment = base64_encode(serialize($payment));


            $this->paymentString = $payment;

            return true;
        }

        else if($test){

            $payment['captured'] = true;
            $payment['amount'] = $mpgResponse->getTransAmount();
            $payment['txn'] = 'test'; //$mpgResponse->getTxnNumber();
            

            $payment['details'] = ''; //$mpgResponse->responseData;
            $payment['response'] = ''; //$mpgResponse->getMessage();
            $payment = base64_encode(serialize($payment));
            $this->paymentString = $payment;
            return true;
        }

        else{
            return false;
        }
        // if (isset($charge)) {
        //     $charge = $charge->jsonSerialize();

        //     $payment['captured'] = $charge['captured'];
        //     $payment['amount'] = $charge['amount'] / 100;
        //     $payment['txn'] = $charge['id'];
        //     $payment = base64_encode(serialize($payment));

        //     if ($charge['amount'] > 100) {
        //         $this->paymentString = $payment;
        //     }

        //     if (isset($charge['source']['cvc_check']) && $charge['source']['cvc_check'] == 'pass') {
        //         return $charge;
        //     } else {

        //         return false;
        //     }
        // } else {

        //     return false;
        // }
    }

    function newUnderParVoucher($data){


        header("Access-Control-Allow-Origin: * " );
        header("content-type: application/json");


        global $database,$session;



        
        $action = '';

        if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
            $action = 'delete';
        }
        else if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $action = 'insert';
        }

        if(empty($data['api_key']) || $data['api_key'] != 'zlbfAjySzLX9UWWqV1WzogkJ'){

            echo json_encode(['success'=>false,'msg'=>'invalid api key']);
        }
        else if($action == 'insert' && isset($data['body'][0])){



    


            $count = 0;
            foreach ($data['body'] as $b){

            
            $sql="INSERT INTO `underpar_vouchers` (`timestamp`, `voucher_data`  ) VALUES ( '".time()."', '".$b."' )";


            $database->query($sql);

            $count ++;

            }



            echo json_encode(['success'=>true,'msg'=>$count.' voucher(s) added']);



        }

        else if($action =='delete' && isset($data['body'][0]) ){


            $count = 0;
            foreach ($data['body'] as $b){

            
            $sql="update `underpar_vouchers` set refunded = '1' where voucher_data = '".$b."'  ";


           $query =  $database->query($sql);
           $count ++;


            }

            if(mysqli_affected_rows($database->connection) > 0){

            echo json_encode(['success'=>true,'msg'=>$count.' voucher(s) refunded']);

            }

            else{
                echo json_encode(['success'=>false,'msg'=>'voucher not found']); 
            }








        }

        else{
            echo json_encode(['success'=>false,'msg'=>'no body']); 
        }





    }

  
};

/* Initialize process */
$process = new Process;
