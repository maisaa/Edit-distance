<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form action="index.php" method="post">
    str1: <input type="text" name="str1" /><br />
    str2: <input type="text" name="str2" /><br />
    <select name="method">
      <option value="levenshtein">levenshtein</option>
      <option value="hamming">hamming</option>
    </select>
    <input type="submit" name="submit" value="Submit me!" />
</form> -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    <style>
* {
  box-sizing: border-box;
}
h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

input[type=text], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container">
<h1>OpenSooq Assignment - Software Engineer</h1>
<form action="index.php" method="post">
<div class="row">
    <div class="col-25">
      <label for="fstr">Str 1</label>
    </div>
    <div class="col-75">
      <input type="text" id="fstr" name="str1" placeholder="Str1 ....">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Sstr">Str 2</label>
    </div>
    <div class="col-75">
      <input type="text" id="Sstr" name="str2" placeholder="Str2 ....">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="method">Method Name</label>
    </div>
    <div class="col-75">
      <select id="method" name="method">
          <option value="levenshtein">levenshtein</option>
          <option value="hamming">hamming</option>
      </select>
    </div>
  </div>
  <div class="row">
  <input type="submit" name="submit" value="Submit me!" />
  </div>
</form>
</div>
</body>
</html>



</body>
</html>