@extends('layouts.app')

@section('content')
    <!-- start page title -->
    <x-main-layout title="Dashboard">
        <div class="row">
            <div class="col-md-3">
                <x-dashboard-info title="Pendaftar" value="{{ $semuanya }}" type="primary"
                    icon="mdi-account-multiple" />
            </div>
            <div class="col-md-3">
                <x-dashboard-info title="Diterima" value="{{ $diterima }}" type="success" icon="mdi-check-circle" />
            </div>
            <div class="col-md-3">
                <x-dashboard-info title="Ditolak" value="{{ $ditolak }}" type="danger" icon="mdi-alert-circle" />
            </div>
            <div class="col-md-3">
                <x-dashboard-info title="Menunggu" value="{{ $pengecekan }}" type="warning" icon="mdi-clock" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Grafik Pendaftaran</h4>
                        <p class="card-title-desc mb-5">Ringkasan pendaftaran dengan periode bulan</code>.
                        </p>
                        <div id="container"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Aktivitas Terbaru</h4>
                        <p class="card-title-desc mb-5">Notifikasi aktivitas siswa pendaftar</code>.
                        </p>

                        <ul class="list-unstyled activity-wid">
                            @foreach ($notifikasi as $item)
                                <li class="activity-list">
                                    <div class="activity-icon avatar-xs">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            @if ($item->status === AUTH_PENDAFTARAN)
                                                <i class="mdi mdi-account-plus"></i>
                                            @elseif ($item->status === AUTH_FORMULIR)
                                                <i class="mdi mdi-file"></i>
                                            @else
                                                <i class="mdi mdi-currency-usd"></i>
                                            @endif
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div class="me-3">
                                            <h5 class="font-size-14">{{ notificationDate($item->tanggal) }}<i
                                                    class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                            </h5>
                                        </div>
                                        <div class="flex-1">
                                            <div>
                                                {{ $item->text }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <style>
            @import "https://code.highcharts.com/css/highcharts.css";

            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

            .highcharts-yaxis .highcharts-axis-line {
                stroke-width: 2px;
            }

            /* Link the series colors to axis colors */
            .highcharts-color-0 {
                fill: #3b5de7;
                stroke: #3b5de7;
            }

            .highcharts-axis.highcharts-color-0 .highcharts-axis-line {
                stroke: #3b5de7;
            }

            .highcharts-axis.highcharts-color-0 text {
                fill: #3b5de7;
            }

            .highcharts-color-1 {
                fill: #45cb85;
                stroke: red;
            }

            .highcharts-axis.highcharts-color-1 .highcharts-axis-line {
                stroke: #45cb85;
            }

            .highcharts-axis.highcharts-color-1 text {
                fill: #45cb85;
            }

        </style>
    </x-main-layout>
    <!-- end page title -->
@endsection
