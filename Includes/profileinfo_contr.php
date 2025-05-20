<?php

class ProfileInfoContr extends ProfileInfo {
 
    private $user_id;
    private $username;
    
    public function __construct($user_id, $username) {
        $this->user_id = $user_id;
        $this->username = $username;
    }

    public function defaulProfileInfo() {
        $profilePic = " ";
        $profileAbout = 'ipsum';
        $profileTitle = 'Hi! I am'. $this->username;
        $profileText = 'Lorem';
        $this->setProfileInfo($profilePic, $profileAbout, $profileTitle, $profileText, $this->user_id);
    }

    public function updateProfileInfo($profilePic, $about, $introTitle, $introText) {
        //Error Handlers
        if($this->emptyInputCheck($about, $introTitle, $introText) === true) {
            header("Location: ../PHP Profile/profile_settings.php?error=emptyinput");
            exit();
        }

        //can add methods here to filter profanity, nb of caracters used and so on

        //Update profile's infos
        $this->setNewProfileInfo($profilePic, $about, $introTitle, $introText, $this->user_id);
    }

    private function emptyInputCheck($about, $introTitle, $introText) {
        $result = null;
        if(empty($about) || empty($introTitle) || empty($introText)) {
         $result = true;   
        } else {
            $result = false;
        }
        return $result;
    }
}