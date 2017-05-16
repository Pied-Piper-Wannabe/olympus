@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
	<!-- Sidebar Menu/Filter Menu -->
		<div class="col-md-4 col-lg-3 sideNav">
			<div class="bootstrap-vertical-nav">
				<button class="btn btn-block btn-outline-primary btn-black hidden-md-up" id="filterBtn" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseExample">
					<span class="">Filter</span>
				</button>
				<div class="collapse" id="collapseFilter">
					<h2 class="centerText">Filter</h2>

					<!-- Price -->
					<h4>Price:</h4>
					<div class="form-group">
						<label for="minPriceBox">Min price:</label>
						<input type="number" class="form-control" id="minPriceBox" aria-describedby="minPrice" placeholder="min price">
						<label for="maxPriceBox">Max price:</label>
						<input type="number" class="form-control" id="maxPriceBox" aria-describedby="maxPrice" placeholder="max price">
					</div>
					
					<!-- =========CPU========== -->
					@if($type === 'CPUs')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Intel
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AMD
						</label>
					</div>
					
					<!-- Socket -->
					<h4>Socket</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM4
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							LGA1151
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM3+
						</label>
					</div>

					<!-- Graphics -->
					<h4>Integrated Graphics</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							None
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Intel HD Graphics 630
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Intel HD Graphics 610
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Intel HD Graphics 530
						</label>
					</div>

					<!-- Cores -->
					<h4>Cores</h4>
					<div class="form-group">
						<label for="minCoresBox">Min Cores:</label>
						<input type="number" class="form-control" id="minCoresBox" aria-describedby="minCores" placeholder="min cores">
						<label for="maxCoresBox">Max Cores:</label>
						<input type="number" class="form-control" id="maxCoresBox" aria-describedby="maxCores" placeholder="max cores">
					</div>

					<!-- =========CPU COOLERS========== -->
					@elseif($type === 'CPU Coolers')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Cooler Master
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Corsair
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Cryorig
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							NZXT
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							be quiet!
						</label>
					</div>
					
					<!-- Socket -->
					<h4>Socket</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM4
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							LGA1151
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM3+
						</label>
					</div>

					<!-- Water Cooled -->
					<h4>Water Cooled</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							No
						</label>
					</div>

					<!-- Cores -->
					<h4>Fan Size</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							120mm
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							140mm
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							240mm
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 280mm
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 360mm
						</label>
					</div>
					

					@elseif($type === 'Motherboards')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ASRock
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Asus
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Gigabyte
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							MSI
						</label>
					</div>

					<!-- Socket -->
					<h4>Socket</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM4
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							LGA1151
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AM3+
						</label>
					</div>

					<!-- Form Factor -->
          <h4>Form Factor</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              ATX
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              EATX
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Micro ATX
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Mini ATX
            </label>
          </div>

          <!-- RAM Type -->
          <h4>RAM Type</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              DDR3
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              DDR4
            </label>
          </div>


          <!-- Onboard Video -->
          <h4>Onboard Video</h4>

          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Yes
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              No
            </label>
          </div>


          <!-- SLI/Crossfire -->
          <h4>SLI/Crossfire Support</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              None
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              SLI
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Crossfire
            </label>
          </div>

					@elseif($type === 'Memory')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Corsair
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Crucial
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							G.Skill
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Kingston
						</label>
					</div>

					<!-- Type -->
					<h4>Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							DDR3
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							DDR4
						</label>
					</div>

					<!-- Speed -->
					<h4>Stick Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							1066-1900
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							2000-2500
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							2600-3200
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							3300-3600
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							3700-4266
						</label>
					</div>

					<!-- Pin Type -->
					<h4>Pin Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							184 DIMM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							200 SODIMM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							204 SODIMM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							240 DIMM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							260 SODIMM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							288 DIMM
						</label>
					</div>

					<!-- Size -->
					<h4>Size</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							4GB (1x4GB)
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							8GB (1x8GB)
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							8GB (2x4GB)
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							16GB (2x8GB)
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							16GB (4x4GB)
						</label>
					</div>

					<!-- Heat Sink -->
					<h4>Heat Sink</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							No
						</label>
					</div>

					@elseif($type === 'Storage Devices')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Kingston
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Samsung
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Sandisk
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Seagate
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Western Digital
						</label>
					</div>

					<!-- SSD -->
					<h4>SSD</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							No
						</label>
					</div>

					<!-- Write Speed -->
					<h4>Write Speed</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							N/A
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							5400RPM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							7200RPM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							+7200RPM
						</label>
					</div>

					<!-- Form Factor -->
					<h4>Form Factor</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							2.5"
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							3.5"
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							7200RPM
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							+7200RPM
						</label>
					</div>


					@elseif($type === 'GPUs')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							MSI
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ASUS
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							GIGABYTE
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							EVGA
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Sapphire
						</label>
					</div>

					<!-- Interface -->
					<h4>Interface</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							PCI-Express x8
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							PCI-Express x16
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							PCI-Express x1
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							PCI
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							AGP
						</label>
					</div>

					<!-- SLI/Crossfire -->
          <h4>SLI/Crossfire Support</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              None
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              SLI
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              Crossfire
            </label>
          </div>

          <!-- Video RAM -->
          <h4>Video RAM</h4>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              128MB-1GB
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              1GB-4GB
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              4GB-12GB
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
              12GB-32GB
            </label>
          </div>

					@elseif($type === 'Cases')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Corsair
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							NZXT
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Fractal Design
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Cooler Master
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Thermaltake
						</label>
					</div>

					<!-- Type -->
					<h4>Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ATX Full Tower
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ATX Mid Tower
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							MicroATX Mid Tower
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							MicroATX Mini Tower
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Mini ITX Tower
						</label>
					</div>


					@elseif($type === 'PSUs')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Corsair
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Cooler Master
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							EVGA
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							SeaSonic
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Thermaltake
						</label>
					</div>

					<!-- Type -->
					<h4>Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ATX
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ATX12V
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ATX12V / EPS12V
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Micro ATX
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							SFX12V
						</label>
					</div>

					<!-- Modular -->
					<h4>Modular</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							No
						</label>
					</div>

					<!-- Fanless -->
					<h4>Fanless</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							No
						</label>
					</div>

					<!-- Wattage -->
					<h4>Wattage</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							1-250W
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 250-500W
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 500-750W
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 750-1000W
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 1000W+
						</label>
					</div>

					@elseif($type === 'Optical Drives')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ASUS
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							LG
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Pioneer
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Samsung
						</label>
					</div>

					<!-- Bluray -->
					<h4>Wattage</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 No
						</label>
					</div>

					@elseif($type === 'Operating Systems')
					<!-- Bluray -->
					<h4>Family</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Windows
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 Linux/Unix
						</label>
					</div>

					<!-- Type -->
					<h4>Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							32 Bit
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 64 Bit
						</label>
					</div>

					<!-- GUI -->
					<h4>GUI</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Yes
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
						 No
						</label>
					</div>

					@elseif($type === 'Misc')
					<!-- Brand -->
					<h4>Manufacturer</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							ASUS
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							LG
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Pioneer
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Samsung
						</label>
					</div>

					<!-- Type -->
					<h4>Type</h4>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Monitors
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Networking
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Keyboards
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">
							Mice
						</label>
					</div>

					@endif
					<button type="submit" class="btn btn-block btn-outline-primary btn-black">Submit</button>
				</div>
			</div>
		</div>


		<!-- List of builds -->
		<div class="col-md-8 col-lg-9 topMarginSm">
			<div class="row">
				<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
					<h2 class="centerText">{{ $type }}</h2>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-sm-12">
					<div class="dropdown" id="filterDropdown">
					<button class="btn btn-outline-primary btn-sm dropdown-toggle btn-black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Sort
					</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#">Most Popular Today</a>
						<a class="dropdown-item" href="#">Most Popular This Week</a>
						<a class="dropdown-item" href="#">Most Popular All Time</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Newest</a>
						<a class="dropdown-item" href="#">Oldest</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Most Expensive</a>
						<a class="dropdown-item" href="#">Least Expensive</a>
					</div>
				</div>
			</div>
				</div>
	<div class="row topMarginSm">
		<div class="col-sm-12 table-responsive">
			<table class="table table-striped">
				<thead>
					@if($type === 'Motherboards')
					<tr>
						<th>Motherboard</th>
						<th>Socket</th>
						<th>Form Factor</th>
						<th>RAM Slots</th>
						<th>Max Ram</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/motherboard/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->cpu_socket}}</td>
						<td>{{$part->form_factor}}</td>
						<td>{{$part->memory_slots}}</td>
						<td>{{$part->max_memory}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<td><a href="#" class="btn btn-primary btn-sm">Add</a></td>
					</tr>
					@endforeach
					@endif
				</tbody>
			</table>
			{!! $parts->render() !!}
		</div>
	</div>
</div>

@stop