<table>
    <thead>
    <tr>
    <th>ID</th>
    <th>Assigned To</th>
    <th>Device Hostname</th>
    <th>Device Seriel Number</th>
    <th>IP Address</th>
    <th>Device Manufacturer</th>
    <th>Device Model</th>
    <th>Warranty Date</th>
    <th>Condition</th>
    <th>Department</th>
    <th>Location</th>
    <th>Level</th>

    <th>Deployement</th>
    <th>Purchase Order(PO)</th>
    <th>Delivery Order(DO)</th>
    <th>Invoice No</th>
    <th>Supplier</th>
    <th>Price Per Unit(RM)</th>
    <th>Folder</th>
    </tr>
    </thead>
    <tbody>
    @foreach($printers as $printer)
        <tr>
            <td>{{ $printer->id }}</td>
            <td>{{ $printer->assignedTo }}</td>
            <td>{{ $printer->deviceHostname }}</td>
            <td>{{ $printer->deviceSerielNumber }}</td>
            <td> {{ $printer->deviceIPaddress }}</td>
            <td>{{ $printer->deviceManufacturer }}</td>
            <td>{{ $printer->deviceModel }}</td>
            <td>{{ $printer->warrantyDate }}</td>
          
            <td> {{ $printer->department->departName}}</td>
            <td>{{ $printer->deviceLocation }}</td>
            <td>{{ $printer->level }}</td>
        
            <td>{{ $printer->condition }}</td>
            <td>{{ $printer->deployment }}</td>
            
            <td>{{ $printer->purchaseOrder }}</td>
            <td>{{ $printer->deliveryOrder }}</td>
            <td>{{ $printer->invoiceNo }}</td>
            <td>{{ $printer->vendor->companyName }}</td>
            <td>{{ $printer->pricePerUnit }}</td>
            <td>{{ $printer->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>