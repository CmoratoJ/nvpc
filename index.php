<?php

use function App\router\router;

require __DIR__.'/vendor/autoload.php';

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
