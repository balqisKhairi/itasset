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

    <th>Operating System</th>
    <th>Window Version</th>
    <th>Microsoft Office And Version</th>
    <th>Office Seriel Key</th>
    <th>Antivirus And Version</th>
    <th>Domain</th>
    <th>Internet Connection</th>
    <th>Policy Reboot And Shutdown</th>
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
    @foreach($laptops as $laptop)
        <tr>
            <td>{{ $laptop->id }}</td>
            <td>{{ $laptop->assignedTo }}</td>
            <td>{{ $laptop->deviceHostname }}</td>
            <td>{{ $laptop->deviceSerielNumber }}</td>
            <td> {{ $laptop->deviceIPaddress }}</td>
            <td>{{ $laptop->deviceManufacturer }}</td>
            <td>{{ $laptop->deviceModel }}</td>
            <td>{{ $laptop->warrantyDate }}</td>
           
            <td> {{ $laptop->department->departName}}</td>
            <td>{{ $laptop->deviceLocation }}</td>
            <td>{{ $laptop->level }}</td>
            <td>{{ $laptop->operatingSystem }}</td>
            <td>{{ $laptop->windowVersion }}</td>
            <td>{{ $laptop->msOfficeAndVersion }}</td>
            <td>{{ $laptop->officeSerielKey }}</td>
            <td>{{ $laptop->antivirusAndVersion }}</td>
            <td>{{ $laptop->domain }}</td>
            <td>{{ $laptop->internetConnection }}</td>
            <td>{{ $laptop->policyRebootAndShutdown }}</td>
            <td>{{ $laptop->cpu }}</td>
            <td>{{ $laptop->monitor }}</td>
            <td>{{ $laptop->deployment }}</td>
            
            <td>{{ $laptop->purchaseOrder }}</td>
            <td>{{ $laptop->deliveryOrder }}</td>
            <td>{{ $laptop->invoiceNo }}</td>
            <td>{{ $laptop->vendor->companyName }}</td>
            <td>{{ $laptop->pricePerUnit }}</td>
            <td>{{ $laptop->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>