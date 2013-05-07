<!-- 
Thanks GitHub for this decent-looking error page.
It's based upon their default 404 page! :)
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>General Error</title>
    <style type="text/css" media="screen">
      body {
        background: #f1f1f1;
        font-family: "HelveticaNeue", Helvetica, Arial, sans-serif;
        text-rendering: optimizeLegibility;
        margin: 0; }

      .container { margin: 50px auto 40px auto; width: 600px; text-align: center; }

      a { color: #4183c4; text-decoration: none; }
      a:visited { color: #4183c4 }
      a:hover { text-decoration: none; }

      h1 { width: 800px; position:relative; left: -100px; letter-spacing: -1px; line-height: 60px; font-size: 60px; font-weight: 100; margin: 0px 0 50px 0; text-shadow: 0 1px 0 #fff; }
      p { color: rgba(0, 0, 0, 0.5); margin: 20px 0 40px; }

      ul { list-style: none; margin: 25px 0; padding: 0; }
      li { display: table-cell; font-weight: bold; width: 1%; }
      .divider { border-top: 1px solid #d5d5d5; border-bottom: 1px solid #fafafa;}

    </style>
  </head>
  <body>

    <div class="container">

      <h1>Error!</h1>
      <p><strong><?php echo $heading; ?></strong></p>

      <p><em>This wasn't supposed to happen.</em>
	<?php echo $message; ?>
      </p>


      <div class="divider"></div>
      <ul id="error-suggestions">
          <li><a href="/">Go To Frontpage</a></li>
          <li>Powered by Crowdfundr.com</li>
      </ul>
    </div>
  </body>
</html>


