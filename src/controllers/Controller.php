<?php
namespace Controllers;

class Controller {
    protected function render($view, $data = []) {
        // Extract data to make it available in the view
        extract($data);
        
        // Start output buffering
        ob_start();
        
        // Include the view file
        require "../src/views/$view.php";
        
        // Get the contents and clean the buffer
        return ob_get_clean();
    }
}