<?php
 
class CacheObserver implements SplObserver {
 
    public function update(SplSubject $subject) {
        echo "Refresh cache";
    }
 
}