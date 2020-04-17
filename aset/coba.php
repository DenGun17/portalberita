<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="jquery_ui.custom/jquery-ui.css">
<script src="jquery-2.1.4.js" type="text/javascript"></script>
<script src="jquery_ui.custom/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#menu" ).menu();
  });
  </script>

    <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>
  
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
  
    <script>
  $(function() {
    $( "#datepicker2" ).datepicker({
      changeMonth: true,
      changeYear: true,
	 dateFormat: "yy/mm/dd", 
    });
  });
  </script>
  
  
     <!-- Example assets -->
        <link rel="stylesheet" type="text/css" href="carousel_basic/jcarousel.basic.css">

       <link rel="stylesheet" type="text/css" href="jquery_ui.custom/jquery-ui.css"

      
        <script type="text/javascript" src="carousel_basic/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="carousel_basic/jcarousel.basic.js"></script>

  

  <style>
  .ui-menu { width: 150px; }
  </style>
  
  
<body>
 
<ul id="menu">
  <li class="ui-state-disabled">Aberdeen</li>
  <li>Ada</li>
  <li>Adamsville</li>
  <li>Addyston</li>
  <li>Delphi
    <ul>
      <li class="ui-state-disabled">Ada</li>
      <li>Saarland</li>
      <li>Salzburg an der schönen Donau</li>
    </ul>
  </li>
  <li>Saarland</li>
  <li>Salzburg
    <ul>
      <li>Delphi
        <ul>
          <li>Ada</li>
          <li>Saarland</li>
          <li>Salzburg</li>
        </ul>
      </li>
      <li>Delphi
        <ul>
          <li>Ada</li>
          <li>Saarland</li>
          <li>Salzburg</li>
        </ul>
      </li>
      <li>Perch</li>
    </ul>
  </li>
  <li class="ui-state-disabled">Amesville</li>
</ul>
 

  <button type="submit" value="A submit button"><i class="ui-icon ui-icon-disk"></i></button>
<br>

<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>
 <br>
 
  
<p>Date: <input type="text" id="datepicker"></p>



<p>Date2: <input type="text" id="datepicker2"></p>







        <div class="wrapper">
            <h1>Basic carousel</h1>

            <p>This example shows how to setup a basic carousel with prev/next controls and pagination.</p>

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="img1.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img2.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img3.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img4.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img5.jpg" width="600" height="400" alt=""></li>
                        <li><img src="img6.jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>

                <p class="photo-credits">
                    Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
                </p>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                <p class="jcarousel-pagination">
                    
                </p>
            </div>
        </div>

</body>
</html>
