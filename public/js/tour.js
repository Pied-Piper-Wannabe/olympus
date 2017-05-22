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
                  <div class="col-sm-10">CPU: A central processing unit is an electronic machine that works on a list of instructions.
                    It reads the list of instructions and executes each one in order.
                    A list of instructions that a CPU can run is a computer program.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/cpu.png" /></div>
                  <div class="col-sm-10">GPU: A graphics processing unit, is used primarily for 3-D applications.
                    It creates lighting effects and transforms objects every time a 3D scene is redrawn.
                    These are mathematically-intensive tasks, which otherwise, would put quite a strain on the CPU.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/mobo.png" /></div>
                  <div class="col-sm-10">Motherboard: A motherboard is a circuit board that is the foundation of a computer.
                    It allocates power and allows communication between all your other computer hardware components.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/ram.png" /></div>
                  <div class="col-sm-10">RAM: Random access memory is the most common type of memory found in modern computers.
                    It is the place where your operating system, applications and data in current use are stored so they can be quickly reached by the device's processor.</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/hd.png" /></div>
                  <div class="col-sm-10">Hard Drive: A hard disk or hard drive is a data storage device that uses magnetic storage to store and retrieve digital information.
                    It’s where all the data stored on your computer lives!</div>
                </div>
                <div class="row">
                  <div class="col-sm-2"><img class="hardware" src="/images/psu.png" /></div>
                  <div class="col-sm-10">PSU: power supply or PSU is what you plug into the wall to power your machine.
                      It converts mains AC to low-voltage regulated DC power for the internal components of a computer.</div>
                </div>
            </div>
        </div>
        </ScreenSlice>
        <ScreenSlice>
            <div class="coverDiagram"></div>
        </ScreenSlice>
        <ScreenSlice>
        <div id="colored">
            <h1 class="descriptionExtra">So... how do I get started?</h1>
            <p class="white textMargin">Ready to get started building your first PC?</p>
            <p class="white textMargin">Click here to <a href="https://olympuspc.tech/builds/create">start your build</a>!</p>
            <p class="white textMargin">Simply select the parts you would like to get started. We do all the heavy lifting for you by checking for compatibility in advance!</p>
            <p class="white textMargin">Are you having trouble getting started? Check out our <a href="https://olympuspc.tech/builds#">pre-built PCs</a> & get inspired!</p>
            <h2 class="white textMargin ascend">So what do you say? Are you ready to Ascend?</h2>
            <a href="https://olympuspc.tech/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return to the site</a>
        </div>
        </ScreenSlice>
    </Screen>
), document.getElementById('react-screen'));
