<?php

class BookView {
    
    public function showHeader ($pageTitle = '') {
        
        include "views/header.inc";
    }
    
    public function showFooter() {
        
        include "views/footer.inc";
    }
    
    public function showBooks($rows) {
        
        include "views/genres.inc";
    }
    
    public function showDetails($rows) {
        
        include "views/details.inc";
    }
    
    public function showProfile($rows) {
        
        include "views/profile.inc";
    }
    
    public function show($template, $data = array()) {
        
        $templatePath = "views/${template}.inc";
        
        if (file_exists($templatePath)){
            
            include $templatePath;
        }
    }
}

?>