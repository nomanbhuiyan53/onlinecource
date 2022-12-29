@extends('admin.mainsection.admin_main')
@section('section')
<div class="main_container">
    <!-- admit section_container -->
    <div class="main pt_40 pb_24">
        <!-- admit_section_container -->
        <div class="section_container">
            <form action="{{ route('reg.store') }}" method="post">
                @csrf
                <div class="row">
                    <label for="exampleFormControlInput1" class="form-label border-bottom"><h3>Registation Form</h3> </label>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">User Type</label>
                        <select name="user_type" class="form-select" aria-label="Default select example">
                            <option selected>Select User Type</option>
                            <option value="instructor">Instructor</option>
                            <option value="student">Student</option>
                          </select>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
                  
            </form>
        </div>
    </div>
</div>
@endsection