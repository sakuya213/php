<?php

class NewsLetterObserver implements SplObserver {
 
    public function update(SplSubject $subject) {
 
        echo "Send email with new news";
    }
 
}