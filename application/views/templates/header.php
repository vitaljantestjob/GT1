<html>
	<head>
		<title>CodeIgniter test job</title>
    <link rel="stylesheet" href='/application/css/styles.css'>
	</head>
	<body>
    <header>
      <h1>
          <?
          if (isset($home)) echo "<a href='/'><span class='home'>Home</span></a>";
          echo $title;
        ?>
      </h1>
    </header>
    <hr>
    <main>