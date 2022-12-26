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
    @foreach($mpos as $mpo)
        <tr>
            <td>{{ $mpo->id }}</td>
            <td>{{ $mpo->assignedTo }}</td>
            <td>{{ $mpo->deviceHostname }}</td>
            <td>{{ $mpo->deviceSerielNumber }}</td>
            <td> {{ $mpo->deviceIPaddress }}</td>
            <td>{{ $mpo->deviceManufacturer }}</td>
            <td>{{ $mpo->deviceModel }}</td>
            <td>{{ $mpo->warrantyDate }}</td>
          
            <td> {{ $mpo->department->departName}}</td>
            <td>{{ $mpo->deviceLocation }}</td>
            <td>{{ $mpo->level }}</td>
            <td>{{ $mpo->operatingSystem }}</td>
            <td>{{ $mpo->windowVersion }}</td>
            <td>{{ $mpo->msOfficeAndVersion }}</td>
            <td>{{ $mpo->officeSerielKey }}</td>
            <td>{{ $mpo->antivirusAndVersion }}</td>
            <td>{{ $mpo->domain }}</td>
            <td>{{ $mpo->internetConnection }}</td>
            <td>{{ $mpo->policyRebootAndShutdown }}</td>
            <td>{{ $mpo->cpu }}</td>
            <td>{{ $mpo->monitor }}</td>
            <td>{{ $mpo->deployment }}</td>
            
            <td>{{ $mpo->purchaseOrder }}</td>
            <td>{{ $mpo->deliveryOrder }}</td>
            <td>{{ $mpo->invoiceNo }}</td>
            <td>{{ $mpo->vendor->companyName }}</td>
            <td>{{ $mpo->pricePerUnit }}</td>
            <td>{{ $mpo->folder }}</td>

        </tr>
    @endforeach
    </tbody>
</table>