<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mess Registration Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Shree MahaLakshmi Mess</h1>
    <h4>Location : Sanjivani College of Engineering Campus</h4>
    <!--<button class="open-button" onclick="openForm()">Open Form</button>-->
    <section>
      <div class="container">
        <form action="" method="post">
          <div class="form-group">
            <label for="sname">Student Name</label>
            <input type="text" id="sname" name="sname" />
          </div>

          <div class="form-group">
            <label for="fname">Father Name</label>
            <input type="text" id="fname" name="fname" />
          </div>

          <div class="form-group">
            <label for="paddress">Address</label>
            <input type="text" id="paddress" name="paddress" />
          </div>

          <div class="form-group">
            <label for="caddress">Current Address</label>
            <input type="text" id="caddress" name="caddress" />
          </div>

          <div class="form-group">
            <label for="sphone">Student Contact number:</label><br /><br />
            <input
              type="tel"
              id="sphone"
              name="sphone"
              placeholder="1234567890"
              required
            />
          </div>

          <div class="form-group">
            <label for="fphone">Parents Contact number:</label><br /><br />
            <input
              type="tel"
              id="fphone"
              name="fphone"
              placeholder="1234567890"
              required
            />
          </div>

          <div class="form-group">
            <label for="joindate">Joining Date:</label>
            <input type="date" id="joindate" name="joindate" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" />
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="pwd" minlength="8">
          </div>

          <button type="submit" name="add" id="test-form-submit"> <!---- onclick="myFunction()">-->
            Submit
          </button>
          
          <!--<script>
            function myFunction() {
              alert("Registration Successful !!!\nThank You for your Response");
            }
              function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
          </script>-->
        </form>
        <?php 

if(isset($_POST['add']))
{
	$con= mysqli_connect("localhost","root","","mess");
	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to mysqli: " . mysqli_connect_error();
	}
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	$paddress = $_POST['paddress'];
	$caddress = $_POST['caddress'];
	$sphone = $_POST['sphone'];
	$fphone = $_POST['fphone'];
	$joindate = $_POST['joindate'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	

	$sql= "INSERT INTO registration(sname,fname,paddress,caddress,sphone,fphone,joindate,email,pwd)
	VALUES('$sname','$fname','$paddress','$caddress','$sphone','$fphone','$joindate','$email','$pwd')";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	  }
	  echo "Record inserted Successfully";
	  mysqli_close($con);
}
?>
      </div>
      <div id="status"></div>
    </section>

  </body>
  
 
</html>
