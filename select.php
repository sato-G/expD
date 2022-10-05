<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POST_SAMPLE</title>
  </head>
  <body>
    <form method="POST" action="result.php">
      1人目
      <input type="checkbox" name="first[]" value="apple"><label for= "apple">apple</label>
      <input type="checkbox" name="first[]" value="orange"><label for= "orange">orange</label>
      <input type="checkbox" name="first[]" value="melon"><label for= "melon">melon</label>
      <input type="checkbox" name="first[]" value="soccer"><label for= "soccer">soccer</label>
      <input type="checkbox" name="first[]" value="tennis"><label for= "tennis">tennis</label>
      <input type="checkbox" name="first[]" value="baseball"><label for= "baseball">baseball</label>
      <br />
      2人目
      <input type="checkbox" name="second[]" value="apple"><label for= "apple">apple</label>
      <input type="checkbox" name="second[]" value="orange"><label for= "orange">orange</label>
      <input type="checkbox" name="second[]" value="melon"><label for= "melon">melon</label>
      <input type="checkbox" name="second[]" value="soccer"><label for= "soccer">soccer</label>
      <input type="checkbox" name="second[]" value="tennis"><label for= "tennis">tennis</label>
      <input type="checkbox" name="second[]" value="baseball"><label for= "baseball">baseball</label><br />


      <input type="submit" value="送信" />
    </form>
  </body>
</html>