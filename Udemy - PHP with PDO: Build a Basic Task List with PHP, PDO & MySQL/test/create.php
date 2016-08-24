<?php

include_once 'Database.php';



/*$insertQuery = "INSERT INTO books(name, description, created_at)
                VALUES('Introduction to Java', 'Learn all about Java', now())";

$insertQuery2 = "INSERT INTO books(name, description, created_at)
                VALUES('Introduction to PHP', 'Learn all about PHP', now())";

  $result = $conn->exec($insertQuery);
  echo "$result record inserted <br>";

  $result = $conn->exec($insertQuery2);
  echo "$result record inserted <br>";

  ==============

  // build the query
  $insertQuery = "INSERT INTO books (name, description, created_at)
                  VALUES(:book_name, :description, now())";

  //prepared the query
  $statement = $conn->prepare($insertQuery);

  //execute the statement

  $statement->execute(array(":book_name" => $name, ":description" => $description));

  echo "Record Created";
*/
/*
try {
  //prepared the query
  $statement = $conn->prepare("INSERT INTO books (name, description, created_at)
                VALUES(:book_name, :description, now())");

  //execute the statement
  $statement->bindParam(":book_name", $name);
  $statement->bindParam(":description", $description);

  //create first record
  $name = "Objects and Patterns";
  $description = "Software crafting";

  $statement->execute();

  //create second record
  $name = "Objects and Patterns2";
  $description = "Software crafting2";

  $statement->execute();
  echo "Record Created";
} catch (PDOException $ex) {
  echo "An error occurred ". $ex->getMessage();
}
*/

$name = "Learn Bootstrap";
$description = "Front-end responsive framework";

try {
  // build the query
  $insertQuery = "INSERT INTO books (name, description, created_at)
                  VALUES(:book_name, :description, now())";

  //prepared the query
  $statement = $conn->prepare($insertQuery);

  //execute the statement

  $statement->execute(array(":book_name" => $name, ":description" => $description));

  echo "Record with ID: ". $conn->lastInsertId()." created";

} catch (PDOException $ex) {
  echo "An error occurred ". $ex->getMessage();
}
