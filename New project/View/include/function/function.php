<?php

 function Get_Title() {
     
     global $pagetitle ;
     
     if(isset($pagetitle)){
         
          $pagetitle = $pagetitle;
     }  else {
         
         $pagetitle = "Default";
     }
     
     return $pagetitle;
    
}

