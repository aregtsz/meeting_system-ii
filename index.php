<html>
<head>
 <meta charset="utf-8" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
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
<?php include "back.php" ?>
<?php if (@$_SESSION['user'] == null){ ?>
<center>

  <h1 align="center">&nbsp;</h1>

<table style="border:5px ridge #39F">
 <td width="300px" height="100px"  bgcolor="#FFCC99" frame="ridge">
  <form align="center" action="SESSION-1.php" method="POST"><br>
 帳號： <input type="TEXT" name="user"/><br>
 密碼： <input type="password" name="pass"/><br>
      <hr width="75%" ></hr>
      <input align="right" type="submit" value="登入"/>&nbsp <input type="button" value="註冊" onClick="self.location.href='nmber.php'"><?php } 
	else{?><p align="center"><input type="button" value="個人行事曆" onClick="self.location.href='meet.php'"></p>   <p align="center"><button onClick="self.location.href='SESSION-3.php'" "width="301" height="298">登入資訊</button></p>
<?php } ?>
  </form>
 </td>
</table>

</center>
<blockquote>
  <p align="center">
    <center>     
    </center>
  </p>
</blockquote>



</body>
</html>
<?php include "back-bottom.php" ?>