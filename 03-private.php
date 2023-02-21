<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Files</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" sizes="128x128" href="./icon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-[100vh] flex justify-center items-center">
    <main class="w-[400PX] h-[590PX] bg-slate-700/30 p-5 rounded-[20px] ">
        <header class="flex gap-5 justify-center items-center border-b pb-5 border-blue-600">
        <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-10 h-10 text-blue-700 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                  </svg>                  
            </a>
            <h1 class="text-2xl">OOP Files</h1>
        </header>
        <section class="max-h-[480px] overflow-y-auto m-4 text-white">
            <form class="p-2 grid grid-cols-2 mb-4 bg-sky-800/70 rounded-md w-[310px] flex-col justify-center gap-4 items-center" action="" method="post">
                <div class="flex flex-col items-center gap-4">
                    <label>Rows: </label>
                    <input type="range" name="nr" min="1" max="13" step="1" oninput="onr.value = this.value"> 
                    <output id="onr" class="text-2xl"></output>
                </div>
                <div class="flex flex-col items-center gap-4"> 
                    <label>Columns: </label>
                    <input type="range" name="nc" min="1" max="13" step="1" oninput="onc.value = this.value"> 
                    <output id="onc" class="text-2xl"></output>
                </div>
                <button class="bg-slate-700 rounded-md p-2 w-[295px] justify-center hover:scale-95 transition-all">Make Table</button>
            </form>
                <?php 
                    class table{
                        private $nr;
                        private $nc;

                        public function __construct($nr, $nc){
                            $this->nr = $nr;
                            $this->nc = $nc;
                            $this->makeTable();
                        }
                        private function makeTable(){
                            echo "<table class='border-collapse mx-auto mb-4'>";
                                for($r = 1; $r <= $this->nr; $r++){
                                        echo"<tr>";
                                            for($c = 1; $c <= $this->nc; $c++){
                                                echo"<td class='p-3 rounded-md ring-1 ring-slate-800'></td>";
                                            }
                                        echo"</tr>";
                                }
                            echo "</table>";
                        }
                    }
                    if($_POST){
                        $table = new table($_POST['nr'], $_POST['nc']);
                    }         
                
                ?>
        </section>
    </main>
    <script src="js/tailwid 3.2.4.js"></script>
</body>

</html>