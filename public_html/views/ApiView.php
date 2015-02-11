<?php 
/**
* default render for serialised PHP
*/
class ApiView {
	public function render($content) {
        header('Content-Type: text/html; charset=utf8');
        echo serialize($content);
        return true;
    }
}
?>