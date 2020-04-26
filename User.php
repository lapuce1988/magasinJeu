<?php
class User{
    private $pk;
    private $username;
    private $password;
    private $created_ad;
    private $update_at;

    /**
     * User constructor.
     * @param $pk
     * @param $username
     * @param $password
     * @param $created_ad
     * @param $update_at
     */
    public function __construct($pk, $username, $password, $created_ad, $update_at)
    {
        $this->pk = $pk;
        $this->username = $username;
        $this->password = $password;
        $this->created_ad = $created_ad;
        $this->update_at = $update_at;
    }

    function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }


}