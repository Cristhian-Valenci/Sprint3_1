<?php 
Class Result {

    private $results = [];

    public function processResultsData($resultsData) {

        foreach ($resultsData as $result) {
            $this->results[] = [
                'athlete' => $result['athlete'],
                'event' => $result['event'],
                'medal' => $result['medal']
            ];
        }
    }

    public function getResults() : array {
        return $this->results;
    }
  }
?>