<?php

namespace App\Model;

class FlashCard
{
    
    protected $front;

    protected $back;

    protected $time;

    public function setBack($answer)
    {
        $this->answer = $answer;
    }

    public function getBack()
    {
        return $this->answer;
    }

    public function setFront($question)
    {
        $this->question = $question;
    }

    public function getFront()
    {
        return $this->question;
    }
}