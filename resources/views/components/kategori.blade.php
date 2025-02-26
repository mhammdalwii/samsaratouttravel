   <div class="row justify-content-start">
       <div class="col-6 col-md-4 mb-3 mb-md-0">
           <select id="categoryDropdown" class="form-control" onchange="navigateToFilter()">
               <option value="{{ route('boats.index') }}" {{ request('category') == null ? 'selected' : '' }}>All
                   Categories</option>
               <option
                   value="{{ route('boats.index', ['category' => 'Superior', 'departure' => request('departure')]) }}"
                   {{ request('category') == 'Superior' ? 'selected' : '' }}>Superior</option>
               <option value="{{ route('boats.index', ['category' => 'Deluxe', 'departure' => request('departure')]) }}"
                   {{ request('category') == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
               <option value="{{ route('boats.index', ['category' => 'Luxury', 'departure' => request('departure')]) }}"
                   {{ request('category') == 'Luxury' ? 'selected' : '' }}>Luxury</option>
           </select>
       </div>
       <div class="col-6 col-md-4">
           <select id="departuresDropdown" class="form-control" onchange="navigateToFilter()">
               <option value="{{ route('boats.index', ['category' => request('category')]) }}"
                   {{ request('departure') == null ? 'selected' : '' }}>All Departures</option>
               <option
                   value="{{ route('boats.index', ['category' => request('category'), 'departure' => 'Monday-Wednesday']) }}"
                   {{ request('departure') == 'Monday-Wednesday' ? 'selected' : '' }}>Monday - Wednesday</option>
               <option
                   value="{{ route('boats.index', ['category' => request('category'), 'departure' => 'Friday-Sunday']) }}"
                   {{ request('departure') == 'Friday-Sunday' ? 'selected' : '' }}>Friday - Sunday</option>
           </select>
       </div>
   </div>

   <script>
       function navigateToCategory(url) {
           if (url) {
               window.location.href = url;
           }
       }
   </script>

   <script>
       function navigateToDeparture(url) {
           if (url) {
               window.location.href = url;
           }
       }
   </script>

   <script>
       function navigateToFilter() {
           var category = document.getElementById('categoryDropdown').value;
           var departure = document.getElementById('departuresDropdown').value;
           window.location.href = category.includes('?') ? category + '&departure=' + departure.split('=').pop() :
               category;
       }
   </script>
