// User.php

class User {
  private $id;
  private $name;
  private $email;
  private $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function save() {
    // Insert user details into the database
    $db = new Database();
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$this->name, $this->email, $this->password]);
    $this->id = $db->lastInsertId();
  }
}