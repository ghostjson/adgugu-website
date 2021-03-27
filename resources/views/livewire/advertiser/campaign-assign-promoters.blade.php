<section class="section">
    <div class="section-header">
        <h1>Select Promoters</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-white mb-5">
                    <div class="card-body">
                        <ul class="list-unstyled">
                            @foreach($promoters as $promoter)
                                <li class="position-relative booking">
                                    <div class="media">
                                        <div class="msg-img">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-4">{{ $promoter->first_name . ' ' . $promoter->last_name }}</h5>
                                            <div class="mb-3">
                                                <span
                                                    class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Age:</span>
                                                <span class="bg-light-blue">{{ $promoter->age }}</span>
                                            </div>
                                            <div class="mb-3">
                                                <span
                                                    class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0">Interests:</span>
                                                {{--                                                {{ $promoter->interests }}--}}
                                                @foreach($promoter->interests as $interest)
                                                    <span class="badge badge-pill badge-dark">{{ $interest }}</span>
                                                @endforeach
                                            </div>
                                            <div class="mb-5">
                                                <span class="mr-2 d-block d-sm-inline-block mb-1 mb-sm-0">Bio:</span>
                                                <p>
                                                    {{ $promoter->bio }}
                                                </p>
                                            </div>
                                            @if($campaign->isUserAlreadyApproved($promoter))
                                               <button class="btn btn-danger" wire:click="remove({{ $promoter->id }})">Remove</button>
                                            @else
                                                <button class="btn btn-primary" wire:click="approve({{$promoter->id}})">
                                                    Approve
                                                </button>
                                            @endif

                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="row">
                            <a href="{{ route('advertiser.campaign.list') }}" class="btn btn-primary ml-auto">Done</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<div class="container">

</div>

<style>
    .bg-light-blue {
        background-color: #e9f7fe !important;
        color: #3184ae;
        padding: 7px 18px;
        border-radius: 4px;
    }

    .bg-light-green {
        background-color: rgba(40, 167, 69, 0.2) !important;
        padding: 7px 18px;
        border-radius: 4px;
        color: #28a745 !important;
    }

    .buttons-to-right {
        position: absolute;
        right: 0;
        top: 40%;
    }


    .buttons-to-right .btn-gray {
        opacity: 0;
        transition: .3s;
    }

    .btn-gray:hover {
        background-color: #36a3f5;
        color: #fff;
    }

    .booking {
        margin-bottom: 30px;
        border-bottom: 1px solid #eee;
        padding-bottom: 30px;
    }

    .booking:last-child {
        margin-bottom: 0px;
        border-bottom: none;
        padding-bottom: 0px;
    }

    @media screen and (max-width: 575px) {
        .buttons-to-right {
            top: 10%;
        }

        .buttons-to-right a {
            display: block;
            margin-bottom: 20px;
        }

        .buttons-to-right a:last-child {
            margin-bottom: 0px;
        }

        .bg-light-blue,
        .bg-light-green,
        .btn-gray {
            padding: 7px;
        }
    }

    .card {
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        border-radius: 4px;
        box-shadow: none;
        border: none;
        padding: 25px;
    }

    .mb-5, .my-5 {
        margin-bottom: 3rem !important;
    }

    .msg-img {
        margin-right: 20px;
    }

    .msg-img img {
        width: 60px;
        border-radius: 50%;
    }

    img {
        max-width: 100%;
        height: auto;
    }
</style>
