<!DOCTYPE html>
<html>
<head>
  <title>Student Portal</title>
</head>
<body>
 
  <h1>Welcome to Student Portal</h1>
  <p>Open your browser console to see the results. (Right-click → Inspect → Console)</p>
 
  <script>
   
    //  1. VARIABLES
 
    console.log(" VARIABLES");
    var name = "Khadija";
    var age = 23;
    var isStudent = true;
    console.log("Name:", name);
    console.log("Age:", age);
    console.log("Is Student?", isStudent);
 
    //  2. OPERATORS
 
    console.log("\n OPERATORS");
    var a = 22;
    var b = 3;
    console.log("Addition:", a + b);
    console.log("Subtraction:", a - b);
    console.log("Multiplication:", a * b);
    console.log("Division:", a / b);
    console.log("Remainder:", a % b);
 
     //  3. Condiition
 
     console.log("\n IF/ELSE");
     if (age>=18){
        console.log(name + " is an adult.");
     }else{
        console.log(name + "is a minor.");
     }
 
    //  5. LOOPS
 
    var marks = [95,90,90]
    console.log("\n Marks of Each Subject")
    for (var i=0;i < marks.length;i++)
     
      {
              console.log ("Web Technology" + " Marks" + marks [i]);
              console.log ("Data Science"  + " Marks" + marks [i]);
              console.log ("Research methodology" + " Marks" + marks [i]);
    }
     // 7. FUNCTIONS
    console.log("\n DISPLAY");
 
    function greetUser(userName) {
      console.log("Hello, " + userName + "!");
    }
 
    greetUser("khadija");
    greetUser("Ayesha");
 
    // Button to show student result
 
    function showMessage() {
      alert("You clicked the button!");
      console.log("\n STUDENT RESULT");
      console.log("Web Technology = 95");
      console.log("Data Science = 90");
      console.log("Research methodology = 90");
    }
 
 
 
  </script>
 
  <br><br>
 
  <button onclick="showMessage()">Click Me</button>
 
</body>
</html>