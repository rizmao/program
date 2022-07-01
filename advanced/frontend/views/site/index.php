<?php

/** @var yii\web\View $this */
use yii\bootstrap4\Html;

$this->title = 'Papikos';

$this->registerCss("
.carousel {
  margin-top: -100px;
  margin-bottom: 50px;
  margin-left: -120px;
  margin-right: -120px;
}

.carousel-item img {
  width: 100vw;
  height: 400px;
  object-fit: cover;
  object-position: relative;
  overflow: hidden;
}
.card {
  border-radius: 15px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.card-img-top-logo{
  width:246,5px;
  height:200px; 
}

.cardbtn {
  border-radius: 50px;
}
.site-index {
  margin-bottom: 50px;
}
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }
");
?>

<div class="site-index">
    <div class="body-content">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/kost1.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/kost2.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/kost3.jpg" alt="...">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="<?= Yii::$app->request->baseUrl ?>/img/kamar7.jpg" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>   
<section class="py-5 text-center container">
    <div class="row py-lg-3">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"> Kamu mahasiswa yang ingin mencari kos untuk kuliah ?</h1>
        <h1 class="lead text-muted">
       pastinya harus mencari kos yang nyaman dan dengan harga terjangkau .
        </h1>
        </div>
    </div>
  </section>      
   
<br><br>
<div class="container">
    <div class="site-index">
        <div class="body-content">
        <h5>Promo Awal Tahun</h5>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik UI Puspita Tipe A Kukusan Beji Depok 62QXDQ20</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik UI Arya Tipe A Kukusan Beji Depok 2TQJ623V</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik The Cozy Dorms Kukusan Beji Depok 341852AT</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Singgahsini Ivory Mahony Tipe A Tangerang 82NVT7W4</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-left">Jadi Lebih Tangguh Saat Cari Kos</h3>
                        <h6>#TangguhBersama pilih kos terbaik hanya di Mamikos</h6>
                    </div>
                </div>  
          
<div class="container">
    <div class="site-index">
        <div class="body-content">
        <br><br>
<h5>Kost yang lagi promo </h5>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Singgahsini Omahku Seteran Tipe A Miroto Semarang X6X1HS24</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Singgahsini Griya Rambutan Tipe A Lamper Lor Semarang 672153SG</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar7.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Singgahsini Griya Rambutan Tipe B Lamper Lor Semarang 826719SG</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar8.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik Lamongan Tipe A Sampangan Semarang AU044S0C</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h5>Kost Terdekat</h5>
<div class="container">
    <div class="site-index">
        <div class="body-content">

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar9.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik House of Athaya Tipe A Gubeng Surabaya 297864SH</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar10.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik UBAYA Tipe B Rungkut Mejoyo Surabaya 618572AP</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar11.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik Mono Tipe D Dukuhpakis Surabaya 748513AM</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top-logo" src="<?= Yii::$app->request->baseUrl ?>/img/kamar12.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h6 class="card-title text-center">Kost Apik Mono Tipe B Dukuhpakis Surabaya 682714AM</h6>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                        <?= Html::a('Detail', ['/kost/create'], ['class' => 'btn btn-dark cardbtn']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h5>Review Costumer</h5>
<br><br>
<div class="container">
    <div class="site-index">
        <div class="body-content">
        <div class="text-center">
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2>Rizqi</h2>
                <p>dengan aplikasi ini saya bisa mencari kos-kosan dengan fasilitas bagus dan dengan harga terjangkau</p>
                
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2>Amalia</h2>
                <p>dengan aplikasi ini saya bisa mencari kos-kosan dengan fasilitas bagus dan dengan harga terjangkau.</p>
                
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

                <h2>Putri</h2>
                <p>dengan aplikasi ini saya bisa mencari kos-kosan dengan fasilitas bagus dan dengan harga terjangkau</p>
                
            </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
        </div>
    </div>
</div>    
    </div>
</div>
