<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <title>contact</title>
</head>
<body>
  <!--Left side-->

    <div class="container1">
    <form action="Contact.php">
        <div class = "left-side">
            <h1>CONTACT US</h1>
          <br />
          
       <div>
           <i class ="	fas fa-map-marker-alt"></i>
        <div class="text-one">Mandela Street</div>
        <div class="text-two">Witbank</div>
        <br />
      
        <i class ="fa fa-phone"></i>
        <div class="text-one">013 565 8296</div>
        <div class="text-two">013 465 9526</div>
        <br />

        <i class ="fa fa-envelope"></i>
        <div class="text-one">icep@gmail.com</div></div>
            
        </div>
    </div>
        <!--Right Side-->
        <div class="container2">
            <div class = "right-side">
              <div class = "row">
                <div class="col-1">
                  <label for="name">Name *</label>
                  <input type="text" id="name" name="name" placeholder="Enter your name">
                      </div>   
                      <div class="col-1">
                  <label for="email">Email *</label>
                  <input type="text" id="email" name="email" placeholder="Enter your email">
                      </div>
        
                      <div class="col-1">
                  <label for="phone">Phone</label>
                  <input type="text" id="email" name="email" placeholder="Enter your phone number">
                      </div>
        
                      <div class="col-1">
                  <label for="address">Address</label>
                  <input type="text" id="address" name="address" placeholder="Enter your address">
                      </div>
              </div>
              
              <div class ="col-2">
                <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Type of the subject">
              </div>
          
            <div class="col-2">
              <label for="subject">Message</label>
              <textarea id="subject" name="subject" placeholder="Type your message here..." ></textarea>
            </div>
      
            <div class="col-2">
            <input type="button" class="button" value="Submit">
            </div>
                </div>    
        </div>
        </div>
        
      
  
    </form>
    
  </div>

</body>
</html>