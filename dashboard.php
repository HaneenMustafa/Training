<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminstration.css">
   <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>

<body>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
    <div class="page-content">
        <div class="navbar">
        <nav class="header-nav">
            <p class="title">  بالعربي |</p> 
            <img class="logo" src="pics/bbc_logo.png" alt="BBC-News" >
            <p class="admin-header"> Admin panel</p>
        </nav>
        </div>
       <div class="side-bar">
           <img class="side-bar-logo" src="pics/bbc_logo.png" > <br>
           <div class="dropdown">
           <button onclick="myFunction()" class="dropbtn">Edit Categories</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#main">رئيسية</a>
    <a href="#middele">شرق أوسط</a>
    <a href="#world">عالم</a>
    <a href="#tech">علوم وتكنولوجيا</a>
    <a href="#health">صحة</a>
    <a href="#video">فيديو</a>
    <a href="#Journalism">صحافة</a>
    <a href="#trend">ترند</a>
    <a href="#serches">تحقيقات</a>
    <a href="#boadcast">بودكاست</a>
    <a href="#prog">برامجنا</a>
  </div>
</div>
         </div>
       </div>





    </div>