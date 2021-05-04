<?php
    class Database
    {
        //database klassen.
        private  $db_host     = "localhost";
        private  $db_user     = "root";
        private  $db_password = "root";
        private  $db_name     = "Users";

        public function connectDB()
        {
            try
            {
                $DSN = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
                $db = new PDO ($DSN, $this->db_user, $this->db_password);
                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $db;
            }
            catch(PDOException $e)
            {
                echo "faild: " .$e->getMessage();
            }
        }
    }
?>
    