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
    @foreach($aiodesktops as $aiodesktop)
        <tr>
            <td>{{ $aiodesktop->id }}</td>
            <td>{{ $aiodesktop->assignedTo }}</td>
            <td>{{ $aiodesktop->deviceHostname }}</td>
            <td>{{ $aiodesktop->deviceSerielNumber }}</td>
            <td> {{ $aiodesktop->deviceIPaddress }}</td>
            <td>{{ $aiodesktop->deviceManufacturer }}</td>
            <td>{{ $aiodesktop->deviceModel }}</td>
            <td>{{ $aiodesktop->warrantyDate }}</td>
            <td>{{ $aiodesktop->monitorModel }}</td>
            <td>{{ $aiodesktop->monitorManufacturer }}</td>
            <td>{{ $aiodesktop->monitorSize }}</td>
            <td>{{ $aiodesktop->monitorSerielNumber }}</td>
            <td> {{ $aiodesktop->department->departName}}</td>
            <td>{{ $aiodesktop->deviceLocation }}</td>
            <td>{{ $aiodesktop->level }}</td>
            <td>{{ $aiodesktop->operatingSystem }}</td>
            <td>{{ $aiodesktop->windowVersion }}</td>
            <td>{{ $aiodesktop->msOfficeAndVersion }}</td>
            <td>{{ $aiodesktop->officeSerielKey }}</td>
            <td>{{ $aiodesktop->antivirusAndVersion }}</td>
            <td>{{ $aiodesktop->domain }}</td>
            <td>{{ $aiodesktop->internetConnection }}</td>
            <td>{{ $aiodesktop->policyRebootAndShutdown }}</td>
            <td>{{ $aiodesktop->cpu }}</td>
            <td>{{ $aiodesktop->monitor }}</td>
            <td>{{ $aiodesktop->deployment }}</td>
            
            <td>{{ $aiodesktop->purchaseOrder }}</td>
            <td>{{ $aiodesktop->deliveryOrder }}</td>
            <td>{{ $aiodesktop->invoiceNo }}</td>
            <td>{{ $aiodesktop->vendor->companyName }}</td>
            <td>{{ $aiodesktop->pricePerUnit }}</td>
            <td>{{ $aiodesktop->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>