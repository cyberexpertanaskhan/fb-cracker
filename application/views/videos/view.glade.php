@include('header')
@include('videos/menu-bar')
<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-3 col-sm-3"></div>

        <div class="col-md-6 col-sm-6 test-div">

            @if(isset($video) )

                @foreach($video as $videoInfo)

                <?php $video_id = $videoInfo->id; ?>

                <?php $thumbnail = $videoInfo->thumbnails; ?>
                	<h2 class="text-center text-danger">Video Sharing Application</h2>
                	<h3 class="text-center text-success">{{$videoInfo->name}}</h3>

                	<!-- aspect ration 16:9 -->
                	<div class="embed-responsive embed-responsive-4by3" >

                		<iframe class="embed-responsive-item"id="embed-responsive-video" src="{{$videoInfo->url}}" allowfullscreen></iframe>

                	</div>

                	<br><span class="lead">Description :</span>
                	<p>{{$videoInfo->description}}</p>

                	<span class="lead">Comments :</span>
                	<p>{{$videoInfo->comments}}</p>

                	<span class="lead">Date Created :</span>
                	<p>{{$videoInfo->date_created}}</p><br>

                @endforeach

            @endif

        </div>


        <div class="col-md-3 col-sm-3">

            <h2 class="text-center text-warning">Click to Download Video Thumbnail</h2>

            <div class="col-md-12 col-sm-12 img img-responsive" >

                <a href="{{Url::link('videos/download')}}/{{$video_id}}"  id="video-thumbnail" title="Download Thumbnail">
                    <img style='z-index: 2; margin : auto; width:80px; position:absolute;top: 50px; left: 80px;' src="{{Url::assets('img/play_button.gif')}}" class="img img-responsive"/>

                    <img style='' src="{{$thumbnail}}" class="img img-responsive" />

                </a>

            </div>

            
        </div>


    </div>

</div>

@include('footer')