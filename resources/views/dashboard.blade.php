@extends('layouts.admin.main')
@section('contact')
    <x-successes.success-register/>
    <x-warning.warning-message/>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <x-items.dashboard-item title="Primary Card" link="#" class="bg-primary"/>
                <x-items.dashboard-item title="Warning Card" link="#" class="bg-warning"/>
                <x-items.dashboard-item title="Success Card" link="#" class="bg-success"/>
                <x-items.dashboard-item title="Danger Card" link="#" class="bg-danger"/>
            </div>
            <div class="row">
                <x-items.dashboar-chart title="Area Chart Example" class="fa-chart-area" id="myAreaChart"/>
                <x-items.dashboar-chart title="Bar Chart Example" class="fa-chart-bar" id="myBarChart"/>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <x-items.dashboard-data name="Name" position="Position" office="Office" age="Age" start-date="Start Date" salary="Salary"/>
                        </thead>
                        <tfoot>
                            <x-items.dashboard-data name="Name" position="Position" office="Office" age="Age" start-date="Start Date" salary="Salary"/>
                        </tfoot>
                        <tbody>
                        @for($i = 0 ;$i < 100;$i++)
                            <x-items.dashboard-data name="Tiger" position="System Architect" office="Edinburgh" age="61" start-date="2011/07/25" salary="$170,750"/>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
