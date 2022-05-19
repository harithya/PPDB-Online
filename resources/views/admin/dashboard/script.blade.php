<script>
    // get json ajax
    $.getJSON('{{ route('dashboard.index') }}', function(data) {
        // each data
        let res = {
            'diterima': [],
            'ditolak': [],
        }
        $.each(data, function(i, val) {
            $.each(val, function(j, item) {
                if (item.status === 3) {
                    res.diterima = [...res.diterima, item.jumlah]
                } else if (item.status === 4) {
                    res.ditolak = [...res.ditolak, item.jumlah]
                }
            })
        })
        var chart = Highcharts.chart('container', {
            chart: {
                type: 'column'
            },

            title: {
                text: 'Siswa Pendaftar'
            },

            subtitle: {
                text: 'grafik berdasarkan bulan pendaftaran'
            },

            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },

            xAxis: {
                categories: Object.keys(data),
                labels: {
                    x: -10
                }
            },

            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Amount'
                }
            },

            series: [{
                color: "#45cb85",
                name: 'Diterima',
                data: res.diterima
            }, {
                color: "#ff715b",
                name: 'Ditolak',
                data: res.ditolak
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        yAxis: {
                            labels: {
                                align: 'left',
                                x: 0,
                                y: -5
                            },
                            title: {
                                text: null
                            }
                        },
                        subtitle: {
                            text: null
                        },
                        credits: {
                            enabled: false
                        }
                    }
                }]
            }
        });
    })
</script>
