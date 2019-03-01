<?php

namespace Models {

    class Car
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM ordens WHERE id = $1', [$id])[0];
        }

        public function create($datee, $status)
        {
            $this->connection->runStatement('INSERT INTO ordens (datee, status) VALUES ($1, $2)', [$datee, $status]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM ordens WHERE id = $1', [$id]);
        }

        public function update($id, $datee, $status)
        {
            $this->connection->runStatement('UPDATE ordens SET brand = $2, year = $3 WHERE id = $1', [$id, $datee, $status]);
        }

        public function all()
        {
            return $this->connection->runQuery('SELECT * FROM ordens');
        }
    }

}

