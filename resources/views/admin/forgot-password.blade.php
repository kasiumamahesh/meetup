@include('admin.header')
 <!--  empty mail or unformatedd mail-->
@if(session()->has('errormail'))

    
    <div   id='errormail' data-errormail="{{ session()->get('errormail')}}"></div>
@endif 
<!-- unregisterd mail -->
@if(session()->has('nomail'))

    
    <div   id='nomail' data-nomail="{{ session()->get('nomail')}}"></div>
@endif 
<!-- invalid token or expired token -->

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img class="align-content" src="images/logo1.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form  id="resetform" action="{{url('/sendlink')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email"  name='email' class="form-control" placeholder="Email">
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