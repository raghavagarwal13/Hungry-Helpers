<?php

 $apiKey = "rzp_test_sppE6vRFpOf1c3";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>




<form action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_sppE6vRFpOf1c3"
    data-amount="29935" 
    data-currency="INR"
    data-buttontext="Pay with Razorpay"
    data-name="Hungry Helpers"
    data-description="Get Rid Of Hunger"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-theme.color="#FFF200"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>




