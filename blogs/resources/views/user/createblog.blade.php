<div class="banner_section">
      <div class="container-fluid">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
          <div class="col-md-6">
            <div class="book_now">
              <h1 class="book_text" style="color: black;">CREATE BLOG</h1>

            </div>
            <div class="image_1"><img src="images/blogi.jpg"></div>
          </div>
          <div class="col-md-6">


            <div class="contact_bg">
            <div class="input_main">
              <div class="container">
                <h2 class="request_text">CREATE BLOG</h2></h2></h2>
                @if(session()->has('message'))

<div class="alert alert-success" style="height: auto;">
    <button type="button" class="close" style="color: red;" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>

@endif
                <form  method="POST" action="{{url('upload_blog')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" class="email-bt" placeholder="Your name"  name="name">
                </div>
                <div class="form-group">
                <input class="form-control email-bt" list="datalistOptions" id="exampleDataList" name="tag" placeholder="select......">
<datalist id="datalistOptions">
<option value="Health">
  <option value="Meditation">
  <option value="Leisure">
</datalist>
                </div>
                <div class="form-group col-md-12">
  <input class="form-control" type="file" id="file" name="image" >
</div>
                <div class="form-group" >
                  <textarea type="text" class="email-bt text-area" style="height: 120px;" placeholder="Description" name="description" ></textarea>
                </div>
                <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4 btn btn-primary btn-sm">
                    {{ __('CREATE') }}
                </x-button>

            </div>
                  </form>


                  </div>
                  </div>

          </div>
          </div>
        </div>
    </div>

    </div>

  </div>

</div>

      </div>
    </div>
