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
        <div class=" mt-5 text-center fw-bold text-danger">
            <p>Note: Please leave the name empty if you want to stay anonymous...</p>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="card mt-5" style="margin-left:39%">
                    <div class="card-body">
                        <form method="post" id="frmSubmit" onsubmit="return checkDefault()" name="myForm">
                            <div class="mb-2">
                                <input type="checkbox" id="accept" name="check" class="ml-2 text-center" value="1">stay anonymous?
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="name" class="form-control" name="name" id="exampleInputName"
                                    placeholder="Enter you name...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter you email..." required>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                <input type="textMessage" name="message" class="form-control" id="exampleInputPassword1"
                                    placeholder="Type your message here..." required></input>

                            </div>

                            <button type="submit" id="btnSubmit" class="btn-sm btn-primary">Submit</button>

                            <div id="msg"
                                class=" pl-2 inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800 tracking-tighter">
                            </div>


                        </form>

                        {{-- the code below is for the ajax request --}}
                        <script>
                            // var c = document.getElementById("check");
                            // if (c.checked = true) {
                            //     document.getElementById("exampleInputName").readOnly = true;
                            // } else {
                            //     document.getElementById("exampleInputName").readOnly = false;
                            // }

                            jQuery('#frmSubmit').on('submit', function(e) {
                                e.preventDefault();
                                jQuery('#msg').html('Please wait...');
                                jQuery('#msg').css('color', 'red');
                                jQuery('#btnSubmit').attr('disabled', true);
                                // if ($('#accept').is(":checked")) {
                                //     jQuery("exampleInputName").prop('disabled', true);
                                // }
                                jQuery.ajax({
                                    url: 'https://script.google.com/macros/s/AKfycby_MQ2-lN4emU964KyOOjAXp_XmziTVIeWJ3iEc2FT93fofYVpDC6ZkXfAbDuPDB5Lo/exec',
                                    type: 'post',
                                    data: jQuery('#frmSubmit').serialize(),
                                    success: function(result) {
                                        jQuery('#frmSubmit')[0].reset();
                                        jQuery('#msg').html('Submitted Successfully!!');
                                        jQuery('#msg').css('color', 'green');
                                        setTimeout("$('#msg').fadeOut('slow')", 3000);
                                        jQuery('#btnSubmit').attr('disabled', false);
                                        //window.location.href='';
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </div>





@endsection
