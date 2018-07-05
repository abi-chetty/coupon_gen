<?php
$name = $_POST['name'];
$logo = $_FILES['logo']['name'];
$image_tmp_name= $_FILES['logo']['tmp_name'];
$discount = $_POST['discount'];
$description = $_POST['description'];
$address = $_POST['address'];

move_uploaded_file($image_tmp_name,"photos/$logo");
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
  </head>

  <body>

    <div id="coupon" class="container">
      <div class="title"><strong>COUPON</strong></div>
      <div class="content">
        <table>
          <tr>
            <td class="box1">
              <div class='content box1'>
                <?php echo "<img src='photos/$logo' >";?></div>
                <div class="content box3">
                  <?php echo $name; ?>
                </div>
            </td>
            <td><br><strong> &emsp; DESCRIPTION: </strong><br>
              <div class="content box2">
                <?php echo $description; ?>
              </div>
            </td>
          </tr>
          <tr>

            <td colspan="2">
              <div class="content box4" >
              use  code <a id="number"></a> to get <?php echo $discount; ?>% off</div>
            </td>
          </tr>
          <tr>
            <td colspan="2"><strong> &emsp; ADDRESS :</strong><br>
              <div class="content box5">
                <?php echo $address; ?>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <br>
    <br>
    <button type="button" class="btn btn-primary" id="page">
  print coupon
</button>
    <script src="print.js">
    </script>

  </body>

  </html>
