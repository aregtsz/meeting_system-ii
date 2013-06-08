<html>
<head>
 <meta charset="utf-8" />
  <link rel="stylesheet" href="./room/jquery-ui.css" />
  <script src="./room/jquery-1.9.1.js"></script>
  <script src="./room/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <style>
  .ui-tooltip {
    max-width: 350px;
  }
  </style>
  <script>
  $(function() {
    $( document ).tooltip({
      items: "img, [data-geo], [title]",
      content: function() {
        var element = $( this );
        if ( element.is( "[data-geo]" ) ) {
          var text = element.text();
          return "<img class='map' alt='" + text +
            "' src='http://maps.google.com/maps/api/staticmap?" +
            "zoom=11&size=350x350&maptype=terrain&sensor=false&center=" +
            text + "'>";
        }
        if ( element.is( "[title]" ) ) {
          return element.attr( "title" );
        }
        if ( element.is( "img" ) ) {
          return element.attr( "alt" );
        }
      }
    });
  });
  </script>
<title> 會議系統 </title>
</head>
<body >
<center>

<?php include "back.php";
if (@$_SESSION['user'] == null)
{
echo "您尚未登入!<BR><BR>";
echo "<button><a href='index.php'>進行登入</a></button>";



}
else
{ 
?><input type="button" value="個人行事曆" onClick="self.location.href='meet.php'"><?php
}


 ?>
<center>

  

</center>
<blockquote>
  <p align="center">
    <center>     
    </center>
  </p>
</blockquote>
<center>
  <p><button onClick="self.location.href='SESSION-3.php'" "width="301" height="298">登入資訊</button></p>
</center>



</body>
</html>
<?php include "back-bottom.php" ?>