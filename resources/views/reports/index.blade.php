@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row mt-4" style="margin-left:32%">
            <div class="badge text-wrap font-monospace fw-bold" style="width: 30rem; background-color:#bebab4">
                <p> Please feel free to <span class="blink">Report</span> any problems!!!!!</p>
            </div>
            <script>
                function blink_text() {
                    $('.blink').fadeOut(500);
                    $('.blink').fadeIn(500);
                }
                setInterval(blink_text, 1000);
            </script>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded mt-3">
                <h2 class="text-center fw-bold mb-3">REPORT</h2>
                <form name="google-sheet">
                    <div id="form_alerts"></div>
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Enter your message" rows="5" required></textarea>
                    </div>
                    <div>
                        <button class="btn btn-dark me-2" type="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxoyvsK9pMkcKXBzBVagPo6d7pKPqq_Cb0kMwm75GM/dev'
        const form = document.forms['google-sheet']
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
        })
      </script>


@endsection
