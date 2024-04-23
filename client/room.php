<?php include('include/header.php') ;

if(!isset($_SESSION['loggedUserId'])) {
 header('Location:../login.php');
}

?>
<section id="roomType" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h2 class="my-3">Types of Rooms Available at kunene</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3989.8079543478602!2d37.71743682211327!3d0.13060706428727978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m5!1s0x17883d4a8565993b%3A0x9d9832bcfe6fef9f!2s4PJC%2B9CF%20Mikinduri!3m2!1d0.1310033!2d37.7210067!4m3!3m2!1d0.1320331!2d37.7213426!5e0!3m2!1sen!2ske!4v1713455729285!5m2!1sen!2ske" width="1500px" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
 
 <!-- Filter Drop down  -->
 <div class="float-right ">
<select name="category" id="roomFilter" class="form-control custom-select bg-white border-md filter">
  <option disabled="" selected="">FilterBy  </option>
  <option value="1">All</option>
  <option value="2">Cost below 500</option>
  <option value="3">Cost between 500 and 1000</option>
  <option value="4">Cost above 1000</option>
</select>
</div>

<br>
<br>
<br>
        <div class="row" id="contentArea">
            
           
        </div>

    </div>
</section>

<script src ="js/roomType.js" ></script>

<?php include('include/footer.php')?>

