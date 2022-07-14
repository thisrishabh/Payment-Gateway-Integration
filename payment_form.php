<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
  background: #44c4e7 url("https://photos-6.dropbox.com/t/2/AAC_bdqR8LMkjEe-HPIf4K1DhtseMLRHPklBSzJSuzglvA/12/5714737/jpeg/1024x768/3/1418346000/0/2/bkg-blur.jpg/CLHm3AIgASgBKAI/b7RrveA2022yJyfO9RyRvv7LjJQESukGHssHUxVThzw") no-repeat center center fixed;
  background-size: cover;
  font-family: "Roboto";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body::before {
  z-index: -1;
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  background: #44c4e7;
  /* IE Fallback */
  background: rgba(68, 196, 231, 0.8);
  width: 100%;
  height: 100%;
}
.form {
  position: absolute;
  top: 50%;
  left: 50%;
  background: #fff;
  width: 285px;
  margin: -140px 0 0 -182px;
  padding: 40px;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
}
.form h2 {
  margin: 0 0 20px;
  line-height: 1;
  color: #44c4e7;
  font-size: 18px;
  font-weight: 400;
}
.form input {
  outline: none;
  display: block;
  width: 100%;
  margin: 0 0 20px;
  padding: 10px 15px;
  border: 1px solid #ccc;
  color: #ccc;
  font-family: "Roboto";
  box-sizing: border-box;
  font-size: 14px;
  font-wieght: 400;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transition: 0.2s linear;
}
.form inputinput:focus {
  color: #333;
  border: 1px solid #44c4e7;
}
.form button {
  cursor: pointer;
  background: #44c4e7;
  width: 100%;
  padding: 10px 15px;
  border: 0;
  color: #fff;
  font-family: "Roboto";
  font-size: 14px;
  font-weight: 400;
}
.form button:hover {
  background: #369cb8;
}
.error,
.valid {
  display: none;
}
	</style>
</head>
<body>
	<section class="form animated flipInX">
  <h2>PLEASE DONATE</h2>
  
  <form action="pay.php" method="post" >
    <input placeholder="Enter Your Name" type="text" id="username" name="name"></input>
    <input placeholder="Email" type="text" id="password" name="email"></input>
    <input placeholder="Contact NO" type="text" id="password" name="contactno"></input>
    <input placeholder="Enter Amount" type="text" id="password" name="price"></input>
<button id="submit" name="submit">Donate</button>
</form>
</section>
</body>
</html>