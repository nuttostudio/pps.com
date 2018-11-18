<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/slide1.png">
      <div class="carousel-caption d-none d-md-block">
        <img src="./img/logo.png">
        <h3>เครือข่ายเยาวชนพัฒนาบ้านเกิด</h3>
        <h5>พลังเยาวชน พลังอาสา พัฒนาบ้านเกิดด้วยฝัน สันติภาพชายแดนใต้</h5>
        <button type="button" class="btn btn-outline-success ml-4 pl-4 pr-4 pt-1 pb-1 mt-1 btn-lg" data-toggle="modal" data-target="#login-modal">
          <b>เข้าสู่ระบบ</b>
        </button>
      </div>
    </div>
    <?php 
    for ($i=0; $i < 2; $i++) { 
      ?>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slide1.png">
        <div class="carousel-caption d-none d-md-block">
          <img src="./img/logo.png">
          <h3>เครือข่ายเยาวชนพัฒนาบ้านเกิด</h3>
          <h5>พลังเยาวชน พลังอาสา พัฒนาบ้านเกิดด้วยฝัน สันติภาพชายแดนใต้</h5>
          <button type="button" class="btn btn-outline-success ml-4 pl-4 pr-4 pt-1 pb-1 mt-1 btn-lg" data-toggle="modal" data-target="#login-modal">
            <b>เข้าสู่ระบบ</b>
          </button>
        </div>
      </div>
      <?php
    }
    ?>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <font size="5"><i class="far fa-arrow-alt-circle-left"></i></font>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <font size="5"><i class="far fa-arrow-alt-circle-right"></i></font>
    <span class="sr-only">Next</span>
  </a>
</div>