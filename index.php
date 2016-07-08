<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>PHP Basics</title>
  <meta name="description" content="Werk Werk Werk Werk Werk">
  <meta name="author" content="bekabug">

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href='https://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
  <style type="text/css">
  h1 {background: #55B4A7; color: #ffffff; font-size: 3em; font-family:"Pompiere"; padding: 18px; text-align: center; }
  </style>
</head>

<body>
<h1>
  <?php echo "Nice to meet you, " . htmlspecialchars($_GET['name']); ?>

</h1>
</body>
</html>
