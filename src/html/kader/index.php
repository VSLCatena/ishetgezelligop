<html>
	<!-- Alleen nerds komen op deze pagina, klik maar gauw weer weg -->
	<head>
		<title>Catena Kader</title>
		<link href="../style.css" rel="stylesheet">
		<link href="./kader.css" rel="stylesheet">
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	</head>
	<body>
		<!-- DE SM-KELDER BESTAAT -->
		<script src="https://ajax.googleapis.com//ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
		<div class="container" >
			<form action='' method='' name='form' id='form' autocomplete='off' draggable='false'>
				<div class="row background" style="">

					<div id="Count" class="container-fluid ">
						<br>
						<input type="button" value="-" id="count_minus" class="btn-danger btn-block btn-lg" style="height:50vw"onclick="m();" /><br>
						<div class="input-group" ><span class="input-group-addon" style="height:10%;">Aantal aanwezigen:</span><input id="COUNTbox" type="text" class="form-control" name="COUNTbox" placeholder=""></div>
						<br>
						<input type="button" value="+" id="count_plus" class="btn-success btn-block btn-lg" style="height:50vw;" /><br>
					</div>
				</div>
				<div class="row background">

					<div id="PINcode" class="container-fluid " >
						<br>
						<input id="TEXTbox" type="text" class="form-control" name="TEXTbox" placeholder="Extra bericht voor infopagina"></input><br>
						<input id='PINbox' type='password' value='' name='PINbox' disabled></input><br/>
						<div id='BUTTONbox' >
							<input type='button' class='PINbutton' name='1' value='1' id='1' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='2' value='2' id='2' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='3' value='3' id='3' onClick=addNumber(this);></input>
							<br>
							<input type='button' class='PINbutton' name='4' value='4' id='4' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='5' value='5' id='5' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='6' value='6' id='6' onClick=addNumber(this);></input>
							<br>
							<input type='button' class='PINbutton' name='7' value='7' id='7' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='8' value='8' id='8' onClick=addNumber(this);></input>
							<input type='button' class='PINbutton' name='9' value='9' id='9' onClick=addNumber(this);></input>
							<br>
							<input type='button' class='PINbutton clear' name='-' value='clear' id='-' onClick=clearForm(this);></input>
							<input type='button' class='PINbutton' name='0' value='0' id='0' onClick=addNumber(this);></input>
							<input type='button' class='btn-lg btn-primary btn-block btn-lg' name='+' value='enter' id='+' onClick=submitForm(PINbox,TEXTbox,COUNTbox); ></input>
							<br>
							<input type="button" class="btn-lg btn-warning btn-block btn-lg" role="button" value="Hoofdpagina" onclick="location.href = '../';"></input>
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</body>
	<script src="./functions.js"></script>  
	<script src="./count.js"></script>
</html>