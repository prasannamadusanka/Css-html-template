<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/home.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik|Trirong|Audiowide">
    <link href='https://fonts.googleapis.com/css?family=Bevan' rel='stylesheet'>
    <style>
         .c{
        width: 20%;
        margin: 15px;
        box-sizing: border-box;
        float: left;
        text-align: center;
        border-radius:3px;
       box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
        padding-top: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: .4s;
      background-color: white;
      border-bottom: 1px solid #006b38ff;
      box-sizing: border-box;
     
        }
        .c:hover{
      box-shadow: 0 0 11px rgba(33,33,33,.2);
      transform: translate(0px, -8px);
      transition: .6s;
      }
      .content img{
      width: 190px;
      height: 170px;
      text-align: center;
      margin: 0 auto;
      display: block;
      }
      .content p{
      text-align: left;
      color: black;
      padding: 0 8px;
      font-family: rubik,sans-serif;
      }
      .content h6{
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 0;
      font-family: rubik;
      }
     
     .content button{
      text-align: center;
      font-size: 16px;
      color: #fff;
      width: 100%;
      padding: 10px;
      border:0px;
      outline: none;
      cursor: pointer;
      color:white;
      background-color:#006b38ff;
      display: inline;
    
    
      
      }
      .content button:hover{
          background-color:#013220;
          
      }
      .content .button1{
        margin-bottom:0px;
        
        
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
      }
     

      .gallery{
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: left;
      align-items: center;
      margin: 0px 0;
     
    
      }
     .new{
        background-color: rgba(255,255,255, 0.1);
         border-radius:3px;
         border:1px solid #006b38ff
     }
     .topnav {
  overflow: hidden;
  background-color:#006b38ff;
  border-radius: 3px;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 20px;
  font-family: bevan;
  
}



.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}
.content{
  width: (100% - 250px); margin-top: 60px;padding: 20px;margin-left: 250px;background: url('<?php echo URLROOT; ?>/img/background.jpg') no-repeat;
      background-position: center;
      background-color: cyan;
      background-size: cover;
      
      transition: 0.5s;
}
    
    </style>
  </head>
  <body>

    <header>
      
        <div class="left_area">
          <h3>Agro <span>Master</span><span style="margin-left:22%;font-family: z;font-weight: 800 ;">Mathara collection center</span></h3>
        </div>
        <div class="right_area">
          <a href="<?php echo URLROOT; ?>/users/logout" class="logout_btn">Logout</a>
        </div>
      </header>
    <div class="sidebar">
      <div class="profile_info">
        <img src="<?php echo URLROOT; ?>/img/profile.jpg" class="profile_image" alt="">
        <a href="<?php echo URLROOT; ?>/users/register" > <h4>Mathara collection center</h4></a>
      </div>
      <button class="dropdown-btn">
        <a href="#"><i class="fas fa-bars"></i><span>Home</span></a>
    </button>
      <button class="dropdown-btn" style="background-color: rgba(24, 23, 23, 0.8);">
        <a href="#"><i class="fas fa-bars"></i><span>Collections</span></a>
    </button>
    <div class="dropdown-container drop-active">
      <a href="#"><i class="fas fa-bars"><span></i>New stock</span></a>
    </div>
    <button class="dropdown-btn ">
        <a  href="#"><i class="fas fa-bars"></i><span>Orders</span></a>
    </button>
    <div class="dropdown-container ">
      <a href="#"><i class="fas fa-bars"><span></i>Pending orders</span></a>
      <a href="#"><i class="fas fa-bars"><span></i>Completed orders</span></a>
      <a href="#"><i class="fas fa-bars"><span></i>Delivered orders</span></a>
    </div>
        <button class="dropdown-btn ">
            <a href="#"><i class="fas fa-bars"></i><span>Farmers</span></a>
        </button>
        
          <div class="dropdown-container ">
            <a href="#"><i class="fas fa-bars"><span></i>Add farmer</span></a>
            <a href="#"><i class="fas fa-bars"><span></i>Non listed broughts</span></a>
            <a href="#"><i class="fas fa-bars"><span></i>Payment management</span></a>
           
          </div>
          <button class="dropdown-btn" >
            <a href="#"><i class="fas fa-bars"></i><span>Employees</span></a>
        </button>
        
          <div class="dropdown-container ">
            <a href="#"><i class="fas fa-bars"><span></i>Add Employee</span></a>
            <a href="#"><i class="fas fa-bars"><span></i>Salary management</span></a>
          </div>
          
        <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Excess</span></a>
      </button>
      
        <div class="dropdown-container">
          <a href="#"><i class="fas fa-bars"><span></i>Add Excess</span></a>
          <a href="#"><i class="fas fa-bars"><span></i>Excess assignment</span></a>
        </div>
        <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Neccesity</span></a>
      </button>
      <div class="dropdown-container">
        <a href="#"><i class="fas fa-bars"><span></i>order</span></a>
        <a href="#"><i class="fas fa-bars"><span></i>pending</span></a>
      </div>
      <button class="dropdown-btn">
        <a href="#"><i class="fas fa-bars"></i><span>Financial reports</span></a>
    </button>
    <div class="dropdown-container">
      <a href="#"><i class="fas fa-bars"><span></i>sales</span></a>
      <a href="#"><i class="fas fa-bars"><span></i>Expenses</span></a>
    </div>
      <button class="dropdown-btn">
          <a href="#"><i class="fas fa-bars"></i><span>Return management</span></a>
      </button>
     
        
       
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="new">
            <div class="topnav">
                <a class="active" href="#home">Stock Management</a>
               
                <input type="text" placeholder="Search..">
              </div>
              
    <div class = "gallery">
           
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/vegetables/carrot.jpg">
                <h3>Carrot - PC55</h3>
                <p>Buying rate - Rs.170.00<br>Selling rate - 190.00</p>
                <h6>Stock I.H-7895kg</h6>
             
              <button class="buy-1 button1">Add more</button>
            
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/vegetables/tomato.jpg">
                <h3>Tomato - PC56</h3>
                <p>Buying rate - Rs.140.00<br>Selling rate - 190.00</p>
                <h6>Stock I.H-785kg</h6>
              <button class="buy-1 button1">Add more</button>
              
            </div>
           <div class="c">
                <img src="<?php echo URLROOT; ?>/img/vegetables/leeks.jpg">
                <h3>Leeks - PC57</h3>
                <p>Buying rate - Rs.270.00<br>Selling rate - 300.00</p>
                <h6>Stock I.H-7895kg</h6>
              <button class="buy-1 button1">Add more</button>
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/vegetables/cabbage.jpg">
                <h3>Cabbage - PC58</h3>
                <p>Buying rate - Rs.180.00<br>Selling rate - 190.00</p>
                <h6>Stock I.H-775kg</h6>
              <button class="buy-1 button1">Add more</button>
            </div>
            <div class="c">
                <img src="<?php echo URLROOT; ?>/img/vegetables/tomato.jpg">
                <h3>Leeks - PC59</h3>
                <p>Buying rate - Rs.270.00<br>Selling rate - 300.00</p>
                <h6>Stock I.H-7895kg</h6>
              <button class="buy-1 button1">Add more</button>
            </div>
              </div>
      
            </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });

    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
    </script>


  </body>
</html>