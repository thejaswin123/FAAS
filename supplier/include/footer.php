      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                  </script> <?php echo $site_title; ?>
                </span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <div class="chat-box-container">
  <div class="chat-outer-box">
    <div class="chat-box-section">
      <div class="chat-box-header">
        <h4><span class="float-left" id="worker-nickname">NickName</span><span class="float-right chat-close-btn"><i class="fa fa-times"></i></span></h4>
        <hr>
      </div>
      <div class="chat-box-body">
        <div class="chat-box-content">
          <div class="chat-box-messages">
            <div class="all-messages" id="all-messages">
            </div>
          </div>
        </div>
      </div>
      <div class="chat-box-footer text-center">
        <hr>
        <form id="send_message">
          <input type="hidden" id="worker-id" name="worker_id" value="<?php if(isset($_SESSION['worker_id'])){echo $_SESSION['worker_id'];} ?>">
          <input type="hidden" id="member-id" name="member_id" value="<?php if(isset($_SESSION['member_id'])){echo $_SESSION['member_id'];} ?>">
          <input type="hidden" name="sender" id="full-sender" value="<?php echo $_SESSION['user_type']; ?>">
          <input type="text" name="message" class="send-message-input" id="message-value" required>
          <button class="btn-sm btn-primary border-0 send-message-btn" name="send" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
        </form >
      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="cancel-ordermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cancel Order (<b><span id="job-idcanel"></span></b>)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST">
            <input type="hidden" id="order_id-cancel" name="order_id">
            <div class="modal-body">
              <div class="form-group">
                <label>Please describe why you want to cancel your order? <span class="text-danger">*</span></label>
                <textarea class="form-control" placeholder="Describe a problem here . ." required name="description"></textarea>
              </div>
              <div class="form-group">
                <label>Please enter your steam profile link, discord or skype and our support team will contact you in the next 24 hours. <span class="text-danger">*</span></label>
                <textarea class="form-control" placeholder="Link" required name="profile_link"></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="cancel_order">Send Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="review-ordermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order Review (<b><span id="job-idreview"></span></b>)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST">
            <input type="hidden" id="order_id-review" name="order_id">
            <input type="hidden" id="member_id-review" name="member_id">
            <input type="hidden" id="worker_id-review" name="worker_id">
            <div class="modal-body">
              <div class="form-group">
                <label>Review <span class="text-danger">*</span></label>
                <textarea class="form-control" placeholder="Enter Review . ." required name="description"></textarea>
              </div>
                <label for="radio2"><input type="radio" id="radio2" checked name="review_type" value="1"><img src="../images/like.png" alt=""   class="option-image active"></label>
                <label for="radio1"><input type="radio" id="radio1" name="review_type" value="2"><img src="../images/dont.png" alt="" class="option-image"></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="add_review">Add Review</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/custom.js?v=<?php echo rand(10,1000);?>"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    
    <script src="../assets/js/paper-dashboard.min.js?v=<?php echo rand(10,1000);?>" type="text/javascript"></script>
 
    <script type="text/javascript">
      $(document).ready(function() {
        $(document).ready(function() {
          $('#DataTable').DataTable();
        });
        $(function(){
          var dtToday = new Date();
          var month = dtToday.getMonth() + 1;
          var day = dtToday.getDate();
          var year = dtToday.getFullYear();
          if(month < 10)
            month = '0' + month.toString();
          if(day < 10)
            day = '0' + day.toString();

          var maxDate = year + '-' + month + '-' + day;
          $('#dob').attr('max', maxDate);
        });
      });

      $(".cancel-order").click(function() {
        var element = $(this);
        var job_id = element.attr("data-jobID");
        var order_id = element.attr("data-orderID");
        $("#job-idcanel").html(job_id);
        $("#order_id-cancel").val(order_id);
        $("#cancel-ordermodal").modal("show");
      });

      $(".review-order").click(function() {
        var element = $(this);
        var job_id = element.attr("data-jobID");
        var order_id = element.attr("data-orderID");
        var worker_id = element.attr("data-workerID");
        var member_id = element.attr("data-memberID");
        $("#job-idreview").html(job_id);
        $("#order_id-review").val(order_id);
        $("#member_id-review").val(member_id);
        $("#worker_id-review").val(worker_id);
        $("#review-ordermodal").modal("show");
      });
    </script>
  </body>

  </html>