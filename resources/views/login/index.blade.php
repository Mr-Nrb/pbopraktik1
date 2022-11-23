
  <div class="w-50 m-auto mt-5">
    <form method="post" action="auth">
      <div class="card-body">
        <h2 class="h2">Login</h2>
        @if(Session::has('errors'))
        <div class="alert alert-danger" role="alert">
          {{ Session('errors') }}
        </div>
        @elseif (Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{ Session('success') }}
        </div>
        @endif
          <div class="form-group">
              <label class="form-label">Email</label>
              <input type="text" name="email" class="form-control" />
          </div>
          <div class="form-group mt-3">
              <label class="form-label"> Password</label>
              <input type="password" name="password" class="form-control" />
          </div>
      </div>
      <div class="card-footer mt-3">
              <button class="btn btn-primary">Login</button>
      </div>
      </form>
  </div>
