@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User List Table</h5>
            

            <!-- Primary Color Bordered Table -->
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">User type</th>
                  <th scope="col">mobile</th>
                  <th scope="col">status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $item )
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->user_type }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            @if ($item->status == 0)
                                <p class="bg-warning rounded text-center">Not Active</p>
                            @else
                                <p class="bg-success rounded text-light text-center">Active</p>
                            @endif
                               
                        </td>
                        <td>
                            @if ($item->status == 0)
                            <a href="{{ route('user.active',$item->id) }}" class="btn btn-dark p-2">Active</a>
                            @endif
                            <a href="{{ route('user.delete',$item->id) }}" class="btn btn-danger p-2 delete-confirm">Delete</a>
                        </td>
                        {{-- {{ route('user.delete',$item->id) }} --}}
                    </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Primary Color Bordered Table -->

          </div>
        </div>

       
      </div>
    </div>
  </section>



@endsection