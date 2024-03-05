
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - Nal's Nails</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Paytone+One&family=Rowdies:wght@700&family=Rubik+Mono+One&family=Secular+One&display=swap" rel="stylesheet">



</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <?php
    include("header.html");
    ?>
<!-- FIRST CONTAINER EVER -->
<?php
include("database.php");
?>

<!--- this is right after connecting to the database ---->
<div class="container-fluid mt-5 mb-5 box">
    <div class="row">
        <div class="col-lg-6 mx-auto bgsection pinktxt pb-5 rounded-5 shadowy box">
            <div class="col mx-auto box2">
            <h1 class="pt-5 pb-5 d-flex justify-content-center pinkh pinktxt">
                Book Me
            </h1>
            </div>
            <div class="container-fluid">
            <form class="row g-3 needs validation justify-content-center" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="col-md-5">
                <label for="validationDefault01" class="form-label">First Name*</label>
                <input type="text" class="form-control" name="firstName" id="validationDefault01" required>
                </div>
                <div class="col-md-5">
                <label for="validationDefault02" class="form-label">Last Name*</label>
                <input type="text" class="form-control" name="lastName" id="validationDefault02" required>
                </div>
                <div class="col-md-10">
                <label for="validationDefault03" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" id="validationDefault03">
                </div>
                <div class="col-md-10">
                <label for="validationDefault04" class="form-label">Phone Number*</label>
                <input type="tel" class="form-control" name="phone" id="validationDefault04" minlength="10" maxlength="10" required>
                </div>
                <div class="col-md-6">
                    <label for="validationDefault05" class="form-label">Date*</label>
                        
                        <input
                            type="date"
                            name="date"
                            id="datepicker"
                            class="form-control"
                            value=""
                            min="2024-01-01"
                            max="2024-12-31"
                            required
                        />
                        
               </div>               
                <div class="col-md-4">
                <label for="timepicker" class="form-label">TIME*</label>
                <div class="cs-form">
                    <input type="time" class="form-control" name="time" />
                  </div>
                  <script>
                    
                  </script>                
              
                </div>
                <div class="col-md-10">
                <label for="validationDefault07" class="form-label">SERVICE TYPE*</label>
                <select id="validationDefault07" class="form-select" name="serviceType" required>
                    <option selected disabled value=""></option>
                    <option value="Manicure">Classic Manicure - $25</option>
                    <option value="Dip">Dip Powder - $45</option>
                    <option value="Acrylic">Acrylic Nails - $60</option>
                    <option value="Gel">Gel Nails - $60</option>
                    <option value="Fill">Fill - $40</option>
                    <option value="Design">Design - $100+</option>
                    <option value="Repair">Nail Repair - $20</option>
                    <option value="Other">Other</option>
                </select>
                </div>
                <div class="col-md-10">
                <label for="validationDefault08" class="form-label">SERVICE PROVIDER*</label>
                <select id="validationDefault08" class="form-select" name="employeeID" required>
                    <option selected disabled value=""></option>
                    <option value="1">Sinal</option>

                </select>
                </div>
                <div class="col-md-10 mb-5">
                    <label for="Textarea1" class="form-label">NOTES</label>
                    <textarea class="form-control" name="comments" id="Textarea1" rows="6"></textarea>              
                </div>
                <div class="col-10 d-flex justify-content-center">
                    <button type="submit" name="submit" value="Submit" class="bookbutton btn-lg">SCHEDULE APPOINTMENT</button>
                </div>
            </form>
        </div>
        </div> <!-- END OF MASSIVE COLUMN -->
    </div>
</div> <!-- END OF CONTAINER FLUID -->
    <!-- FOOTER -->
    <?php
    include("footer.html");
    ?>
    
</body>
</html>
<?php

/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/

    // Check if the form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //customer table
        $fname = filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
        //appointment table
        $date = $_POST["date"];
        $time = $_POST["time"];
        $notes = $_POST["comments"];
        //service table
        $service = $_POST["serviceType"];
        //employee table
        $employee = $_POST["employeeID"];

        // Determine the price based on the selected service
        switch ($service) {
            case "Manicure": //the "value is same value from the option elements
                $price = 25.00;
                break;
            case "Dip":
                $price = 45.00;
                break;
            case "Acrylic":
                $price = 60.00;
                break;
            case "Gel":
                $price = 60.00;
                break;
            case "Fill":
                $price = 40.00;
                break;
            case "Design":
                $price = 100.00;
                break;
            case "Repair":
                $price = 20.00;
                break;
            case "Other":
                $price = 00.00;
                break;
            default:
                $price = 0.00; // Default price if service not found
        }
        // Insert into customer table
        $sql_customer = "INSERT INTO Customer (firstName, lastName, email, phone) 
                        VALUES ('$fname', '$lname', '$email', '$phone')";

     
            if ($conn->query($sql_customer) === TRUE) {
                        // Get the customer ID
                        $customerID = $conn->insert_id;
                        //echo "You booked successfully!";
                        } else {
                            echo "Error: " . $sql_customer . "<br>" . $conn->error;
                        }
                     
        
        // Insert into employee table
        //$sql_employee = "INSERT INTO Employee (employeeID) VALUES ('$employeeID')";

        //Fetch employee details from database table
        //$sql_fetch_employee = "SELECT employeeID FROM Employee WHERE employeeID = '$employee'";
        $sql_fetch_employee = "SELECT employeeID FROM Employee WHERE employeeID = 1";
        $result_fetch_employee = $conn->query($sql_fetch_employee); 

        //if ($result_fetch_employee->num_rows > 0) {
            // Employee found, get the employee ID


        // Insert into appointment table
        $sql_appointment = "INSERT INTO Appointment (date, time, comments, customerID, employeeID) 
                            VALUES ('$date', '$time', '$notes', '$customerID', '$employee')";


        // Insert into service table
        $sql_service = "INSERT INTO Service (serviceType, price) 
                        VALUES ('$service', '$price')";

       
/*
        if ($conn->query($sql_customer) === TRUE) {
            echo "You booked successfully!";
        } else {
            echo "Error: " . $sql_customer . "<br>" . $conn->error;
        }
        */
        /* }
         else {
        // Service not found
        echo "Error: Service not found";
        } */
        if ($conn->query($sql_appointment) === TRUE) {
            //echo "Appointment booked successfully!";
        } else {
            //echo "Error: " . $sql_appointment . "<br>" . $conn->error;
        }
        if ($conn->query($sql_service) === TRUE) {
            //echo "Service booked successfully!";
        } else {
            //echo "Error: " . $sql_service . "<br>" . $conn->error;
        } 
        
        if ($conn->query($sql_fetch_employee) === TRUE) {
            //echo "Employee booked successfully!";
        } else {
             //echo "Error: " . $sql_fetch_employee . "<br>" . $conn->error;
        }
        //insert thank you page confirmation here
        //header("Location: confirmation.php");
    }
    // Close the connection
    mysqli_close($conn);
?>