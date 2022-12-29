@extends('superadmin.mainfile.super_main')
@section('section')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body pt-5">   
                <input type="datetime-local" id="daytime">   <span class="btn btn-warning" onclick="clicks()">click</span>  
                
                <div class="d-flex">
                    <div class="result-box">
                        <div class="result" id="days"></div><span class="result-title">Day</span>
                    </div>
                    <div class="result-box">
                        <div class="result" id="hours"></div><span class="result-title">houre</span>
                    </div>
                    <div class="result-box">
                        <div class="result"  id="minutes"></div><span class="result-title">Minute</span>
                    </div>
                    <div class="result-box">
                        <div class="result"  id="seconds"></div><span class="result-title">Second</span>
                    </div>
                </div>
                <div id="after"></div>
            
            </div>
          </div>
      </div>
    </div>
  </section>
  <script >
    
    // var cm =String($('#daytime').val()) ;
    function clicks(){
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24,
        week = hour * 24 * 7;
        var cm =String($('#daytime').val()) ;
        let countDown = new Date(cm).getTime(),  // end time
        x = setInterval(function () {

            let now = new Date().getTime(), // start time
                distance = countDown - now;

            document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

            // do something later when date is reached
            if (distance < 0) {
                clearInterval(x);
                let after = document.getElementById('after');
                after.innerText = 'Wow im done!';
                after.style.display = 'block';
                document.querySelector('.d-flex').style.display = 'none';
            }

        }, second)

    }
    
   </script>

@endsection