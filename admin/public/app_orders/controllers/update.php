<?php 
 namespace app_orders;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_checkouts SET 
          CHKOUT_STATUS = ".$this->sql->Param('a')." WHERE  CHKOUT_CODE = ".$this->sql->Param('a')." "),array($this->ekeys, $this->keys));



          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->keys."'s Status";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Updated Order's Status"; 
            $reqtype = "badge-info-inverse";
            $reqicon = "feather icon-user";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->keys."'s Status";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Updated Order's Status"; 
            $act_reqtype = "badge-info-inverse";
            $act_reqicon = "feather icon-user";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Order Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>