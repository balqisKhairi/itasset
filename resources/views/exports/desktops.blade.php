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
    @foreach($desktops as $desktop)
        <tr>
            <td>{{ $desktop->id }}</td>
            <td>{{ $desktop->assignedTo }}</td>
            <td>{{ $desktop->deviceHostname }}</td>
            <td>{{ $desktop->deviceSerielNumber }}</td>
            <td> {{ $desktop->deviceIPaddress }}</td>
            <td>{{ $desktop->deviceManufacturer }}</td>
            <td>{{ $desktop->deviceModel }}</td>
            <td>{{ $desktop->warrantyDate }}</td>
            <td>{{ $desktop->monitorModel }}</td>
            <td>{{ $desktop->monitorManufacturer }}</td>
            <td>{{ $desktop->monitorSize }}</td>
            <td>{{ $desktop->monitorSerielNumber }}</td>
            <td> {{ $desktop->department->departName}}</td>
            <td>{{ $desktop->deviceLocation }}</td>
            <td>{{ $desktop->level }}</td>
            <td>{{ $desktop->operatingSystem }}</td>
            <td>{{ $desktop->windowVersion }}</td>
            <td>{{ $desktop->msOfficeAndVersion }}</td>
            <td>{{ $desktop->officeSerielKey }}</td>
            <td>{{ $desktop->antivirusAndVersion }}</td>
            <td>{{ $desktop->domain }}</td>
            <td>{{ $desktop->internetConnection }}</td>
            <td>{{ $desktop->policyRebootAndShutdown }}</td>
            <td>{{ $desktop->cpu }}</td>
            <td>{{ $desktop->monitor }}</td>
            <td>{{ $desktop->deployment }}</td>
            
            <td>{{ $desktop->purchaseOrder }}</td>
            <td>{{ $desktop->deliveryOrder }}</td>
            <td>{{ $desktop->invoiceNo }}</td>
            <td>{{ $desktop->vendor->companyName }}</td>
            <td>{{ $desktop->pricePerUnit }}</td>
            <td>{{ $desktop->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>