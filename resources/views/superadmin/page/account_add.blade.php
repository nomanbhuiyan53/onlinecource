@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User Registation Form</h5>

            <!-- Multi Columns Form -->
            <form action="{{ route('user.reg') }}" method="POST" class="row g-3">
                @csrf
              <div class="col-md-12">
                <label for="inputName5" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="inputEmail5" class="form-label">Email</label>
                <input type="email" name="email" autocomplete="off" class="form-control" id="inputEmail5">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" name="password" autocomplete="off" class="form-control" id="inputPassword5">
              </div>
              <div class="col-12">
                <label for="inputAddress5" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
              </div>
              
              <div class="col-md-4">
                <label for="inputState" class="form-label">User Type</label>
                <select id="inputState" name="user_type" class="form-select">
                  <option selected="">Choose user type</option>
                  <option value="instuctor">Instuctor</option>
                  <option value="student">Student</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="inputZip" class="form-label">Mobile</label>
                <input type="text" name="mobile" class="form-control" id="inputZip">
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">Gender</label>
                <select id="inputState" name="gender" class="form-select">
                  <option selected="">Choose Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- End Multi Columns Form -->

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection