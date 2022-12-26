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
   
    <th>Department</th>
    <th>Location</th>
    <th>Level</th>

  
    <th>CPU Condition</th>
    <th>Monitor Condition</th>
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
    @foreach($tvsharps as $tvsharp)
        <tr>
            <td>{{ $tvsharp->id }}</td>
            <td>{{ $tvsharp->assignedTo }}</td>
            <td>{{ $tvsharp->deviceHostname }}</td>
            <td>{{ $tvsharp->deviceSerielNumber }}</td>
            <td> {{ $tvsharp->deviceIPaddress }}</td>
            <td>{{ $tvsharp->deviceManufacturer }}</td>
            <td>{{ $tvsharp->deviceModel }}</td>
            <td>{{ $tvsharp->warrantyDate }}</td>
          
            <td> {{ $tvsharp->department->departName}}</td>
            <td>{{ $tvsharp->deviceLocation }}</td>
            <td>{{ $tvsharp->level }}</td>
          
            <td>{{ $tvsharp->cpu }}</td>
            <td>{{ $tvsharp->monitor }}</td>
            <td>{{ $tvsharp->deployment }}</td>
            
            <td>{{ $tvsharp->purchaseOrder }}</td>
            <td>{{ $tvsharp->deliveryOrder }}</td>
            <td>{{ $tvsharp->invoiceNo }}</td>
            <td>{{ $tvsharp->vendor->companyName }}</td>
            <td>{{ $tvsharp->pricePerUnit }}</td>
            <td>{{ $tvsharp->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>