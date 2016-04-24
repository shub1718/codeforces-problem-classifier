 <?php include"tags.php"; ?>
 <?php include"problem.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="initial-scale=1.0, width=device-width" name="viewport">
  <title>problem classifier</title>
  <link href="css/base.min.css" rel="stylesheet">
  <link href="css/project.min.css" rel="stylesheet">
  <style>
   .col-md-3{
    padding-left:50px;
    padding-right:50px;
   }
   .xx{
    padding:5px;
    margin-left:10px;
    margin-top:10px;
    text-transform:lowercase;
   }
  </style>
</head>
<body class="avoid-fout">
  <header class="header header-transparent header-waterfall">
    <a class="header-logo " style="margin-left:50px" href="index.php">CodeForces Problem Classifier</a>
  </header>
  <div class="content">
    <div class="content-heading">
      <div class="container">
        <h1 class="heading">Problems</h1>
      </div>
    </div>
    <div class="container">
      <section class="content-inner">
        <h2 class="content-sub-heading">Tags</h2>
            <div class="card">
              <div class="card-main">
                <div class="card-inner">
                  <div class="container">
                      <a class="btn btn-alt xx" href="index.php" > <?php echo "All  (".$total.") "; ?></a>
                    <?php foreach($tags as $tt=>$count){  ?>
                      <a class="btn btn-alt xx" <?php echo 'href="index.php?tags='.$tt.'"' ?> > <?php echo $tt."  (".$count.") "; ?></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
        <h2 class="content-sub-heading"><?=$tag1?></h2>
        <div class="tile-wrap">
            <?php foreach($ques as $val){  ?>
          <div class="tile">
            <div class="pull-left tile-side" >
              <div >
                <a <?php echo 'href="http://codeforces.com/problemset/problem/'.$val['contestId']."/".$val['index'].'"' ?> target="_blank"><span ><?=$val['contestId']?><?=$val['index']?></span></a>
              </div>
            </div>
            <div class="tile-inner" style="margin-left:50px">
              <a <?php echo 'href="http://codeforces.com/problemset/problem/'.$val['contestId']."/".$val['index'].'"' ?> target="_blank"><span><?=$val['name']?></span></a>
            </div>
            <div class="pull-right tile-side">
              <a <?php echo 'href="http://codeforces.com/problemset/status/'.$val['contestId']."/problem/".$val['index'].'"' ?> target="_blank"><span>x <?=$val['solvedCount']?></span></a>
            </div>
          </div>
          <?php } ?>
        </div>
      </section>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <p>Shub1718</p>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/base.min.js"></script>
  <script src="js/project.min.js"></script>
</body>
</html>