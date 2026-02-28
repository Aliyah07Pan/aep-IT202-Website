
<?php
/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 2/11/2026
Assignment: IT-202 Phase 2 - CRUD Categories and Items
Email: aep@njit.edu
*/
require_once('database.php');

class BubbleTeaType
{
    public $bubbleteaTypeID;
    public $bubbleteaTypeCode;
    public $bubbleteaTypeName;
    public $bubbleteaSeriesLocation;

    function __construct($id, $code, $name, $location)
    {
        $this->bubbleteaTypeID = $id;
        $this->bubbleteaTypeCode = $code;
        $this->bubbleteaTypeName = $name;
        $this->bubbleteaSeriesLocation = $location;
    }

    function __toString()
    {
        return "<h2>$this->bubbleteaTypeID - $this->bubbleteaTypeCode, $this->bubbleteaTypeName ($this->bubbleteaSeriesLocation)</h2>";
    }


    static function findBubbleTeaType($id)
    {
        $db = getDB();
        $query = "SELECT * FROM bubbletea_types WHERE bubbletea_type_id = $id";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $type = new BubbleTeaType(
                $row['bubbletea_type_id'],
                $row['bubbletea_type_code'],
                $row['bubbletea_type_name'],
                $row['bubbletea_series_location']
            );
            $db->close();
            return $type;
        } else {
            $db->close();
            return NULL;
        }
    }


    function saveBubbleTeaType()
    {
        $db = getDB();
        $query = "INSERT INTO bubbletea_types
                  (bubbletea_type_id, bubbletea_type_code, bubbletea_type_name, bubbletea_series_location)
                  VALUES (?, ?, ?, ?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isss",
            $this->bubbleteaTypeID,
            $this->bubbleteaTypeCode,
            $this->bubbleteaTypeName,
            $this->bubbleteaSeriesLocation
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }


    static function getBubbleTeaTypes()
    {
        $db = getDB();
        $query = "SELECT * FROM bubbletea_types";
        $result = $db->query($query);

        $types = array();

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $types[] = new BubbleTeaType(
                $row['bubbletea_type_id'],
                $row['bubbletea_type_code'],
                $row['bubbletea_type_name'],
                $row['bubbletea_series_location']
            );
        }

        $db->close();
        return $types;
    }


    function updateBubbleTeaType()
    {
        $db = getDB();
        $query = "UPDATE bubbletea_types
                  SET bubbletea_type_code = ?, bubbletea_type_name = ?, bubbletea_series_location = ?
                  WHERE bubbletea_type_id = $this->bubbleteaTypeID";

        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sss",
            $this->bubbleteaTypeCode,
            $this->bubbleteaTypeName,
            $this->bubbleteaSeriesLocation
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }


    function removeBubbleTeaType()
    {
        $db = getDB();
        $query = "DELETE FROM bubbletea_types WHERE bubbletea_type_id = $this->bubbleteaTypeID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
?>
