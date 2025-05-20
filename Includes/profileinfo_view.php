<?php

class ProfileInfoView extends ProfileInfo {
 
    public function fetchProfilePic($user_id) {
        $profileInfo = $this->getProfileInfo($user_id);

        echo $profileInfo[0]['profile_pic'];
    }

    public function fetchAbout($user_id) {

        $profileInfo = $this->getProfileInfo($user_id);

        echo $profileInfo[0]['profiles_about'];//name of the column
    }
    
    public function fetchTitle($user_id) {

        $profileInfo = $this->getProfileInfo($user_id);
        
        echo $profileInfo[0]['profiles_introtitle'];//name of the column
    }
    
    public function fetchText($userId) {

        $profileInfo = $this->getProfileInfo($userId);
        
        echo $profileInfo[0]['profiles_introtext'];//name of the column
    }
}