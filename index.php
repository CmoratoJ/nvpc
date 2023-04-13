<?php

use function App\router\router;

require __DIR__.'/vendor/autoload.php';

// use CoffeeCode\Router\Router;

// $router = new Router(URL_BASE);

// $router->namespace("App\controllers");

// $router->group(null);
// $router->get("/", "Web:home");
// $router->post("/repos", "ReposController:getAllRepos");

// $router->group("ooops");
// $router->get("/{errcode}", "Web:error");

// $router->dispatch();

// if ($router->error()) {
//     $router->redirect("/ooops/{$router->error()}");
// }

try {

    $data = router();

    if (isset($data['view'])) {
        $view = $data['view'];
        require VIEWS.'master.php';
    }

    if (isset($data['data'])) {
        echo json_encode($data['data']);
    }

} catch (Exception $e) {

    var_dump($e->getMessage());

}
