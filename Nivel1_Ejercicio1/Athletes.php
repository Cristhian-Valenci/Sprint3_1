<?php 
Class Athlete {
   
    private $athletes = [];

    public function processAthletesData($athletesData) : void {

        foreach($athletesData as $athlete) {
            $this->athletes[] = ['name' => $athlete['name'], 'country' => $athlete['country']];
        }
    }

    public function getAthletes() : array {
        return $this->athletes;
    }
  }
?>