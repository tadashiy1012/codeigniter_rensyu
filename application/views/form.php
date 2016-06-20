<html>
<body>
  <h1>Persons</h1>
  <ul>
    <?php foreach ($persons as $row) {
      echo '<li>';
      echo $row->name . ',' . $row->age . ',' . $row->mail;
      echo '</li>';
    } ?>
  </ul>
  <hr />
  <h1>create form</h1>
  <form method="post" action="./form/create" name="data1">
    <label for="name">name:<input type="text" name="name" /></label>
    <label for="age">age:<input type="text" name="age" /></label>
    <label for="mail">mail:<input type="text" name="mail" /></label>
    <input type="submit" value="submit" />
  </form>
</body>
</html>