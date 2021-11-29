<?php 
 namespace app_requests;
  class lists extends \setup { 
    public $limit,$fdsearch;
    function __construct(){
      parent::__construct(); 
    }
    function Init(){
      // if($this->engine->validatePostForm($this->microtime)){  

        $actorcode = $this->session->get('actorid');
        $actorname = $this->session->get('loginuserfulname');
        $actorcompcode = $this->session->get('companycode');


        $stmt_category = $this->sql->Execute($this->sql->Prepare("SELECT * FROM app_requests WHERE REQ_STATUS = '1' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC"),array($actorcompcode));
        

        if(isset($this->fdsearch)){ 
          
          $query = "SELECT * FROM app_requests WHERE REQ_STATUS != '0' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')." AND REQ_REQUESTORNAME LIKE ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode, "%".$this->fdsearch."%"); 

        }else if($this->search_subject == "new"){ 

          $query = "SELECT * FROM app_requests WHERE REQ_STATUS = '1' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }else if($this->search_subject == "inprogress"){ 
          
          $query = "SELECT * FROM app_requests WHERE REQ_STATUS = '2' OR REQ_STATUS = '3' OR REQ_STATUS = '4' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }else if($this->search_subject == "completed"){ 

          $query = "SELECT * FROM app_requests WHERE REQ_STATUS = '5' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }else if($this->search_subject == "cancelled"){ 

          $query = "SELECT * FROM app_requests WHERE REQ_STATUS = '0' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }else if($this->search_subject == "all"){ 
          
          $query = "SELECT * FROM app_requests WHERE REQ_STATUS != '0' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }else{
          
          $query = "SELECT * FROM app_requests WHERE REQ_STATUS != '0' AND REQ_ACTORCOMPCODE = ".$this->sql->Param('a')."  ORDER BY REQ_REQUESTED_DATE DESC";
          $input =array($actorcompcode);

        }
      

        if(!isset($limit)){
          $limit = $this->session->get("limited");
        }else if(empty($limit)){
          $limit =20;
        }
        
        $this->session->set("limited",$limit);
        $lenght = 10;
        $paging = new \OS_Pagination($this->sql,$query,$limit,$lenght,"pg=".$this->pg."&option=".$this->option, isset($input) ?$input:  []);
        
        // var_dump($paging); die();

        return $paging ;

      }
} 

?>