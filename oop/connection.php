<?php

class Pile

{
    public function connect()
    {

        $json_file = 'PickAPile.json';

        $json_data = file_get_contents($json_file);

        $pile = json_decode($json_data, true);

        return $pile;
    }

    public function getData()
    {
        $id = $_GET['id'];

        return $id;
    }

    public function question()
    {
        $piles = $this->connect();

        $questions = $piles['Questions'];

        return $questions;
    }

    public function show()
    {
        $piles = $this->connect();

        $answers = $piles['Answers'];

        return $answers;
    }
}

$piles = new Pile();
