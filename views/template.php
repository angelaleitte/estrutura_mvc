<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
   <h1>Este é o topo</h1>
   <a href="<?= BASE_URL;?>">Home</a>
   <a href="<?= BASE_URL;?>galeria">Galeria</a>
   <hr>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>