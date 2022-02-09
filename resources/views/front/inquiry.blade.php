<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Inquiry</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="theme-form" method="post" action="{{route('contactus.store')}}">
                                    @csrf
                                    <div class="form-row row">
                                        <div class="col-md-6">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control" name="full_name" id="name" placeholder="Enter Your name" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Conutry</label>
                                            <input type="text" class="form-control" name="country" id="last-name" placeholder="Country" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="review">Phone number</label>
                                            <input type="text" class="form-control" name="phone_no" id="review" placeholder="Enter your number" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="review">Write Your Message</label>
                                            <textarea class="form-control" name="message" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-solid" type="submit">Send Your Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</body>

</html>