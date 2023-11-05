<?php include 'header.php' ?>

<!-- Page content -->
<div class="content">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="POST">
  <div class="mb-3">
    <label for="company name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="Jobdes" class="form-label">Job Description</label>
    <textarea  name="" class="form-control" id="Jobdes" cols="30" rows="10" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="ctc" class="form-label">CTC</label>
    <input type="text" class="form-control" id="ctc" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
   </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Google</td>
      <td>Full Stack Developer</td>
      <td>15LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>IBM</td>
      <td>Data Analyst</td>
      <td>5LPA</td>
    </tr>
  
  </tbody>
</table>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>