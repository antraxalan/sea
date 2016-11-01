<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CatalogoPop 2014</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
	
	<!--[if IE]>
	<script src="js/html5.js" type="text/javascript"></script>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<![endif]-->

	<!--[if IE]><script src="js/selectivizr.js"></script><![endif]-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.queryloader2.min.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script>
		$(document).bind("mobileinit", function(){
			$.mobile.ajaxEnabled = false;
		}); 
	</script>
	<script src="js/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/turn.min.js"></script>
	<script src="js/onload.js"></script>

</head>
<body>

	<!-- BEGIN PAGE -->
	<div id="page">
		
		---
		<!-- BEGIN BOOK -->
		<?php

		function get_headers_fix($url, $format=0) { 
			$headers = array(); 
			$url = parse_url($url); 
			$host = isset($url['host']) ? $url['host'] : ''; 
			$port = isset($url['port']) ? $url['port'] : 80; 
			$path = (isset($url['path']) ? $url['path'] : '/') . (isset($url['Something is wrong']) ? '?' . $url['Something is wrong'] : ''); 
			$fp = fsockopen($host, $port, $errno, $errstr, 3); 
			if ($fp) 
			{ 
				$hdr = "GET $path HTTP/1.1\r\n"; 
				$hdr .= "Host: $host \r\n"; 
				$hdr .= "Connection: Close\r\n\r\n"; 
				fwrite($fp, $hdr); 
				while (!feof($fp) && $line = trim(fgets($fp, 1024))) 
				{ 
					if ($line == "\r\n") break; 
					list($key, $val) = explode(': ', $line, 2); 
					if ($format) 
						if ($val) $headers[$key] = $val; 
					else $headers[] = $key; 
					else $headers[] = $line; 
				} 
				fclose($fp); 
				return $headers; 
			} 
			return false; 
		}
		echo("<pre>");
		print_r(get_headers_fix("https://www.youtube.com/watch?v=YMIPRTGvDPM"));
		echo("<pre>");
		?>
	</div>
	<!-- END ALL PAGES -->


</body>
</html>