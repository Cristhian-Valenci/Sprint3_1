<?php 
Class OlympicGames {

    private Athlete $athletes;
    private Event $events;
    private Result $results;

    public function __construct(Athlete $athletes, Event $events, Result $results) {
        $this->athletes = $athletes;
        $this->events = $events;
        $this->results = $results;
    }

    public function processOlympicData() {
       
        echo "Olympic Games Results:\n";
        foreach ($this->events->getEvents() as $event) {
            echo "Event: " . $event['event'] . " on " . $event['date'] . "\n";
            foreach ($this->results->getResults() as $result) {
                if ($result['event'] === $event['event']) {
                    foreach ($this->athletes->getAthletes() as $athlete) {
                      if ($athlete['name'] === $result['athlete']) {
                          $country = $athlete['country'];
                           break;
                        }
                    }
                    echo "- " . $result['athlete'] . " from " . $country. " won " . $result['medal'] . "\n";
                }
            }
        }
    }

  }
?>