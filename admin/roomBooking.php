<?php include("include/header.php"); 
if(!isset($_SESSION['loggedUserId'])) {
  echo "<script> window.location.href = '../login.php';</script>";
}
?>


<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Room Booking</h2>


    
<!-- Payment Modal -->

<div class="modal" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make Payment</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="model-payment" action="status_functions.php" method="POST" autocomplete="off">
                  <!-- for getting the id when the form is submitted  -->
            <label for="paymentType">Choose payment method</label>
            <select name="paymentType" id="paymentType" class="form-control custom-select bg-white border-md filter" required>

                <option value="Cash">Cash</option>
                <a href="C:\xampp\htdocs\booknow\Mpesa-payment\index.php"> <option value="mpesa">M-pesa</option></a>
                <option value="Credit Card">Credit Card</option>
                <option value="Debit Card">Debit Card</option>
            </select>
            <input type="hidden" id="bookingId" name="bookingId">

            
            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Pay</button>
           
          </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-margin" id="details">
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<br>

 <!-- Filter Drop down  -->
<div class="float-right filterBy">
<select name="category" id="roomBookingFilter" class="form-control custom-select bg-white border-md filter">
  <option disabled="" selected="">FilterBy </option>
  <option value="1">All Booking</option>
  <option value="2">Booked</option>
  <option value="3">Paid Booking</option>
  <option value="4">Cancelled Booking</option>
  <option value="5">Rejected Booking</option>
  <option value="6">Expired Booking</option>
  <option value="7">CheckedOut Rooms</option>
</select>
</div>


 <!-- table for the display the content  -->
 <div class="container-fluid" id="contentArea">

        
</div>


</div>

<script src="js/roomBooking.js" type="text/javascript"></script>

<?php include("include/footer.php"); ?>