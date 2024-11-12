
<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath . '/../lib/database.php');
    include_once ($filepath . '/../lib/session.php');
    include_once ($filepath . '/../helper/format.php');

?>

<?php
    class Topic {
        private $db;
        // private $fm;
        public function __construct()
        {
            $this->db = new Database();
            // $this->fm = new Format();
        }
        public function showTopic(){
            $query = "SELECT * FROM topics order by TopicID desc";
            $result = $this->db->select($query);
            return $result;
        }
    }
?>