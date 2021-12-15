<div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form method="GET" action="{{ route('search-result') }}" class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="keyword">Keyword</label>
              <input type="text" name="keyword" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="type">Type</label>
              <select name="type" class="form-control form-control-lg form-control-a" id="type">
                <option value="" selected disabled></option>
                <option value="House">House</option>
                <option value="Appartament">Appartament</option>
                <option value="Commercial Space">Commercial Space</option>
                <option value="Land">Land</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="location">Location</label>
                <input type="text" class="form-control form-control-lg form-control-a" name="location" id="location">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="bedrooms" id="bedrooms">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="garages" id="garages">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="bathrooms" id="bathrooms">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Max Price</label>
              <input type="number" class="form-control form-control-lg form-control-a" name="price" id="price">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
