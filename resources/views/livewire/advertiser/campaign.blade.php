<section class="section">
    <div class="section-header">
        <h1>Ad Campaigns</h1>

    </div>

    <div class="section-body">
        <h2 class="section-title">Ad Campaigns</h2>
        <p class="section-lead">Here you can see current and completed campaigns.</p>

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Campaigns</h4>
                        <div class="ml-auto">
                            <a href="/advertiser/campaign/new" class="btn btn-primary text-white">New</a>
                            <a href="#" class="btn btn-primary text-white " style="margin-left: 4px">Renew</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-md">
                                <tbody>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Budget Remaining</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                </tr>
                                @foreach($campaigns as $campaign)
                                    <tr>
                                        <td>{{ $campaign->id }}</td>
                                        <td>{{ $campaign->campaign_type }}</td>
                                        <td>{{ $campaign->campaign->name }}</td>
                                        <td>{{ $campaign->budget }} USD</td>
                                        <td>
                                            @if($campaign->status == 'Active')
                                                <div class="badge badge-success">{{ $campaign->status }}</div>
                                            @elseif($campaign->status == 'Stop')
                                                <div class="badge badge-danger">{{ $campaign->status }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($campaign->status == 'Active')
                                                <button wire:click="cancel({{$campaign->id}})"
                                                        class="btn btn-sm btn-danger">Stop
                                                </button>
                                            @elseif($campaign->status == 'Stop')
                                                <button wire:click="activate({{$campaign->id}})"
                                                        class="btn btn-sm btn-success">Activate
                                                </button>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
