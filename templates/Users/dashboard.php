<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>POS Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">  
  <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"> </script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <!-- Include your custom CSS styles here -->
  <style>
   
    body {
      background-color: #f8f9fa; /* Set your preferred background color */
      font-size:15px;
    }
  

    .sidebar {
      background-color: #343a40; /* Set your preferred sidebar background color */
      color: #ffffff; /* Set your preferred text color for the sidebar */
    }
    /* mobile */
    @media screen and (max-width: 430px) {
  .card {
    background-color: yellow;
  }
  .qtn{
    width:90%;
    height:140px;
    margin-left:auto;
    margin-bottom:40px;
    
  }
  .checkbtn{
      color:white;
      float:right;
      display:block;
      margin-right:100px; 
      font-size:20px;
    }
    ul{
      transition: all 0.5s;
      
    }
    #check{
      display:none;
    }
    #check:checked ~ul{
      margin-left:10px;
    }
  .qtnty{
    width:92%;
    height:390px;
    margin-left:auto;
    margin-bottom:50px;
  }
  .tbdsn{
    overflow-x:scroll;
  }
 
}
/* tablet */

@media screen and (min-width: 431px) {
  .card {
    background-color: red;
  }
  .qtn{
    width:90%;
    margin-left:10px;
    margin-bottom:60px;
  }
  .checkbtn{
      color:white;
      float:right;
      display:block;
      margin-right:100px; 
    }
    #check{
      display:none;
    }
    #check:checked ~ul{
      left:0;
    }
  .qtnty{
    width:115%;
    margin-left:20px;
    margin-right:20px;
    margin-bottom:30px;
    margin-bottom:60px;
  }
  
}
@media screen and (max-height: 720px) {
  .card {
    background-color: gold;
  }
  .qtn{
    width:90%;
    margin-left:10px;
    margin-bottom:60px;
  }
  .qtnty{
    width:90%;
    margin-left:20px;
    margin-right:20px;
    margin-bottom:30px;
    margin-bottom:60px;
  }
  .tbdsn{
    overflow-x:scroll;
  }
  
}
@media screen and (max-height: 653px) {
  .card {
    background-color: gold;
  }
  .qtn{
    width:90%;
    margin-left:10px;
    margin-bottom:60px;
  }
  .qtnty{
    width:90%;
    margin-left:20px;
    margin-right:20px;
    margin-bottom:30px;
    margin-bottom:60px;
  }
  
  
}
@media screen and (height: 1366px) {
  .card {
    background-color: pink;
  }
  .qtn{
    width:90%;
    margin-left:10px;
    margin-bottom:60px;
  }
  .qtnty{
    width:90%;
    margin-left:20px;
    margin-right:20px;
    margin-bottom:30px;
    margin-bottom:60px;
  }
  .tbdsn{
    overflow-x:scroll;
  }
  .ers{
    width:100%;
  }
  
}

/* desktop */

@media screen and (min-width:1025px) {
  .card {
    background-color: white;
  }
  .qtn{
    width:100%;
    margin-left:0px;
    margin-bottom:0px;
  }
.qtnty{
  width:100%;
    margin-left:0px;
    margin-bottom:0px;
    margin-bottom:0px;
}
.checkbtn{
      color:white;
      float:right;
      display:none;
      margin-right:100px; 
    }

}
  </style>
</head>
<body>


    <div class="">
       <div class="row">
        <div class="col-lg-2">
        <nav id="sidebar" class="sidebar bg-dark ch-100" style="height:250vh; margin-left:-8px;">
        <input type="checkbox" id="check">
    <label for="check" class="checkbtn"><i class="fa fa-bars"></i></label>
    <div class="position-sticky">
      
        <ul class="nav flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dashboard
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:15px; width:200px;">
              <li><a class="dropdown-item" href="#"> Default</a></li>
              <li><a class="dropdown-item" href="#">Analytic</a></li>
              <li><a class="dropdown-item" href="#">Ecommerce</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Home
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Auths
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:15px; width:200px;">
              <li><a class="dropdown-item" href="#"> Defaults</a></li>
              <li><a class="dropdown-item" href="#">Analytic</a></li>
              <li><a class="dropdown-item" href="#">Ecommerce</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:15px; width:200px;">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Form
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:15px; width:200px;">
              <li><a class="dropdown-item" href="#"> Defaults</a></li>
              <li><a class="dropdown-item" href="#">Analytic</a></li>
              <li><a class="dropdown-item" href="#">Ecommerce</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Table 
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size:15px; width:200px;">
              <li><a class="dropdown-item" href="#"> Defaults</a></li>
              <li><a class="dropdown-item" href="#">Analytic</a></li>
              <li><a class="dropdown-item" href="#">Ecommerce</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">
              Log out 
            <i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
        </div>
            <div class="col-lg-10 col-md-12 col-sm-12 bg-white border-0 shadow mb-auto">
            <nav class="navbar navbar-expand-lg navbar-light bg-light flex-column">
  <div class="container-fluid">
   <button class="navbar-toggler me-auto text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Layout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Users
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">email</a></li>
            <li> <a class="nav-link" href="#">Log out <i class="fa fa-sign-out"></i></a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>   
