<?php

class user {

    private $user_id;
    private $name;
    private $last_name;
    private $username;
    private $password;
    private $postal_code;
    private $city;
    private $verification_token;

    /**
     * user constructor.
     * @param $name
     * @param $last_name
     * @param $username
     * @param $postal_code
     * @param $city
     */
    public function __construct($name, $last_name, $username, $password, $postal_code, $city)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->postal_code = $postal_code;
        $this->city = $city;

        $this->verification_token = false;

        try	{
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
        }catch(PDOException  $e ){
            echo "Fehler: ".$e;
            exit();
        }

        $stmt = $db->query("SELECT COUNT(pk_user_id) FROM User");
        $tmp = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->user_id = $tmp + 1;
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
}