<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="box-title">Trafique</h4>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-body">
                        <div class="panel-body">
                            <canvas id="pie-chart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-body">
                        <div class="progress-box progress-1">
                            <h4 class="por-title">Inscription</h4>
                            <div class="por-txt">{{ DB::table('students')->count() ?? '0' }} Etudiants inscrits ({{ DB::table('students')->count() * 100 /5000 ?? '0' }} %)</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-flat-color-1" role="progressbar" style="width:{{ DB::table('students')->count() * 100 /5000 ?? '0' }}%" aria-valuenow="{{ DB::table('students')->count() * 100 /5000 ?? '0' }}" aria-valuemin="0" aria-valuemax="2000"></div>
                            </div>
                        </div>
                        <div class="progress-box progress-2">
                            <h4 class="por-title">Unique Visitors</h4>
                            <div class="por-txt">29,658 Users (60%)</div>
                            <div class="progress mb-2" style="height: 5px;">
                                <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body"></div>
        </div>
    </div>
</div>
