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

        	@foreach($video as $videoInfo)

            <form id="add_new_video" method="post" action="{{Url::link('videos/edit')}}">
            	<input type="hidden" name="id" class="hidden" value="{{$videoInfo->id}}" />

                <input name="thumbnail_1" id="thumbnail_1" value="" type="hidden" />
                <input name="thumbnail_2" id="thumbnail_2" value="" type="hidden" />
                <input name="thumbnail_3" id="thumbnail_3" value="" type="hidden" />

                <div class="col-md-12"><br><br> <input name="video_name" type="text" class="form-control" placeholder="Name" value="{{$videoInfo->name}}" required/></div>
                <div class="col-md-12"><br><br> <input name="video_url" id="video_url" type="url" class="form-control" placeholder="Url"  value="{{$videoInfo->url}}" required/></div>
                <div class="col-md-12"><br><br> <textarea class="form-control" name="video_description" placeholder="Description">{{$videoInfo->description}}</textarea></div>
                <div class="col-md-12"><br><br> <input name="video_comments" type="text" class="form-control" placeholder="Comments" value="{{$videoInfo->comments}}"/></div>
                <div class="col-md-12"><br><br> <button name="submit" type="submit" class="btn btn-success"/>Update</button></div>

            </form>

            @endforeach

        </div>

    </div>

</div>

@include('footer')