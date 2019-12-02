<?php
class Task
{
    public $title;
    public $description;
    public $level;
    public $isDone;
    public function __construct($incomingDescription, $incomingLevel, $incomingTitle = 'default Name',  $isDone = false)
    { 
        $this->title = $incomingTitle;
        $this->description = $incomingDescription;
        $this->level = $incomingLevel;
        $this->isDone = $isDone;
    }

    public function showInfo()
    {
    return $this->title .'. Уровень сложности: '. $this->level;
    }
    
    public function showStatus()
    {
        if ($this->isDone == false) {
            return 'Задание не выполнено';
        } else 
            return 'Задание выполнено';
    	   
    }
}