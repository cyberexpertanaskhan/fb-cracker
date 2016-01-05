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

        <div class="col-md-12 col-sm-12">
                    @if(isset($success_message))<br> <p class="alert alert-success">{{$success_message}}</p>@endif

                    @if(isset($videos) AND count($videos) > 0)

                    <table class="table table-hover table-striped">

                        <thead>
                            <th>Name </th><th>Description</th><th>Url</th><th>Date Created</th><th>Edit</th><th>Remove</th>
                        </thead>

                        <tbody>


                        @foreach($videos as $video)

                            <tr>
                                <td><a href="{{Url::link('view')}}/{{$video->id}}">{{$video->name}}</a></td><td>{{$video->description}}</td><td><a href="{{$video->url}}">{{$video->url}}</a></td><td>{{$video->date_created}}</td><td><a href="{{Url::link('edit')}}/{{$video->id}}"><i class="fa fa-edit"></i></a></td><td><a href="{{Url::link('delete')}}/{{$video->id}}"><i class="fa fa-trash"></i></a></td>
                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                    @else
                           
                        <br><br>   <p class="alert alert-info">The are no videos yet...</p>

                    @endif



        </div>

    </div>

</div>

@include('footer')