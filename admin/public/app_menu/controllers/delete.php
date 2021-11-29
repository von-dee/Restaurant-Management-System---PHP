<?php 
 namespace app_menu;
  class delete extends \setup { 
      function __construct(){
        parent::__construct();
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          
          
          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_products SET 
          PROD_STATUS = ".$this->sql->Param('a')."
          WHERE  PROD_CODE = ".$this->sql->Param('a')." "),array("0",  $this->keys));


          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You Deleted ".$this->keys."'s in your Products";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Deleted Product Details"; 
            $reqtype = "badge-info-inverse";
            $reqicon = "feather icon-box";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You Deleted ".$this->keys."'s in your Products";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Deleted Product Details"; 
            $act_reqtype = "badge-info-inverse";
            $act_reqicon = "feather icon-box";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Deleted Product Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>