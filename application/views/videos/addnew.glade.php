@include('header')
@include('videos/menu-bar')

<!-- Simple Dashboard - START -->

<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-12 col-sm-12">

            <div class="col-md-4"><a href="{{Url::link('videos')}}" class="btn btn-primary">Videos</a></div>
            <div class="col-md-4"><a href="{{Url::link('videos/addnew')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Add New</a></div>

        </div>

        <div class="col-md-4 col-sm-4">

            <form method="post" action="{{Url::link('videos/addnew')}}">

                <div class="col-md-12"><br><br> <input name="video_name" type="text" class="form-control" placeholder="Name" required/></div>
                <div class="col-md-12"><br><br> <input name="video_url" type="url" class="form-control" placeholder="Url" required/></div>
                <div class="col-md-12"><br><br> <textarea class="form-control" name="video_description" placeholder="Description"></textarea></div>
                <div class="col-md-12"><br><br> <input name="video_comments" type="text" class="form-control" placeholder="Comments" required/></div>
                <div class="col-md-12"><br><br> <button name="submit" type="submit" class="btn btn-success"/>Save Video</button></div>

            </form>

        </div>

    </div>

</div>

@include('footer')