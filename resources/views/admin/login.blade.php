@include('admin.header') 
<!-- send the link to your mail -->

@if(session()->has('gologin'))

    
    <div   id='gologin' data-gologin="{{ session()->get('gologin')}}"></div>
@endif
<!-- login with new credentails -->
@if(session()->has('loginasnew'))

    
    <div   id='loginasnew' data-loginasnew="{{ session()->get('loginasnew')}}"></div>
@endif
@if(session()->has('wrongdata'))

    
    <div   id='wrongdata' data-wrongdata="{{ session()->get('wrongdata')}}"></div>
@endif


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="images/logo1.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form id='loginform'  method="post" action="{{url('/check')}}">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            
                           
                           
                            @if (Cookie::has('user')) 

                            <label>Email address</label>
                            <input type="email" id='email' name='email' value="{{Cookie::get('user')}}" class="form-control"  placeholder="Email"> 
                            @else
                            <label>Email address</label>
                            <input type="email"  id="email" name='email' value="" class="form-control"  placeholder="Email"> 
                            

                            @endif

                        </div>
                        @if (Cookie::has('password')) 
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" name="password" value="{{Cookie::get('password')}}"  placeholder="Password">
                        </div>
                        @else
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password' class="form-control" name="password" placeholder="Password">
                        </div>
                        @endif
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" value="remember"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="{{url('/forgotpage')}}">Forgot Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- modal -->
  
<div class="modal fade" id="m12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p id='para'></p>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')