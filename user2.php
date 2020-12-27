<!DOCTYPE html>
<html>
    <head>

      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <link rel="stylesheet" href="css/bootstrap.min.css">
              <link rel="stylesheet" href="css/bootstrap-theme.min.css">
              <link rel="stylesheet" href="css/fontAwesome.css">
              <link rel="stylesheet" href="css/hero-slider.css">
              <link rel="stylesheet" href="css/owl-carousel.css">
              <link rel="stylesheet" href="css/datepicker.css">
              <link rel="stylesheet" href="css/templatemo-style.css">

              <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

              <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

      <?php
include "menu.php";
       ?>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
      <link rel="stylesheet" href="css/style.css">

      <style>
      <?php
      include "css/gallery.css";
       ?>
      </style>

    </head>

    <body>

      <section class="portfolio" id="portfolio">
      	<div class="container-fluid">
      		<div class="row">

      			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
      				<h1 class="gallery-title">Buildings</h1>
      			</div>

      			<div align="center">
      				<button class="filter-button" data-filter="all">All</button>
      				<button class="filter-button" data-filter="category1">Building 1</button>
      				<button class="filter-button" data-filter="category2">Building 2</button>
      				<button class="filter-button" data-filter="category3">Building 3</button>
            <button class= "btn btn-primary collapsible" style="font-size: 18px;border-radius: 10px;margin-bottom: 6px;" >Add building<span class="glyphicon glyphicon-plus" ></span></button>

            <div class="content">

            <div class="wrapper ">
              <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->


                <form style="padding:3%" action="###" method="post">
                  <div class="form-group">

                  <input type="text" class="form-control" id="BuildingName" name="BuildingName" placeholder="Enter Building Name">
</div>
                  <div class="form-group">

                  <textarea class="form-control" id="BuildingAddress" name="BuildingAddress" placeholder="Enter Building Address"></textarea>
</div>
                  <input type="submit" class="btn btn-success" value="Submit">
                </form>


</div>
</div>

              </div>
            </div>

      			<br/>

            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h1 class="gallery-title">Pillars</h1>
            </div>

            <br/>

            <div style=" margin: 5%;">


              						<!-- <div style="display:none;"><input name="SelectedPillar" value="'.$pillar->getID().'"/></div> -->

                  <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                    <form action="##" method="post">
                      <a class="fancybox" rel="ligthbox" onclick="$(this).closest('form').submit()">
                      <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=122" />
                          <div style="cursor: pointer;" class='img-info'>
                              <h4>Image Title 1</h4>
      						            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                        </form>
                    </div>



                  <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                    <form action="###" method="post">
                      <a class="fancybox" rel="ligthbox" onclick="$(this).closest('form').submit()">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=526" />
                          <div style="cursor: pointer;" class='img-info'>
                              <h4>Image Title 2</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                    </form>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                       <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
                          <div class='img-info'>
                              <h4>Image Title 3</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />
                          <div class='img-info'>
                              <h4>Image Title 4</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <button type="button" class="btn btn-danger">Delete Pillar</button>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=486">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=486" />
                          <div class='img-info'>
                              <h4>Image Title 5</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=846">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=846" />
                          <div class='img-info'>
                              <h4>Image Title 6</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1066">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1066" />
                          <div class='img-info'>
                              <h4>Image Title 7</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=506">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=506" />
                          <div class='img-info'>
                              <h4>Image Title 8</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1026">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1026" />
                          <div class='img-info'>
                              <h4>Image Title 9</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category1">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1077">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1077" />
                          <div class='img-info'>
                              <h4>Image Title 10</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category2">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=102">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=102" />
                          <div class='img-info'>
                              <h4>Image Title 11</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6 filter category3">
                      <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=106">
                          <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=106" />
                          <div class='img-info'>
                              <h4>Image Title 12</h4>
      						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <button type="button" class="btn btn-danger">Delete Pillar</button>
                          </div>
                      </a>
                  </div>

                  <div class="gallery_product col-sm-3 col-xs-6">
                      <a class="fancybox" rel="ligthbox" href="#">
                          <img class="img-responsive" alt="" src="img/add.png" />
                          <div class='img-info'>
                              <h4>Add Pillar</h4>
                          </div>
                      </a>
                  </div>

      		</div>
        </div>
      	</div>
      </section>


      <?php
      include "footer.php";
       ?>
    </body>

    <script>
    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');

            if(value == "all")
            {
                $('.filter').show('1000');
            }
            else
            {
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');

            }
    	    	});
    });
    /*	end gallery */

    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });

    var coll = document.getElementsByClassName("collapsible");
    var i;
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }
    </script>
</html>
