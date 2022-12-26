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
    @foreach($imageviewers as $imageviewer)
        <tr>
            <td>{{ $imageviewer->id }}</td>
            <td>{{ $imageviewer->assignedTo }}</td>
            <td>{{ $imageviewer->deviceHostname }}</td>
            <td>{{ $imageviewer->deviceSerielNumber }}</td>
            <td> {{ $imageviewer->deviceIPaddress }}</td>
            <td>{{ $imageviewer->deviceManufacturer }}</td>
            <td>{{ $imageviewer->deviceModel }}</td>
            <td>{{ $imageviewer->warrantyDate }}</td>
            <td>{{ $imageviewer->monitorModel }}</td>
            <td>{{ $imageviewer->monitorManufacturer }}</td>
            <td>{{ $imageviewer->monitorSize }}</td>
            <td>{{ $imageviewer->monitorSerielNumber }}</td>
            <td> {{ $imageviewer->department->departName}}</td>
            <td>{{ $imageviewer->deviceLocation }}</td>
            <td>{{ $imageviewer->level }}</td>
            <td>{{ $imageviewer->operatingSystem }}</td>
            <td>{{ $imageviewer->windowVersion }}</td>
            <td>{{ $imageviewer->msOfficeAndVersion }}</td>
            <td>{{ $imageviewer->officeSerielKey }}</td>
            <td>{{ $imageviewer->antivirusAndVersion }}</td>
            <td>{{ $imageviewer->domain }}</td>
            <td>{{ $imageviewer->internetConnection }}</td>
            <td>{{ $imageviewer->policyRebootAndShutdown }}</td>
            <td>{{ $imageviewer->cpu }}</td>
            <td>{{ $imageviewer->monitor }}</td>
            <td>{{ $imageviewer->deployment }}</td>
            
            <td>{{ $imageviewer->purchaseOrder }}</td>
            <td>{{ $imageviewer->deliveryOrder }}</td>
            <td>{{ $imageviewer->invoiceNo }}</td>
            <td>{{ $imageviewer->vendor->companyName }}</td>
            <td>{{ $imageviewer->pricePerUnit }}</td>
            <td>{{ $imageviewer->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>