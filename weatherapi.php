<?php

$url = 'https://api.nomics.com/v1/currencies/ticker?key=68e20344e42cd9c02c7a2919ff0b0b44f00ea0dc&convert=INR&per-page=100&page=1';
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result,true);

?>

?>

<!DOCTYPE html>
 <html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>Read a JSON File</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
#tbstyle {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#tbstyle td, #tbstyle th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: #f2f2f2;}

#tbstyle tr:hover {background-color: #ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #859161;
  color: White;
}
</style>
      </head>
	  <body>
	   <div class="container" style="width:500px;">
	   <div class="table-container">
	   
		<table id="tbstyle">
			<tbody>
				<tr>
					<th>Name</th>
					<th>Symbol</th>
					<th>Status</th>
					<th>Price</th>
					<th>Currency</th>
				</tr>
				<?php foreach ($result as $currency) { ?>
				<tr>
					<td> <?= $currency["name"]; ?> </td>
					<td> <?= $currency["symbol"]; ?> </td>
					<td> <?= $currency["status"]; ?> </td>
					<td> <?= $currency["price"]; ?> </td>
					<td> <?= $currency["currency"]; ?> </td>
				</tr>
				<?php }
			 ?>
    </tbody>
</table>
</div>
</div>
</body>
</html>