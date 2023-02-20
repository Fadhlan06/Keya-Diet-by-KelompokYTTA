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
                  <h3 class="card-title">Hitung BMI (Body Mass Index)</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm">
                  <br>
  
                      <center><h3>BMI Kamu Adalah</h3> <h2><b>{{ $bmi }}</</b><h2></center>
                      <br><br>
                      
                <div class="container">
                    <div class="row">

                    <div class="col-md-3">
                        @if ($bmi < 18.5)
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-underweight-male-active.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Kekurangan bobot < 18.5</p></center> 
                        @else   
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-underweight-male-inactive.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Kekurangan bobot < 18.5</p></center> 
                        @endif
                    </div>

                    <div class="col-md-2">
                        @if ($bmi > 18.5 && $bmi < 23.9)
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-healthy-male-active.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Sehat 18.5-23.9</p></center>
                        @else   
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-healthy-male-inactive.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Sehat 18.5-23.9</p></center>
                        @endif
                    </div>

                    <div class="col-md-2">
                        @if ($bmi > 23.9 && $bmi < 26.9)
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-overweight-male-active.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Kelebihan Bobot 23.9-26.9</p></center>
                        @else   
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-overweight-male-inactive.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Kelebihan Bobot 23.9-26.9</p></center>
                        @endif
                    </div>

                    <div class="col-md-2">
                        @if ($bmi > 27 && $bmi < 29.9)
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-obese_level_1-male-active.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Obesitas 1 ( 27-29.9 )</p></center>
                        @else   
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-obese_level_1-male-inactive.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Obesitas 1 ( 27-29.9 )</p></center>
                        @endif
                    </div>

                    <div class="col-md-2">
                        @if ($bmi > 30)
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-obese_level_1-male-active.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Obesitas 2 ( > 30  )</p> </center>
                        @else   
                            <img class="card-img-top" src="https://hellosehat.com/images/bmi-obese_level_1-male-inactive.svg" alt="Card image cap" width="250" height="250">
                            <center><p>Obesitas 2 ( > 30  )</p> </center>
                        @endif
                       
                    </div>     
                    </div>
                </div>
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
                        @if ($bmi < 18.5)
                        Nilai IMT di bawah 18,5 menandakan berat badan Anda kurang (underweight)
                        @elseif($bmi > 18.5 && $bmi < 23.9)
                        Jika nilai indeks massa tubuh Anda 18.5 sampai 24.9, artinya Anda memiliki berat badan normal.
                        @elseif($bmi > 23.9 && $bmi < 26.9)
                        Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 25.0—29.9.
                        @elseif($bmi > 27 && $bmi < 29.9)
                        Anda mengalami obesitas tingkat 1, jika BMI menunjukkan antara 30-34,9.
                        @elseif($bmi > 30)
                        Anda dianggap mengalami obesitas level 2, jika memiliki Indeks Massa Tubuh (BMI) lebih dari 35
                        @endif
                        
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        @if ($bmi < 18.5)
                        Berdasarkan hasil penelitian dari United Kingdom National Health Service, ketika berat badan Anda cukup rendah dari berat ideal, 
                        Anda juga memiliki risiko penyakit tertentu akibat kekurangan nutrisi dan sistem kekebalan tubuh yang lemah.
                        Hal ini membuka peluang pada risiko kesehatan berikut: <br>
                        – Malnutrisi. <br>
                        – Anemia.<br>
                        – Osteoporosis karena kekurangan kalsium dan vitamin D.<br>
                        – Masalah kesuburan dari siklus menstruasi tidak teratur.<br>
                        – Risiko komplikasi operasi yang lebih tinggi.<br>
                        – Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja.
                        
                        @elseif($bmi > 18.5 && $bmi < 23.9)
                        Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal.
                        Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.
                        @elseif($bmi > 23.9 && $bmi < 26.9)
                        Menurut Centers for Disease Controls (CDC), kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.
                        @elseif($bmi > 27 && $bmi < 29.9)
                        Obesitas membawa efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi kesehatan tertentu, seperti:<br>
                        – Diabetes tipe 2<br>
                        – Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang tidak sehat<br>
                        – Penyakit jantung koroner<br>
                        – Stroke<br>
                        – Penyakit kantung empedu<br>
                        – Osteoartritis<br>
                        – Sleep apnea dan masalah pernapasan<br>
                        – Peradangan kronis dan peningkatan stres oksidatif<br>
                        – Kanker<br>
                        – Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya<br>
                        @elseif($bmi > 30)
                        Obesitas meningkatkan risiko seseorang terkena diabetes tipe 2, hipertensi, penyakit jantung, stroke, osteoartritis, perlemakan hati, penyakit ginjal, dan jenis kanker tertentu.
                        @endif
                        
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        @if ($bmi < 18.5)
                        Bila Anda ingin meningkatkan berat badan, Anda perlu mengetahui terlebih dulu berapa banyak kalori yang dibutuhkan tubuh per harinya. Agar tubuh mendapatkan sumber energi yang maksimal untuk beraktivitas.
                        Menambah berat badan harus menambah massa otot bukan menambah massa lemak. Proporsi makanan harus diperhatikan tidak hanya kalori saja perlu zat gizi makro (karbohidrat, protein, lemak) dan mikro (vitamin dan mineral).
                        Anda juga bisa melakukan olahraga rutin agar otot terbentuk dengan optimal. Anda bisa menambahkan asupan kalori Anda sebanyak 300-500 kkal per hari. Misalnya, jika kebutuhan total kalori harian Anda adalah 1700 kkal. Artinya, Anda perlu mengonsumsi makanan dengan total 1700+500 = 2200 kkal per hari.
                        Untuk mengetahui berapa kalori yang Anda butuhkan setiap hari, cek di Kalkulator Kebutuhan Kalori di Hello Sehat
                        @elseif($bmi > 18.5 && $bmi < 23.9)
                        Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh.
                        Misalnya, jika kebutuhan kalori harian 1950 kkal, pastikan Anda mengonsumsi makanan dan minuman yang sesuai dengan nilai kalori tersebut. Jangan lupa juga untuk menggunakan prinsip gizi seimbang. Dengan begitu, semua jenis gizi yang dibutuhkan tubuh akan terpenuhi dengan baik.
                        @elseif($bmi > 23.9 && $bmi < 26.9)
                        Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
                        Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
                        Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. Biasanya Anda akan dianjurkan untuk mengurangi kalori harian sebanyak 5-15% dari kebutuhan sebelumnya.
                        Hal ini tergantung dengan kondisi kesehatan dan kemampuan tubuh Anda. Program menurunkan berat badan ini harus dilakukan bertahap dengan memantau kondisi tubuh. Rata-rata dengan mengurangi 500 Kkal per hari, maka penurunan berat badan yang dihasilkan per minggu sekitar 500 gram sampai 1 kilogram.
                        Tujuan dari program ini adalah menurunkan massa lemak dan meningkatkan metabolisme tubuh. Berapa kebutuhan kalori minimum setiap orang? Hal ini tergantung dengan perhitungan metabolisme basal. Setiap orang akan berbeda, karena banyak faktor yang memengaruhi hal ini, dari kondisi kesehatan, usia, jenis kelamin, berat badan, tinggi badan, dan aktivitas fisik. Oleh karena sangat subjektif, konsultasikan hal ini pada pakar diet atau nutrisionis.
                        Meski begitu, rata-rata seorang wanita butuh 2.000 Kkal per hari. Sementara rata-rata kebutuhan kalori pria berkisar 2.500 Kkal per hari. Namun setiap orang membutuhkan minimal 1200 kkal per hari untuk menjaga fungsi tubuh. Mengonsumsi kurang dari 1.200 kkal per hari akan berdampak buruk bagi kesehatan tubuh.
                        @elseif($bmi > 27 && $bmi < 29.9)
                        Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
                        Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
                        Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. Biasanya Anda akan dianjurkan untuk mengurangi kalori harian sebanyak 5-15% dari kebutuhan sebelumnya. Hal ini tergantung dengan kondisi kesehatan dan kemampuan tubuh Anda.
                        Program menurunkan berat badan ini harus dilakukan bertahap dengan memantau kondisi tubuh. Rata-rata dengan mengurangi 500 Kkal per hari, maka penurunan berat badan yang dihasilkan per minggu sekitar 500 gram sampai 1 kilogram.
                        Tujuan dari program ini adalah menurunkan massa lemak dan meningkatkan metabolisme tubuh. Berapa kebutuhan kalori minimum setiap orang? Hal ini tergantung dengan perhitungan metabolisme basal. Setiap orang akan berbeda, karena banyak faktor yang memengaruhi hal ini, dari kondisi kesehatan, usia, jenis kelamin, berat badan, tinggi badan, dan aktivitas fisik.  Oleh karena sangat subjektif, konsultasikan hal ini pada dietitian atau nutritionist.
                        Meski begitu, rata-rata seorang wanita butuh 2000 Kkal per hari. Sementara rata-rata kebutuhan kalori pria berkisar 2500 Kkal per hari. Namun setiap orang membutuhkan minimal 1200 kkal per hari untuk menjaga fungsi tubuh. Mengonsumsi kurang dari 1200 kkal per hari akan berdampak buruk bagi kesehatan tubuh.
                        @elseif($bmi > 30)
                        Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.
                        Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.
                        Misalnya, jika kebutuhan asupan kalori Anda 2100 kkal per hari, usahakan untuk mengurangi jumlahnya sekitar 300-500 kkal. Biasanya Anda akan dianjurkan untuk mengurangi kalori harian sebanyak 5-15% dari kebutuhan sebelumnya. Hal ini tergantung dengan kondisi kesehatan dan kemampuan tubuh Anda.
                        Program menurunkan berat badan ini harus dilakukan bertahap dengan memantau kondisi tubuh. Rata-rata dengan mengurangi 500 Kkal per hari, maka penurunan berat badan yang dihasilkan per minggu sekitar 500 gram sampai 1 kilogram.
                        Tujuan dari program ini adalah menurunkan massa lemak dan meningkatkan metabolisme tubuh. Berapa kebutuhan kalori minimum setiap orang? Hal ini tergantung dengan perhitungan metabolisme basal. Setiap orang akan berbeda, karena banyak faktor yang memengaruhi hal ini, dari kondisi kesehatan, usia, jenis kelamin, berat badan, tinggi badan, dan aktivitas fisik. Oleh karena sangat subjektif, konsultasikan hal ini pada dietitian atau nutritionist.
                        Meski begitu, rata-rata seorang wanita butuh 2000 Kkal per hari. Sementara rata-rata kebutuhan kalori pria berkisar 2500 Kkal per hari. Namun setiap orang membutuhkan minimal 1200 kkal per hari untuk menjaga fungsi tubuh. Mengonsumsi kurang dari 1200 kkal per hari akan berdampak buruk bagi kesehatan tubuh.
                        @endif
                        
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('bmi.index') }}" class="btn btn-danger"> <i class="fa fa-undo"></i> Hitung Ulang </a>
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