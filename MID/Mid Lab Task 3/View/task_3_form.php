<!<!DOCTYPE>
<html>
  <head>
        <link rel="stylesheet" href="../CSS/task_3_style.css">
  </head>
 <body>
    <title>Donation Form</title>
    <link rel="stylesheet" href="../task_3_style.css">
    <body>
    <h1 style="color: red;">Donor Information</h1>
     <section class="form-section">
        <form id="donationForm" onsubmit="return checkFormInputs()">
    
        <label>Name:</label><br>
        <input type="text" id="name" ><br><br>
        
        <label>Email Address:</label><br>
        <input type="email" id="email" ><br><br>
        
        <label>Phone Number:</label><br>
        <input type="number" id="phone"><br><br>

        <label>Password:</label><br>
        <input type="number" id="password"><br><br>

        <label>Donation Amount:</label><br>
        <input type="number" id="amount"><br><br>
        
        <label>Payment Method:</label><br><br>
        <input type="radio" name="des" >Bkash
        <input type="radio" name="des" >Nagad
        <input type="radio" name="des" >Card<br><br>

        <input type="checkbox" name="terms" >I accept the terms & conditions<br><br>

        <input type="submit" value="Reset">
        <input type="submit" value="Submit">
</section>
<script src="task_3_valid.js"></script>

</body>
</html>
