    <h1> Dice Roll Game!</h1>

    <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'] ?>">
    <?php
      if (!isset($_POST['name']))
      {
        killsession($yourpath);
        unset($totalRolls);
    ?>
      <label for="name">Players Name:</label>
      <br/>
      <input
        name="name"
        type="text"
        id="name"
        required
      />
    <?php
        } else {
            echo '<input type="hidden" id="name" name="name" value=' . $_SESSION['name'] . '>';
            if(!isset($_SESSION['name'])){
                $_SESSION['name'] = $_POST['name'];
                echo "<p>What's up " . $_POST['name'] . "! Roll 10 times and try to get your highest score!</p>";
                echo "<p>" . $firstRoll . ">";
            } else {
                echo "<p>Keep rolling ".$_SESSION['name']."!</p>";
                echo "<p>" . $totalRolls . ">";
            }
        }
    ?>
<br/>
<input
    name="rollDice"
    value="Roll Dice"
    type="submit"
/>
</form>
  </body>
</html>
