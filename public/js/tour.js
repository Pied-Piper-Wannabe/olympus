import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Screen, ScreenSlice } from 'react-screen';

ReactDOM.render((
    <Screen>
        <ScreenSlice>
            <div class="cover">
                <h1 class="killMargin olympus">OLYMPUS</h1>
            </div>
        </ScreenSlice>
        <ScreenSlice>
        <div id="colored">
            <h1 class="description">So how do the parts in a computer work?</h1>
            <div class="container">
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/gpu.png" /></div>
                  <div class="col-sm-10">A central processing unit is an electronic machine that works on a list of instructions.
                    It reads the list of instructions and executes each one in order.
                    A list of instructions that a CPU can run is a computer program.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/cpu.png" /></div>
                  <div class="col-sm-10">A graphics processing unit, is used primarily for 3-D applications.
                    It creates lighting effects and transforms objects every time a 3D scene is redrawn.
                    These are mathematically-intensive tasks, which otherwise, would put quite a strain on the CPU.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/mobo.png" /></div>
                  <div class="col-sm-10">A motherboard is a circuit board that is the foundation of a computer.
                    It allocates power and allows communication between all your other computer hardware components.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/ram.png" /></div>
                  <div class="col-sm-10">Random access memory is the most common type of memory found in modern computers.
                    It is the place where your operating system, applications and data in current use are stored so they can be quickly reached by the device's processor.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/hd.png" /></div>
                  <div class="col-sm-10">A hard disk or hard drive is a data storage device that uses magnetic storage to store and retrieve digital information.
                    It’s where all the data stored on your computer lives!</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/psu.png" /></div>
                  <div class="col-sm-10">A power supply or PSU is what you plug into the wall to power your machine.
                      It converts mains AC to low-voltage regulated DC power for the internal components of a computer.</div>
                </div>
            </div>
        </div>
        </ScreenSlice>
        <ScreenSlice>
            <div id="colored">
                <h1 class="description">What is Olympus?</h1>
                <p class="white">Olympus is a website to help you build your next PC.
                 We check compatibility for you, so you can rest assured when building your computer you wont buy any incorrect parts.</p>
                <p class="white">Never worry about returning parts that don't fit or aren't compatabile with each other again!</p>
            </div>
        </ScreenSlice>
        <ScreenSlice>
            <h1>So how do I get started?</h1>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Ready to go?</h1>
        </ScreenSlice>
    </Screen>
), document.getElementById('react-screen'));
