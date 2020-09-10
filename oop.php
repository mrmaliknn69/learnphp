<?php



// php oop 


class calculation{
	public $a,$b,$c;

		function sum(){
			$this->c = $this->a + $this->b;
			return $this->c;
		}
		function sub(){
			$this->c = $this->a- $this->b;
			return $this->c;
		}
	
	}

	$c1 = new calculation();
		$c1->a= 10;
		$c1->b= 30;

		$c2 = new calculation();
		$c2->a= 60;
		$c2->b= 50;
		echo "sum value of c1 : " . $c1->sum() . "<br>";

        echo "subtraction value of c2 : " . $c2->sub() ;



        // php oop default value for variable that we call properties in oop


            class person {
            public $name = "No Name";
            public $age =0;
            function show(){
                echo $this->name . " - " . $this->age;
            }
        } 
        $p1 = new person();
        $p1->name="Nouman Malik";
        $p1->age=26;
        $p1->show();


        // constructor in php oop



    class person{
        public $name = "No Name";
        public $age =0;
        function __construct($name,$age){
            $this-> name= $name;
            $this-> age= $age;
        }
        function show(){
            echo $this->name . " - " . $this->age;
        }
    } 
    $p1 = new person("Noman Malik",25);
    // $p1->name="Nouman Malik";
    // $p1->age=26;
    $p1->show();




    // inheritance in php oop



    class employee{
    	public $name;
    	public $age;
    	public $salarey;

    	function __construct($n,$a,$s){
    		$this->name=$n;
    		$this->age=$a;
    		$this->salarey=$s;
    	}
    	function info(){
    		echo "<h2>Employee profile</h2>";
    		echo "Employee Name : " . $this->name . "<br>";
    		echo "Employee Age : " . $this->age . "<br>";
    		echo "Employee salarey : " . $this->salarey . "<br>";
    	}

    }
    class manager extends employee{

    	public $ta =1000;
    	public $phone =300;
    	public $totalsalarey;
    	function info(){
    		$this->totalsalarey = $this->salarey + $this->ta + $this->phone;
    		echo "<h2>manager profile</h2>";
    		echo "Employee Name : " . $this->name . "<br>";
    		echo "Employee Age : " . $this->age . "<br>";
    		echo "Employee salarey : " . $this->totalsalarey . "<br>";
    	}

    }


    $e1 = new manager("Nouman Malik",25,50000);
    $e2 = new employee("Omer Malik",23,40000);
    $e1->info();
    $e2->info();

 



        ?>