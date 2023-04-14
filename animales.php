<?php 
class Animal{
    public function roar()
    {
        echo "El";
    }
    
}
class Alfabeto extends Animal {
    public $nombre;
    public function __construct($nombre)
    {
        $this -> nombre = $nombre;
    }

    public function roar()
    {
        echo $this -> nombre. " a b c d e f g h i j k l m n ñ o p q r s t u v w x y z";
    }
}


class Gato extends Animal {
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre."meows, meow meow!!!";
    }
}

class Perro extends Animal{
    public $nombre;
    public function construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre."barks, woof woof!!!";
    }
}

class Vaca extends Animal{
    public $nombre;
    public function construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre."moos, moo moo!!!";
    }
}

function roarAnimal(Animal $animal)
{
    $animal->roar();
    
}
    $gato= new Gato("gato");
    $perro= new Perro("perro");
    $vaca= new Vaca("vaca");
    $theAbc = new Alfabeto("theAbc");

    if (isset($_POST['gato'])){

?>

    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato)?>");
    window.speechSynthesis.speak(msg);
</script>

<?php
}
else if (isset($_POST['perro'])){

    ?>
    
        <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro)?>");
        window.speechSynthesis.speak(msg);
    </script>

<?php
}
else if (isset($_POST['vaca'])){

    ?>
    
        <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca)?>");
        window.speechSynthesis.speak(msg);
    </script>

<?php
}
else if(isset ($_POST['theAbc']))
{
    ?>
        <script>
            var msg = new SpeechSynthesisUtterance("<?php roarAnimal($theAbc) ?>");
            window.speechSynthesis.speak(msg);
        </script>
    <?php   
}
?>