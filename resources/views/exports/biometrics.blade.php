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
    @foreach($biometrics as $biometric)
        <tr>
            <td>{{ $biometric->id }}</td>
            <td>{{ $biometric->assignedTo }}</td>
            <td>{{ $biometric->deviceHostname }}</td>
            <td>{{ $biometric->deviceSerielNumber }}</td>
            <td> {{ $biometric->deviceIPaddress }}</td>
            <td>{{ $biometric->deviceManufacturer }}</td>
            <td>{{ $biometric->deviceModel }}</td>
            <td>{{ $biometric->warrantyDate }}</td>
          
            <td> {{ $biometric->department->departName}}</td>
            <td>{{ $biometric->deviceLocation }}</td>
            <td>{{ $biometric->level }}</td>
           
            <td>{{ $biometric->cpu }}</td>
            <td>{{ $biometric->monitor }}</td>
            <td>{{ $biometric->deployment }}</td>
            
            <td>{{ $biometric->purchaseOrder }}</td>
            <td>{{ $biometric->deliveryOrder }}</td>
            <td>{{ $biometric->invoiceNo }}</td>
            <td>{{ $biometric->vendor->companyName }}</td>
            <td>{{ $biometric->pricePerUnit }}</td>
            <td>{{ $biometric->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>