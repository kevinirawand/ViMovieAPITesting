<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="css/home.css" />
		<title>ViMovie</title>
	</head>
	<body>
		<section class="main-content">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie["poster_path"] }}" alt="{{ $movie["title"] }}">
            <p>{{ $movie["title"] }}</p>
            <p>{{ $movie["overview"] }}</p>
            <p>{{ $movie["popularity"] }}</p>
        </section>
</body>
</html>