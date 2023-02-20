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
                  <h3 class="card-title">Hitung BMR (Basal Metabolic Rate)</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm">
                  <br>
  
                      <center><h3>BMR Kamu Adalah</h3> <h2><b>{{ $bmr }} kCal</</b><h2></center>
                      <br>
                      <div class="col-md-12">
                         
                            
                         
                          <!-- /.card-header -->
                          <div class="card-body">
                            @if ($bmr < 1450)
                            <center><h4>Kalori di tubuh kamu Rendah</h4></center>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%">
                                  <span class="sr-only">20% Complete</span>
                                </div>
                              </div>
                            @elseif($bmr > 1451 && $bmr < 1900)
                            <center><h4>Kalori di tubuh kamu Normal</h4></center>
                            <div class="progress mb-3">
                              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                   aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                            @elseif($bmr > 1901 && $bmr < 2350)
                            <center><h4>Kalori di tubuh kamu Cukup</h4></center>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%">
                                  <span class="sr-only">60% Complete (warning)</span>
                                </div>
                              </div>
                            @elseif($bmr > 2351)
                            <center><h4>Kalori di tubuh kamu Tinggi</h4></center>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                     aria-valuemax="100" style="width: 100%">
                                  <span class="sr-only">80% Complete</span>
                                </div>
                              </div>
                            @endif
                            
                            
                            
                            
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                
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

            <!-- A grey horizontal navbar that becomes vertical on small screens -->

        <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-pills ml-auto p-2">
                    <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Kondisi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Resiko</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Saran</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        @if ($bmr < 1450)
                        BMR rendah menunjukkan angka BMR yang lebih kecil dari angka normal, biasanya kurang dari 1.500 kkal per hari.
                        BMR rendah berarti Anda menggunakan lebih sedikit energi untuk beraktivitas dibandingkan dengan orang normal. Hal ini dapat menyebabkan nafsu makan Anda berkurang. Dalam artian, saat makan, Anda membutuhkan porsi lebih sedikit dari orang normal untuk menambah berat badan (karena Anda lebih mudah mencapai surplus energi).
                        @elseif($bmr > 1451 && $bmr < 1900)
                        BMR normal berkisar dari -15% hingga 5%. Kebanyakan orang dengan hipertiroidisme (kelebihan hormon tiroid) memiliki BMR 20% atau lebih tinggi. Sedangkan orang dengan hipotiroidisme (kekurangan hormon tiroid) umumnya memiliki BMR 20% atau lebih rendah.
                        @elseif($bmr > 1901 && $bmr < 2350)
                        BMR cukup berkisar dari 10% hingga 20%. Kebanyakan orang dengan hipertiroidisme (kelebihan hormon tiroid) memiliki BMR 20% atau lebih tinggi. Sedangkan orang dengan hipotiroidisme (kekurangan hormon tiroid) umumnya memiliki BMR 20% atau lebih rendah.
                        @elseif($bmr > 2351)
                        BMR tinggi menunjukkan bahwa Anda perlu membakar lebih banyak kalori untuk menunjang aktivitas sehari-hari.
                        Orang dengan BMR tinggi memiliki lebih banyak otot dan lebih sedikit lemak, terlepas dari berat badannya saat ini. Hal ini dikarenakan otot cenderung menggunakan lebih banyak energi saat istirahat dibandingkan lemak.
                        @endif
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        @if ($bmr < 1450)
                        Angka metabolisme basal yang rendah merupakan faktor risiko dari resistensi insulin dan diabetes tipe 2.
                        Hal ini dapat disebabkan oleh ketidakseimbangan hormon, seperti rendahnya hormon tiroid akibat tidak mendapatkan cukup kalori dalam jangka waktu yang lama. Akibatnya, tubuh akan beradaptasi dengan kondisi tersebut. Jika Anda tidak memberi tubuh cukup kalori untuk beraktivitas, tubuh akan melakukan penyesuaian dengan menghabiskan energi tubuh yang tersisa. Setelahnya, tubuh akan mengurangi penggunaan energi Anda untuk bertahan hidup.
                        @elseif($bmr > 1451 && $bmr < 1900)
                        Orang dengan BMR normal mungkin ingin meningkatkan Basal Metabolic Rate (BMR) atau Resting Metabolic Rate (RMR). Khususnya, jika ingin menurunkan berat badan dan meningkatkan tingkat energi.
                        Meskipun tidak menimbulkan risiko kesehatan seperti BMR rendah, tetaplah berkonsultasi dengan dokter untuk memeriksa kondisi kesehatan Anda saat ini, dengan mempertimbangkan faktor gaya hidup yang dapat berpengaruh pada risiko kesehatan Anda di masa mendatang, seperti diabetes tipe 2 dan obesitas.
                        @elseif($bmr > 1901 && $bmr < 2350)
                        Orang dengan BMR cukup mungkin ingin meningkatkan Basal Metabolic Rate (BMR) atau Resting Metabolic Rate (RMR). Khususnya, jika ingin menurunkan berat badan dan meningkatkan tingkat energi.
                        Meskipun tidak menimbulkan risiko kesehatan seperti BMR rendah, tetaplah berkonsultasi dengan dokter untuk memeriksa kondisi kesehatan Anda saat ini, dengan mempertimbangkan faktor gaya hidup yang dapat berpengaruh pada risiko kesehatan Anda di masa mendatang, seperti diabetes tipe 2 dan obesitas.
                        @elseif($bmr > 2351)
                        Penyebab patologis umum dari BMR tinggi adalah demam atau kenaikan suhu tubuh yang meningkatkan fungsi metabolisme tubuh. Para ahli memperkirakan adanya peningkatan 7% dari setiap derajat Fahrenheit peningkatan suhu tubuh.
                        Penyakit tiroid juga sangat mempengaruhi BMR. Hal ini dikarenakan hormon tiroid bertanggung jawab untuk mengatur laju metabolisme sel. BMR yang tinggi biasanya disebabkan oleh hipertiroidisme (kelebihan hormon tiroid). Sedangkan hipotiroidisme (kekurangan hormon tiroid) sering kali membuat BMR menjadi rendah.
                        @endif
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        @if ($bmr < 1450)
                        Anda membutuhkan 2.520 kkal per hari. Dengan melakukan aktivitas ringan, tubuh membutuhkan 2.520 kkal setiap harinya untuk mempertahankan berat badan Anda saat ini.
                        @elseif($bmr > 1451 && $bmr < 1900)
                        Meskipun ada makanan tertentu, seperti kopi dan rempah-rempah, yang dapat meningkatkan angka metabolisme basal, perubahannya seringkali tidak terlalu mencolok. Selain itu, hasilnya hanya bertahan sebentar sehingga kurang berdampak pada penurunan berat badan.
                        Namun, aktivitas pembentukan otot bisa sedikit membantu.Hal ini dikarenakan salah satu variabel yang memengaruhi BMR atau RMR Anda (tingkat metabolisme istirahat) berdampak pada jumlah otot tanpa lemak yang Anda miliki.
                        Di angka berat badan tertentu, semakin banyak otot dan semakin sedikit lemak dimiliki menunjukkan semakin tinggi tingkat metabolisme seseorang. Pasalnya, otot cenderung menggunakan lebih banyak energi daripada lemak saat tubuh sedang istirahat.
                        Logikanya, jika Anda dapat membentuk otot sekaligus mengurangi lemak tubuh, Anda akan memiliki tingkat metabolisme istirahat yang lebih tinggi sehingga tubuh dapat membakar lemak dengan cepat dan efisien.
                        @elseif($bmr > 1901 && $bmr < 2350)
                        Meskipun ada makanan tertentu, seperti kopi dan rempah-rempah, yang dapat meningkatkan angka metabolisme basal, perubahannya seringkali tidak terlalu mencolok. Selain itu, hasilnya hanya bertahan sebentar sehingga kurang berdampak pada penurunan berat badan.
                        Namun, aktivitas pembentukan otot bisa sedikit membantu.Hal ini dikarenakan salah satu variabel yang memengaruhi BMR atau RMR Anda (tingkat metabolisme istirahat) berdampak pada jumlah otot tanpa lemak yang Anda miliki.
                        Di angka berat badan tertentu, semakin banyak otot dan semakin sedikit lemak dimiliki menunjukkan semakin tinggi tingkat metabolisme seseorang. Pasalnya, otot cenderung menggunakan lebih banyak energi daripada lemak saat tubuh sedang istirahat.
                        Logikanya, jika Anda dapat membentuk otot sekaligus mengurangi lemak tubuh, Anda akan memiliki tingkat metabolisme istirahat yang lebih tinggi sehingga tubuh dapat membakar lemak dengan cepat dan efisien.
                        @elseif($bmr > 2351)
                        Untuk mempertahankan Basal Metabolic Rate (BMR) yang tinggi, tetaplah aktif beraktivitas dan jalani gaya hidup sehat. Mulailah dengan mengonsumsi makanan bergizi dan seimbang (makan protein tanpa lemak, sayuran, dan buah). Pilih dan lakukan jenis olahraga yang tepat, yang dapat membakar lemak dan membangun otot.
                        Selalu ingat bahwa semakin tinggi BMR menunjukkan bahwa Anda harus membakar lebih banyak kalori untuk mempertahankan fungsi tubuh Anda dengan benar sepanjang hari. Hal ini pun sangat penting bagi kesehatan Anda secara keseluruhan.
                        @endif
                        
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('bmr.index') }}" class="btn btn-danger"> <i class="fa fa-undo"></i> Hitung Ulang </a>
                </div>
              </div>
              <!-- ./card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
        
      </section>
      <!-- /.content -->
@endsection