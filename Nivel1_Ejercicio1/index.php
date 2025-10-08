<?php 
  require_once "N1.Ej1.Athletes.php";
  require_once "N1.Ej1.Events.php";
  require_once "N1.Ej1.Results.php";
  require_once "N1.Ej1.OlympicGames.php";




  $athletes = new Athlete();
  $events = new Event();
  $results = new Result();


  $athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
  ];

  $eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
  ];

  $resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
  ];

  $athletes->processAthletesData($athletesData);
  $events->processEventsData($eventsData);
  $results->processResultsData($resultsData);

  $olympics = new OlympicGames($athletes, $events, $results);


  echo $olympics->processOlympicData();
    
?>