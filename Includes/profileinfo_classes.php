<?php

class ProfileInfo extends Dbh {

    protected function getProfileInfo($user_Id) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_id = ?;');

        if(!$stmt->execute(array($user_Id))) {
            $stmt = null;
            header("Location: ../PHP Profile/profile_page.php?error=stmtfailed");
            exit();
        }

        if($stmt-> rowCount() == 0) {
            $stmt = null;
            header("Location: profile_page.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    protected function setNewProfileInfo($profilePic, $profileAbout, $profileTitle, $profileText, $user_id) {
        $stmt = $this->connect()->prepare('UPDATE users SET profile_pic = ?, profiles_about = ?, profiles_introtitle = ?, profile_introtext = ? WHERE users_id = ? ;');

        if(!$stmt->execute(array($profilePic, $profileAbout, $profileTitle, $profileText, $user_id))) {
            $stmt = null;
            header("Location: ../PHP Profile/profile_page.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($profilePic, $profileAbout, $profileTitle, $profileText, $user_Id) {
        $stmt = $this->connect()->prepare('INSERT INTO users (profile_pic, profile_about, profile_introtitle, profile_introtext, user_id) VALUES (?, ?, ?, ?, ?);');

        if(!$stmt->execute(array($profilePic, $profileAbout, $profileTitle, $profileText, $user_Id))) {
            $stmt = null;
            header("Location: ../PHP Profile/profile_page.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}