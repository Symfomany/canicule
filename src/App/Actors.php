<?php

namespace App;


use App\Interfaces\VisibleInterface;

class Actors implements VisibleInterface
{



    const enable = 15;
    const disabled = false;

    protected $email;
    protected $nom;
    protected $prenom;

    public function getVisible()
    {
        return true;
    }
    public function __construct(){

    }

    public function create(){

    }

    public function retrieve($limit= 10, $order = "title"){

    }

    public function delete($id){

    }

    public function update($id, array $datas){

    }


}