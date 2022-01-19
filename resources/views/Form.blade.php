<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/kirim" method="POST">
      <label>First name</label><br /><br />
      <input type="text" name="first name" /><br /><br />
      <label>Last name</label><br /><br />
      <input type="text" name="last name" /><br /><br />
      <label>Gender :</label><br /><br />
      <input type="radio" name="gender" />Male <br />
      <input type="radio" name="gender" />Female <br />
      <input type="radio" name="gender" />Other <br /><br />
      <label>Nationality :</label><br /><br />
      <select name="nationality">
        <option value="1">Indonesia</option>
        <option value="2">Malaysia</option>
        <option value="3">Singapura</option>
        <option value="4">Jepang</option></select
      ><br /><br />
      <label>Language Spoken :</label><br /><br />
      <input type="Checkbox" />Bahasa Indonesia <br />
      <input type="Checkbox" />English <br />
      <input type="Checkbox" />Other <br /><br />
      <label>Bio :</label><br /><br />
      <textarea name="bio" cols="30" rows="10"></textarea><br /><br />
      <input type="Submit" values="kirim" />
    </form>
  </body>
</html>
