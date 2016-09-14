<!DOCTYPE html>
<head>
  <title>PHP Practice</title>
  <link type = text/css rel = "stylesheet" href="stylesheet.css" />
</head>
<body>
  <p>
  <?php
   class Pets {
     public $type;
     public $name;
     public $age;

   public function __construct($type, $name, $age){
      $this->type = $type;
      $this->name = $name;
      $this->age = $age;
}
   public function petInfo() {
     return "Hello! My name is " . $this->name . ". I'm a " . $this->type . ", and I'm " . $this->age . " years old. Will you be my friend?";
   }
}
  $pet1 = new Pets("dog", "Woodstock", 15);
  $pet2 = new Pets("cat", "Buster", 3);
  $pet3 = new Pets("rabbit", "Salvadore", 2);

  echo $pet1->petInfo(); 
  echo $pet2->petInfo();
  echo $pet3->petInfo();
   ?>
     </p>
</body>