</nav>
<main class="col-lg-12 col-md-12">
      <!-- Your page content goes here -->
      <h4 class="mt-2">Admin Dashboard</h4>
      <div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="qtn card border-0 shadow">
      <div class="card-body">
        <h5 class="card-title text-success">Total Earning</h5>
        <h2 class="card-text text-success">$3000 <i class="fa fa-money text-success ms-5"></i></h2>
        <p>Updated regular</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="qtn card border-0 shadow">
      <div class="card-body bg-primary">
        <h5 class="card-title text-white">Visitors</h5>
         <h2 class="card-text text-white">120 <i class="fa fa-user text-white ms-5"></i></h2>
         <p class="text-white">Counting the visitors</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="qtn card border-0 shadow">
      <div class="card-body">
        <h5 class="card-title text-danger">Orders</h5>
         <h2 class="card-text text-danger">400 <i class="fa fa-shopping-cart text-danger ms-5"></i></h2>
         <p>The count of orders</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="qtn card border-0 shadow">
      <div class="card-body">
        <h5 class="card-title text-info">Sales</h5>
         <h2 class="card-text text-info">120 <i class="fa fa-bullhorn text-info ms-5"></i></h2>
         <p>The total count in sales</p>
      </div>
    </div>
    
  </div>
  <div class="col-lg-6 col-md-10 mt-4">
    <div class="qtnty card border-0 shadow">
      <div class="card-body">
      <div class="container mt-5">  
      <h5 class="card-title">Sales Report</h5>
      <canvas id="salesChart" width="400" height="200"></canvas>
</div>
      </div>
    </div>
  </div>
<div class="col-lg-6 col-md-10 mt-4">
    <div class="qtnty card border-0 shadow">
      <div class="card-body">
      <div class="container mt-5">  
      <h5 class="card-title">Sales Report</h5>
      <canvas id="salesChart3" width="400" height="200"></canvas>
      
</div>
      </div>
    </div>
  </div>
  <h2 class="mt-4">Employee Details</h2>
  <h4 class="mt-2">Employee status</h4>
  <hr>
<div class="ers col-lg-3 col-md-10 mt-4">
    <div class="qtnty card border-0 shadow" style="height: 81.5vh;">
      <div class="card-body">
      <div class="container mt-5">  
      <h5 class="card-title">Sales Report</h5>
      <canvas id="salesChart5" width="400" height="200"></canvas>
      
</div>
      </div>
    </div>
  </div>
  <div class="ers col-lg-9 col-md-10 mt-4">
    <div class="qtnty card border-0 shadow">
      <div class="tbdsn card-body">
      <table id="example" class="table table-striped" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012-08-06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009-09-15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008-12-13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008-12-19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013-03-03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008-10-16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012-12-18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010-03-17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012-11-27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010-06-09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009-04-10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012-10-13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012-09-26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011-09-03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009-06-25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011-12-12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>2010-09-20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009-10-09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010-12-22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010-11-14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011-06-07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010-03-11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011-08-14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sydney</td>
                <td>37</td>
                <td>2011-06-02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009-10-22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011-05-07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008-10-26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011-03-09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-12-09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008-12-16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010-02-12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009-02-14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008-12-11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008-09-26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011-02-03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011-05-03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009-08-19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013-08-11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009-07-07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012-04-09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010-01-04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012-06-01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013-02-01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011-12-06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011-03-21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009-02-27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010-07-14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008-11-13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011-06-27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011-01-25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
      </div>
    </div>
  </div>
  <div class="col-lg-12 col-md-10 mt-4">
  <h2>Progress</h2>
  <p>information progress</p>
  <hr>
    <div class=" card border-0 shadow mb-4" style="margin-top:20px;">
      <div class="card-body">
      <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Progress</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>25%</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Position</td>
                <td><div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>60%</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Position</td>
                <td><div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>10%</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>75%</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>90%</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>20%</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td><div class="progress">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                <td>80%</td>
            </tr>
           
        </tbody>
    </table>
      </div>
    </div>
  </div>
</div>
    </main>
                </div>

            
       </div>
    </div>
<!-- <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4">

      </div>
    </div>
    <div class="row col-lg-9 bg-info">
      <h1>dfgfgdfg</h1>
    </div>
    <div class="row col-lg-3">
      <h1>dfgfgdfg</h1>
    </div>
    <div class="row col-lg-3">
      <h1>dfgfgdfg</h1>
    </div>
     
</div> -->
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <!-- Content -->

  </div>
</div>
  <!-- Main content -->
</div>

<script>
  // Sample data for the chart
  var salesData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Sales',
      backgroundColor: 'lightblue',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
      data: [65, 59, 80, 81, 56, 55],
    }]
  };

  // Get the context of the canvas element
  var ctx = document.getElementById('salesChart').getContext('2d');

  // Create the chart using Chart.js
  var salesChart = new Chart(ctx, {
    type: 'bar',
    data: salesData,
  });
</script>
<script>
    // Add custom script to handle double-click toggle off
    document.addEventListener('DOMContentLoaded', function () {
        var navbarToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.querySelector('.navbar-collapse');

        navbarToggler.addEventListener('click', function () {
            // Manually toggle the collapse state on each click
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        });
    });
</script>
<script>
var salesData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Sales',
      backgroundColor: 'blue',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
      data: [65, 59, 80, 81, 56, 55],
    }]
  };

  // Get the context of the canvas element
  var ctx = document.getElementById('salesChart3').getContext('2d');

  // Create the chart using Chart.js
  var salesChart3 = new Chart(ctx, {
    type: 'line',
    data: salesData,
  });
</script>
<script>
  // Sample data for the chart
  var salesData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
      label: 'Sales',
      backgroundColor: 'orange',
      borderWidth: 1,
      data: [65, 59, 80, 81, 56, 55],
    }]
  };

  // Get the context of the canvas element
  var ctx = document.getElementById('salesChart5').getContext('2d');

  // Create the chart using Chart.js
  var salesChart5 = new Chart(ctx, {
    type: 'pie',
    data: salesData,
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  new DataTable('#example');
  
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
