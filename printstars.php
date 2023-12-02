<!DOCTYPE html>
<html lang="en">

<!-- functie print aantal sterren op basis van een rating (tussen 0-10) in integer -->
<!-- bijvoorbeeld: printstars(2) geeft 1 volle ster en 4 lege
printstars(5) geeft 2 en een halve ster
printstars(10) geeft 5 sterren -->
<style>
    .stars {
        height: 50px;
        width: 50px;
        object-fit: contain;
        margin-left: -5px;
        margin-right: -5px;
    }

</style>
<body>
    <?php
        function printstars($rating) {
            $rating = max(0, min(10, $rating));
        for ($star = 0; $star < 5; $star++) {
            if ($rating >= 2) {
                echo "<img src='images/full_star.png' class='stars'>";
                $rating -=  2;
            } elseif ($rating == 1) {
                echo "<img src='images/half_star.png' class='stars'>";
                $rating -= 1;
            } else {
                echo "<img src='images/empty_star.png' class='stars'>";
            }
        }
    }
    // printstars(5);
    
    ?>
</body>
</html>