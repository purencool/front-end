'use strict';

/**
 *
 */
class DataStorage {

    /**
     * this.dataObj has been created to build an Json object that is in browser storage
     */
    constructor() {
        this.dataObj = {}
        this.initialData();

    }

    /**
     * Builds initial data object from storage
     */
    initialData() {
        let localStorageVar = localStorage.getItem("browser_storage_data");
        if (localStorageVar) {
            this.dataObj = JSON.parse(localStorageVar);
        } else {
            let d = new Date();
            let n = d.getTime()
            this.dataObj = [
                {
                    id: n,
                    name: 'First list item'
                }
            ];

        }
        console.log('initialData '+ this.dataObj);
    }

    /**
     * Saves data to local storage
     */
    saveData() {
        localStorage.setItem("browser_storage_data", JSON.stringify(this.dataObj));
        let localStorageVar = localStorage.getItem("browser_storage_data");
        console.log('saveData '+localStorageVar);
    }

    /**
     * Appends data to ul in HTML document
     * @param {*} id
     * @param {*} information
     */
    appendToDocument(id, information) {
        let ul = document.getElementById(id);
        let li = document.createElement("li");
        li.appendChild(document.createTextNode(information));
        ul.appendChild(li);
    }

    /**
     * Formats all data from storage and adds set string up
     * so that it can be added to ul in DOM
     * @param {*} id
     */
    appendSetupDataElements(id) {
        const data = this.dataObj;
        for (var i = 0; i < data.length; i++) {
            const obj = data[i];
            let information = 'id: ' + obj.id + '  name: ' + obj.name
            this.appendToDocument(id, information);
        }
    }

    /**
     * Adds new information to global Json object and sets up
     * save method for local storage
     * @param {*} formResponse
     * @param {*} id
     */
    appendNewDataElement(formResponse, id) {
        let d = new Date();
        let n = d.getTime();
        this.dataObj.push({id: n, name: formResponse});
        let information = 'id: ' + n + '  name: ' + formResponse;
        this.appendToDocument(id, information);
        this.saveData();
    }

    /**
     * @param {*} formResponse
     * @param {*} id
     */
    setNewInputData(formResponse, id) {
        this.appendNewDataElement(formResponse, id);
    }

    /**
     * @param {*} id
     */
    getOriginalInputData(id = '') {
        this.appendSetupDataElements(id);
    }

}

/**
 *  Interacts with the form inside the dom
 */
window.onload = function () {
    let getData = new DataStorage();
    getData.getOriginalInputData('container-1-ul');
    document
        .getElementById('container-1-form')
        .onsubmit = function () {
        getData.setNewInputData(document.getElementById("container-1-input").value, 'container-1-ul');
        document
            .getElementById("container-1-input")
            .value = '';
        document
            .getElementById("container-1-input")
            .focus();
        return false;
    }
}
