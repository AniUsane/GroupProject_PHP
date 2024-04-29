<?php include './categories/header.php'; ?>
    <!-- end header section -->
  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
          <form action="submit_form.php" method="POST" id="get-in-touch">
              <div>
                <input type="text" placeholder="Full Name" name="inputPatientName" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="number" placeholder="Phone Number" name="inputPhone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message"/>
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <?php include './categories/info.php'; ?>
  <!-- end info_section -->


  <!-- footer section -->
  <?php include './categories/footer.php'; ?>