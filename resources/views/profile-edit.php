<?php include("header.php"); ?>


<section id="" class="edit-profile sec-ptb-20 bg-gray-light g-review clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="d-flex flex-row mt-2">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#general" class="nav-link active" data-toggle="tab" role="tab">General</a>
                        </li>
                        <li class="nav-item">
                            <a href="#email-updates" class="nav-link" data-toggle="tab" role="tab">Email Updates</a>
                        </li>
                        <li class="nav-item">
                            <a href="#privacy-settings" class="nav-link" data-toggle="tab" role="tab">Privacy Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#social-media" class="nav-link" data-toggle="tab" role="tab" >Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a href="#organizer-subscription" class="nav-link" data-toggle="tab" role="tab" >Organizer Subscription</a>
                        </li>
                        <li class="nav-item">
                            <a href="#payments-made" class="nav-link" data-toggle="tab" role="tab" >Payments made</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane fade show active general" id="general" role="tabpanel">
                            <div class="general-sub">
                                <h4>General Settings</h4>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Name :</td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>User Id :</td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Address :</td>
                                                    <td><input type="email" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Password :</td>
                                                    <td><input type="password" class="form-control"></td>
                                                </tr><tr>
                                                    <td>Location :</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Hyderabad</option>
                                                            <option value="1">Mumbai</option>
                                                            <option value="2">Chennai</option>
                                                            <option value="3">Bangalore</option>
                                                        </select>
                                                    </td>
                                                </tr><tr>
                                                    <td>Hometown :</td>
                                                    <td><input type="text" class="form-control"></td>
                                                </tr><tr>
                                                    <td>Language :</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">English</option>
                                                            <option value="1">Hindi</option>
                                                            <option value="2">Telugu</option>
                                                            <option value="3">Tamil</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday :</td>
                                                    <td><input type="date" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender :</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Male</option>
                                                            <option value="1">Female</option>
                                                            <option value="2">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bio :</td>
                                                    <td>
                                                        <textarea class="form-control"></textarea>
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
                            <hr>
                            <div class="general-sub">
                                <h4>Your Group Us Account</h4>
                                <p><a href="#!" class="md-link">Deactivate your account</a></p>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general privacy-settings" id="email-updates" role="tabpanel">
                            <div class="general-sub">
                                <h4>Email Updates</h4>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Email updates are on</p>
                                                        <small>When certain push notifications are on, we skip sending the same info via email.</small>
                                                    </td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Turn On</option>
                                                            <option value="1">Turn Off</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Messages</p>
                                                        <small>Email me when someone sends me a message</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Replies to my comments</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Weekly Calendar</p>
                                                        <small>Send a list of my events and events near me</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>New Groups</p>
                                                        <small>Tell me about new Groups that match my interests</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
    <label class="custom-control-label" for="customCheck4">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Updates from Group Us HQ</p>
                                                        <small>Tell me about new features and important Group Us news</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck6" name="example6">
    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Group Us HQ Surveys</p>
                                                        <small>Ask me about things that could make Group Us better</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck6" name="example6">
    <label class="custom-control-label" for="customCheck6">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>iCal Attachments</p>
                                                        <small>Send me email reminders with iCal attachments</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck7" name="example7">
    <label class="custom-control-label" for="customCheck7">&nbsp;</label>
</div>
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
                        
                        <div class="tab-pane fade general privacy-settings" id="privacy-settings" role="tabpanel">
                            <div class="general-sub">
                                <h4>Privacy Settings</h4>
                                <p>Control who can contact you and the information others can see on your public profile. For details, visit our <a href="faq.php" class="md-link">Help Center</a>.</p>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Who can contact you on Group Us?</td>
                                                    <td>
                                                        <select class="form-control">
                                                            <option selected="">Only Organizers</option>
                                                            <option value="1">Members of my Groups</option>
                                                            <option value="2">Any Member of Group Us</option>
                                                        </select>
                                                    </td>
                                                </tr><tr>
                                                    <td>
                                                        <p>Show groups on profile</p>
                                                        <small>On your profile, anyone can see all the groups you belong to.</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
</div>
                                                    </td>
                                                </tr><tr>
                                                    <td>
                                                        <p>Show interests on profile</p>
                                                        <small>On your profile, anyone can see your list of interests.</small>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
</div>
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
                        
                        <div class="tab-pane fade general" id="social-media" role="tabpanel">
                            <div class="general-sub">
                                <h4>Follow me on</h4>
                                <p>Check the boxes below to display your web links publicly on all your Group profiles.</p>
                                <form action="" method="">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p>Facebook</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Twitter</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
    <label class="custom-control-label" for="customCheck2">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Google-Plus</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
    <label class="custom-control-label" for="customCheck3">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Instagram</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
    <label class="custom-control-label" for="customCheck4">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Youtube</p>
                                                    </td>
                                                    <td class="text-right">
<div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customCheck5" name="example5">
    <label class="custom-control-label" for="customCheck5">&nbsp;</label>
</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td class="text-right">
                                                        <input type="submit" class="btn btn-save" value="Save">
                                                        <input type="button" class="btn" value="Cancel">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general" id="organizer-subscription" role="tabpanel">
                            <div class="general-sub">
                                <h4>Organizer Subscription</h4>
                                <p>You currently don’t have a subscription</p>
                                <p>We don’t want you to feel left out, but it looks like you’re not currently leading any Group Us. Lucky for you, it’s easy to start. Create your own group now to become an organizer and start building community.</p>
                                <div class="text-right">
                                    <a href="create-meetup.php"><input type="submit" class="btn btn-save" value="Start a Group"></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade general" id="payments-made" role="tabpanel">
                            <div class="general-sub">
                                <h4>Payments you've made</h4>
                                <p>There are no payments to display.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include("footer.php"); ?>