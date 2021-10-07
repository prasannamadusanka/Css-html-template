<?php
  class Collectioncenterpages extends Controller {
    public function __construct(){
     
    }
    
    public function home(){
      $data = [
        'title' => 'SharePosts',
      ];
     
      $this->view('collection center/home', $data);
    }

   
  }