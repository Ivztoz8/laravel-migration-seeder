<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Trains Finder</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active {{Request::route()->getName() == 'home' ? 'text-primary' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName() == 'aboutUs' ? 'text-primary' : '' }}" aria-current="page" href="{{route('aboutUs')}}">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName() == 'contacts' ? 'text-primary' : '' }}" aria-current="page" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::route()->getName() == 'trains' ? 'text-primary' : '' }}" aria-current="page" href="{{route('trains')}}">Trains</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>