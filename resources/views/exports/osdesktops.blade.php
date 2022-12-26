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
    @foreach($osdesktops as $osdesktop)
        <tr>
            <td>{{ $osdesktop->id }}</td>
            <td>{{ $osdesktop->assignedTo }}</td>
            <td>{{ $osdesktop->deviceHostname }}</td>
            <td>{{ $osdesktop->deviceSerielNumber }}</td>
            <td> {{ $osdesktop->deviceIPaddress }}</td>
            <td>{{ $osdesktop->deviceManufacturer }}</td>
            <td>{{ $osdesktop->deviceModel }}</td>
            <td>{{ $osdesktop->warrantyDate }}</td>
            <td>{{ $osdesktop->monitorModel }}</td>
            <td>{{ $osdesktop->monitorManufacturer }}</td>
            <td>{{ $osdesktop->monitorSize }}</td>
            <td>{{ $osdesktop->monitorSerielNumber }}</td>
            <td> {{ $osdesktop->department->departName}}</td>
            <td>{{ $osdesktop->deviceLocation }}</td>
            <td>{{ $osdesktop->level }}</td>
            <td>{{ $osdesktop->operatingSystem }}</td>
            <td>{{ $osdesktop->windowVersion }}</td>
            <td>{{ $osdesktop->msOfficeAndVersion }}</td>
            <td>{{ $osdesktop->officeSerielKey }}</td>
            <td>{{ $osdesktop->antivirusAndVersion }}</td>
            <td>{{ $osdesktop->domain }}</td>
            <td>{{ $osdesktop->internetConnection }}</td>
            <td>{{ $osdesktop->policyRebootAndShutdown }}</td>
            <td>{{ $osdesktop->cpu }}</td>
            <td>{{ $osdesktop->monitor }}</td>
            <td>{{ $osdesktop->deployment }}</td>
            
            <td>{{ $osdesktop->purchaseOrder }}</td>
            <td>{{ $osdesktop->deliveryOrder }}</td>
            <td>{{ $osdesktop->invoiceNo }}</td>
            <td>{{ $osdesktop->vendor->companyName }}</td>
            <td>{{ $osdesktop->pricePerUnit }}</td>
            <td>{{ $osdesktop->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>