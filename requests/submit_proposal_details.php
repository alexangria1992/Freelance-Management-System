<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title h5">
                Specify Your Proposal Details
        </h5>
        <button class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body p-0">
        <div class="request-summary">
            <img src="user_images/brock.jpg" width="50" height="50"alt="" class="rounded-circle">
            <div id="request-description">
                <h6 class="text-primary mb-1">Script Writing</h6>
                <p>I Need a Programmer to Write Me A Script</p>
            </div>
        </div>
        <form action="" id="proposal-details-form">
            <div class="selected-proposal p-3">
                <h5>I Will Do Viral YoTube Seo Social Media Production</h5>
                <hr>
                <input type="hidden" name="proposal_id" value="">
                <input type="hidden" name="request_id" value="">

                <div class="form-group">
                    <label for="" class="font-weight-bold"> Description: </label>
                        <textarea name="description" class="form-control" required></textarea>  
                </div>
                <hr>

                <div class="form-group">
                    <label for="" class="font-weight-bold"> Delivery Time: </label>
                    <select name="delivery_time" id="" class="form-control float-right">
                        <option value="1 Day">1 Day</option>
                        <option value="2 Day">2 Days</option>
                        <option value="3 Day">3 Days</option>

                    </select>
                </div>
                <hr>

                <div class="form-group">
                    <label for="" class="font-weight-bold"> Total Offer Amount: </label>
                    <div class="input-group float-right">
                        <span class="input-group-addon font-weight-bold"> $</span>
                        <input type="number" name="amount" min="5" class="form-control" placeholder="5 Minimum"> 
                    </div>
                </div>
                
            </div>
        </form>
    </div>

    <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#send-offer-modal">Back</button>
        <button type="submit" class="btn btn-success">Submit Offer</button>
    </div>
</div>