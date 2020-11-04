<div class="trending__product">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="section-title">
                <h4>Trending Now</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="btn__all">
                <a href="/movies" class="primary-btn">View All <span class="arrow_right"></span></a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($trending as $i)
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="{{$i->poster}}" >
                    <div class="ep">{{$i->votes}} / 100</div>
                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="product__item__text">
                    <ul>
                        <li>Active</li>
                        <li>Movie</li>
                        <li>{{$i->year}}</li>
                    </ul>
                    <h5><a href="{{URL::to('play/' .$i->id)}}">{{$i->title}}</a></h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
