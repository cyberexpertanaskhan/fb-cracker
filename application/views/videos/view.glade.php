@include('header')
@include('videos/menu-bar')
<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-3 col-sm-3"></div>

        <div class="col-md-6 col-sm-6">

            @if(isset($video) )

                @foreach($video as $videoInfo)
                	<h2 class="text-center text-danger">Video Sharing Application</h2>
                	<h3 class="text-center text-success">{{$videoInfo->name}}</h3>

                	<!-- aspect ration 16:9 -->
                	<div class="embed-responsive embed-responsive-4by3">

                		<iframe class="embed-responsive-item" src="{{$videoInfo->url}}" allowfullscreen></iframe>

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


        </div>


    </div>

</div>

@include('footer')