<?php
require_once("IUser.php");
require_once("IModerator.php");

require_once("AbstractUser.php");

abstract class AbstractModerator extends AbstractUser implements IUser, IModerator {
    public final function setRating($rating) {
        $this->rating = $rating;
    }
}