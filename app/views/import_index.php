<!DOCTYPE html>
<html>
<head>
	<script>
		function doClear(){
			document.getElementById("divProgress").innerHTML = "";
		}
		 
		function log_message(line, message){
			if(line==1) /* require new line */
				document.getElementById("divProgress").innerHTML += '<br />' + message;
			else
				document.getElementById("divProgress").innerHTML += message;
		}
		 
		function startImport()
		{
			if(!window.XMLHttpRequest) {
				log_message("Your browser does not support the native XMLHttpRequest object.");
				return;
			}

			doClear();
			 
			try
			{
				var xhr = new XMLHttpRequest();  
				xhr.previous_text = '';
				 
				//xhr.onload = function() { log_message("[XHR] Done. responseText: <i>" + xhr.responseText + "</i>"); };
				xhr.onerror = function() { log_message("[XHR] Fatal Error."); };
				xhr.onreadystatechange = function() 
				{
					try
					{
						if (xhr.readyState > 2)
						{
							var new_response = xhr.responseText.substring(xhr.previous_text.length);
							var result = JSON.parse( new_response );
							log_message(result.line, result.message);
							//update the progressbar
							document.getElementById('progressor').style.width = result.progress + "%";
							xhr.previous_text = xhr.responseText;
						}   
					}
					catch (e) {
						//log_message("<b>[XHR] Exception: " + e + "</b>");
					}
				};
		 
				xhr.open("GET", "/import/parliament", true);
				xhr.send("Making request...");      
			}catch (e)
			{
				log_message("<b>[XHR] Exception: " + e + "</b>");
			}
		}
	</script>
</head>
 
<body>
	Begin import data by clicking "Start" button
	<br /><br />
	<button onclick="startImport();">Start</button>
	<button onclick="doClear();">Clear</button>
	<br />
	Results
	<br />
	<div style="border:1px solid #000; padding:10px; width:1000px; height:500px; overflow:auto; background:#eee;" id="divProgress"></div>
	<br />
	<div style="border:1px solid #ccc; width:1000px; height:20px; overflow:auto; background:#eee;">
		<div id="progressor" style="background:#07c; width:0%; height:100%;"></div>
	</div>
</body>
</html>