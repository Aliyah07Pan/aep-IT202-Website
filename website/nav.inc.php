
<?php
if (isset($_SESSION['login'])) {
?>
  <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
    <table width="100%" cellpadding="3">
      <?php
      echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>";
      ?>
      <tr>
        <td><img src="images/home.png" alt="Home Icon" width="50" height="50">&nbsp;
          <a href="index.php"><strong>Home</strong></a></td>
      </tr>
      <tr>
        <td><img src="images/categories.png" alt="Categories Icon" width="50" height="50">&nbsp;
          <strong>Categories</strong></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listbubbleteatypes">
            <strong>List Categories</strong></a></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newbubbleteatype">
            <strong>Add New Category</strong></a></td>
      </tr>
      <tr>
        <td><img src="images/items.png" alt="Items Icon" width="50" height="50">&nbsp;
          <strong>Items</strong></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listbubbletea">
            <strong>List Items</strong></a></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newbubbletea">
            <strong>Add New Item</strong></a></td>
      </tr>
      <tr>
        <td>
          <hr />
        </td>
      </tr>
      <tr>
        <td><a href="index.php?content=logout">
          <img src="images/logout.png" alt="Logout Icon" width="50" height="50"></a>&nbsp;
          <a href="index.php?content=logout">
            <strong>Logout</strong></a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <form action="index.php" method="post">
            <label>Search for Item:</label><br>
            <input type="text" name="bubbletea_id" size="14" />
            <input type="submit" value="find" />
            <input type="hidden" name="content" value="updatebubbletea" />
          </form>
        </td>
      </tr>
      <tr>
        <td>
          <form action="index.php" method="post">
            <label>Search for Category:</label><br>
            <input type="text" name="bubbletea_type_id" size="14" />
            <input type="submit" value="find" />
            <input type="hidden" name="content" value="displaybubbleteatype" />
          </form>
        </td>
      </tr>
    </table>
  </div>
<?php
}
?>