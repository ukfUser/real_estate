<?php
include_once __DIR__ . '/Database.php';

class Review extends Database
{
    private $connection;

    public function __construct()
    {
        $this->connect();
        $this->connection = $this->getConnection();
    }

    public function add_review($name, $email, $text) {
        $sql = 'INSERT INTO reviews (review_id, name, email, text) VALUES (NULL, ?, ?, ?)';
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(1, $name);
        $statement->bindParam(2, $email);
        $statement->bindParam(3, $text);
        $statement->execute();
    }

    public function get_reviews() {
        $sql = 'SELECT review_id, name, text FROM reviews';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $reviews = $statement->fetchAll();
        return $reviews;
    }

    public function delete_review($id) {
        $sql = 'DELETE FROM reviews WHERE review_id = ?';
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
    }

    public function update_review($text, $id) {
        $sql = 'UPDATE reviews SET text = ? WHERE review_id = ?';
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(1, $text);
        $statement->bindParam(2, $id);
        $statement->execute();
    }
}