<?php
class Core{
    public function run(){

        //action = index
        //1 = controller
        //2 = action
        //3,4,5 = parametros

        //echo "URL: ".$_GET['URL'];

        $url = '/';
        if(isset($_GET['url'])){
            $url.= $_GET['url'];

            //echo "URL: ".$url;
        }

        $params = array();

        if(!empty($url) && $url != '/'){
             $url = explode('/',$url);
             array_shift($url);//removo o primeiro registro do array pois vai vir vazio
             //print_r($url);

             $currentController = $url[0].'Controller';
             array_shift($url);

             if(isset($url[0]) && !empty($url[0])){
                 $currentAction = $url[0];
                 array_shift($url);
             }else{
                $currentAction = 'index';
             }

             if(count($url) > 0){
                 $params = $url;
             }

             //print_r($url);
        }else{
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        $c = new $currentController();
        // $c = classe e $currentAction é a action
        //ao invés de instanciarmos a classe, usamos o call_user_func_array para que tudo fique dinamico, pq se instanciarmos diretamente a classe, não conseguimos passar os parametros
        call_user_func_array(array($c, $currentAction), $params);

        
        /*echo "<hr>";
        echo "CONTROLLER: ".$currentController."<br>";
        echo "ACTION: ".$currentAction."<br>";
        echo "PARAMS: ".print_r($params, true)."<br>";*/
    }
}