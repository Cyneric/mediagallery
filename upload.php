<html>
<head>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

<script type="text/javascript">

$(function() {

	$('#uploadForm').submit(function(data) {
		$('#loader').html('L&auml;dt...<br/><img src="images/ajax-loader.gif" border="0"/>');
		$('#inputs').hide();
		
		var submittingForm = $('#uploadForm');
		var frameName = ("upload" + (new Date()).getTime());
		var uploadFrame = $('<iframe name="' + frameName + '"></iframe>');
		
		uploadFrame.css("display", "none");
		
		uploadFrame.load(function(data) {	
			setTimeout(function() {			
				$('#dateiname').val(uploadFrame.contents().find('#result').html());
				uploadFrame.remove();
				$('#inputs').show();
				$('#loader').hide();			
			}, 1000);	
		});
		
		$('body:first').append(uploadFrame);		
		submittingForm.attr('target', frameName);	
	});
	
	$('#upload').click(function() {
		$('#uploadForm').submit();	
	});

});

</script>

</head>




<body>
<table border="0">
<tr>
<td valign="top">Dateiname:</td>
<td>
<form action="upload_event.php" method="post" enctype="multipart/form-data" id="uploadForm">
<input type="text" name="dateiname" value="" id="dateiname" style="width: 400px;"/>
<br/>
<div id="hide"><input type="file" name="pdf"></input><input type="button" name="upload" value="Hochladen" id="upload"/></div></form>
<div id="loader"></div>
</td>
</tr>
</table>
</body>


</html>

<!-- http://www.webchef.de/ajax-file-upload-mit-jquery/ -->