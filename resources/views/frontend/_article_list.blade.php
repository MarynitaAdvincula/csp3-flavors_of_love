 <div class="index-content">
    <div class="container">
 @forelse($articles as $article)    
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/1.jpg">
                    <a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}">
                        <h4 class="heading">{{ substr($article->heading,0,30) }}...</h4>
                    </a>
                    <div class="col-sm-4">
                        @foreach($article->keywords as $keyword)
                        <a href="{{route('articles-by-keyword', [$keyword->name])}}">
                            <span class="label label-info">{{$keyword->name}}</span>
                        </a>
                        @endforeach
                    </div>
                    
                    {{-- <div class="text-right col-sm-8 no-padding">
                        <span class="time">published {{$article->publishedAtHuman}} on</span>
                        <a href="{{route('articles-by-category', $article->category->alias)}}">{{$article->category->name}}</a>
                        <span class="text-grey"> by {{$article->user->name}}</span>
                        <span class="text-grey {{!$article->hit_count ? 'hide':''}}">
                            ({{$article->hit_count}} {{$article->hit_count > 1 ? 'reads' : 'read'}})
                        </span>
                    </div> --}}
                    <a href="{{route('get-article', [$article->id, make_slug($article->heading)])}}" class="blue-button">Read More</a>

                </div>
                &nbsp; 
            </div>
    @empty
    <div class="row text-grey">
        <div class="col-sm-12"><h3>Not Available</h3></div>
    </div>
    @endforelse
            </div>
    </div>
    {{method_exists($articles, 'links') ? $articles->links() : ''}}