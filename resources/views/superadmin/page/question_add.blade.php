@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">            

              <!-- Vertical Form -->
              <form action="{{ route('question.add') }}" method="POST" class="row g-3">
                @csrf
                <div class="additem">

                        <h5 class="card-title">Add New Question</h5>
                        <div class="col-md-6 mt-3">
                            <label for="inputEmail4" class="form-label">Select Question Category </label> 
                            <select name="que_cat_id" class="form-select">
                                <option value="" selected disabled>Select Question Category</option>
                                @foreach ($data as $item )
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="col-12">
                        <label for="inputNanme4" class="form-label">Question</label>
                        <input type="text" name="question[]" class="form-control" id="inputNanme4">
                        </div>
                        <div class="optin_section">
                                <div class="col-12">
                                <label for="inputEmail4" class="form-label">Option 1</label>
                                <input type="text" name="op_1[]" class="form-control op_1" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Option 2</label>
                                    <input type="text" name="op_2[]" class="form-control op_2" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Option 3</label>
                                    <input type="text" name="op_3[]" class="form-control op_3" id="inputEmail4">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Option 4</label>
                                    <input type="text" name="op_4[]" class="form-control op_4" id="inputEmail4">
                                </div>

                                <div class="col-12 mt-3">
                                    <label for="inputEmail4" class="form-label">Answer : </label> 
                                    <select name="ans" class="form-select answer">
                                        
                                    </select>
                                </div>
                        </div>
                        
                       
                        <div class="col-md-4 pt-3">
                            <span class="btn btn-warning addmoreitem">Add Another Question</span>
                        </div>
                    </div> <!-- add item end-->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            
              </form><!-- Vertical Form -->


              {{-- another question --}}
              <div style="display: none">
                <div class="add_another_question" id="add_another_question">
                    <div class="remove_question" id="remove_question">
                        <h5 class="card-title">Add More Question</h5>
                        <div class="col-12">
                        <label for="inputNanme4" class="form-label">Question</label>
                        <input type="text" name="question[]" class="form-control" id="inputNanme4">
                        </div>
                        <div class="optin_section">
                            <div class="col-12">
                            <label for="inputEmail4" class="form-label">Option 1</label>
                            <input type="text" name="op_1[]" class="form-control op_1" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Option 2</label>
                                <input type="text" name="op_2[]" class="form-control op_2" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Option 3</label>
                                <input type="text" name="op_3[]" class="form-control op_3" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Option 4</label>
                                <input type="text" name="op_4[]" class="form-control op_4" id="inputEmail4">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="inputEmail4" class="form-label">Answer</label> 
                                <select name="ans" class="form-select answer">
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 pt-3">
                            <span class="btn btn-warning addmoreitem">Add Another Question</span>
                            <span class="btn btn-warning remove_item">remove</span>
                        </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
      </div>
    </div>
  </section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">    
     var counter = 0;
     $(document).on("click",".addmoreitem",function(event){
        event.preventDefault();  
         var add_another_question = $('#add_another_question').html();
         $(this).closest(".additem").append(add_another_question);
         counter++;
     });
     $(document).on("click",'.remove_item',function(event){
        event.preventDefault(); 
         $(this).closest(".remove_question").remove();
         counter -= 1;
     });

     
     $(document).on('click','.answer',function(event){
        event.preventDefault();
        let options= $(this).parent().parent();
        let a = options.find('.op_1').val();
        let b = options.find('.op_2').val();
        let c = options.find('.op_3').val();
        let d = options.find('.op_4').val();
        $(this).empty();
        $(this).append(`<option selected disabled>Select Answer</option>
                                  <option value="${a}">
                                       ${a}
                                  </option> <option value="${b}">
                                       ${b}
                                  </option><option value="${c}">
                                       ${c}
                                  </option><option value="${d}">
                                       ${d}
                                  </option>`);
     });


</script>
@endsection