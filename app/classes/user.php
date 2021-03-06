<?php

class user
{
    private $name;
    private $last_name;
    private $postal_code;
    private $city;
    private $username;
    private $email;
    private $password;

    /**
     * user constructor.
     * @param $name
     * @param $last_name
     * @param $postal_code
     * @param $city
     * @param $username
     * @param $email
     * @param $password
     */
    public function __construct($name, $last_name, $postal_code, $city, $username, $email, $password)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->postal_code = $postal_code;
        $this->city = $city;
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * @return int|mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }



    }

    /**
     * @return bool
     */
    public function getVerificationToken()
    {
        return $this->verification_token;
    }

    /**
     * @param bool $verification_token
     */
    public function setVerificationToken($verification_token)
    {
        $this->verification_token = $verification_token;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return false|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param false|string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param mixed $postal_code
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function insertDatabase()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $insert = "INSERT INTO User (name, last_name, postal_code, city, username, email, password) VALUES('$this->name', '$this->last_name', '$this->postal_code', '$this->city', '$this->username', '$this->email', '$this->password')";

        $db->query($insert);
    }
}