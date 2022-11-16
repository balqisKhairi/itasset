<div class="card mb-3">
                <h5 class="card-header">Location Device</h5>
                <div class="card-body">
                  
                      
                        <div class="row">
                  <div class="bio-row">
                      <p><span>Department </span>: {{ $desktop->department }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Location </span>: {{ $desktop->deviceLocation }}</p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Level </span>: {{ $desktop->level }}</p>
                  </div>
                
                </div>
                </div>
                </div>



                <div class="card mb-3">
                <h5 class="card-header">OS Version & Software</h5>
                <div class="card-body">
                  
                      
                        <div class="row">
                  <div class="bio-row">
                      <p><span>Operating System </span>: {{ $desktop->operatingSystem }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Window Version </span>: {{ $desktop->windowVersion }}</p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Microsoft Office And Version </span>: {{ $desktop->msOfficeAndVersion }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Office Seriel Key </span>: {{ $desktop->officeSerielKey }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Antivirus And Version </span>: {{ $desktop->antivirusAndVersion }}</p>
                  </div>
                </div>
                </div>
                </div>


                <div class="card mb-3">
                <h5 class="card-header">Others</h5>
                <div class="card-body">
                  
                      
                        <div class="row">
                  <div class="bio-row">
                      <p><span>Domain </span>: {{ $desktop->domain }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Internet Connection </span>: {{ $desktop->internetConnection }}</p>
                  </div>
                  
                  <div class="bio-row">
                      <p><span>Policy Reboot And Shutdown </span>: {{ $desktop->policyRebootAndShutdown }}</p>
                  </div>
                
                </div>
                </div>
                </div>