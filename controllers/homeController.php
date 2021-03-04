<?php
class homeController extends controller{

    public function index(){
        $dados = array(
            'quantidade' => 5,
            'nome' => 'Angela',
            'idade' => '99'
        );

       //$this->loadView('home', $dados);
       $this->loadTemplate('home', $dados);
    }
}