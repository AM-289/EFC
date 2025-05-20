<?php

class ProfileInfoView extends ProfileInfo {
 
    public function fetchAbout($userId) {

        $profileInfo = $this->getProfileInfo($userId);

        echo $profileInfo[0]['profiles_about'];//name of the column
    }
    
    public function fetchTitle($userId) {

        $profileInfo = $this->getProfileInfo($userId);
        
        echo $profileInfo[0]['profiles_introtitle'];//name of the column
    }
    
    public function fetchText($userId) {

        $profileInfo = $this->getProfileInfo($userId);
        
        echo $profileInfo[0]['profiles_introtext'];//name of the column
    }
}