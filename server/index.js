const express = require('express');
const mongoose = require('mongoose');

const app = express();

mongoose.connect("mongodb://localhost:27017/Info")

const UserSchema = new mongoose.Schema({
    name: String,
    age: Number
})

const UserModel = mongoose.model("emp",UserSchema)

app.get("/getUsers", (req, res) => {
     
    UserModel.find({}).then(function(emp) {
        res.json(emp)
    }).catch(function(err) {
        console.log(err)
    })
})

app.listen(3001, () => {

    console.log("Server is running")
})