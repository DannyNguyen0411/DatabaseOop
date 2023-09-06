<?php


namespace Project9;

interface Database
{
    public function connect(string $host, string $dbname, string $username, string $password);

    public function disconnect();

    public function select();

    public function insert();

    public function update();

    public function delete();
}