@include('partial.nav')

{{-- belum kena bootstrap --}}
<div class="container bg-secondary">
    <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
        </div>
        <button type="submit" class="form-control">Login</button>
      </form>

      <div>
        <p>Belum punya akun? <a href="/register">Click Here</a></p>
      </div>
</div>