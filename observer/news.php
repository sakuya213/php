<?php

class News implements SplSubject {
 
    private $observers = array();
 
    public function attach(SplObserver $observer) {
        $this->observers[spl_object_hash($observer)] = $observer;
    }
 
    public function detach(SplObserver $observer) {
        unset($this->observers[spl_object_hash($observer)]);
    }
 
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
 
    public function add($data) {
        echo 'Add news to base';
        $this->notify();
    }
 
}