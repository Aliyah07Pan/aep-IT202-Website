<?php
require_once('database.php');

class BubbleTeaItem
{
    public $bubbletea_id;
    public $bubbletea_code;
    public $bubbletea_name;
    public $bubbletea_description;
    public $bubbletea_brand;
    public $bubbletea_size;
    public $bubbletea_sugar_level;
    public $bubbletea_ice_level;
    public $bubbletea_type_id;
    public $bubbletea_buy_price;
    public $bubbletea_sell_price;

    function __construct(
        $id, $code, $name, $description, $brand,
        $size, $sugar, $ice, $type_id, $buy, $sell
    ) {
        $this->bubbletea_id = $id;
        $this->bubbletea_code = $code;
        $this->bubbletea_name = $name;
        $this->bubbletea_description = $description;
        $this->bubbletea_brand = $brand;
        $this->bubbletea_size = $size;
        $this->bubbletea_sugar_level = $sugar;
        $this->bubbletea_ice_level = $ice;
        $this->bubbletea_type_id = $type_id;
        $this->bubbletea_buy_price = $buy;
        $this->bubbletea_sell_price = $sell;
    }

    function __toString()
    {
        return "<h3>$this->bubbletea_id - $this->bubbletea_name ($this->bubbletea_code)</h3>";
    }

    static function findBubbleTeaItem($id)
    {
        $db = getDB();
        $query = "SELECT * FROM bubbletea_items WHERE bubbletea_id = $id";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $item = new BubbleTeaItem(
                $row['bubbletea_id'],
                $row['bubbletea_code'],
                $row['bubbletea_name'],
                $row['bubbletea_description'],
                $row['bubbletea_brand'],
                $row['bubbletea_size'],
                $row['bubbletea_sugar_level'],
                $row['bubbletea_ice_level'],
                $row['bubbletea_type_id'],
                $row['bubbletea_buy_price'],
                $row['bubbletea_sell_price']
            );
            $db->close();
            return $item;
        } else {
            $db->close();
            return NULL;
        }
    }

    function saveBubbleTeaItem()
    {
        $db = getDB();
        $query = "INSERT INTO bubbletea_items
        (bubbletea_id, bubbletea_code, bubbletea_name, bubbletea_description, bubbletea_brand,
         bubbletea_size, bubbletea_sugar_level, bubbletea_ice_level,
         bubbletea_type_id, bubbletea_buy_price, bubbletea_sell_price)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssssssdd",
            $this->bubbletea_id,
            $this->bubbletea_code,
            $this->bubbletea_name,
            $this->bubbletea_description,
            $this->bubbletea_brand,
            $this->bubbletea_size,
            $this->bubbletea_sugar_level,
            $this->bubbletea_ice_level,
            $this->bubbletea_type_id,
            $this->bubbletea_buy_price,
            $this->bubbletea_sell_price
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getBubbleTeaItems()
    {
        $db = getDB();
        $query = "SELECT * FROM bubbletea_items";
        $result = $db->query($query);

        $items = array();

        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $items[] = new BubbleTeaItem(
                $row['bubbletea_id'],
                $row['bubbletea_code'],
                $row['bubbletea_name'],
                $row['bubbletea_description'],
                $row['bubbletea_brand'],
                $row['bubbletea_size'],
                $row['bubbletea_sugar_level'],
                $row['bubbletea_ice_level'],
                $row['bubbletea_type_id'],
                $row['bubbletea_buy_price'],
                $row['bubbletea_sell_price']
            );
        }

        $db->close();
        return $items;
    }

 
    function updateBubbleTeaItem()
    {
        $db = getDB();
        $query = "UPDATE bubbletea_items SET
            bubbletea_code = ?, bubbletea_name = ?, bubbletea_description = ?, bubbletea_brand = ?,
            bubbletea_size = ?, bubbletea_sugar_level = ?, bubbletea_ice_level = ?,
            bubbletea_type_id = ?, bubbletea_buy_price = ?, bubbletea_sell_price = ?
            WHERE bubbletea_id = $this->bubbletea_id";

        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sssssssidd",
            $this->bubbletea_code,
            $this->bubbletea_name,
            $this->bubbletea_description,
            $this->bubbletea_brand,
            $this->bubbletea_size,
            $this->bubbletea_sugar_level,
            $this->bubbletea_ice_level,
            $this->bubbletea_type_id,
            $this->bubbletea_buy_price,
            $this->bubbletea_sell_price
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    
    function removeBubbleTeaItem()
    {
        $db = getDB();
        $query = "DELETE FROM bubbletea_items WHERE bubbletea_id = $this->bubbletea_id";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
?>