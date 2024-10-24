<?php

require_once("Connexion.php");

class User extends Connexion {
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;
    protected $connected = false;

    // Database connection
    // protected $conn;

    public function __construct() {
        parent::__construct();
        $this->id = '';
        $this->login = '';
        // $this->password = '';
        $this->email = '';
        $this->firstname = '';
        $this->lastname = '';
    }

    // Create
    public function create($login, $password, $email, $firstname, $lastname) {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $stmt = $this->bdd->prepare("INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES (?, ?, ?, ?, ?)");
        // $stmt->bind_param("sssss", $login, $password, $email, $firstname, $lastname);
        $stmt->execute(array($this->login, $this->password, $this->email, $this->firstname, $this->lastname));
        $this->id = $this->bdd->lastInsertId();
        // $stmt->close();
    }

    // Read
    public function read($id) {
        $query = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        // $stmt->bind_param("i", $id);
        $query->execute([$id]);
        // $result = $stmt->get_result();
        $user = $query->fetch(PDO::FETCH_OBJ);
        $this->id = $user->id;
        $this->login = $user->login;
        $this->password = $user->password;
        $this->email = $user->email;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        // var_dump($this->id,);
        // die;
        // $stmt->close();
        // return $user;
    }

    // Update
    public function update($login, $password, $email, $firstname, $lastname) {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        // $stmt = $this->bdd->prepare("UPDATE utilisateurs SET login = ?, email = ?, firstname = ?, lastname = ? WHERE id = ?");
        $stmt = $this->bdd->prepare("UPDATE utilisateurs SET login = ?, password = ?, email = ?, firstname = ?, lastname = ? WHERE id = ?");
        // $stmt->bind_param("ssssi", $login, $email, $firstname, $lastname, $id);
        $stmt->execute(array($this->login, $this->password, $this->email, $this->firstname, $this->lastname, $this->id));
        // $stmt->close();
    }

    // Delete
    public function delete($id) {
        $stmt = $this->bdd->prepare("DELETE FROM utilisateurs WHERE id = ?");
        // $stmt->bind_param("i", $id);
        $stmt->execute([$id]);
        // $stmt->close();
    }

    public function isConnected();
}
?>