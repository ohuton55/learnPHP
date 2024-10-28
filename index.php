<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta equiv="X-UA-Compatible" content="IE=Edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="script.js"></script>
</head>
<body>
  <main>
  <form action="includes/formhandler.php" method="post">
      <label for="firstname">Firstname?</label>
      <input required id="firstname" type="text" name="firstname" placeholder="firstname...">

      <label for="lastname">lastname?</label>
      <input id="lastname" type="text" name="lastname" placeholder="lastname...">

      <label for="favouritepet">favouritepet?</label>
      <select id="favouritepet" name="favouritepet">
        <option value="none">None</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="bird">Bird</option>
      </select>
      <button type="submit">Submit</button>
    </form>

  </main>
</body>
</html>
