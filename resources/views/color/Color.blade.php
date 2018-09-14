<html>
  <title>COLOR</title>
  <body>
    <?php if ($value == 'shirt') : ?>
    <div align="center">
     <img src="{{ asset('t-shirt.png') }}"width="100" height="100">
     <p>shirt!!</p>
    </div>

    <?php elseif ($value == 'jacket') : ?>
    <div align="center">
     <img src="{{ asset('jacket.png') }}"width="100" height="100">
     <p>jacket!!</p>
    </div>

    <?php elseif ($value == 'pant') : ?>
    <div align="center">
     <img src="{{ asset('pants.png') }}"width="100" height="100">
     <p>pant!!</p>
    </div>

    <?php endif; ?>
    <div align="center">
      <a href="/Suggestion/red/<?php echo $value; ?>"><font color="red" size="6">red</font></a>
      <a href="/Suggestion/orange/<?php echo $value; ?>"><font color="orange" size="6">orange</font></a>
      <a href="/Suggestion/yellow/<?php echo $value; ?>"><font color="yellow" size="6">yellow</font></a>
      <a href="/Suggestion/green/<?php echo $value; ?>"><font color="green" size="6">green</font></a>
      <a href="/Suggestion/blue/<?php echo $value; ?>"><font color="blue"size="6">blue</font></a>
      <a href="/Suggestion/violet/<?php echo $value; ?>"><font color="violet"size="6">violet</font></a>
      
    </div>
    
  </body>
</html>
