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
          <h3>Price: </h3>
          <div class="form-group">
            <label for="minPriceBox">Min price:</label>
            <input type="number" class="form-control" id="minPriceBox" aria-describedby="minPrice" placeholder="min price">
            <label for="maxPriceBox">Max price:</label>
            <input type="number" class="form-control" id="maxPriceBox" aria-describedby="maxPrice" placeholder="max price">
          </div>
          
          <!-- =========CPU========== -->
          @if($type === 'CPUs')
          <!-- Brand -->
          <h3>Manufacturer</h3>
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
          <h3>Socket</h3>
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
          <h3>Integrated Graphics</h3>
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
          <h3>Cores</h3>
          <div class="form-group">
            <label for="minCoresBox">Min Cores:</label>
            <input type="number" class="form-control" id="minCoresBox" aria-describedby="minCores" placeholder="min cores">
            <label for="maxCoresBox">Max Cores:</label>
            <input type="number" class="form-control" id="maxCoresBox" aria-describedby="maxCores" placeholder="max cores">
          </div>

          <!-- =========CPU COOLERS========== -->
          @elseif($type === 'CPU Coolers')
          <!-- Brand -->
          <h3>Manufacturer</h3>
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
          <h3>Socket</h3>
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
          <h3>Water Cooled</h3>
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
          <h3>Fan Size</h3>
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

          @elseif($type === 'Memory')

          @elseif($type === 'Storage Devices')

          @elseif($type === 'GPUs')

          @elseif($type === 'Cases')

          @elseif($type === 'PSUs')

          @elseif($type === 'Optical Drives')

          @elseif($type === 'Operating Systems')

          @elseif($type === 'Misc')

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
    <div class="col-md-6 col-sm-12">
      <div class="buildBanner">
        <h3>Olympian - SubName</h3>
      </div>
      <div class="buildTile">
        <div class="imageBox">
          <div class="votesBox">
            <p class="votes">5/5 Stars</p>
          </div>
          <img src="/images/uploads/04.jpg" alt="04">
        </div>
        <h3>ABS Intel-Watercooling PS</h3>
        <p>By: <a href="#">KillerGamer12</a><span class="floatRight">$300</span></p>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="buildBanner">
        <h3>Titan - SubName</h3>
      </div>
      <div class="buildTile">
        <div class="imageBox">
          <div class="votesBox">
            <p class="votes">5/5 Stars</p>
          </div>
          <img src="/images/uploads/02.jpg" alt="02">
        </div>
        <h3>CryEngine Workstation V3</h3>
        <p>By: <a href="#">PCGOD101</a><span class="floatRight">$300</span></p>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="buildBanner">
        <h3>Olympian - SubName</h3>
      </div>
      <div class="buildTile">
        <div class="imageBox">
          <div class="votesBox">
            <p class="votes">5/5 Stars</p>
          </div>
          <img src="/images/uploads/03.jpg" alt="03">
        </div>
        <h3>That Contrast Tho</h3>
        <p>By: <a href="#">IDoThisForALivingGuys</a><span class="floatRight">$300</span></p>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="buildBanner">
        <h3>Demigod - SubName</h3>
      </div>
      <div class="buildTile">
        <div class="imageBox">
          <div class="votesBox">
            <p class="votes">5/5 Stars</p>
          </div>
          <img src="/images/uploads/01.jpg" alt="01">
        </div>
        <h3>Compact i3 w/Mech</h3>
        <p>By: <a href="#">LinuxMasterRace</a><span class="floatRight">$300</span></p>
      </div>
    </div>
    <div class="col-sm-12 centerText botMarginSm">
      <button type="button" class="btn btn-outline-primary btn-black">View More</button>
    </div>
      </div>
    </div>
  </div>
</div>

@stop