 <!DOCTYPE html>
<html lang="en">
<head>
<!-- <script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script> -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD9tCRG-KAV35C25bvJ527azwCvuQlu6ZA"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      BENCANA: {
        icon: 'mapping/bencana.png'
      },
	  KEMISKINAN: {
        icon: 'mapping/kemiskinan.png'
      },
      PENDIDIKAN: {
       icon: 'mapping/pendidikan.png'
      },
	  KESEHATAN :{
	  icon: 'mapping/kesehatan.png'
	  }, 
	  YATIM:{
	  icon: 'mapping/yatim.png'
       }, 
	   PEMBANGUNAN :{ 
	   icon: 'mapping/pembangunan.png'
      }
	  
	  
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(-7.9819,112.6265),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var kategori = markers[i].getAttribute("kategori");
          var atas_nama = markers[i].getAttribute("atas_nama");
          var alamat = markers[i].getAttribute("alamat");
          var id_pengajuan = markers[i].getAttribute("id_pengajuan");
          var tanggal = markers[i].getAttribute("tanggal");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + kategori + "</b> <br/>" + atas_nama+ "</b> <br/>" + alamat
          + "</b> <br/>" + "<a href='#' class='edit-record' data-id="+id_pengajuan+" data-us="+'<?php echo $iduse; ?>'+" > <button type='button' class='btn btn-primary btn-sm'>DETAIL</button></a>";
          var icon = customIcons[kategori] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>
	<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet"> -->
   <meta charset="utf-8">
  <title>Panda MAP Donations</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
<!-- 	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"> -->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h4 class="modal-title" id="myModalLabel">Panda Project Form</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        
                    </div>
                </div>
            </div>
        </div>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			
		</div>
	</div>
	<br>
  <h1>PANDA MAP</h1>
	<br>
  <div class="row">
		  <body onload="load()">
		<div class="row clearfix">
		<div class="col-md-12 column">
		<div id="map" style="width: 1100px; height: 490px" >
        </div>
		</div>
    </div>
		</div>
		</body>
		</div>
	</div>
</div>
	
</body>
<script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('donasikan.php',
                    {id:$(this).attr('data-id'),us:$(this).attr('data-us')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
</html>
