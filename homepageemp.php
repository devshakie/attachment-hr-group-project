<html>
    <head>
        <title>Paylee</title>
        
        <link rel="stylesheet" href="hr.css">
        <style>
          .dropbtn {
            background-color: white;
            color: black;
            padding: 3px;
            border: none;
            cursor: pointer;
            font-size: 25px;
          }
          
          .dropdown {
            position: relative;
            display: inline-block;
          }
          
          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
          }
          
          .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
          }
          
          .dropdown-content a:hover {background-color: #96d3ff;}
          
          .dropdown:hover .dropdown-content {
            display: block;
          }
          
          .dropdown:hover .dropbtn {
            background-color: #50bae8;
          }
          </style>
    </head>
    <body>
        <div class="entire">
    
<div class="top">
    <div class="top-left">
        <img src="logo.jpeg" alt="vector"  style="height: 30; width: 31;"/>
        <p style="font-weight: 700; font-size: 30px;">Paylee</p>
     </div>
    <div class="top-right"> 
        <a href="homepageemp.php">Home</a>

        <div class="dropdown">
      <button class="dropbtn">EMPLOYEES |</button>
      <div class="dropdown-content">
    
      <a href="employeereportemp.php?employee_id=1">view employee Profile</a>
      
        </div>
    </div>
    
    <div class="dropdown">
      <button class="dropbtn">Leave | </button>
      <div class="dropdown-content">
      <a href="leave.php"> Apply Leave</a>
      <a href="leavereportemp.php">view Leave Report</a>
        </div>
        </div>
        
        <div class="dropdown">
      <button class="dropbtn">Salaries | </button>
      <div class="dropdown-content">
     
      <a href="salaryreportemp.php">view Salary Report</a>
      </div>
        </div>

        <div class="dropdown">
      <button class="dropbtn">Reports | </button>
      <div class="dropdown-content">
      <a href="employeereportemp.php?employee_id=1">view Employee Report</a>
      <a href="salaryreportemp.php?employee_id=1">view Salary Report</a>
      <a href="leavereportemp.php?employee_id=1">view Leave Report</a>
      </div>
        </div>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About</a>
      <!--<span class="no line">  <a href="loginhr.php"><button style="width:134px;height:34px;font-size:30 px; background-color:rgb(43, 202, 230); border-radius: 28px;">Login </button></a>
        </div>-->            
</div>

<div class="box1">
    <p>Hi! we're</p>
</div>

<div class="box2">
    <p>Paylee</p>
</div>

<div class="box3">
    <p>We streamline your </p>
    <p>Onboarding, Payroll and Leave</p>
    <p>operations</p>
    
</div>
<div class="box4">
    Welcome
</div>
    </div>
    </body>
</html>