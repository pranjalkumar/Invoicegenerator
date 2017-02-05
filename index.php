<?php

require('html2pdf.php');

if(isset($_POST['amount'])&&!empty($_POST['amount']))
{ $html="Thank you for shopping of amount ".$_POST['amount']." with Us. Would love to see you soon.Have a good day!";
	$pdf = new createPDF(
		$html
	);
    $pdf->run();
}
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Invoice generator</title>
<style type='text/css'>
  fieldset{padding:10px}
  body{font-size:small}
</style>
</head><body>
<center><h1>Generate your Invoice</h1></center>
  <form name="pdfgen" method="post" target="_blank" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div>
    <fieldset><center><legend>Invoice</legend></center>
    <input type="amount" name="amount" placeholder="amount">
    <center><p><input type="submit" value="Generate PDF"></p></center>
    </fieldset>
  </div>
  </form>
</body></html>
