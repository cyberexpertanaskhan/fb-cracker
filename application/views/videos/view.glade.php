@include('header')
@include('videos/menu-bar')
<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-3 col-sm-3"></div>

        <div class="col-md-6 col-sm-6 test-div">

            @if(isset($video) )

                @foreach($video as $videoInfo)

                <?php $thumbnail = json_decode($videoInfo->thumbnails, true); ?>
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

            <a href="{{$thumbnail[0]}}" class="col-md-12 col-sm-12" id="thumbnail-1" title="Thumbnail 1" download="Thumbnail 1">

                <img src="{{$thumbnail[0]}}" class="img img-responsive" />

            </a><br>

            <h4 class="text-center text-warning">Smaller Thumbnails</h4>

            <a href="{{$thumbnail[1]}}" class="col-md-12 col-sm-12" id="thumbnail-2" title="Thumbnail 1" download="Thumbnail 1"> 
                
                <img src="{{$thumbnail[1]}}" class="img img-responsive" />

            </a><br><br>
            <a href="{{$thumbnail[2]}}" class="col-md-12 col-sm-12" id="thumbnail-3" title="Thumbnail 1" download="Thumbnail 1">
                
                <img src="{{$thumbnail[2]}}" class="img img-responsive" />

            </a><br>


        </div>


    </div>

</div>

@include('footer')