<div class="col-lg-6 col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Modules</h4>
      <p class="card-category">Number of modules {{count($modules)}} on today</p>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-hover">
        <thead class="text-warning">
          <th>Name</th>
          <th>Field Limit</th>
          <th>Api Name</th>
          <th>Singular Name</th>
          <th>Actions</th>

        </thead>
        <tbody>
          @foreach ($modules as $key => $module)
            <tr>
              <td>{{$module['getModuleName']}}</td>
              <td>{{$module['getBusinessCardFieldLimit']}}</td>
              <td>{{$module['getAPIName']}}</td>
              <td>{{$module['getSingularLabel']}}</td>
              <td>
                <div>
                <a href="/zoho/modules/{{$module['getModuleName']}}/edit">
                  <i class="material-icons">
                    forward
                  </i>
                  
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
