<?php 
 namespace app_restaurants;
  class update extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  

          
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');                    
          
          
          $restaurantImage = $this->restaurantImageOld;

          if(!empty($_FILES['restaurantImage']['tmp_name'])){				
              $restaurantImagename = $this->uploadClass->uploadAttachement($_FILES['restaurantImage'],'');
              $restaurantImage = $restaurantImagename;
          }          
          

          $stmt = $this->sql->Execute($this->sql->Prepare("UPDATE app_restaurants SET 
          RES_NAME = ".$this->sql->Param('a').", 
          RES_CONTACTNAME = ".$this->sql->Param('a').", 
          RES_CONTACTNUMBER = ".$this->sql->Param('a').", 
          RES_LOCATION = ".$this->sql->Param('a').", 
          RES_PROFILEPIC = ".$this->sql->Param('a')." WHERE  RES_CODE = ".$this->sql->Param('a')),array($this->restaurantTitle, $this->restaurantContactname, $this->restaurantContactphone, $this->restaurantLocation, $restaurantImage, $this->keys));

          print $this->sql->ErrorMsg();
     
		 
          if($stmt == true){

            $message = "You updated ".$this->restaurantTitle."'s details";
            $type = "2";
            $reqcode = $this->keys;
            $reqtitle = "Updated Restaurant Details"; 
            $reqtype = "badge-info-inverse";
            $reqicon = "feather icon-user";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You updated ".$this->restaurantTitle."'s details";
            $act_type = "2";
            $act_reqcode = $this->keys;
            $act_reqtitle = "Updated Restaurant Details"; 
            $act_reqtype = "badge-info-inverse";
            $act_reqicon = "feather icon-user";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Updated Restaurant Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;

        
        }
    } 
 // }
 ?>