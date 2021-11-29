<?php 
 namespace app_restaurants;
  class add extends \setup { 
      function __construct(){
        parent::__construct(); 
      }
      function Init(){
        // if($this->engine->validatePostForm($this->microtime)){  
          
          
          
          $gen_code =  $this->engine->generateCode_SQL("app_restaurants", "RES", "RES_CODE", "RES_ID");
          $actorcode = $this->session->get('actorid');
          $actorname = $this->session->get('loginuserfulname');
          $actorcompcode = $this->session->get('companycode');
        
          
          $restaurantImage = "";

          if(!empty($_FILES['restaurantImage']['tmp_name'])){				
              $restaurantImagename = $this->uploadClass->uploadAttachement($_FILES['restaurantImage'],'');
              $restaurantImage = $restaurantImagename;
          }          


          $stmt = $this->sql->Execute($this->sql->Prepare("INSERT INTO app_restaurants (
            RES_CODE,
            RES_NAME,
            RES_CONTACTNAME,
            RES_CONTACTNUMBER,
            RES_LOCATION,
            RES_PROFILEPIC,
            RES_DESCRIPTION,
            RES_STATUS
          ) VALUES(".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').",".$this->sql->Param('a').")"),
          array($gen_code, $this->restaurantTitle, $this->restaurantContactname, $this->restaurantContactphone, $this->restaurantLocation, $restaurantImage, $this->restaurantInfo, "1"));

          print $this->sql->ErrorMsg();

          if($stmt == true){
            
            $message = "You added ".$this->restaurantTitle." to your restaurants List";
            $type = "2";
            $reqcode = $gen_code;
            $reqtitle = "Added restaurant";
            $reqtype = "badge-success-inverse";
            $reqicon = "feather icon-box";
            $notify =  $this->engine->saveNotification_SQL($actorcode,$message,$type,$reqcode,$reqtitle,$reqtype,$reqicon);


            $act_message = "You added ".$this->restaurantTitle." to your restaurants List";
            $act_type = "2";
            $act_reqcode = $gen_code;
            $act_reqtitle = "Added restaurant";
            $act_reqtype = "badge-success-inverse";
            $act_reqicon = "feather icon-box";
            $activity =  $this->engine->saveActivity_SQL($act_message,$act_type,$act_reqcode,$act_reqtitle,$act_reqtype,$act_reqicon );

            $alert = $this->engine->alert_SQL("success", "Successful", "Added Restaurant Successfully");

          }else{

            $alert = $this->engine->alert_SQL("error", "Oops...", "An Error Occurred: Try Again");

          }

          return true;
          }
      }
   //} 
   ?>