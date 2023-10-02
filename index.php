
<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">

</head>

<body>
    <div class="container-fluid header-img">
        <div class="row">
            <div class="col-md-6 offset-md-3">

                <div class="header">
                    <h1 class="text-center">Blood is a life, pass it on!</h1>
                    <p class="text-center">Donate the blood to help the others.</p>
                </div>


                <h1 class="text-center">Search The Donors</h1>
                <hr class="white-bar text-center">

                <form method="post" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                    <div class="form-group text-center justify-content-center">

                        <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                            <option value="NULL">-- Select --</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Mymensing">Mymensing</option>
                        </select>
                    </div>
                    <div class="form-group center-aligned">
                        <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

                            <option value="NULL">Select One....</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>

                        </select>
                    </div>
                    <div class="form-group center-aligned">
                        <button type="button" class="btn btn-lg btn-danger view_data">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid red-background">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
                <hr class="white-bar">
                <p class="text-center pera-text" style="color: white">
                    The blood you donate gives someone another chance at life. One day that someone may be a close relative, a friend, a loved one—or even you.
                </p>
                <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-default btn-lg text-center center-aligned">Registration</button>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <a href="#">
                        <h3 class="text-center red">Home</h3>
                    </a>
                    <img src="images.jpg" alt="Our Vission" class="img img-responsive" width="268" height="168">
                    <p class="text-center">
                        We help people so that they can lead a peacefull life and make their life more easier
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#">
                        <h3 class="text-center red">About</h3>
                    </a>
                    <img src="target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
                    <p class="text-center">
                        We help people so that they can lead a peacefull life and make their life more easier

                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#">
                        <h3 class="text-center red">Contact Us</h3>
                    </a>
                    <img src="icon-phone.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">

                    <p class="text-center">
                        You can contact us via telephone or email<br>
                        Phone:01521438849<br>
                        <a href="#">
                            Email: akramkhanarafat12@gmail.com
                        </a>

                    </p>
                </div>
            </div>
        </div>
    </div>





    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registration Form</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insert_form">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                        <br />
                        <label>Address</label>
                        <select name="address" id="address" class="form-control">
                            <option value="NULL">-- Select --</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Barishal">Barishal</option>
                            <option value="Rajshahi">Rajshahi</option>
                            <option value="Sylhet">Sylhet</option>
                            <option value="Rangpur">Rangpur</option>
                            <option value="Mymensing">Mymensing</option>
                        </select>
                        <br />
                        <label>Select Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <br />
                        <label>Blood Group</label>
                        <select name="blood" id="blood" class="form-control">
                            <option value="NULL">Select One....</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <br />
                        <label>Enter Age</label>
                        <input type="text" name="age" id="age" class="form-control" />
                        <br />
                        <input style="text-align: right;" type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Searching Result</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="search_data">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    $(document).ready(function(){
        $('#insert_form').on("submit", function(event){
            event.preventDefault();
            if($('#name').val() == "")
            {
                alert("Name is required");
            }
            else if($('#address').val() == '')
            {
                alert("Address is required");
            }
            else if($('#gender').val() == 'NULL')
            {
                alert("Gender is required");
            }
            else if($('#blood').val() == 'NULL')
            {
                alert("Blood Group is required");
            }
            else if($('#age').val() == '')
            {
                alert("Age is required");
            }

            else
            {
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    beforeSend:function(){
                        $('#insert').val("Inserting");
                    },
                    success:function(data){
                        $('#insert_form')[0].reset();
                        $('#add_data_Modal').modal('hide');
                        $('#employee_table').html(data);
                        alert('Data Added Successfully!');
                    }
                });
            }
        });




        $(document).on('click', '.view_data', function(){
            //$('#dataModal').modal();
            var city = $('#city').val();
            console.log(city);
            var blood_group = $('#blood_group').val();
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{city:city, blood_group:blood_group},
                success:function(data){
                    $('#search_data').html(data);
                    $('#dataModal').modal('show');
                }
            });
        });
    });
</script>






<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</html>
