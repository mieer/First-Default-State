<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Bravo Portal</title>
	<meta name="generator" content="Bootply" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Respomsive slider -->
    <link href="css/responsive-calendar.css" rel="stylesheet">
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet">
  <style type="text/css">
    
    table.scroll {
    width: 100%;
    border-spacing: 0;
    border: 1px solid grey;
}

table.scroll th,
table.scroll td,
table.scroll tr,
table.scroll thead,
table.scroll tbody { display: block; }

table.scroll thead tr {
    /* fallback */
    width: 97%;
    /* minus scroll bar width */
    width: -webkit-calc(100% - 16px);
    width:    -moz-calc(100% - 16px);
    width:         calc(100% - 16px);
}

table.scroll tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

table.scroll tbody {
    height: 100px;
    overflow-y: auto;
    overflow-x: hidden;
}

table.scroll tbody td,
table.scroll thead th {
    width: 19%;
    float: left;
    border-right: 0px solid grey;
}

thead tr th { 
    height: 30px;
    line-height: 30px;
    /*text-align: left;*/
}

tbody { border-top: 2px solid black; padding-bottom: 50%; }

tbody td:last-child, thead th:last-child {
    border-right: none !important;
}

  </style>

</head>
<body style="background-color: #70ABAF;">

<header class="navbar navbar-default navbar-static-top" role="banner" style="background-color: #32292F; color: #99E1D9;">
<div class="container">
  <div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="/" class="navbar-brand">Bravo Portal</a>
  </div>
  <nav class="collapse navbar-collapse" role="navigation">
    <ul class="nav navbar-nav">
      <li>
        <a href="portal.php">Home</a>
      </li>
      <li>
        <a href="patients.php">Cliënten</a>
      </li>
      <!-- <li>
        <a href="tools.php">Tools</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li> -->
    </ul>
    <div align="right" style="padding-top: 1%;">
<b id="welcome">Welcome: <i style="color: #ADADFF;"><?php echo $login_session; ?></i></b>
<b id="logout"><a href="../logout.php">Log Out</a></b>
</div>
  </nav>
</div>

</header>

<!-- Begin Body -->
<div class="container">
<div class="row">
<h3 id="sec0">BRAVO Valpreventie</h3>

<!-- WAARSCHUWWING -->
    <div class="col-md-8" style="border-style: solid; color: #99E1D9;">
    <div style=" padding-top: 2%; padding-bottom: 2%;">WAARSCHUWING PANEL<br><br><i class="fa fa-cog fa-spin fa-3x fa-fw" style="color: #705D56;"></i></div>
    </div>
<!-- EINDE WAARSCHUWING -->

<!-- Client List Div -->
<div class="col-md-8" style=" padding-top: 2%; padding-left: 0%; clear: both;">            
<h4> Cliënten Lijst</h4>
<!-- Begin Scroll List -->
<div>

<table class="scroll">
    <thead style="background-color: #99E1D9; color: #705D56;">
        <tr>
            <th>Naam Client</th>
            <th>Laatste Update</th>
            <th style="margin-left: 40%; padding-left: 0%;">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>01-10-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>12-02-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>12-01-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-03-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>22-04-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>12-02-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a><a href="patients.php"></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: red; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>01-10-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>12-02-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>12-01-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-03-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>22-04-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>12-02-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a><a href="patients.php"></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: red; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
        <tr>
            <td><a href="patients.php">de Bruin, Claas</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">van Dalen, Els</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Hagenslag, Johnny</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Draper, Sally</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>      
          <tr>
            <td><a href="patients.php">La Penne, Johanna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Griffier, Ron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Harenboom, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Gillispee, Jake</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Stefanson, Steven</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Egberts, Seema</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Schut, Anna</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Goudman, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Koenraad, Jara</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Perenboom, Barry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Boerderij, Harm</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Schagen, Sjon</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Lievers, Ronnie</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">van Doen, Jeroen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Woudenberg, Parel</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: yellow; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gozert, Gast</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Wortel, Reza</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Waldi, Haan</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">Greuk, Jason</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Groenvoer, Gerda</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Slotenmeer, Lisa</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">aan de Rijn, Mark</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
         <tr>
             <td><a href="patients.php">Gazdo, Jarron</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Buikje, Berend</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: orange; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Zeuren, Koen</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr> 
          <tr>
            <td><a href="patients.php">van Scheuten, Harry</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">El Fasi, Ali</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
            <td><a href="patients.php">Kaboets, Nader</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>
        <tr>
             <td><a href="patients.php">Peters, Andreus</a></td>
            <td>18-09-2016</td>
            <td class="fa fa-circle" style="color: green; margin-left: 40%; font-weight: bold;"></td>
        </tr>  
    </tbody>
</table>

</div>
<!-- End Scroll List -->

</div>
<!-- End Client List Div -->

<div class="col-md-3" style="padding-left: 4%; padding-top: 5.3%; padding-bottom: 0%;" >

<div class="responsive-calendar">
        <div class="controls">
            <a class="pull-left" data-go="prev"><div class="btn btn-primary" style="background-color: #705D56; color: #99E1D9; "><</div></a>
            <h4><span data-head-year></span> <span data-head-month></span></h4>
            <a class="pull-right" data-go="next"><div class="btn btn-primary" style="background-color: #705D56; color: #99E1D9;">></div></a>
        </div><hr/>
        <div class="day-headers">
          <div class="day header">Mo</div>
          <div class="day header">Ti</div>
          <div class="day header">Wo</div>
          <div class="day header">Do</div>
          <div class="day header">Vr</div>
          <div class="day header">Za</div>
          <div class="day header">Zo</div>
        </div>
        <div class="days" data-group="days">
          
        </div>
      </div>
<div>

<br><br>
<div class="col-md-3" style="padding-left: 4%;" >
<a style="font-weight: bold; color: #99E1D9;">Notities</a>
<textarea rows="3" cols="32">
-Formulieren meenemen voor mevrouw Klaassen.
-Vrij (23/12) invallen voor Janine.
</textarea>

<div>
            	
    		</div> 
	</div>
</div>

<!-- script references -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
   <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responsive-calendar.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".responsive-calendar").responsiveCalendar({
          time: '2013-05',
          events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}}
        });
      });
    </script>
</body>
</html>