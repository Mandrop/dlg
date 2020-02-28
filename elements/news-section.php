<!-- NEWS SECTION -->

<?php

/*     $id = $_GET['id'];
    $page = $_GET['page'];
 */
    // HENT DATA
    $sql = "SELECT * FROM news";
    $sqlQuery = $db->query($sql);

     if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();

    } 




?>



<!-- NEWS SECTION NEW -->

<div class="container news-section">
  <h1 class='big-h1 mb-5'>Nyheder fra gården</h1>

    <div class="row ">

<?php 

        $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 4";
        $sqlQuery = $db->query($sql);

      if($sqlQuery){
        while ($dbFetch=$sqlQuery->fetch_object()) {

//TEXT FORKORTER
              // strip tags to avoid breaking any html
            $string = strip_tags($dbFetch->news_content);
            if (strlen($string) > 80) {

            // truncate string
            $stringCut = substr($string, 0, 80);
            $endPoint = strrpos($stringCut, ' ');

            //if the string doesn't contain any space then it will cut without word basis.
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '... ';     
}
//TEXT FORKORTER SLUT
/* BOLD TITLE TEKST */
$stringBold = $dbFetch->news_title;
$exploded = explode(" ", $stringBold, 2);
$style = "<span class='news-title-text font-weight-bolder text-uppercase'>{$exploded[0]} </span>{$exploded[1]}";
/* BOLD TITLE TEKST */

              echo " 
                <div class='col-sm-6 px-0'>

                    <div class='card'>
                      <div class='card-body'>
                          <div class='row no-gutters news'>

                            <div class='col-md-6'>
                              <img class='bd-placeholder-img news-img'  src='$dbFetch->news_image' alt=''>
                            </div>
                      <div class='col-md-6'>
                        <div class='card-body card-body-news'>
                          <h5 class='card-title card-title-news'>$style</h5>

                            <div class='card-text-news-container'>
                              <p class='card-text card-text-news'>$string</p>
                              <p class='card-text'><small class='lightgrey'>$dbFetch->news_date $dbFetch->news_time</small></p>
                            </div>

                        </div>

                      </div>

                        </div>
                    </div>
                  </div>
                </div>      
                    
                    ";
                }  
      }else{
        echo "Something is wrong";
      }
?>


    </div>

</div>
<!-- NEWS SECTION NEW -->


<!-- NEWS SECTION NEW BACKUP -->

<div class="container news-section">
  <h1 class='big-h1 mb-5'>Nyheder fra gården</h1>

    <div class="row ">
        <div class="col-sm-6 px-0">

            <div class="card">
              <div class="card-body">
                  <div class="row no-gutters news">

                    <div class="col-md-6">
                      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">
                    </div>
              <div class="col-md-6">
                <div class="card-body card-body-news">
                  <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>

                    <div class="card-text-news-container">
                      <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
                      <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
                    </div>

                </div>

              </div>

                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 px-0">

            <div class="card">
              <div class="card-body">
                  <div class="row no-gutters news">

                    <div class="col-md-6">
                      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">
                    </div>
              <div class="col-md-6">
                <div class="card-body card-body-news">
                  <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>

                    <div class="card-text-news-container">
                      <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
                      <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
                    </div>

                </div>

              </div>

                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 px-0">

            <div class="card">
              <div class="card-body">
                  <div class="row no-gutters news">

                    <div class="col-md-6">
                      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">
                    </div>
              <div class="col-md-6">
                <div class="card-body card-body-news">
                  <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>

                    <div class="card-text-news-container">
                      <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
                      <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
                    </div>

                </div>

              </div>

                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6 px-0">

            <div class="card">
              <div class="card-body">
                  <div class="row no-gutters news">

                    <div class="col-md-6">
                      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">
                    </div>
              <div class="col-md-6">
                <div class="card-body card-body-news">
                  <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>

                    <div class="card-text-news-container">
                      <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
                      <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
                    </div>

                </div>

              </div>

                </div>
            </div>
          </div>
        </div>

    </div>

</div>
<!-- NEWS SECTION NEW BACKUP -->



<div class="container news-section">
<h1 class='big-h1 mb-5'>Nyheder fra gården</h1>
  <div class="card-deck">

<div class="card mb-3 news">
  <div class="row no-gutters">

    <div class="col-md-6">

      <img class="bd-placeholder-img news-img"  src="<?php echo "$dbFetch->news_image" ?>" alt="">

    </div>
    <div class="col-md-6">
      <div class="card-body card-body-news">
        <h5 class="card-title card-title-news"><?php echo "$dbFetch->news_title" ?><b>ROER</b> i butikken</h5>
        <div class="card-text-news-container">
        <p class="card-text card-text-news"><?php echo "$dbFetch->news_content" ?></p>
        <p class="card-text"><small class="lightgrey"><?php echo "$dbFetch->news_date" ?></small></p>
 
        </div>
      </div>
    </div>
  </div>
  


</div>
<div class="card mb-3 news">

  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">

    </div>
    <div class="col-md-6">
      <div class="card-body card-body-news">
        <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>
        <div class="card-text-news-container">
        <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
        <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
 
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<div class="card-deck">
<div class="card mb-3 news" >
  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">

    </div>
    <div class="col-md-6">
      <div class="card-body card-body-news">
        <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>
        <div class="card-text-news-container">
        <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
        <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
 
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="card mb-3 news" >
  <div class="row no-gutters">
    <div class="col-md-6">
      <!--<svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>-->
      <img class="bd-placeholder-img news-img"  src="images/rod-frugt.jpg" alt="">

    </div>
    <div class="col-md-6">
      <div class="card-body card-body-news">
        <h5 class="card-title card-title-news"><b>ROER</b> i butikken</h5>
        <div class="card-text-news-container">
        <p class="card-text card-text-news">Årets høst er lige kommet i hus og der er overflod af skønne rod-frugter i butikken</p>
        <p class="card-text"><small class="lightgrey">20.FEB.2020</small></p>
 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
</div>




  </div>
 

<!-- NEWS SECTION END -->