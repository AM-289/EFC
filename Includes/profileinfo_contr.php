<?php

class ProfileInfoContr extends ProfileInfo {
 
    private $userId;
    private $userUid;
    
    public function __construct($userId, $userUid) {
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaulProfileInfo() {
        $profileAbout = 'ipsum';
        $profileTitle = 'Hi! I am'. $this->userUid;
        $profileText = 'Lorem';
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
        //Error Handlers
        if($this->emptyInputCheck($about, $introTitle, $introText) === true) {
            header("Location: ../PHP Profile/profile_settings.php?error=emptyinput");
            exit();
        }

        //can add methods here to filter profanity, nb of caracters used and so on

        //Update profile's infos
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);
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