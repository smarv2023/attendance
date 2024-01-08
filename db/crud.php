<?php
    class crud{
        // private database object\
        private $db;

        // constructor to initialize private variable to the database connection
        function __construct($conn) {
            $this->db = $conn;
        }

        public function insert($fname, $lname, $dob, $email, $phone, $specialty) {
            try {
                // values place holder :fname etc
                $sql = "INSERT INTO attendee(firstname, lastname, dateofbirth, email, phone, specialty_id) VALUES(:fname, :lname, :dob, :email, :phone, :specialty)";
                $stmt = $this->db->prepare($sql);
                // bind all placeholders to the actual values
                $stmt->bindparam(':fname', $fname);
                $stmt->bindparam(':lname', $lname);
                $stmt->bindparam(':dob', $dob);
                $stmt->bindparam(':email', $email);
                $stmt->bindparam(':phone', $phone);
                $stmt->bindparam(':specialty', $specialty);
                // execute statement
                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>