<?php
class event
{
    private $event_id;
    private $loc_id;
    private $name;
    private $location;
    private $date;
    private $description;
    /**
     * event constructor.
     * @param $name
     * @param $location
     * @param $date
     * @param $description
     */
    public function __construct($name, $location, $date, $description)
    {
        $this->name = $name;
        $this->location = $location;
        $this->date = $date;
        $this->description = $description;
        try	{
            $db = new PDO('mysql:host=localhost;dbname=EventApp;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;
        }catch(PDOException  $e ){
            echo "Fehler: ".$e;
            exit();
        }
        $get_event_id = $db->query("SELECT COUNT(pk_event_id) FROM User");
        $tmp_event_id = $get_event_id->fetch(PDO::FETCH_ASSOC);
        $get_loc_id = $db->query("SELECT pk_loc_id FROM Location WHERE (SELECT COUNT(pk_loc_id) FROM Location)");
        $tmp2_loc_id = $get_loc_id->fetch(PDO::FETCH_ASSOC);
        $this->event_id = $tmp_event_id + 1;
        $this->loc_id = $tmp2_loc_id;
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

        $insert = "INSERT INTO Event VALUES('$this->event_id', '$this->loc_id', '$this->name',  '$this->location', '$this->date' '$this->description')";
        $stmt = $db->query($insert);
        $stmt->execute();
    }
}