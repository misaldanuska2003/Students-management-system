<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="grid grid-cols-1 sm:grid-cols-5 grid-rows-5 gap-4">
    <!-- Box 2 -->
    <div class="col-span-1 sm:col-span-3 row-span-4">
        2
    </div>

    <!-- Box 3 -->
    <div class="col-span-1 sm:col-span-2 sm:col-start-4">
        3
    </div>

    <!-- Box 4 -->
    <div class="col-span-1 sm:col-span-2 row-span-2 sm:col-start-4 sm:row-start-2">
        <!-- From Uiverse.io by aboalsim114 --> 
<form class="form">
  <input placeholder="Enter your name" class="input" type="text">
  <input placeholder="Enter your email" class="input" type="text">
    <input placeholder="*********" class="input" type="password">

  <button>Submit</button>
</form>
    </div>

    <!-- Box 5 -->
    <div class="col-span-1 sm:col-span-2 sm:col-start-4 sm:row-start-4">
        5
    </div>
</div>

<style>
.form {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 20px;
  background: linear-gradient(to bottom, #0077be, #3b8df2);
  border-radius: 10px;
  overflow: hidden;
  perspective: 1000px;
  transform-style: preserve-3d;
  transform: rotateX(-10deg);
  transition: all 0.3s ease-in-out;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
  animation: form-animation 0.5s ease-in-out;
}

@keyframes form-animation {
  from {
    transform: rotateX(-30deg);
    opacity: 0;
  }

  to {
    transform: rotateX(0deg);
    opacity: 1;
  }
}

.input {
  padding: 10px;
  border-radius: 5px;
  background-color: transparent;
  transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  color: rgb(255, 255, 255);
  border: 2px solid #3b8df2;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}

.input::placeholder {
  color: #fff;
}

.input:hover,
.input:focus {
  border-color: #3b8df2;
  background-color: rgba(255, 255, 255, 0.2);
  transform: scale(1.05) rotateY(20deg);
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
  outline: none;
}

button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #3b8df2;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  transform: rotateX(-10deg);
  transition: all 0.3s ease-in-out;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}

button:hover {
  background-color: #0077be;
  font-size: 17px;
  transform: scale(1.05) rotateY(20deg) rotateX(10deg);
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
</style>

</body>
</html>