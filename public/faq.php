@@include('header.htm')
@@include('blocks/navigation.htm')
@@include('blocks/page-title.htm', {
"title": "FAQs",
"description": "FAQs"
})

<!-- @@include('blocks/feature-2.htm') -->
<!-- Give a margin -->
<div style="height: 50px;"></div>
<div class="container">
	<h1>Frequently asked questions for <img src="images/Buhratalogo3.png" alt="faq" class="privacy-logo"></h1><br>
	<!-- Section 1 -->
	<h3>Q. Do we have to pay any fees to be on Buhrata?</h3>
	<p><strong>A.</strong> Buhrata doesn't charge brands platform fees; We work on a pay-out commission model i.e brands only pay commission for successful sales.</p><br>
	<!-- Section 2 -->
	<h3> Q. How does a brand track sales and insights and measure ROI?</h3>
	<p><strong>A.</strong>
        Buhrata, has a separate dashboard for brands where they can track all the sales and monitor insights of performance metrics. Brands will use the same dashboard to view incoming requests for samples.</p><br>
	<!-- Section 3 -->
	<h3>Q. Why is integration necessary?</h3>
	<p><strong>A.</strong>
        First, our app will display prices and discounts set on your website. It's critical that your website and our app are in sync. Second, since customers will ultimately make purchases on your website, we need to keep track of the sales that have come from influencers using our app.</p><br>
	<!-- Section 4 -->
	<h3>Q. What are the steps included in integration?</h3>
	<p><strong>A.</strong>
        All a brand needs to do is contact our team; we will gather the relevant data from your team, and our technical team will do the integration. It's that easy and quick.</p><br>
	<!-- Contact Information -->
	<h3>Q.  Can a brand accept or reject a request for a sample?</h3>
	<p><strong>A.</strong>
        Yes, With the sample request, brands will be provided with the social media handle of influencers. After screening their profiles, the brand can make a decision of accepting or rejecting a request for a sample.
    </p>
    <h3>Ask Your Questions</h3>
    <form id="contact-form" class="column is-12" action="process_form.php" method="post">
        <input type="text" placeholder="Name" id="userName" name="userName" required><br><br>
        <input type="text" placeholder="Brand Name" id="brandName" name="brandName" required><br><br>
        <input type="email" placeholder="Email" id="userEmail" name="userEmail" required><br><br>
        <textarea class="column is-12" placeholder="Your Question" id="userQuestion" name="userQuestion" required style="width: 70%;height: 100px;"></textarea><br>
        <button type="submit" class="btn btn-main">Submit</button>
    </form>      
</div>
</div>
<style>
    h3{
        font-size: 20px;
    }
</style>
<!-- Margin -->
<div style="height: 50px;"></div>
<!-- @@include('blocks/testimonial.htm') -->
  <!-- process_form.php -->
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["userName"];
    $brandName = $_POST["brandName"];
    $email = $_POST["userEmail"];
    $question = $_POST["userQuestion"];

    $to = "bhavarvipul@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nBrand Name: $brandName\nEmail: $email\nQuestion: $question";

    mail($to, $subject, $message);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
} else {
    // Handle invalid requests
    echo "Invalid request";
}
?>


@@include('blocks/footer.htm')
@@include('footer.htm')