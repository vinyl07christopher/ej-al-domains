<?php require 'header.php' ?>

<div class="main container mt-3">
  <h3>Registration</h3>
  <hr />

  <strong>Notification of Acceptance</strong>
  <p>
    Once the committee reaches the decision, we issue an acceptance letter to the delegates to register for the conference. Before registering to the
    conference, the authors must agree that at least one of the authors will register for the conference and present the paper.
  </p>
  <p>
    Note: Listeners and Delegations from the same area of interest can also attend the conference. Listener includes those delegates who are virtually
    attending the conference but not presenting.
  </p>

  <strong>Registration Documents</strong>
  <ol>
    <li>Final Camera Ready Paper [Updated according to reviewer comments.</li>
    <li>Copyright</li>
    <li>Payment Acknowledgement Screenshot</li>
  </ol>
  <p>Note: Confirmation of your registration will be sent by email within 2 working days of receipt.</p>

  <strong>Copyright</strong>
  <p>
    In order for ISMAC to publish and disseminate research articles, the conference needs publishing rights. This is determined by the publishing
    agreement signed between the author and publisher. The copyright deals with the transfer of rights for publication purposes only. The author
    retains significant rights to use and share their own published articles.
  </p>
  <p>
    <a href="ieeecopyrightform.doc" target="_blank" style="border-radius: 0; background-color: #972187; border-color: #972187" class="btn btn-primary"
      >IEEE Copyright form &nbsp;&darr;</a
    >
  </p>
  <p><a href="ieee-e-copyright.php" target="_blank">click here</a> to submit IEEE Ecopyright</p>

  <br />
  <div><strong>Registration Fee</strong></div>
  <table class="mt-2 mb-5">
    <style>
      table td {
        border: 1px solid #0003;
        padding: 2px 1rem;
        min-width: 180px;
      }
      table th {
        padding: 8px 1rem;
        color: #fff;
        font-weight: 400;
        text-align: center;
      }
      table thead {
        background-image: linear-gradient(to right, #16295f, #2948a5, #16295f);
      }
    </style>
    <thead>
      <tr>
        <th>Category</th>
        <th>IEEE Members</th>
        <th>Non-IEEE Members</th>
      </tr>
    </thead>
    <tr>
      <td>Students (UG/PG)</td>
      <td class="text-center">150 USD</td>
      <td class="text-center">175 USD</td>
    </tr>
    <tr>
      <td>Faculty & Scholars</td>
      <td class="text-center">175 USD</td>
      <td class="text-center">200 USD</td>
    </tr>
    <tr>
      <td>Industry Person</td>
      <td class="text-center">200 USD</td>
      <td class="text-center">250 USD</td>
    </tr>
    <tr>
      <td>Listener</td>
      <td class="text-center">110 USD</td>
      <td class="text-center">140 USD</td>
    </tr>
  </table>
  <strong>Payment Methods</strong>
  <p>Authors are requested to pay the Registration Fee (via online payments mode only) by using anyone of the following payment gateways:</p>
Please fill the registration form: <br>
<hr />
<form id="registrationForm">
    <label for="author_name">Enter the Corresponding Author Name:</label>
    <input type="text" id="author_name" name="author_name" required><br><br>

    <label for="email">Enter the Corresponding Author Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="paper_id">Acceptance ID:</label>
    <input type="text" id="paper_id" name="paper_id"><br><br>

    <button type="button" onclick="submitForm()">Submit</button>
</form>

<p id="paymentLink"></p>

<script>
function submitForm() {
    var registrationData = {
        author_name: document.getElementById("author_name").value,
        email: document.getElementById("email").value,
        paper_id: document.getElementById("paper_id").value
    };
    
    // Here, you would typically perform an AJAX POST request to your server to process the registration data and generate a payment link.
    // For the sake of simplicity, we'll just display the payment link below.
    var paymentLink = "https://www.townscript.com/v2/e/7th-international-conference-on-ismac-iot-in-social-mobile-analytics-and-cloud-321132/booking/tickets"; // Replace with your actual payment link
    document.getElementById("paymentLink").innerHTML = `<a href="${paymentLink}" target="_blank">Proceed to Payment</a>`;
}

</script>

<hr />
<!--
  <div class="mb-5">
    <li>
      <img src="townscript.png" alt="townscript" height="40px " class="mr-3" />
      <a
        href="https://www.townscript.com/v2/e/7th-international-conference-on-ismac-iot-in-social-mobile-analytics-and-cloud-321132/booking/tickets"
        target="_blank"
        class="px-3 py-2"
        style="background-color: #f4473b; color: #fff; text-decoration: none; box-shadow: 0 2px 3px #0008"
        rel="noopener noreferrer"
        ><small class="mr-1"><i>secure</i></small> <b>PAY</b></a
      >
    </li>
  </div> -->

  <strong>Conference Documents/Material</strong>
  <p>All Conference documents/material will be provided to you at the conference.</p>

  <strong>Acknowledgement of Registration & Presentation Schedule</strong>
  <p>
    If you have not received acknowledgment of your registration one week before the conference, please contact us at
    <a style="color: #253b80" href="mailto:ismacconfdesk@gmail.com">ismacconfdesk@gmail.com</a>. Detailed programme along with the list of delegates,
    short profile and papers to be presented in the conference will be uploaded on our website homepage.
  </p>

  <strong>Note</strong> The presentation time limit is 15 minutes. There is no limitation on the number of slides and it is not required in any
  particular format. <br /><br />
  <strong>Cancellation Policy</strong>
  <p>
    After Registration, Cancellation Is Not Possible
    <!--    If the registrant is unable to attend, the following cancellation policy is applicable.</p>-->
    <!--<p>60 days prior to the conference- 50% refundable</p>-->
    <!--<p>30-60 days before conference- 25% refundable</p>-->
    <!--<p>No refunds will be done one month before the conference-->
    .
  </p>

  <strong>Ethical Publication Practices</strong>
  <ul>
    <li>ISMAC is committed to the highest standards of publishing integrity and academic honesty.</li>
  </ul>

  <ul>
    <li>
      Serious misconduct (for example, data duplication, falsification or plagiarism) is taken seriously. If misconduct is proven, sanctions will be
      applied. [Applies to post-conference plagiarism also].
    </li>
  </ul>

  <ul>
    <li>
      Before publication, ISMAC will randomly review papers using the powerful text comparison tool. This procedure aims to prevent scholarly and
      professional plagiarism. ISMAC will not be responsible for rejection due to any plagiarism that occurs after forwarding the paper to
      publication.
    </li>
  </ul>
</div>

<?php require 'footer.php' ?>
