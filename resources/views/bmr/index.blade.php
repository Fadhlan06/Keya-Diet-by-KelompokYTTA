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
              <h3 class="card-title">Menghitung Kalori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="GET" action="{{ route('bmr.hasil') }}">
              @csrf
              <div class="card-body">
                <label>Apakah Jenis Kelamin Anda ?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" id="pria" value="pria" name="gender">
                  <label class="form-check-label" id="pria">Pria</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" value="wanita" id="wanita" >
                  <label class="form-check-label" id="wanita">Wanita</label>
                </div>
                      <div class="form-group">
                  <label for="Usia">Berapa Usia Anda ?</label>
                  <input type="number" name="usia" min="0" class="form-control" id="usia" placeholder="Masukan Usia">
                </div>
                <div class="form-group">
                  <label for="tinggi">Berapa Tinggi Anda ? (cm)</label>
                  <input type="number" min="0" name="tinggi" class="form-control" id="tinggi" placeholder="Masukan Tinggi">
                </div>
                <div class="form-group">
                  <label for="bb">Berapa Berat Badan Anda ? (kg)</label>
                  <input type="number" min="0" name="bb" class="form-control" id="bb" placeholder="Masukan Berat Badan">
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Hitung</button>
                {{-- <a href="{{ route('bmr.hasil') }}" class="btn btn-danger">Hitung</a> --}}
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
    </div><!-- /.container-fluid -->
  </section>
@endsection
