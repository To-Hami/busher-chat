<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminLte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chat</title>


</head>
<body class="antialiased">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center mt-5">

                        <div class=" app card card-success card-outline direct-chat direct-chat-success">
                            <div class="card-header">
                                <h3 class="card-title mt-2">Enter Your Name : </h3>
                                <div class="card-tools">
                                    <input type="text" name="username"
                                           id="username" placeholder="Enter your name"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="card-body">

                                <div id="messages"></div>


                                <div class="direct-chat-messages" >

{{--                                    <div class="direct-chat-msg">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
{{--                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>--}}
{{--                                        </div>--}}

{{--                                        <img class="direct-chat-img" src="{{asset('images/man3.jpg')}}"--}}
{{--                                             alt="Message User Image">--}}

{{--                                        <div class="direct-chat-text">--}}
{{--                                            Is this template really for free? That's unbelievable!--}}
{{--                                        </div>--}}

{{--                                    </div>--}}


{{--                                    <div class="direct-chat-msg right">--}}
{{--                                        <div class="direct-chat-infos clearfix">--}}
{{--                                            <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
{{--                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>--}}
{{--                                        </div>--}}

{{--                                        <img class="direct-chat-img" src="{{asset('images/man2.jpg')}}"--}}
{{--                                             alt="Message User Image">--}}

{{--                                        <div class="direct-chat-text">--}}
{{--                                            You better believe it!--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

                                </div>

                            </div>

                            <div class="card-footer">
                                <form  id="message_form">
                                    <div class="input-group">


                                        <input type="text" name="message"
                                               id="message_input"
                                               placeholder="Type Message ..."
                                               class="form-control">

                                        <span class="input-group-append">
                                            <button type="submit" id="message_send"
                                                    class="btn btn-success">Send
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/fontawesome.min.js') }}"></script>
<script src="{{ asset('js/adminLte.min.js') }}"></script>

</body>
</html>
