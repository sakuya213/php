<?php

class PageObserver implements SplObserver {
 
    public function update(SplSubject $subject) {
 
        echo "Update Page";
    }
 
}