<div class="card-body">
    <h4 class="card-title">News covers</h4>
    <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel owl-loaded owl-drag"
        id="owl-carousel-basic">



        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-1540px, 0px, 0px); transition: all 0.25s ease 0s; width: 2695px;">
                @foreach ($newss as $news)
                <div class="owl-item cloned" style="width: 375px; margin-right: 10px;">
                    <div class="item">
                        <img src="{{ asset('storage/covers/'.$news->cover) }}" alt="">
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                    class="mdi mdi-chevron-left"></i></button><button type="button" role="presentation"
                class="owl-next"><i class="mdi mdi-chevron-right"></i></button></div>
        <div class="owl-dots disabled"></div>
    </div>
    {{-- <div class="d-flex py-4">
        <div class="preview-list w-100">
            <div class="preview-item p-0">
                <div class="preview-thumbnail">
                    <img src="" class="rounded-circle" alt="">
                </div>
                <div class="preview-item-content d-flex flex-grow">
                    <div class="flex-grow">
                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">CeeCee Bass</h6>
                            <p class="text-muted text-small">4 Hours Ago</p>
                        </div>
                        <p class="text-muted">Well, it seems to be working now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="progress progress-md portfolio-progress">
        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
    </div> --}}
</div>
