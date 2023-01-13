
<html>
<head>
<title>Next Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.sidebar{
  position:fixed;
  left: 0px;
  width:250px;
  height: 100%;
  margin-top: 0.15%;
  /* left: -250px; */
  background: #fffefe;
  transition: left 0.4s ease;
  box-shadow:rgba(99, 99, 99, 0.2) 0px 0px 14px 0px;

}
.sidebar .text{
  color: rgb(0, 0, 0);
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #d4d6d9;
  letter-spacing: 1px;
}
div ul{

list-style: none;
}
div ul li{
line-height: 58.5px;
border-top: 1px solid rgba(196, 190, 190, 0.001);
}
</style>
</head>
<body>
 <div class="sidebar">
  <ul>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="dashboard.php" target="des_page"><span class="i"><i class="fa fa-bars"></i>&emsp;Dashboard</span></a></li>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="program.php" target="des_page"><span class="i"><i class="fa fa-tasks"></i>&emsp;Programs</span></a></li>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="admission.php" target="des_page"><span class="i" ><i class="fa fa fa-university"></i>&emsp;Admissions</span></a></li>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="student.php" target="des_page"><span class="i"><i class="fa fa-solid fa-graduation-cap"></i>&emsp;Students</span></a></li>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="faculty.php" target="des_page"><span class="i" ><i class="fa fa-user-circle-o" aria-hidden="true"></i>&emsp;Faculty</span></a></li>
    <li><a style="font-size:25px;text-decoration: none;color:black;" href="exam.php" target="des_page"><span class="i" ><i class="fa fa-book" aria-hidden="true"></i>&emsp;Exams</span></a></li>
   
  
</div>

</body>
</html>