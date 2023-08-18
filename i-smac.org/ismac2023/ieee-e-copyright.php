<?php require 'header.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class='main container mt-3'>
  <h3>IEEE Ecopyright</h3><hr>

            <form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp" style="max-width: 400px" method="post">
              <input
                class="form-control"
                type="hidden"
                name="PubTitle"
                value="2023 7th International Conference on I-SMAC (IoT in Social, Mobile, Analytics and Cloud) (I-SMAC)"
              />

              <input class="form-control" required type="text" name="ArtTitle" placeholder="Article Title" /><br />

              <input class="form-control" required type="text" name="AuthName" placeholder="Authors Name" /><br />

              <input class="form-control" required type="text" name="ArtId" placeholder="Article Id" />

              <input type="hidden" name="ArtSource" value="58438" /><br />

              <input class="form-control" required type="text" name="AuthEmail" placeholder="Author Email" /><br />

              <input class="form-control" type="hidden" name="rtrnurl" value="https://i-smac.org/ismac2023/ieee-e-copyright.php" />

              <input class="btn btn-warning btn-block" name="Submit" type="submit" value="Next" />
            </form>

</div>

<?php require 'footer.php' ?>
