<?php
require "../App/core/Database.php";
    class Todo{
        private $db;
        private $config;

        public function __construct(){
            $config = require("../App/config.php");
            $this->db = new Database($config);
        }
        public function create(){
            $query = "INSERT INTO todos (name, description, due, user_id) 
            VALUES (:name, :description, :due, :user_id);";
            $params = [
                ":name" => $_POST["name"],
                ":description" => $_POST["description"],
                ":due" => $_POST["due"],
                ":user_id" => $_SESSION["user_id"]
            ];
            $this->db->execute($query, $params);
        }
        public function delete(){
            $query = "DELETE FROM todos WHERE id = :id";
            $params = [ ":id" => $_POST["id"]];
           
            $this->db->execute($query, $params);
        }
        public function update(){
            $query = "UPDATE todos SET name = :name, description = :description, due = :due, completed = :completed WHERE id = :id;";
            $params = [
                ":name" => $_POST["name"],
                ":description" => $_POST["description"],
                ":due" => $_POST["due"],
                ":completed" => 0,
                ":id" => $_POST["id"]
            ];
            $this->db->execute($query, $params);
        }
        public function find(){
            $query = "SELECT * FROM todos WHERE id = :id";
            $params = [":id" => $_GET["id"]];
            return $this->db->execute($query, $params)->fetch();
        }
        public function all(){
            $query = "SELECT * FROM todos"; 
            $params = [];
            return $this->db->execute($query, $params)->fetchAll();
        }
        public function getJoinedAndGroupedTodos($start, $limit) {
                $query = "
                SELECT users.*, todos.* 
                FROM users 
                LEFT JOIN todos 
                ON users.id = todos.user_id 
                WHERE name IS NOT NULL 
                ORDER BY todos.due 
                LIMIT :start, :limit;";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':start', (int) trim($start), PDO::PARAM_INT);
                $stmt->bindValue(':limit', (int) trim($limit), PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetchAll();
        
            $groupedTodos = [];
            foreach ($todos as $todo) {
                $dueDate = $todo["due"];
                if (!isset($groupedTodos[$dueDate])) {
                    $groupedTodos[$dueDate] = [];
                }
                $groupedTodos[$dueDate][] = $todo;
            }
        
            return $groupedTodos;
        }
        public function todojoinAndSorted(){
            $query = "
                SELECT users.*, todos.* 
                FROM users 
                LEFT JOIN todos ON users.id = todos.user_id 
                WHERE name IS NOT NULL 
                ORDER BY todos.due
            ";
            $params = [];
            return $this->db->execute($query, $params)->fetchAll();
        }
        public function checkbox(){
            isset($_POST['completed-checkbox']) ? $checked = 1 : $checked = 0;
            $query = "UPDATE todos SET completed = :completed WHERE id = :id;";
            $params = [
                ":id" => $_POST["todo-id"],
                ":completed" => $checked
            ];
            $this->db->execute($query, $params);
        }
        
        public function search(){
            $search = $_POST["search"];
            $query = "SELECT * FROM users LEFT JOIN todos ON users.id = todos.user_id WHERE name LIKE :search; AND name IS NOT NULL ;";
            $params = [":search" => "%{$search}%"];
            return $this->db->execute($query, $params)->fetchAll();
        }

        public function userTodos(){
            $userId = $_SESSION["user_id"];
            $query = "SELECT * FROM todos WHERE user_id = :user_id";
            $params = [":user_id" => $userId ];
            return $this->db->execute($query, $params)->fetchAll();
        }

        public function getGroupedTodos($todos) {
            $groupedTodos = [];
            if (!empty($todos)) {
                foreach ($todos as $todo) {
                    $dueDate = $todo["due"];
                    if (!isset($groupedTodos[$dueDate])) {
                        $groupedTodos[$dueDate] = [];
                    }
                    $groupedTodos[$dueDate][] = $todo;
                }
            }
            return $groupedTodos;
        }
    }