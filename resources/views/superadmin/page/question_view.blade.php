@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">All Question List Table</h5>
            <a href="{{ route('q.add') }}" class="btn btn-primary mb-3">Add New Question</a>
            <table class="table table-bordered border-primary">
              <thead>
                <tr>
                  <th style="width: 70%">Question</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($catg as $value)
                          <tr><th>
                            <h4>Category : {{ $value->name }}</h4>
                          </th></tr>
                            @foreach ($data as $key=>$item)

                            @if ($value->id == $item->que_cat_id)
                                                    
                            <tr>
                              <td>
                                  <ul class="orderlist">
                                  <li>
                                    
                                    <h5>{{ $key+1 }}. {{ $item->question }}</h5>
                                    <ul class="quiz">
                                        <li>
                                            <h6>{{ $item->op_1 }}</h6>
                                        </li>
                                        <li>
                                          <h6>{{ $item->op_2 }}</h6>
                                        </li>
                                        <li>
                                          <h6>{{ $item->op_3 }}</h6>
                                        </li>
                                        <li>
                                          <h6>{{ $item->op_4 }}</h6>
                                        </li>
                                      
                                    </ul>
                                    <li><h6>Answer : {{ $item->ans }}</h6></li>
                                  </li>
                                </ul>
                            </td>
                            <td>
                              <a href="{{ route('question.delete',$item->id) }}" class="btn btn-danger delete-confirm">Delete</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                       
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