<?php

class ProfileInfo extends Dbh {

    protected function getProfileInfo($userId) {
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE user_id = ?;');

        if(!$stmt->execute(array($userId))) {
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

    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
        $stmt = $this->connect()->prepare('UPDATE users SET profiles_about = ?, profiles_introtitle = ?, profile_introtext = ? WHERE users_id = ? ;');

        if(!$stmt->execute(array($$profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("Location: ../PHP Profile/profile_page.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId) {
        $stmt = $this->connect()->prepare('INSERT INTO users (profile_about, profile_introtitle, profile_introtext, user_id) VALUES (?, ?, ?, ?);');

        if(!$stmt->execute(array($$profileAbout, $profileTitle, $profileText, $userId))) {
            $stmt = null;
            header("Location: ../PHP Profile/profile_page.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}