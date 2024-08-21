
<?php
// Start the session at the beginning of the script
// session_start(); 

// include("dbconnection.php");
?>

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <style>




              /* Google Fonts Import Link */
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
      }
      .sidebar{
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: #11101d;
        z-index: 100;
        transition: all 0.5s ease;
      }
      .sidebar.close{
        width: 78px;
      }

      .sidebar .logo-details{
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
      }
      .sidebar . i{
        font-size: 30px;
        color: #fff;
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
      }
      .sidebar .logo-details .logo_name{
        font-size: 22px;
        color: #fff;
        font-weight: 600;
        transition: 0.3s ease;
        transition-delay: 0.1s;
      }
      .sidebar.close .logo-details .logo_name{
        transition-delay: 0s;
        opacity: 0;
        pointer-events: none;
      }
      .sidebar .nav-links{
        height: 100%;
        padding: 30px 0 150px 0;
        overflow: auto;
      }
      .sidebar.close .nav-links{
        overflow: visible;
      }
      .sidebar .nav-links::-webkit-scrollbar{
        display: none;
      }
      .sidebar .nav-links li{
        position: relative;
        list-style: none;
        transition: all 0.4s ease;
      }
      .sidebar .nav-links li:hover{
        background: #1d1b31;
      }
      .sidebar .nav-links li .iocn-link{
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .sidebar.close .nav-links li .iocn-link{
        display: block
        color: #f39c12;
      }
      .sidebar .nav-links li i{
        height: 50px;
        min-width: 78px;
        text-align: center;
        line-height: 50px;
        color: #fff;
        font-size: larger;
        cursor: pointer;
        transition: all 0.3s ease;
      }
      .sidebar .nav-links li.showMenu i.arrow{
        transform: rotate(-180deg);
      }
      .sidebar.close .nav-links i.arrow{
        display: none;
      }
      .sidebar .nav-links li a{
        display: flex;
        align-items: center;
        text-decoration: none;
      }
      .sidebar .nav-links li a .link_name{
        font-size: 18px;
        font-weight: 400;
        color: #fff;
        transition: all 0.4s ease;
      }
      .sidebar.close .nav-links li a .link_name{
        opacity: 0;
        pointer-events: none;
      }
      .sidebar .nav-links li .sub-menu{
        padding: 6px 6px 14px 10px;
        margin-top: -10px;
        background: #1d1b31;
        display: none;
        font-size: 18px;
        font-weight: 400;
      }
      .sidebar .nav-links li.showMenu .sub-menu{
        display: block;
      }
      .sidebar .nav-links li .sub-menu a{
        color: #fff;
        font-size: 14px;
        font-weight: 100;
        padding: 1px 0;
        white-space: nowrap;
        opacity: 0.6;
        transition: all 0.3s ease;
      }
      .sidebar .nav-links li .sub-menu a:hover{
        opacity: 1;
        color: #f39c12;
      }
      .sidebar.close .nav-links li .sub-menu{
        position: absolute;
        left: 100%;
        top: -10px;
        margin-top: 0;
        padding: 10px 20px;
        border-radius:  6px ;
        opacity: 0;
        display: block;
        pointer-events: none;
        transition: 0s;
      }
      .sidebar.close .nav-links li:hover .sub-menu{
        top: 0;
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
      }
      .sidebar .nav-links li .sub-menu .link_name{
        display: none;
      }
      .sidebar.close .nav-links li .sub-menu .link_name{
        font-size: 18px;
        opacity: 1;
        display: block;
      }
      .sidebar .nav-links li .sub-menu.blank{
        opacity: 1;
        pointer-events: auto;
        padding: 3px 20px 6px 16px;
        opacity: 0;
        pointer-events: none;
      }
      .sidebar .nav-links li:hover .sub-menu.blank{
        top: 50%;
        transform: translateY(-50%);
      }
      .sidebar .profile-details{
        position: fixed;
        bottom: 0;
        width: 260px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #1d1b31;
        padding: 12px 0;
        transition: all 0.5s ease;
      }
      .sidebar.close .profile-details{
        background: none;
      }
      .sidebar.close .profile-details{
        width: 78px;
      }
      .sidebar .profile-details .profile-content{
        display: flex;
        align-items: center;
      }
      .sidebar .profile-details img{
        height: 52px;
        width: 52px;
        object-fit: cover;
        border-radius: 16px;
        margin: 0 14px 0 12px;
        background: #1d1b31;
        transition: all 0.5s ease;
      }
      .sidebar.close .profile-details img{
        padding: 10px;
      }
      .sidebar .profile-details .profile_name,
      .sidebar .profile-details .job{
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        white-space: nowrap;
      }
      .sidebar.close .profile-details i,
      .sidebar.close .profile-details .profile_name,
      .sidebar.close .profile-details .job{
        display: none;
      }
      .sidebar .profile-details .job{
        font-size: 12px;
      }
      .home-section{
        position: relative;
        background: #E4E9F7;
        height: 100vh;
        left: 260px;
        width: calc(100% - 260px);
        transition: all 0.5s ease;
      }
      .sidebar.close ~ .home-section{
        left: 78px;
        width: calc(100% - 78px);
      }
      .home-section .home-content{
        height: 60px;
        display: flex;
        align-items: center;
      }
      .home-section .home-content .bx-menu,
      .home-section .home-content .text{
        color: #11101d;
        font-size: 35px;
      }
      .home-section .home-content .bx-menu{
        margin: 0 15px;
        cursor: pointer;
      }
      .home-section .home-content .text{
        font-size: 26px;
        font-weight: 600;
      }
      @media (max-width: 400px) {
        .sidebar.close .nav-links li .sub-menu{
          display: none;
        }
        .sidebar{
          width: 78px;
        }
        .sidebar.close{
          width: 0;
        }
        .home-section{
          left: 78px;
          width: calc(100% - 78px);
          z-index: 100;
        }
        .sidebar.close ~ .home-section{
          width: 100%;
          left: 0;
        }
      }
      /* Warm Beige and Blues Color Scheme */
      
      body {
        background-color: #f4ebe8; /* Warm Beige - Primary Color */
        color: #2f3640; /* Dark Slate Gray - Text Color */
      }
      
      .sidebar {
        background-color: #2c3e50; /* Navy Blue - Secondary Color */
      }
      
      .sidebar .logo-details,
      .profile-details {
        background-color: #2c3e50; /* Navy Blue - Secondary Color */
      }
      
      .sidebar .nav-links li a,
      .sidebar .profile-details .profile_name,
      .sidebar .profile-details .job {
        color: #fff; /* White - Text Color for elements within sidebar and profile */
      }
      
      .sidebar.close .nav-links li:hover {
        background-color: #414d5c; /* Darker shade of Navy Blue on hover */
      }
      
      .sidebar .nav-links li.showMenu .sub-menu,
      .sidebar .sub-menu.blank {
        background-color: #414d5c; /* Changed from #ecf0f1 to a darker color for better contrast */
      }
      
      .sidebar .sub-menu a {
        color: #fff; /* White - Text Color for elements within sub-menus */
      }
      
      .home-section {
        background-color: #ecf0f1; /* Light Gray - Neutral Color */
      }
      
      .home-content .bx-menu,
      .home-content .text {
        color: #2c3e50; /* Navy Blue - Secondary Color */
      }

      .sub-menu li a {
        display: flex;
        /* align-items: center; */
      }

      .sub-menu li a i {
        /* margin-right: 1px; Adjust the spacing between the icon and text */
      }





        .logo-details {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin-bottom: 50px;
            margin-top: 20px;
        }

        .img-radius {
            border-radius: 50%;
            width: 90px;
            height: 1000px;
            margin-bottom: 10px; /* Add space between image and text */
        }

        .user-details {
            color: white;
        }

        .profile_name {
            font-weight: bold;
            font-size: 18px;
            color: white;
        }

        .job {
            font-size: 16px;
            color: white;
        }
 
        /* for header */

        .header-container {
            display: flex;
            align-items: center;
            height: 80px; /* Set the desired height  */
            padding: 20px; /* Add padding if necessary */
            background-color: #f4ebe8; /* Background color to match your design */
            width: 100% ;
        }
        .header-container .bx-menu {
            font-size: 24px; /* Adjust size as needed */
            margin-right: 10px; /* Space between icon and header */
            color: #2c3e50; /* Adjust color as needed */
        }
        .header-container span {
            flex-grow: 1; /* Ensure the header content takes the remaining space */
            color: white; /* Adjust color as needed */
        }
      
        

    </style>
    



  <div class="sidebar close">
    <ul class="nav-links">
        <?php


        // Check if the session variable 'id' is set before using it
        if (isset($_SESSION["id"])) {
            $id = intval($_SESSION["id"]); // Ensure the ID is an integer
            $query = mysqli_query($con, "select * from user_detail where id='$id'");
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <li>
                <div class="logo-details">
                    <img class="img-radius" src="Watch-Guard-Tech-Logo.png" alt="User-Profile-Image"> 
                    <div class="user_details">
                        <div class="profile_name"><?php echo htmlentities($row['name']); ?></div>
                        <div class="job"><?php echo htmlentities($row['email']); ?></div>
                    </div>
                </div>
                </li>
                <?php
            }
        } else {
            // Handle the case where the session variable 'id' is not set
            echo "User ID not set in the session.";
        }
        ?>

    
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>

        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>



      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user-circle' ></i>
            <span class="link_name">My Profile</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">My Profile</a></li>
          <li><a href="#"><i class='bx bx-user' ></i><span>View Profile</span></a></li>
          <li><a href="#"><i class='bx bx-key' ></i><span>Change Password</span></a></li>
          <li><a href="#"><i class='bx bx-log-out' ></i><span>Logout</span></a></li>
        </ul>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">My Profile</a></li>
        </ul>
      </li>


    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-clipboard-list'></i>
                <span class="link_name">Complaint</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Complaint</a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>All Complaints</span></a></li>
            <li><a href="#"><i class='fas fa-search'></i><span>Search Complaint</span></a></li>
            <li><a href="#"><i class='fas fa-file-alt'></i><span>Complaints' Report</span></a></li>

            <h3 style="margin-left: -30px;"><i class='fas fa-info-circle'></i><span style="font-size: 19px; margin-left: -20px;">Complaint's Status</span></h3>

            <li><a href="#"><i class='fas fa-exclamation-circle'></i><span>Not Processed Yet </span></a></li>
            <li><a href="#"><i class='fas fa-spinner'></i><span>In Process </span></a></li>
            <li><a href="#"><i class='fas fa-check-circle'></i><span>Closed </span></a></li>

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Complaint</a></li>
        </ul>
    </li>


    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-user'></i>
                <span class="link_name">Technician</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Technician</a></li>
            <li><a href="#"><i class='bx bx-user-plus'></i><span>Add Technician</span></a></li>
            <li><a href="#"><i class='fas fa-spinner'></i><span>Search Technician </span></a></li>
            <li><a href="#"><i class='bx bx-edit'></i><span>Update Technician</span></a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>View All Technician </span></a></li>
            <li><a href="#"><i class='fas fa-file-alt'></i><span> Technicians' Report</span></a></li>

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Technician</a></li>
        </ul>
    </li>

    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-user'></i>
                <span class="link_name">Customer</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Customer</a></li>
            <li><a href="#"><i class='bx bx-user-plus'></i><span>Add Customer</span></a></li>
            <li><a href="#"><i class='fas fa-spinner'></i><span>Search Customer </span></a></li>
            <li><a href="#"><i class='bx bx-edit'></i><span>Update Customer</span></a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>View All Customer </span></a></li>
            <li><a href="#"><i class='fas fa-file-alt'></i><span> Customers' Report</span></a></li>

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Customer</a></li>
        </ul>
    </li>

    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-tools'></i>
                <span class="link_name">Equipment</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Equipment</a></li>
            <li><a href="#"><i class='fas fa-plus-circle'></i><span>Add Equipment</span></a></li>
            <li><a href="#"><i class='fas fa-spinner'></i><span>Search Equipment </span></a></li>
            <li><a href="#"><i class='bx bx-edit'></i><span>Update Equipment</span></a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>View All Equipment </span></a></li>
            <li><a href="#"><i class='fas fa-map-marker-alt'></i><span> Track Equipment</span></a></li>
            <li><a href="#"><i class='bx bx-cart-alt' ></i><span> Purchased Equipment</span></a></li> 

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Equipment</a></li>
        </ul>
    </li>

    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-file-invoice-dollar'></i>
                <span class="link_name">Bill</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Bill</a></li>
            <li><a href="#"><i class='fas fa-spinner'></i><span>Search Bill </span></a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>View Bill </span></a></li>

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Bill</a></li>
        </ul>
    </li>


    <li>
        <div class="iocn-link">
            <a href="#">
                <i class='fas fa-comment-alt'></i>
                <span class="link_name">Feedback</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
            <li><a class="link_name" href="#">Feedback</a></li>
            <li><a href="#"><i class='fas fa-list'></i><span>View Feedback </span></a></li>
            <li><a href="#"><i class='fas fa-chart-line'></i><span>Track Technician's Performance </span></a></li>

        </ul>
        <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Feedback</a></li>
        </ul>
    </li>


</ul>
  </div>

  <section class="home-section">
    <header class="home-content">
    <div class="header-container">
      <i class='bx bx-menu' ></i>
      <span class="text">  </span>
    </div>
    </header>
  </section>



  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


