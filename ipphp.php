<!DOCTYPE html>

<html lang = "en">
<head>
	<title> A title for the document </title>
    <meta charset = "utf-8" />
	<style>
	input[type=text], select {
		padding: 10px 15px;
		margin: 6px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
}
input[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 50px;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}
	</style>
</head>
    
	<body>
        <h3>Enter a domain name: </h3>
		<form>
		<input type="text" placeholder="Enter domain name" size="38" id="url" />
		<input type="button" value="Resolve !"
				onclick="request('ajaxdemo',
								'echoip.php?'+document.getElementById('url').value);" />
		<p>IP:</p> <span id="ajaxdemo"></span>
		</form>
		<span class="ajaxdemo"></span>
        <div id="result">
        </div>

		<script type="text/javascript">
		// start an ajax request
			function request(domId, query)
			{
			var ajaxObject = new XMLHttpRequest();
			if (!ajaxObject)
				return false;
			ajaxObject.onreadystatechange = function()
				{
					if (ajaxObject.readyState == 4 && ajaxObject.status == 200)
					document.getElementById(domId).innerHTML = ajaxObject.responseText;
				};
			ajaxObject.open('GET', encodeURI(query), true);
			ajaxObject.send(null);
			return true;
			}
		</script>
    </body>
</html>