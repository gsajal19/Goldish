<?php include 'config.php'?>
<style>
  .admin_svg?cache=<?php echo uniqid();?>_header{
    fill:#C6AD8A !important; 
  }
  </style>
  
<nav
      class="sidebar vertical-scroll dark_sidebar ps-container ps-theme-default ps-active-y"
    >
      <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="img/logo_whit.png" alt /></a>
        <div class="sidebar_close_icon d-lg-none">
          <i class="ti-close"></i>
        </div>
      </div>
      <ul id="sidebar_menu">
        <li class="mm-active">
          <a href="#" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/dashboard.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Dashboard</span>
          </a>
     
        </li>
      
        <li class>
          <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/2.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Customers</span>
          </a>
          <ul>
            <li><a href="editor.html">Customer</a></li>
            <li><a href="mail_box.html">New Customer</a></li>
          </ul>
        </li>
        <li class>
          <a class="has-arrow" href="#" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/3.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Categories</span>
          </a>
          <ul>
            <li><a href="colors.html">colors</a></li>
            <li><a href="Alerts.html">Alerts</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="modal.html">modal</a></li>
   
          </ul>
        </li>

        <li class>
          <a href="Board.html" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/5.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Products</span>
          </a>
        </li>
        <li class>
          <a href="invoice.html" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/6.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Invoice</span>
          </a>
        </li>
        <li class>
          <a href="calender.html" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/7.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Order</span>
          </a>
        </li>
        <li class>
          <a  href="#" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/8.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Coupon Code</span>
          </a>
          
        </li>
        <li class>
          <a  href="#" aria-expanded="true">
            <div class="icon_menu">
              <img src="img/menu-icon/8.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>Profile</span>
          </a>
        
        </li>
        <li class>
          <a  href="#" aria-expanded="false">
            <div class="icon_menu">
              <img src="img/menu-icon/9.svg?cache=<?php echo uniqid();?>" alt />
            </div>
            <span>LogOut</span>
          </a>
        
        </li>
       
      </ul>
    </nav>