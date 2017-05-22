import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Screen, ScreenSlice } from 'react-screen';

ReactDOM.render((
    <Screen>
        <ScreenSlice>
            <h1>First Screen</h1>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Second Screen</h1>
        </ScreenSlice>
        <ScreenSlice>
            <h1>Third Screen</h1>
        </ScreenSlice>
    </Screen>
), document.getElementById('react-screen'));
