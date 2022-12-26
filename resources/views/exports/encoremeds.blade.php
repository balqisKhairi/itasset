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
    <th>Model</th>
    <th>Manufacturer</th>
    <th>Size</th>
    <th>Seriel Number</th>
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
    @foreach($encoremeds as $encoremed)
        <tr>
            <td>{{ $encoremed->id }}</td>
            <td>{{ $encoremed->assignedTo }}</td>
            <td>{{ $encoremed->deviceHostname }}</td>
            <td>{{ $encoremed->deviceSerielNumber }}</td>
            <td> {{ $encoremed->deviceIPaddress }}</td>
            <td>{{ $encoremed->deviceManufacturer }}</td>
            <td>{{ $encoremed->deviceModel }}</td>
            <td>{{ $encoremed->warrantyDate }}</td>
            <td>{{ $encoremed->monitorModel }}</td>
            <td>{{ $encoremed->monitorManufacturer }}</td>
            <td>{{ $encoremed->monitorSize }}</td>
            <td>{{ $encoremed->monitorSerielNumber }}</td>
            <td> {{ $encoremed->department->departName}}</td>
            <td>{{ $encoremed->deviceLocation }}</td>
            <td>{{ $encoremed->level }}</td>
            <td>{{ $encoremed->operatingSystem }}</td>
            <td>{{ $encoremed->windowVersion }}</td>
            <td>{{ $encoremed->msOfficeAndVersion }}</td>
            <td>{{ $encoremed->officeSerielKey }}</td>
            <td>{{ $encoremed->antivirusAndVersion }}</td>
            <td>{{ $encoremed->domain }}</td>
            <td>{{ $encoremed->internetConnection }}</td>
            <td>{{ $encoremed->policyRebootAndShutdown }}</td>
            <td>{{ $encoremed->cpu }}</td>
            <td>{{ $encoremed->monitor }}</td>
            <td>{{ $encoremed->deployment }}</td>
            
            <td>{{ $encoremed->purchaseOrder }}</td>
            <td>{{ $encoremed->deliveryOrder }}</td>
            <td>{{ $encoremed->invoiceNo }}</td>
            <td>{{ $encoremed->vendor->companyName }}</td>
            <td>{{ $encoremed->pricePerUnit }}</td>
            <td>{{ $encoremed->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>