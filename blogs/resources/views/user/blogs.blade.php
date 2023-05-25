<div id="blogs" class="ride_section layout_padding">
      <div class="container">
        <div class="ride_main">
          <h1 class="ride_text">Posted <span style="color: blue;">Blogs</span></h1>
      </div>
        </div>
    </div>
    <div class="ride_section_2 layout_padding">
    <div class="container">
        <div class="row">

          </div>
        </div>
      </div>
      @foreach($blog as $blogs)
      <div class="container pt-5">
        <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-5">
            <h1 class="cabe_text">{{$blogs->tags}}</h1>
            <p class="long_text">{{$blogs->desciption}}</p>
            <div class="book_b">Author: {{$blogs->name}}</></div>
          </div>
          <div class="col-sm-4">
            <div class="image_3"><img src="blogimage/{{$blogs->image}}"></div>
          </div>

        </div>
      </div>
      @endforeach


    </div>
    <!-- why ride section end -->

<div class="section_footer ">
      <div class="container">
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Address</h2>
                  <p class="ipsum_text">Address 1</p>
                  <p class="ipsum_text">Address 2</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">Links</h2>
                  <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Home</span></a></div>
                <div class="image-icon"><img src="images/bulit-icon.png"><span class="fb_text"><a href="#">Blogs</span></a></div>

                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                <h2 class="account_text">Follow Us</h2>
                <div class="image-icon"><img src="images/twitter-icon.png"><span class="fb_text"><a href="#">Twitter</a></span></div>
                <div class="image-icon"><img src="images/in-icon.png"><span class="fb_text"><a href="#">Linkedin</a></span></div>
                <div class="image-icon"><img src="images/instagram-icon.png"><span class="fb_text"><a href="#">Instagram</a></span></div>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="adderess_text">Newsletter</h2>
            <input type="" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <button class="subscribr_bt">SUBSCRIBE</button>
          </div>
          </div>
          </div>
          </div>
      </div>
    </div>
