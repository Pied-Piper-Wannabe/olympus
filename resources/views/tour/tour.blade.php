@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Olympus PC</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="css/tour.css" rel="stylesheet">


</head>

<body id="page-top">

    <header class="masthead">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h1 class="brand-heading">Olympus</h1>
                        <p class="intro-text">Build your PC the easy way</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <h2>What is Olympus?</h2>
                <br>
                <p>Olympus is a website to help you build your next PC. We check compatibility for you, so you can rest assured when building your computer you wont buy any incorrect parts</p>
                <br>
                <p>Never worry about returning parts that don't fit or aren't compatabile with each other again!</p>
                <br>
                <p>Below is an infographic that shows you how each piece of hardware in a PC works</p>
            </div>
        </div>
    </section>

    <!-- Infographic Section -->
    <section id="infographic" class="content-section text-center">
        <div class="infographic">
            <div class="container">
                <div class="col-lg-8 offset-md-2">
                    <img id="diagram" src="/../img/DIY-diagram.png" alt="">
                    <table class="table table-striped">
                         <thead>
                            <tr>
                              <th>Part</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                            <tr>
                              <td>Motherboard</td>
                              <td>A motherboard is a circuit board that is the foundation of a computer, located at the bottom of the computer chassis.
                                  It allocates power and allows communication to the CPU, RAM, and all your other computer hardware components
                              </td>
                            </tr>
                            <tr>
                              <td>Hard Drive</td>
                              <td>A hard disk or hard drive is a data storage device that uses magnetic storage to store and retrieve digital information.
                                  It’s where all the data stored on your computer lives!</td>
                            </tr>
                            <tr>
                              <td>CPU</td>
                              <td>A central processing unit is an electronic machine that works on a list of things to do, called instructions.
                                  It reads the list of instructions and executes each one in order.
                                  A list of instructions that a CPU can run is a computer program.</td>
                            </tr>
                            <tr>
                              <td>GPU</td>
                              <td>A graphics processing unit, is used primarily for 3-D applications.
                                  It creates lighting effects and transforms objects every time a 3D scene is redrawn. These are mathematically-intensive tasks, which otherwise, would put quite a strain on the CPU.
                                   Lifting this burden from the CPU frees it up so that it can be used for other jobs.

                            </tr>
                            <tr>
                              <td>RAM</td>
                              <td>
                                  Random access memory is the most common type of memory found in modern computers.
                                  It is the place in a computing device where your operating system (OS), applications and data in current use are kept so they can be quickly reached by the device's processor
                              </td>
                            </tr>
                            <tr>
                              <td>PSU</td>
                              <td>
                                  A power supply or PSU is what you plug into the wall to power your machine.
                                  it converts mains AC to low-voltage regulated DC power for the internal components of a computer
                              </td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <h2>Check us out on Github!</h2>
                <ul class="list-inline banner-social-buttons">
                    <li class="list-inline-item">
                        <a href="https://github.com/Pied-Piper-Wannabe/olympus" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; OlympusPC 2017</p>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/tour.min.js"></script>

</body>

</html>


@stop
