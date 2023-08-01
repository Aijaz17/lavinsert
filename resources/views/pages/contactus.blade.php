@extends ('layout.app');



@section('content')



    

<div class="container">
    
 <h1 class="text-center p-3">This is contact form </h1>   

<form action="storec" method="post">

@csrf

<div class="mb-3">

<label for="" class="form-label">Name</label>
<input type="text"
  class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
<label for="" class="form-label">email</label>
<input type="email"
  class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="mb-3">
<label for="" class="form-label">Password</label>
<input type="text"
  class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
</div>


<div class="mb-3">
  <input type="submit" value="Submit" name="submit" class="btn btn-dark">
</div>




</form>
</div>


</body>

</html>

@endsection