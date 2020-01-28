<?php
echo '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">';

    for ($day=0 ; $day < 7 ; $day++)
    {
      $showingDayString = date_format($showingDay,"Y-m-d");
      $showingTabDay = date_format($showingDay,"l")." the ".date_format($showingDay,"jS");
      $showingVar = date_format($showingDay,"l");

      $twoDMovie = GetTwoDShowings($movieid, $showingDayString);
      $twoDMovieArray = json_decode($twoDMovie);

      $threeDMovie = GetThreeDShowings($movieid, $showingDayString);
      $threeDMovieArray = json_decode($threeDMovie);

      $showingDay = date_modify($showingDay,'+1 day');
        if ($day == 0)
        {
          echo "<div class='carousel-item active'>";
          echo "<button class='card-header btn font-weight-bold disabled' id='headingDay".$showingVar."' data-toggle='collapse' data-target='#collapseDay".$showingVar."' aria-expanded='true' aria-controls='collapseDay".$showingVar."'>Today</button>";
        }
        else
        {
          echo "<div class='carousel-item'>";
          echo "<button class='card-header btn font-weight-bold disabled' id='headingDay".$showingVar."' data-toggle='collapse' data-target='#collapseDay".$showingVar."' aria-expanded='true' aria-controls='collapseDay".$showingVar."'>".$showingTabDay."</button>";
        }
          echo "<div class='card-body carousel-card'>";
              echo "<h6>2D</h6>";
              if (isset($twoDMovieArray) && sizeof($twoDMovieArray) > 0)
                {
                  for ($i=0 ; $i < sizeof($twoDMovieArray) ; $i++)
                  {
                    echo "<div class='d-inline mr-2 mb-2'>";
                      $showingDate = date('Y-m-d', strtotime($twoDMovieArray[$i]->Showing_Date));
                      $showingTime = date('H:i', strtotime($twoDMovieArray[$i]->Showing_Start_Time)); // Format the time to Hours and Minutes
                      $showingIndex = $twoDMovieArray[$i]->Showing_ID;
                      include '../Controller/getTicketCount.php';

                      // if($date > date('Y-m-d') && $ticketCount < $ticketsAvailable)
                      // {
                      //   echo "<a class='btn btn-outline-warning showingTime' href='bookTicket.php?showingid=".$twoDMovieArray[$i]->Showing_ID."'>".$time."</a>";
                      // }
                      if (date('Y-m-d') == $showingDate && date('H:i') > $showingTime)
                      {
                        echo "<a class='btn btn-outline-primary showingTime disabled' href='bookTicket.php?showingid=".$twoDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                      }
                      elseif($ticketCount >= $ticketsAvailable)
                      {
                        echo "<a class='btn btn-outline-warning showingTime disabled' href='bookTicket.php?showingid=".$twoDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                      }
                      else
                      {
                        echo "<a class='btn btn-outline-info showingTime' href='bookTicket.php?showingid=".$twoDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                      }
                    echo "</div>";
                  }
                }
                else
                {
                  echo"<p class='text-info'>No Showings on this day</p>";
                }
                echo "<hr>";
                  echo "<h6>3D</h6>";
                  if (isset($threeDMovieArray) && sizeof($threeDMovieArray) > 0)
                    {
                      for ($i=0 ; $i < sizeof($threeDMovieArray) ; $i++)
                      {
                        echo "<div class='d-inline mr-2 mb-2'>";
                          $showingDate = date('Y-m-d', strtotime($threeDMovieArray[$i]->Showing_Date));
                          $showingTime = date('H:i', strtotime($threeDMovieArray[$i]->Showing_Start_Time)); // Format the time to Hours and Minutes.
                          $showingIndex = $threeDMovieArray[$i]->Showing_ID;
                          include '../Controller/getTicketCount.php';

                          if(date('Y-m-d') == $showingDate && date('H:i') > $showingTime)
                          {
                            echo "<a class='btn btn-outline-primary showingTime disabled mb-1' href='bookTicket.php?showingid=".$threeDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                          }
                          elseif($ticketCount >= $ticketsAvailable)
                          {
                            echo "<a class='btn btn-outline-warning showingTime disabled' href='bookTicket.php?showingid=".$threeDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                          }
                          else
                          {
                            echo "<a class='btn btn-outline-info showingTime' href='bookTicket.php?showingid=".$threeDMovieArray[$i]->Showing_ID."'>".$showingTime."</a>";
                          }
                        echo "</div>";
                      }
                    }
                    else
                    {
                      echo"<p class='text-info' style='margin-bottom:33px;'>No Showings on this day</p>";
                    }
        echo "</div>";
      echo "</div>";
    }
  echo '</div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</br>';
?>
