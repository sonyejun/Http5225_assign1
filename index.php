<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="display-5 mt-4 mb-4">Movies Information</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                    $connect = mysqli_connect("sql311.infinityfree.com","if0_35758276","lqfbr7q4DtvXt","if0_35758276_HTTP5225");
                    $query = 'SELECT * FROM movies';
                    $movies = mysqli_query($connect, $query);
                    
                    foreach($movies as $movie) {
                        // Check if rating is greater than 9
                        if ($movie['rating'] > 9) {
                            $ratingColor = 'color: #f00';
                        } else {
                            $ratingColor = '';
                        }

                        echo '<div class="col">';
                        echo    '<div class="card" style="width: 18rem;">';
                        echo        '<img src="' . $movie['thumbnail'] . '" class="card-img-top" alt="...">';
                        echo        '<div class="card-body">';
                        echo            '<h5 class="card-title">' . $movie['title'] . '</h5>';
                        echo            '<p class="card-text">Genre: ' . $movie['genre'] . '</p>';
                        echo            '<p class="card-text">Director: ' . $movie['director'] .'</p>';
                        echo            '<p class="card-text">Release Date: ' . $movie['release_date'] . '</p>';
                        echo            '<p class="card-text">Rating: <span style="'.$ratingColor.'">' . $movie['rating'] . '</span></p>';
                        echo        '</div>';
                        echo    '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>