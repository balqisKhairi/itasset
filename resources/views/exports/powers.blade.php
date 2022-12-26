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
    @foreach($powers as $power)
        <tr>
            <td>{{ $power->id }}</td>
            <td>{{ $power->assignedTo }}</td>
            <td>{{ $power->deviceHostname }}</td>
            <td>{{ $power->deviceSerielNumber }}</td>
            <td> {{ $power->deviceIPaddress }}</td>
            <td>{{ $power->deviceManufacturer }}</td>
            <td>{{ $power->deviceModel }}</td>
            <td>{{ $power->warrantyDate }}</td>
          
            <td> {{ $power->department->departName}}</td>
            <td>{{ $power->deviceLocation }}</td>
            <td>{{ $power->level }}</td>
         
            <td>{{ $power->cpu }}</td>
            <td>{{ $power->monitor }}</td>
            <td>{{ $power->deployment }}</td>
            
            <td>{{ $power->purchaseOrder }}</td>
            <td>{{ $power->deliveryOrder }}</td>
            <td>{{ $power->invoiceNo }}</td>
            <td>{{ $power->vendor->companyName }}</td>
            <td>{{ $power->pricePerUnit }}</td>
            <td>{{ $power->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>