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
    @foreach($cardReaders as $cardReader)
        <tr>
            <td>{{ $cardReader->id }}</td>
            <td>{{ $cardReader->assignedTo }}</td>
            <td>{{ $cardReader->deviceHostname }}</td>
            <td>{{ $cardReader->deviceSerielNumber }}</td>
            <td> {{ $cardReader->deviceIPaddress }}</td>
            <td>{{ $cardReader->deviceManufacturer }}</td>
            <td>{{ $cardReader->deviceModel }}</td>
            <td>{{ $cardReader->warrantyDate }}</td>
           
            <td> {{ $cardReader->department->departName}}</td>
            <td>{{ $cardReader->deviceLocation }}</td>
            <td>{{ $cardReader->level }}</td>
            <td>{{ $cardReader->cpu }}</td>
            <td>{{ $cardReader->monitor }}</td>
            <td>{{ $cardReader->deployment }}</td>
            
            <td>{{ $cardReader->purchaseOrder }}</td>
            <td>{{ $cardReader->deliveryOrder }}</td>
            <td>{{ $cardReader->invoiceNo }}</td>
            <td>{{ $cardReader->vendor->companyName }}</td>
            <td>{{ $cardReader->pricePerUnit }}</td>
            <td>{{ $cardReader->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>