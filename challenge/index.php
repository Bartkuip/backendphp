<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function lijst_optellen($numbers) {
            $sum = 0;
            foreach ($numbers as $number) {
                if($number %2 == 0){
                    $sum += $number;
                }
            }
            return $sum;
        }

        function woord_optellen($words){
            $longestWordLength = 0;
            foreach ($words as $word) {
                if (strlen($word) > $longestWordLength) {
                   $longestWordLength = strlen($word);
                   $longestWord = $word;
                }
             }
            return $longestWord;
        }

        function sort_numbers($numbers){
            $sorteren = True;
            while($sorteren = True){
                $sorteren = False;
                for($x = 0; $x < count($numbers)-1; $x++){
                    if($numbers[$x] > $numbers[$x + 1]){
                        $swap = $numbers[$x];
                        $numbers[$x] = $numbers[$x + 1];
                        $numbers[$x + 1] = $swap;
                        $sorteren = True;
                    }
                }
            }
            return $numbers;
        
        }
        
        
        
        $getallenLijst = [1, 2, 3, 4];
        $listOfNumbers = [5, 3, 2];
        $wordList = ['kat', 'hond', 'olifant'];
        $result = lijst_optellen($getallenLijst);
        $resultWord = woord_optellen($wordList);
        $resultNumber = sort_numbers($listOfNumbers);
        #print(sort_lijst_asc([5, 3, 2]))
        #print(sort_lijst_asc([67, 15, 22, 68, 3]))
        
        
        echo $resultNumber;
        //echo $result; // Output: 10
        //echo $resultWord;   
    ?>
</body>
</html>