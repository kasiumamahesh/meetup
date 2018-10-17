@include('admin.header') 

@if(session()->has('invalidtoken'))

    
    <div   id='invalidtoken' data-invalidtoken="{{ session()->get('invalidtoken')}}"></div>
@endif 
@if(session()->has('pwderror'))

    
    <div   id='pwderror' data-pwderror="{{ session()->get('pwderror')}}"></div>
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
                    <form action="{{url('/changepassword')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type="hidden" name="token_name" value="{{$id}}">
                        <div class="form-group">
                            <label>password</label>
                            <input type="password"  name='password' class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label>confirmpassword</label>
                            <input type="password"  name='cpassword' class="form-control" >
                        </div>

                        <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
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