<?php
  include "dbconn.php";

  $no=$_GET['no'];

  $sql = 'select * from notice where NO='.$no;

  $result = $db->query($sql);
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>기업명</title>

    <!--나눔바른고딕 웹폰트-->
    <link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="./Resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./Resources/css/modern-business.css" rel="stylesheet">
    <link href="./Resources/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./Resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--footer menu-->
    <link href="./Resources/css/footermenu.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
   <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <!--기업 CI 이미지-->
               <a class="navbar-brand" href="index.html"><img src="" alt=""></img></a>
           </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                       <a href="about.html" class="dropdown-toggle" data-toggle="dropdown">회사소개 <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li>
                               <a href="about.html">회사개요</a>
                           </li>
                           <li>
                               <a href="history.html">연혁</a>
                           </li>
                           <li>
                               <a href="organization.html">조직도</a>
                           </li>
                           <li>
                               <a href="permission.html">인·허가</a>
                           </li>
                           <li>
                               <a href="award.html">수상경력</a>
                           </li>
                           <li>
                               <a href="partners.html">기술협력사</a>
                           </li>
                       </ul>
                   </li>
                   <li class="dropdown">
                       <a href="controlsys.html" class="dropdown-toggle" data-toggle="dropdown">사업분야<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li>
                           <a href="application_field.html">적용분야</a>
                         </li>
                         <li>
                           <a href="supply_solution.html">사업영역</a>
                         </li>
                         <li>
                           <a href="handlingsystem.html">공급시스템</a>
                         </li>
                         <li>
                             <a href="representative.html">주요사업 실적</a>
                         </li>
                         <li>
                             <a href="project.php">프로젝트 실적</a>
                         </li>
                       </ul>
                   </li>
                   <li class="dropdown">
                       <a href="goods1.html" class="dropdown-toggle" data-toggle="dropdown">제품소개<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li>
                               <a href="goods1.html">제품1</a>
                           </li>
                           <li>
                               <a href="goods2.html">제품2</a>
                           </li>
                       </ul>
                   </li>
                   <li class="dropdown">
                       <a href="careers.php" class="dropdown-toggle" data-toggle="dropdown">인재채용<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li>
                               <a href="careers.php">채용공고</a>
                           </li>
                           <li>
                               <a href="procedure.html">모집요강</a>
                           </li>
                       </ul>
                   </li>
                   <li class="dropdown">
                       <a href="contactUs.html" class="dropdown-toggle" data-toggle="dropdown">고객지원<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                           <li>
                               <a href="customerSupport.html">고객기술지원</a>
                           </li>
                           <li>
                               <a href="notice.php">공지사항</a>
                           </li>
                           <li>
                               <a href="directions.html">찾아오시는 길</a>
                           </li>
                       </ul>
                   </li>
               </ul>
           </div>
         <!-- /.navbar-collapse -->
       </div>
       <!-- /.container -->
   </nav>

        <!-- Page Content -->
        <div class="container">
          <!-- Page Heading/Breadcrumbs -->
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">고객지원
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="index.html">홈</a>
                      </li>
                      <li class="active">고객지원</li>
                      <li class="active">공지사항</li>
                  </ol>
              </div>
          </div>
          <!-- /.row -->

          <!-- Content Row -->
          <div class="row">
              <!-- Sidebar Column -->
              <div class="col-sm-3">
                  <div class="list-group">
                      <a  class="list-group-item active">고객지원</a>
                      <a href="customerSupport.html" class="list-group-item">고객기술지원</a>
                      <a href="notice.php" class="list-group-item">공지사항</a>
                      <a href="directions.html" class="list-group-item">찾아오시는 길</a>
                  </div>
              </div>
              <!-- Content Column -->
              <div class="col-sm-9">
                  <h2>공지사항</h2><hr>
                    <table class="table table-striped table-bordered"  border=0 width=100% height=100%>
                      <thread>
                        <tr>
                          <th class="text-center" colspan="6"><?php echo $row["HEADER"]?></th>
                        </tr>
                      </thread>
                      <tbody>
                        <tr>
                          <td class="text-left">작성자: <?php echo $row["NAME"]?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;작성일: <?php echo $row["DATE"]?></td>
                        </tr>
                        <?php
                          if(!empty($row["CONTENTS"])){?>
                        <tr>
                          <td colspan="6" class="text-center">
                            <?php echo $row["CONTENTS"]?>
                          </td>
                        </tr>
                        <?php }?>
                        <?php
                          if(!empty($row["IMAGE"])){
                            if(!empty($row["URL"])){?>
                        <tr>
                          <td colspan="6" class="text-center">
                              <?php echo '<a href="'.$row["URL"].'">';}
                              else{?>
                        <tr>
                          <td colspan="6" class="text-center">
                            <a>
                              <?php }?>
                              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["IMAGE"] ).'"/>';?>
                            </a>
                          </td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
              </div>
            </div><hr>
          </div>
          <!-- /.row -->

        </div>

        <!-- Footer -->
        <footer>
            <div class="footer" style="height:250px">
              <div class="container">
                <div class="col-sm-9">
                <font color="gray">
                <p><br>기업명 | 기업영문명<small><br>
                  주소지 | Tel: 02-000-0000~0 (070-0000-0000~00) | Fax: 02-000-0000<br>
                  Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a>
                  <br>Copyright &copy; HyeminNoh</small></p>
                </font>
              </div>
              <div class="col-sm-3">
                <div class="row">
                  <img style="margin-top:20px" width="300px"src="Resources\images\"></img>
                </div>
                <div class="row pull-right">
                  <img style="margin-top:5px" width="130px" src="Resources\images\"></img>
                </div>
              </div>
              </div>
              <!--/.container-->
            </div>
          </footer>

    <!-- jQuery -->
    <script src="./Resources/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./Resources/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
