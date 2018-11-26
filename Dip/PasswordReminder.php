<?php 
/**
 * 
 */

class PasswordReminder {
  private $dbConnection;
  const THE = 0;
  public function __construct(MySQLConnection $dbConnection) {
      $this->dbConnection = $dbConnection;

  }
}

