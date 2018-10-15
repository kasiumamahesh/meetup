   </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="{{asset('assets1/js/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{asset('assets1/js/plugins.js')}}"></script>
    <script src="{{asset('assets1/js/main.js')}}"></script>

    <script src="{{asset('assets1/js/Chart.bundle.js')}}"></script>

    <script src="{{asset('assets1/js/dashboard.js')}}"></script>
    <script src="{{asset('assets1/js/widgets.js')}}"></script>
    
    <script src="{{asset('assets1/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets1/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets1/js/lib/data-table/datatables-init.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--  @if(session()->has('mailsent') or session()->has('fileupload'))
<script type="text/javascript">
    $(document).ready(function(){
        // alert('mail send sucessfully');
    
});
     
</script>
@endif

@if(session()->has('message'))
<script type="text/javascript">
    
    alert('your must specify email id');
</script>
@endif -->

<script type="text/javascript">
    $(document).ready(function(){
        if( $('#mailexist').length >0) { // use this if you are using id, replace EleSelector with the id

   alert('you must enter your email')

}
if($('#mailsent').length>0  || $('#fileupload').length>0){

    alert('mail sent sucessfully');
}
if($('#msgdelete').length>0){

    alert(' mail deleted');
}
     
    
});
    
</script>
   


</body>
</html>
