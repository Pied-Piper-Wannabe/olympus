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
            <div>
                <h1>So what is Olympus?</h1>
                <p>Olympus is a website to help you build your next PC.
                 We check compatibility for you, so you can rest assured when building your computer you wont buy any incorrect parts</p>
                <p>Never worry about returning parts that don't fit or aren't compatabile with each other again!</p>
                <p>Building your own PC and need inspiration on where to start?
                 No problem, our builds section has plenty of pre built PC's to help get you started.</p>
                <p>Below is an infographic that shows new computer enthusiasts how each piece of hardware in a PC works.</p>
            </div>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Third Screen</h1>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Third Screen</h1>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Third Screen</h1>
        </ScreenSlice>
    </Screen>
), document.getElementById('react-screen'));
