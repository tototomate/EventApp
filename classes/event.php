<?php

class event
{
    private $event_id;
    private $loc_id;
    private $name;
    private $location;
    private $date;
    private $description;
    private $creator;
    /**
     * event constructor.
     * @param $name
     * @param $location
     * @param $date
     * @param $description
     */
    public function __construct($name, $loc_id, $location, $date, $description, $creator)
    {
        $this->name = $name;
        $this->loc_id = $loc_id;
        $this->location = $location;
        $this->date = $date;
        $this->description = $description;
        $this->creator = $creator;
        try	{
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
        }catch(PDOException  $e ){
            echo "Fehler: ".$e;
            exit();
        }
        $get_event_id = $db->query("SELECT COUNT(pk_event_id) AS anzahl_id FROM Event");
        $tmp_event_id = $get_event_id->fetch(PDO::FETCH_ASSOC);


        $this->event_id = $tmp_event_id['anzahl_id'] + 1;
    }

    /**
     * @return int|mixed
     */
    public function getEventId()
    {
        return $this->event_id;
    }
    /**
     * @return mixed
     */
    public function getLocId()
    {
        return $this->loc_id;
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
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function insertDatabase(){

        try {
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException  $e) {
            echo "Fehler: " . $e;
            exit();
        }

        $insert = "INSERT INTO Event VALUES('$this->event_id', '$this->loc_id', '$this->name', '$this->location', '$this->date', '$this->description', '$this->creator')";
        $db->query($insert);
    }
}