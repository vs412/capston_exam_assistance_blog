<head>
  <title>Request Blog</title>
</head>
<form action="insert_req.php" method="post">

    <table>
      <tr>
        <p><label for="title">Title:</label><br />
            <input type="text" name="topic" id="title" required="required" />
        </p>
      </tr>
      <tr>
        <p><label for="body">Content:</label><br />
            <textarea name="content" rows="5" cols="35" required="required"></textarea>
        </p>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="submit"/></td>
      </tr>

    </table>
</form>
