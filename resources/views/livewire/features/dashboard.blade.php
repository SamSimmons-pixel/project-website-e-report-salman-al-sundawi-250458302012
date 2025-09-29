<section class="row" wire.poll>
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Laporan Pending</h6>
                                <h6 class="font-extrabold mb-0">{{ $CountLaporanPending }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Laporan Proses</h6>
                                <h6 class="font-extrabold mb-0">{{ $CountLaporanProses }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Laporan Selesai</h6>
                                <h6 class="font-extrabold mb-0">{{ $CountLaporanSelesai }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Total Laporan</h6>
                                <h6 class="font-extrabold mb-0">{{ $CountLaporanTotal }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laporan per Bulan ({{ date('Y') }})</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-laporan-bulanan"></div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                <script>
                    document.addEventListener("livewire:navigated", function() {
                        var options = {
                            chart: {
                                type: 'bar',
                                height: 350,
                                stacked: false
                            },
                            series: [{
                                    name: 'Proses',
                                    data: @json($laporanProses),
                                    color: '#facc15' // kuning
                                },
                                {
                                    name: 'Pending',
                                    data: @json($laporanPending),
                                    color: '#ef4444' // merah
                                },
                                {
                                    name: 'Selesai',
                                    data: @json($laporanSelesai),
                                    color: '#22c55e' // hijau
                                }
                            ],
                            xaxis: {
                                categories: [
                                    'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                                    'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                                ]
                            },
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    columnWidth: '60%',
                                }
                            },
                            dataLabels: {
                                enabled: true
                            }
                        };

                        var chart = new ApexCharts(document.querySelector("#chart-laporan-bulanan"), options);
                        chart.render();
                    });
                </script>

            </div>
        </div>
    </div>

    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('storage/' . $auth->foto) }}" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">{{ $auth->name }}</h5>
                        <h6 class="text-muted mb-0">{{ $auth->no_whatsapp }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Visitors Profile</h4>
            </div>
            <div class="card-body">
                <div id="chart-visitors-profile"></div>
            </div>
        </div>
    </div>
</section>
