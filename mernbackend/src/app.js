const express = require("experss");
const app = express();
const port = process.env.PORT || 3000;
app.get("/", (req, res) => {
    res.send("hello uday")

} );


app.listen(port, () => {
   console.log(`server is running at port no ${port}`);  
})