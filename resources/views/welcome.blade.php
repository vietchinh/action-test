@extends('layout')

@section('content')
<div class="col-6">
    <h1>Actuele Reserveringen</h1>
    <table id="actualReservation" class="table table-striped table-bordered" data-order='[[ 4, "asc" ]]'
           data-page-length='25'>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Telefoonnummer</th>
            <th>Groepsgrootte</th>
            <th>tafelnummer</th>
            <th>Datum en Tijd</th>
            <th data-class-name="priority">Reservering Gebruikt</th>
        </tr>
        </thead>
    </table>
</div>
<div class="col-6">
    <h1>Actuele Orders</h1>
    <table id="actualOrders" class="table table-striped table-bordered" data-order='[[ 3, "desc" ]]'
           data-page-length='25'>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Hoeveelheid</th>
            <th>Tafel Nummer</th>
            <th>Datum en Tijd</th>
        </tr>
        </thead>
    </table>
</div>
@endsection
