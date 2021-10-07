<!DOCTYPE html>
<html lang="en">
<head>
    <title>css</title>
    <style type="text/css">
    *{
    margin: 0;padding: 0;font-family: Playfair Display, serif;
;box-sizing: border-box;
}

.divider-text{
    position: relative;
    text-align:center;
    margin-top: 5%;
    margin-bottom: 5%;

}
.divider-text span {
    padding: 5%;
    font-size: 12px;
    position: relative;
    z-index: 2;
}
.divider-text:after{
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 5px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
.btn-facebook{
    background-color: #405D9D!important;
    color: #fff!important;
}
.btn-gmail{
    background-color: #ea4335!important;
    color: #fff!important;
}
.btn {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
  #home{
    height: 370px; 
    padding: 3px 28px;
    margin-bottom: 200px;
}



</style>

</head>
<body>
    
</body>
</html>
