@extends('layouts.master')

@section('content')
<div class="parallax">
  <div class="createCoverText">
    <h1>Build Your PC</h1>
  </div>
</div>
<div class="container">
  <div class="row">
    <div id="tourBox" class="col-sm-12 centerText border">
      <p>Need Help? <a href="/tour">Take the tour!</a> or checkout finished <a href="/builds">builds.</a></p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 terminal">
      <p>$ Uploading build...</p>
      <p>$ Running compatability checks...</p>
      <p>$ Compiling checks...</p>
      @if($compatable === 'clean')
      <p>#<span class="compGreen"> Compatability Check</span>: <span class="greenText">{{$compatable}}</span></p>
      @elseif($compatable === 'warning')
      <p>#<span class="compYellow"> Compatability Check</span>: <span class="yellowText">{{$compatable}}</span></p>
      @elseif($compatable === 'NOT COMPATABLE')
      <p>#<span class="compRed"> Compatability Check</span>: <span class="redText">{{$compatable}}</span></p>
      @endif

      @if($compatable !== 'clean')
        @foreach($compatabilityErrors as $compatabilityError)
        <p>#<span class="compRed"> {{$compatabilityError}}</span></p>
        @endforeach
      @endif
    </div>
    <div class="col-sm-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Component</th>
            <th>Selection</th>
            <th>Price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- CPU -->
          @if($build->cpu === null)
          <tr>
            <th scope="row"><a href="/parts/cpu">CPU</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/cpu" role="button">Choose a CPU</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/cpu">CPU</a></th>
            <td><a href="/parts/cpu/{{$build->cpu}}">{{$build->cpuExtract->brand}} {{$build->cpuExtract->model}}</a></td>
            <td>${{$build->cpuExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="cpu">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif
          
          <!-- CPU COOLER -->
          @if($build->cpu_cooler === null)
          <tr>
            <th scope="row"><a href="/parts/cpu-cooler">CPU Cooler</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/cpu-cooler" role="button">Choose a CPU Cooler</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/cpu-cooler">CPU Cooler</a></th>
            <td><a href="/parts/cpu-cooler/{{$build->cpu_cooler}}">{{$build->cpuCoolerExtract->brand}} {{$build->cpuCoolerExtract->model}}</a></td>
            <td>${{$build->cpuCoolerExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="cooler">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- MOTHERBOARD -->
          @if($build->motherboard === null)
          <tr>
            <th scope="row"><a href="/parts/motherboard">Motherboard</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/motherboard" role="button">Choose a Motherboard</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/motherboard/">Motherboard</a></th>
            <td><a href="/parts/motherboard/{{$build->motherboard}}">{{$build->motherboardExtract->brand}} {{$build->motherboardExtract->model}}</a></td>
            <td>${{$build->motherboardExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="motherboard">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- MEMORY -->
          @if($build->ram === null)
          <tr>
            <th scope="row"><a href="/parts/memory">Memory</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/memory" role="button">Choose Memory </a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/memory/">Memory</a></th>
            <td><a href="/parts/memory/{{$build->ram}}">{{$build->ramExtract->brand}} {{$build->ramExtract->model}}</a></td>
            <td>${{$build->ramExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="ram">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- STORAGE -->
          @if($build->hdd === null)
          <tr>
            <th scope="row"><a href="/parts/storage">Storage</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/storage" role="button">Choose Storage</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/storage/">Storage</a></th>
            <td><a href="/parts/storage/{{$build->hdd}}">{{$build->hddExtract->brand}} {{$build->hddExtract->model}}</a></td>
            <td>${{$build->hddExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="hdd">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- VIDEO CARD -->
          @if($build->gpu === null)
          <tr>
            <th scope="row"><a href="/parts/gpu">Video Card</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/gpu" role="button">Choose a Video Card</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/gpu/">Video Card</a></th>
            <td><a href="/parts/gpu/{{$build->gpu}}">{{$build->gpuExtract->brand}} {{$build->gpuExtract->model}}</a></td>
            <td>${{$build->gpuExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="gpu">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- CASE -->
          @if($build->case === null)
          <tr>
            <th scope="row"><a href="/parts/case">Case</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/case" role="button">Choose a Case</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/case/">Case</a></th>
            <td><a href="/parts/case/{{$build->case}}">{{$build->caseExtract->brand}} {{$build->caseExtract->model}}</a></td>
            <td>${{$build->caseExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="case">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- POWER SUPPLY -->
          @if($build->psu === null)
          <tr>
            <th scope="row"><a href="/parts/power-supply">Power Supply</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/power-supply" role="button">Choose a Power Supply</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/power-supply/">Power Supply</a></th>
            <td><a href="/parts/power-supply/{{$build->psu}}">{{$build->psuExtract->brand}} {{$build->psuExtract->model}}</a></td>
            <td>${{$build->psuExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="psu">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif

          <!-- OPERATING SYSTEM -->
          @if($build->operating_system === null)
          <tr>
            <th scope="row"><a href="/parts/operating-system">Operating System</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/operating-system" role="button">Choose an Operating System</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/operating-system/">Operating System</a></th>
            <td><a href="/parts/operating-system/{{$build->operating_system}}">{{$build->osExtract->brand}} {{$build->osExtract->model}}</a></td>
            <td>${{$build->osExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="os">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif
            
          <!-- MISC -->
          @if($build->misc === null)
          <tr>
            <th scope="row"><a href="/parts/misc">Misc</a></th>
            <td><a class="btn btn-primary btn-sm" href="/parts/misc" role="button">Choose Misc</a></td>
            <td>$0.00</td>
            <td></td>
          </tr>
          @else
          <tr>
            <th scope="row"><a href="/parts/misc/">Misc</a></th>
            <td><a href="/parts/misc/{{$build->misc}}">{{$build->miscExtract->brand}} {{$build->miscExtract->model}}</a></td>
            <td>${{$build->miscExtract->price}}</td>
            <form method="POST" action="/builds">
            {!! csrf_field() !!}
              <input type="hidden" name="type" value="misc">
              <input type="hidden" name="part" value="null">
              <td><input type="submit" class="btn btn-danger btn-sm" value="remove"></td>
            </form>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
    <div class="col-sm-12 rightText">
      <h4>Total: ${{$total}}</h4>
    </div>
    <div class="col-sm-12">
      <form method="POST" action="/builds" enctype="multipart/form-data" novalidate>
      {!! csrf_field() !!}
        <div class="form-group">
          <label for="buildName">Build Name</label>
          <input name="buildName" type="text" class="form-control" id="buildName" value="{{$build->name}}">
        </div>
        <div class="form-group">
          <label for="buildDescription">Build Description</label>
          <textarea name="buildDescription" class="form-control" id="buildDescription" rows="3">{{$build->description}}</textarea>
        </div>
        <input type="hidden" name="price" value="{{$total}}">
        <div class="form-group">
          <label for="exampleInputFile">Photo</label>
          <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Max image size: 2MB.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update Build</button>
      </form>
    </div>
  </div>
</div>

@stop