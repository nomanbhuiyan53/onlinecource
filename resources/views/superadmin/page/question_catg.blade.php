@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">            

              <!-- Vertical Form -->
              <form action="{{ route('cat.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="additem">

                        <h5 class="card-title">Add New Question Category</h5>
                        
                
                                <div class="col-12">
                                <label for="inputEmail4" autocomplete="off" class="form-label">Question Category Add</label>
                                <input type="text" name="name" class="form-control op_1" id="inputEmail4">
                                </div>
                                
                     
                    </div> <!-- add item end-->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            
              </form><!-- Vertical Form -->



            </div>
          </div>
      </div>

      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">            
                <h5 class="card-title">Question Category List :</h5>
              <table class="table table-bordered border-primary w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>


            </div>
          </div>
      </div>

    </div>
  </section>



@endsection