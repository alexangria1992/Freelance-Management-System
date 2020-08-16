<div id="send-offer-modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Select A Proposal To Offer
                </h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body p-0">
                <div class="request-summary">
                    <img src="user_images/brock.jpg" width="50" height="50" class="rounded-circle">
                    <div id="request-description">
                        <h6 class="text-primary mb-1">Script Writing</h6>
                        <p>I Need A Programmer To Write Me A Script</p>
                    </div>
                </div>
                <div class="request-proposals-list">
                    <div class="proposal-picture">
                        <input type="radio" name="proposal_id" class="radio-custom" id="radio-1" required>
                        <label for="radio-1" class="radio-custom-label"></label>
                        <img src="proposals/proposal_files/youtube-seo-1.jpg" width="50" height="50"alt="">
                    </div>
                    <div class="proposal-title">
                        I Will Do Viral YouTube Seo Social Media Promotion
                    </div>
                    <hr>

                    <div class="proposal-picture">
                        <input type="radio" name="proposal_id" class="radio-custom" id="radio-2" required>
                        <label for="radio-2" class="radio-custom-label"></label>
                        <img src="proposals/proposal_files/youtube-seo-1.jpg" width="50" height="50"alt="">
                    </div>
                    <div class="proposal-title">
                        I Will Do Viral YouTube Seo Social Media Promotion
                    </div>
                    <hr>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="submit-proposal" class="btn btn-info" data-toggle="modal" data-dismiss="modal" data-target="#submit-proposal-details">Go Next</button>
            </div>

        </div>
    </div>
</div>


<div id="submit-proposal-details" class="modal fade">
    <div class="modal-dialog">

    </div>
</div>
<script>
    $(document).ready(function(){
        $("#send-offer-modal").modal("show");
        $("#submit-proposal").attr("disabled", "disabled");
        $(".radio-custom-label").click(function(){
            $("#submit-proposal").removeAttr("disabled");
        })

        $("#submit-proposal").click(function(){
            proposal_id = document.querySelector('input[name="proposal_id"]:checked').value;
            request_id = "";
            $.ajax({
                method: "POST",
                url: "requests/submit_proposal_details.php",
                data: {proposal_id: proposal_id, request_id: request_id}

            }).done(function(data){
                $("#submit-proposal-details .modal-dialog").html(data);
            })
        })
    })
</script>