<?php

class User
{
    private $fullname;
    private $email;
    private $gender;
    private $group;
    private $mobile;
    private $dateOfBirth;

    // methor
    public function __construct($fullname, $email, $gender, $group, $mobile, $dateOfBirth)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->gender = $gender;
        $this->group = $group;
        $this->mobile = $mobile;
        $this->dateOfBirth = $dateOfBirth;
    }

    //get

    public function getFullname()
    {
        return $this->fullname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getGroup()
    {
        return $this->group;
    }

    public function getMobile()
    {
        return $this->mobile;
    }
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }
    //set

    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAddress($email)
    {
        $this->email = $email;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }
}
