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
    @foreach($tablets as $tablet)
        <tr>
            <td>{{ $tablet->id }}</td>
            <td>{{ $tablet->assignedTo }}</td>
            <td>{{ $tablet->deviceHostname }}</td>
            <td>{{ $tablet->deviceSerielNumber }}</td>
            <td> {{ $tablet->deviceIPaddress }}</td>
            <td>{{ $tablet->deviceManufacturer }}</td>
            <td>{{ $tablet->deviceModel }}</td>
            <td>{{ $tablet->warrantyDate }}</td>
           
            <td> {{ $tablet->department->departName}}</td>
            <td>{{ $tablet->deviceLocation }}</td>
            <td>{{ $tablet->level }}</td>
            <td>{{ $tablet->operatingSystem }}</td>
            <td>{{ $tablet->windowVersion }}</td>
            <td>{{ $tablet->msOfficeAndVersion }}</td>
            <td>{{ $tablet->officeSerielKey }}</td>
            <td>{{ $tablet->antivirusAndVersion }}</td>
            <td>{{ $tablet->domain }}</td>
            <td>{{ $tablet->internetConnection }}</td>
            <td>{{ $tablet->policyRebootAndShutdown }}</td>
            <td>{{ $tablet->cpu }}</td>
            <td>{{ $tablet->monitor }}</td>
            <td>{{ $tablet->deployment }}</td>
            
            <td>{{ $tablet->purchaseOrder }}</td>
            <td>{{ $tablet->deliveryOrder }}</td>
            <td>{{ $tablet->invoiceNo }}</td>
            <td>{{ $tablet->vendor->companyName }}</td>
            <td>{{ $tablet->pricePerUnit }}</td>
            <td>{{ $tablet->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>