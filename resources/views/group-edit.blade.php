@extends('main')
@section('content')


<section id="" class="edit-profile sec-ptb-20 bg-gray-light g-review clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#ge-general" class="nav-link active" data-toggle="tab" role="tab">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ge-about" class="nav-link" data-toggle="tab" role="tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ge-events" class="nav-link" data-toggle="tab" role="tab">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ge-create-event" class="nav-link" data-toggle="tab" role="tab">Create Event</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ge-gallery" class="nav-link" data-toggle="tab" role="tab" >Add Photos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ge-social-media" class="nav-link" data-toggle="tab" role="tab">Social Media Links</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane fade general" id="ge-general" role="tabpanel">
                            <div class="general-sub">
                                <h4>General Settings</h4>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Group Name :</td>
                                                    <td><input type="text" class="form-control" value="Hyderabad Trekking Club - HTC"></td>
                                                </tr>
                                                <tr>
                                                    <td>Location :</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Hyderabad</option>
                                                            <option value="1">Mumbai</option>
                                                            <option value="2">Chennai</option>
                                                            <option value="3">Bangalore</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cateory :</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Arts</option>
                                                            <option value="1">Book Clubs</option>
                                                            <option value="2">Career & Business</option>
                                                            <option value="3">Tamil</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Brief:</td>
                                                    <td>
                                                        <textarea class="form-control">Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.
                                                        </textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="text-right">
                                                        <input type="submit" class="btn btn-save" value="Save">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general" id="ge-about" role="tabpanel">
                            <div class="general-sub">
                                <h4>About Group</h4>
                                <form action="" method="">
        
                                    <p>Describe:</p>
                                                    
                                    <textarea class="form-control">Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.Lorem ipsum dollor site amet the best consectuer adipiscing elites sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer adipiscing elit.</textarea>
                                    
                                    <p class="text-right mt-15">
                                        <input type="submit" class="btn btn-save" value="Save">
                                    </p>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general" id="ge-events" role="tabpanel">
                            
                        </div>
                        
                        <div class="tab-pane fade show active general" id="ge-create-event" role="tabpanel">
                            <div class="general-sub">
                                <h4>Create Event</h4>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Event Name :</td>
                                                    <td colspan="2"><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Event Date :</td>
                                                    <td><input type="date" class="form-control"></td>
                                                    <td><input type="date" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Event Time :</td>
                                                    <td><input type="time" class="form-control"></td>
                                                    <td><input type="time" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>No.of Seats :</td>
                                                    <td colspan="2"><input type="number" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Ticket Price :</td>
                                                    <td colspan="2"><input type="number" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Location :</td>
                                                    <td colspan="2">
                                                        <select class="form-control">
                                                            <option selected="">Hyderabad</option>
                                                            <option value="1">Mumbai</option>
                                                            <option value="2">Chennai</option>
                                                            <option value="3">Bangalore</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Description :</td>
                                                    <td colspan="2">
                                                        <textarea class="form-control"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Add Photos :</td>
                                                    <td colspan="2"><input type="file" class="form-control" multiple></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Person Name :</td>
                                                    <td colspan="2"><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number :</td>
                                                    <td colspan="2"><input type="number" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td class="text-right">
                                                        <input type="submit" class="btn btn-save" value="Save">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general" id="ge-gallery" role="tabpanel">
                            
                        </div>
                        
                        <div class="tab-pane fade general" id="ge-social-media" role="tabpanel">
                            <div class="general-sub">
                                <h4>Social Media Links</h4>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Facebook :</td>
                                                    <td><input type="text" class="form-control" placeholder="Paste Link Here"></td>
                                                </tr>
                                                <tr>
                                                    <td>Twitter :</td>
                                                    <td><input type="text" class="form-control" placeholder="Paste Link Here"></td>
                                                </tr>
                                                <tr>
                                                    <td>Google Plus :</td>
                                                    <td><input type="text" class="form-control" placeholder="Paste Link Here"></td>
                                                </tr>
                                                <tr>
                                                    <td>Instagram :</td>
                                                    <td><input type="text" class="form-control" placeholder="Paste Link Here"></td>
                                                </tr>
                                                <tr>
                                                    <td>Youtube :</td>
                                                    <td><input type="text" class="form-control" placeholder="Paste Link Here"></td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="text-right">
                                                        <input type="submit" class="btn btn-save" value="Save">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection