import { connect } from 'react-redux';
import React, { Component,PropTypes } from 'react';

export default function search(state = {
    searchWord: "",
    isProcessing: false,
    searchedList: [],
    alertMessage: "",
    isAddMode: false
}, action = {}){
    return state;
}