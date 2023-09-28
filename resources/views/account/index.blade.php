@extends('layouts.main')
@section('main-content')
<div class="page-row row">
    <div class="col-xl-6">
        <h2 class="page-heading">User Profile</h2>
    </div>
</div>

<div class="container" style="word-wrap: break-word; width:100%; font-size:1rem; min-width: 350px" >
<div class="container">
        {{--  header  --}}
        <div class="row d-flex p-2">
            <div class="">
                <div class="row d-flex">
                    <div class="col-md-4 p-2">
                        <div class="col d-flex card employee-card p-3" style="border-bottom: 3px solid #bc3d4f;">
                            <div class="col d-flex justify-content-center">
                                <i class="bx fs-1 bx-user icon profile-picture-time" style="border-radius: 100%; border: 1px solid #bc3d4f; padding:2px; width:100px; height: 100px;"> </i>
                            </div>
                            <div class="row d-flex">
                                <div class="d-flex justify-content-center p-2"><h2 class="page-heading">{{auth()->user()->name}}</h2></div>
                                <div class="d-flex justify-content-center "><h2 class="emp-no p-1" style="color:#fff; border-radius: 3px;background:#bc3d4f;">{{$employees->employee_department ?? 'N/A'}}</h2></div>
                            </div>
                        </div>
                        <div class="col d-flex card employee-card p-3" style="border-bottom: 3px solid #bc3d4f;">

                            <h1 class="time m-3" style="font-size: 30px;  color: #bc3d4f;">Employeee Information</h1>
                            <div class="row d-flex justify-content-center p-4">
                                        {{--  all employee  --}}

                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Department</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->employee_department ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Position</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->employee_position ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Work Schedule</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                        <p class="emp-no" style="color:#bc3d4f;">
                                            {{Carbon\Carbon::parse($employees->sched_start)->format('g:i A') ?? 'N/A'}} to {{Carbon\Carbon::parse($employees->sched_end)->format('g:i A') ?? 'N/A'}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Break TIme Schedule</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                        <p class="emp-no" style="color:#bc3d4f;">
                                         {{Carbon\Carbon::parse($employees->breaktime_start)->format('g:i A') ?? 'N/A'}} to {{Carbon\Carbon::parse($employees->breaktime_end)->format('g:i A') ?? 'N/A'}}
                                        </p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Daily Rate</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->daily_rate ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Monthly Rate</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->monthly_rate ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Base Salary</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->base_salary ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Allowance per Month</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{$employees->employee_allowance ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-6 d-flex align-items-center" >
                                    <p class="emp-no">Date Hired</p>
                                    </div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                    <p class="emp-no" style="color:#bc3d4f;">{{Carbon\Carbon::parse($employees->date_hired)->format('M d, Y') ?? 'N/A'}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 p-2">
                        <div class="col d-flex card employee-card p-3" style="border-bottom: 3px solid #bc3d4f;">

                            <h1 class="time m-3" style="font-size: 30px; color: #bc3d4f;">Personal Information</h1>
                            <div class="row d-flex justify-content-center p-4">
                                        {{--  all employee  --}}
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">Full Name</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{auth()->user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">Address</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{$employees->employee_address ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">Birthday</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{Carbon\Carbon::parse($employees->employee_birthday)->format('M d, Y')}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">Contact No.</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{$employees->employee_contact_number ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">SSS No</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{$employees->sss_number ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">Pag-ibig No</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{$employees->pagibig_number ?? 'N/A'}}</p>
                                    </div>
                                </div>
                                <div class="row employee-card p-4 time-card m-1" style="word-wrap: break-word;background-color: #fff;">
                                    <div class="col-sm-3" >
                                    <p class="time">PhilHealth No</p>
                                    </div>
                                    <div class="col-sm-9 d-flex justify-content-end">
                                    <p class="" style="color:#bc3d4f;">{{$employees->philhealth_number ?? 'N/A'}}</p>
                                    </div>
                                </div>
                            </div>
                            <h1 class="time m-3" style="font-size: 30px;color:#bc3d4f;">Emergency Contact</h1>
                            <div class="row d-flex justify-content-center">

                                <div class="col-md-6 d-flex justify-content-center p-0">
                                    {{--  total emp  --}}
                                    <div class="col d-flex employee-card m-4">
                                        <div class="row p-4 m-1" style="word-wrap: break-word;">
                                            <div class="row" >
                                                <p class="time">Contact Person</p>
                                            </div>
                                            <div class="row d-flex justify-content-end">
                                                <p class="" style="color:#bc3d4f;">{{$employees->emergency_contact_name ?? 'N/A'}}</p>
                                          </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6 d-flex justify-content-center p-0">
                                    {{--  total emp  --}}
                                    <div class="col d-flex employee-card m-4">
                                        <div class="row p-4 m-1" style="word-wrap: break-word;">
                                            <div class="row" >
                                                <p class="time">Contact No.</p>
                                            </div>
                                            <div class="row d-flex justify-content-end">
                                                <p class="" style="color:#bc3d4f;">{{$employees->emergency_contact_number ?? 'N/A'}}</p>
                                          </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{--  body  --}}
        <div class="row d-flex p-2">
            <div class="">
                <div class="row d-flex">

                    <div class="col-md-8 p-2">
                        <div class="card employee-card" style="padding:20px; border-bottom: 3px solid #bc3d4f;">

                            <div class="row mt-4">
                                <div class="col-sm-6" >
                                    <div class="d-flex align-items-center">
                                        <i class='bx bxs-key section-icon' style="color:#bc3d4f;"></i>
                                        <h5 class="fs-5 time" style="color:#bc3d4f;">Change Password</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="row-auto first-row" style="word-wrap: break-word;">

                                    <form action="{{ route('update_password') }}" method="POST" method="POST" id="update_password"  enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="usern_id" id="users_id" value="{{Auth::user()->id}}">

                                        <div class="form-row row-auto">

                                            <div class="row-xl-12 m-2">
                                                <label for="txt-time">New Password:</label>
                                                <input type="password" name="new_password" class="form-control" id="new_password">
                                                <span class="text-danger error-text new_password_error"></span>
                                            </div>
                                            <div class="row-xl-12 m-2">
                                                <label for="txt-time">Confirm New Password:</label>
                                                <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                                                <span class="text-danger error-text confirm_password_error"></span>
                                            </div>
                                        </div>

                                        <div class="row-auto d-flex justify-content-end m-0 p-2">
                                            <button type="submit" class="btn btn-form btn-sm modal-btn" id="update_password_btn" >Submit</button>
                                        </div>

                                    </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-2">
                        <div class="card employee-card" style="border-bottom: 3px solid #bc3d4f">
                            <div class="row mt-4">
                                <div class="col-sm-6" >
                                    <div class="d-flex align-items-center">
                                        <i class='bx bx-qr section-icon' style="color:#bc3d4f;"></i>
                                        <h5 class="fs-5 time" style="color:#bc3d4f;">QR Code</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col p-3 d-flex justify-content-center">
                                <div class="d-flex align-items-center justify-content-center" >
                                    <img  src="http://chart.apis.google.com/chart?cht=qr&chs=500x500&chl={{Auth::user()->employee->employee_no}}" style="width: 250px; height: 250px;" >
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
            </div>

        </div>

    </div>

</div>

@section('page-scripts')
        {{-- ajax here --}}
<script>

    $(document).ready(function () {

        //CSRF TOKEN
        $.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // update password
        $("#update_password").on('submit',function(e) {

            e.preventDefault();
            $("#update_password_btn").text('Updating...');
            $('#update_password_btn').attr("disabled", true);
            var pass = this;
            $.ajax({
                url:$(pass).attr('action'),
                method:$(pass).attr('method'),
                data: new FormData(pass),
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function(){
                //Before Sending The Form
                $(pass).find('span.error-text').text('')
                },

                success: function(response) {

                    if (response.code == 0)
                    {
                        $('#update_password_btn').removeAttr("disabled");
                        $.each(response.error, function(prefix, val){
                        $(pass).find('span.'+prefix+'_error').text(val[0]);
                        });
                        $('#update_password_btn').text('Submit');
                    }
                    else
                    {
                        $("#update_password_btn").text('Submit');
                        $('#update_password_btn').removeAttr("disabled");

                        $(pass)[0].reset();

                        Swal.fire({
                            icon: 'success',
                            title: 'Updated Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,
                            toast: true,
                            position: 'top',
                            iconColor: 'white',
                            customClass: {
                                popup: 'colored-toast'
                            },
                        })
                    }

                }
            });
        });

    });

</script>
<script>
     {{--  // Function to get the current time and display it
    function displayCurrentTime() {
        // Get the current date and time

        var currentTime = currentDate.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        // Update the placeholder element with the current time
        document.getElementById('current-time').innerText = currentTime;

        // Store the current time in local storage
        localStorage.setItem('current_time', currentTime);
    }

    // Check if current time is already stored in local storage
    if (localStorage.getItem('current_time')) {
        // If stored, retrieve and display the stored time
        var storedTime = localStorage.getItem('current_time');
        document.getElementById('current-time').innerText = storedTime;
    } else {
        // If not stored, call the function to get and display the current time
        displayCurrentTime();
    }  --}}
</script>
@endsection
@endsection
