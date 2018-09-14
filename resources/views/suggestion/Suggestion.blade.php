<html>
  <title>
    Suggestion
  </title>
  <body>
    <div align="center">
      <a href="/Kind"><font color="black" size="7">return to top</a>
    </div>
    <font color="<?php echo $color ?>" size="3">
    <?php
      echo "$value<br />";
      ?>
    <font color="black" size="3">
    <?php
      echo "$data<br />";
      echo "$id<br />";
      ?>
    
    @foreach ($data as $data)
    <div align="center">
      <img src="/<?php echo $data?>.png" width="200" height="200">
      <?php echo "id[$data]<br />"; ?>
    </div>
    @endforeach
   
  </body>
  </html>
