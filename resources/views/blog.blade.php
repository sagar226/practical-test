@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
  
      <div class="col-md-9 mx-auto mb-5">
        <div class="border-bottom">
          <a href="#" class="d-block"><h1 class="text-dark" style="font-weight: 600;">{{ $data->title }}</h1></a>
         <img  style="height:250px;" src="data:image/png;base64,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" alt="">
          <p class="text-secondary" style="line-height: 1.8;">{{ $data->desc }}</p>
          <div class="d-flex align-items-center my-4">
            <div class="d-flex align-items-center mr-4">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 300.988 300.988" style="enable-background:new 0 0 300.988 300.988;" xml:space="preserve">
              <g>
                <g>
                  <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                    S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                    s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"/>
                  <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">{{ $data->created_at }}</small>
            </div>
            <div class="d-flex align-items-center">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 60.015 60.015" style="enable-background:new 0 0 60.015 60.015;" xml:space="preserve">
                <g>
                  <path d="M42.007,0h-24c-9.925,0-18,8.075-18,18v14c0,9.59,7.538,17.452,17,17.973v8.344c0,0.688,0.411,1.304,1.047,1.568
                    c0.211,0.087,0.433,0.13,0.652,0.13c0.44,0,0.873-0.173,1.198-0.498l1.876-1.876C26.708,52.713,33.259,50,40.227,50h1.781
                    c9.925,0,18-8.075,18-18V18C60.007,8.075,51.932,0,42.007,0z M58.007,32c0,8.822-7.178,16-16,16h-1.781
                    c-7.502,0-14.555,2.921-19.86,8.226l-1.359,1.359V49v-1v-4c0-0.552-0.448-1-1-1s-1,0.448-1,1v3.949c-8.356-0.52-15-7.465-15-15.949
                    V18c0-8.822,7.178-16,16-16h24c8.822,0,16,7.178,16,16V32z"/>
                  <path d="M17.007,19.015h14c0.552,0,1-0.448,1-1s-0.448-1-1-1h-14c-0.552,0-1,0.448-1,1S16.455,19.015,17.007,19.015z"/>
                  <path d="M44.007,25.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,25.015,44.007,25.015z"/>
                  <path d="M44.007,33.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,33.015,44.007,33.015z"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">{{ isset($data->comments) ? count($data->comments) : 0  }} comments</small>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <div class="container bootstrap snippets bootdey">
  <div class="col-sm-6">
      <!-- Begin tab comment and popular posts -->
      <div class="box-info full">
          <!-- Tab comments and popular posts -->
      
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Pane comments -->
            <div class="tab-pane active animated fadeInRight" id="comments">
              <!-- Begin scroll wrappper -->
              
              <div class="slimScrollDiv" style=" width: 540px;"><div class="scroll-widget">
                <div class="form-group">
                <form method="post" action="create-comment">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5"  name="comment" required></textarea>
                   
                    @if(Session::has('user_id'))
                    <input type="hidden" name="user_id" id="user_id" value="{{ Session::get('user_id') }}" >
                    <input type="hidden" name="blog_id" id="blog_id" value="{{ $data->id }}" >
                    <button type="submit" class="btn btn-primary">Comment</button>
                    @else
                    <button type="button" onclick="openForm()" class="btn btn-primary">Login</button>
                    @endif
                  </div>
                </form>
                  <ul class="media-list">
                    @if (isset($data->comments) && count($data->comments)> 0  )
                    @foreach ($data->comments as $item)
                    
                    <li class="media">
                      <a class="pull-left" href="#">
                        <img class="media-object" src="https://bootdey.com/img/Content/Twitter_bird_icon.png" alt="Avatar">
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">{{ $item->user->name }}</a> <small>{{ $item->created_at }}</small></h4>
                        <p>{{ $item->comment }}</p>
                      </div>
                    </li>
                    @endforeach
                    @endif
                  </ul>
              </div><div class="slimScrollBar" style="width: 3px; position: absolute; top: 11px; opacity: 0.4; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; left: 1px; height: 209.5734126984127px; background: rgb(134, 134, 134);"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; opacity: 0.3; z-index: 90; left: 1px; background: rgb(51, 51, 51);"></div></div><!-- End div .scroll-widget -->
            </div><!-- End div .tab-pane -->
            <div class="form-popup" id="myForm">
              <form  class="form-container">
                <h1>Login</h1>
                <p id="error"></p>
                <label for="email"><b>Email</b></label>
                <input type="text" id="email" placeholder="Enter Email" name="email" required>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" id='password' placeholder="Enter Password" name="psw" required>
            
                <button type="submit" class="btn">Login</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
              </form>
            </div>
            
          </div><!-- End div .tab-content -->
      </div><!-- End div .box-info .full -->
      <!-- End tab comment and popular posts -->
      </div>    
  </div>				              
@endsection
@section('script')
<script>
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
$("#myForm").submit(function(event) {
    $("#error").empty();
    /* stop form from submitting normally */
    var apiUrl = "login";
    event.preventDefault();
   // check if the input is valid or not
   if (!$("#myForm").validate()) return false;
    $.ajax({
        type: "POST",
        url: "/"+apiUrl, 
        data:  {
            'email' :$('#email').val(),
            'password' : $('#password').val(),
        },
        success: function(response) {
          location.reload();

        },
        error: function(response) {
          if(response.status=='406'){
            var errors = JSON.parse(response.responseText);
            errorData='<small class="form-text text-danger">'+errors.cause+'</small><br>';
            $("#error").append(errorData);
          }
            if(response.status=='422'){
            var errors = JSON.parse(response.responseText);
            errorData='';
            $.each(errors.cause.split(','), function (key, val) {
                errorData+='<small class="form-text text-danger">'+val+'</small><br>';
            });
            $("#error").append(errorData);
            }
      
        }
    });
});
 </script>   
@endsection