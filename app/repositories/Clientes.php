<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Clientes extends GuzzleHttpRequest{

    public function all(){
        
        return $this->get('clientes');
    }

    public function find($id){
        return $this->get("clientes/{$id}");
    }

}