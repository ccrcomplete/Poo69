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
    <main class="w-[400PX] h-[600PX] bg-slate-700/30 p-5 rounded-[20px] ">
        <header class="flex gap-5 justify-center items-center border-b pb-5 border-blue-600">
        <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-10 h-10 text-blue-700 hover:-translate-x-3 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                  </svg>                  
            </a>
                <h1 class="text-2xl">O2-construct</h1>
        </header>
        <section class="max-h-[480px] overflow-y-auto m-4 text-white">
            <?php 
                class PlayList{
                    //ATTRIBUTES
                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $cover  = Array();
                    private $year   = Array();

                    //METHODS
                    public function __construct($name){
                        $this->name = $name;
                    }

                    public function setPlayList($artist, $album, $cover, $year){
                        $this->artist[] = $artist;
                        $this->album[]  = $album;
                        $this->cover[]  = $cover;
                        $this->year[]   = $year;

                    }
                    public function getPlayList(){
                        echo "<div class='p-4 flex flex-col gap-2 rounded-md mb-4 w-[310px] '>
                                    <h2>
                                        Play list: ".$this -> name."
                                    </h2>";
                            for($i = 0; $i < count($this -> artist); $i++){
                                echo "<div  class='p-4 bg-blue-800/70 text-center flex flex-col gap-2 rounded-md mb-4 w-[280px] '>
                                        <img class='rounde-md height='200' withd='200'' src='".$this -> cover[$i]."' alt='Album aCover'>
                                        <p><strong>Artist: </strong> ".$this -> artist[$i]." </p>
                                        <p><strong>Album: </strong> ".$this -> album[$i]." </p>
                                        <p><strong>Year: </strong> ".$this -> year[$i]."</p>
                                        <br>
                                    </div>
                                    ";
                            }
                        echo"</div>";
                    }
                }
                $playList = new PlayList('POP & Metal & Rock & Grunch');
                $playList -> setPlayList('Cigaretes after sex','I', 'https://tinyurl.com/hhxshd6z', 2012);
                $playList -> setPlayList('Nirvana','In Utero', 'https://tinyurl.com/3jfuswx7', 1993);
                $playList -> setPlayList('The living Tombstone','Zero_one', 'https://tinyurl.com/2ahms29x', 2013);
                $playList -> setPlayList('AC/DC','BLack Ice', 'https://tinyurl.com/5n6jtnhz', 2000);
                $playList -> setPlayList('Enrique Bunbury','Las consecuecias', 'https://tinyurl.com/543kxxjk', 2002);
                $playList -> getPlayList();
            ?>
        </section>
    </main>
    <script src="js/tailwid 3.2.4.js"></script>
</body>

</html>