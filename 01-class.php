<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" sizes="128x128" href="./icon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[400PX] h-[600PX] bg-slate-700/30 p-5 rounded-[20px] ">
        <header class="flex gap-5 justify-center items-center border-b pb-5 border-blue-600">
        <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-10 h-10 text-blue-700 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                  </svg>                  
            </a>
            <h1 class="text-2xl">Class</h1>
        </header>
        <section class="max-h-[480px] overflow-y-auto m-4 text-white">
            <?php
                class Vehicle{
                    //Attributes
                    public $brand;
                    public $refer;
                    public $model;
                    public $color;

                    //METHODS
                    public function setAttributes($brand, $refer, $model, $color){
                        $this->brand = $brand;
                        $this->refer = $refer;
                        $this->model = $model;
                        $this->color = $color;
                    }
                    public function getAttributes(){
                        return "<div class='p-4 bg-blue-400 rounded-md mb-4 w-[320px] '>
                                    <p><span>Brand: </span> $this->brand</p>
                                    <p><span>refer: </span> $this->refer</p>
                                    <p><span>model: </span> $this->model</p>
                                    <p><span>color: </span> $this->color</p>
                                </div>";
                    }
                }
                //creat an object 
                $vehicle1 = new Vehicle;
                $vehicle1->setAttributes('bmw', 'm2','2023','SpaceGray');
                $vehicle2 = new Vehicle;
                $vehicle2->setAttributes('mercedez benz', 'super sport','2021','green');
                $vehicle3 = new Vehicle;
                $vehicle3->setAttributes('ferrari', 'ferrari599x','2020','red');
                echo $vehicle1->getAttributes();
                echo $vehicle2->getAttributes();
                echo $vehicle3->getAttributes();
                //AcCess Attributes
                // echo $vehicle1->brand . "<br>";
                // echo $vehicle1->refer . "<br>";
                // echo $vehicle1->model . "<br>";
                // echo $vehicle1->color . "<br>";
                
            ?>
            
        </section>
    </main>
    <script src="js/tailwid 3.2.4.js"></script>
</body>

</html>