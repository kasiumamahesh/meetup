<?php include("header.php"); ?>


    <section class="create-meetup sec-ptb-50 bg-gray-light clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="cm-tabs-form" action="paid-services.php" method="">
                        <ul id="cm-section-tabs">
                            <li class="cm-current active"><span>1.</span>Location</li>
                            <li><span>2.</span> Topic</li>
                            <li><span>3.</span> Settings</li>
                            <li><span>4.</span> Last Words</li>
                        </ul>
                        <div id="cm-fieldsets">
                            <fieldset class="cm-current">
                                <label>What's your new Group hometown?</label>
                                <select class="form-control">
                                    <option selected="">Hyderabad</option>
                                    <option value="1">Mumbai</option>
                                    <option value="2">Chennai</option>
                                    <option value="3">Bangalore</option>
                                </select>
                            </fieldset>
                            <fieldset class="next">
                                <label>What will your Group be about?</label>
                                <select class="form-control" multiple>
                                    <option selected="">Arts</option>
                                    <option value="1">Book Clubs</option>
                                    <option value="2">Career & Business</option>
                                    <option value="3">Dance</option>
                                </select>
                                <p class="cm-note">*Note : Press ctrl to select multiple topics</p>
                            </fieldset>
                            <fieldset class="next">
                                <label>What will your Group name be?</label>
                                <input type="text" class="form-control">
                                <label>Describe who should join, and what your Group will do.</label>
                                <textarea class="required"></textarea>
                            </fieldset>
                            <fieldset class="next">
                                <label>What it means to be a Group</label>
                                <ul>
                                    <li>Real, in-person conversations</li>
                                    <li>Open and honest intentions</li>
                                    <li>Always safe and respectful</li>
                                    <li>Put your members first</li>
                                </ul>
                            </fieldset>
                            <a class="btn" id="cm-next-tab">Next Section ▷</a>
                            <a href="paid-services.php"><input type="submit" class="btn" value="Agree & Continue"></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php include("footer.php"); ?>