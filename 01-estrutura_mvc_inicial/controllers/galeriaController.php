<?php
class galeriaController extends controller{

    public function index(){
        $dados = array(
            'qt' => 129
        );

       //$this->loadView('galeria', $dados);
       $this->loadTemplate('galeria', $dados);
    }

   
}