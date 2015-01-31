<?php 
//Between two PHP systems, 
//it might be simpler to support serialised PHP as a format as it is a little more verbose than the JSON.
class JsonView extends ApiView {
    public function render($content) {
        header('Content-Type: application/json; charset=utf8');
        echo json_encode($content);
        return true;
    }
}

?>