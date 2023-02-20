@extends('master')

@section('content')

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Tips Diet</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pilih Tips Diet Yang Ingin Kamu Ketahui</label>
                </div>

              <div class="row">
                <div class="col">  
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/nordik.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h4>Nordik/Skandinavia</h4>
                      <p class="card-text">
                        Diet Nordik adalah pola makan yang mengharuskan Anda untuk lebih banyak makan makanan utuh yang kaya akan karbohidrat kompleks, protein, dan lemak sehat.
                        Anda juga dianjurkan makan buah-buahan beri, sayuran, dan produk susu rendah lemak.</p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/clean.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h4>Clean Eating</h4>
                      <p class="card-text">
                        Secara garis besar, diet eat clean menganjurkan untuk tidak mengonsumsi makanan olahan, junk food, serta yang mengandung bahan pengawet.
                        Kita diajak untuk mengonsumsi makanan yang alami dan utuh.
                        </p>
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/interfasting.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                      <h4>Intermitten Fasting</h4>
                      <p class="card-text">
                        Intermittent fasting (diet puasa) adalah metode untuk mengatur pola makan dengan cara berpuasa makan selama beberapa waktu.\
                        Namun di antara waktu tersebut, Anda masih dapat mengonsumsi minuman.</p>
                    </div>
                  </div>
                </div>
            </div> 

            <div class="row">
              <div class="col">  
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/vegetarian.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <h4>Vegetarian</h4>
                    <p class="card-text">Vegetarian adalah sebuah pola makan yang berfokus pada konsumsi makanan yang terbuat dari tumbuh-tumbuhan.</p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/mediterania.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <h4>Mediteranian</h4>
                    <p class="card-text">Konsumsi harian dapat disajikan setiap hari dengan frekuensi yang bervariasi. Jenis makanan dapat disajikan setiap hari seperti berbagai sayur dan buah, minyak zaitun, biji-bijian, kacang, serta rempah-rempah yang digunakan sebagai bumbu masakan.</p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('frontend/dist/tipsdiet/keto.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                    <h4>Keto</h4>
                    <p class="card-text">Diet keto adalah diet yang dilakukan dengan cara menerapkan pola makan rendah karbohidrat, namun tinggi lemak. Contohnya Telur, terutama yang mengandung omega 3
                      Daging, ayam, kalkun, sosis, steak, dan produk daging lain
                      Ikan tuna, salmon, dan makarel
                      Krim, mentega, dan keju</p>
                  </div>
                </div>
              </div>
          </div> 

                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
          </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection
