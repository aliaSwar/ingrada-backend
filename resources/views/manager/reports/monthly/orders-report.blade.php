<x-layouts.app>
  <div class="container-fluid">
                    <main class="py-4">

                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                      ORDER Report
                                    </div>
                                    <div class="card-body">

                                        <div style="margin-bottom: 20px;">





                                            <i data-feather="filter" class="feather-icon"></i>
                                                    <input class="input-field border-0" type="text" id="filter0" data-bs-toggle="tooltip" placeholder="Name">

                                            <i data-feather="filter" class="feather-icon"></i>
                                                    <input class="input-field border-0" type="text" id="filter1" data-bs-toggle="tooltip" placeholder="Email">

                                            <i data-feather="filter" class="feather-icon"></i>
                                                    <input class="input-field border-0" type="text" id="filter2" data-bs-toggle="tooltip" placeholder="Status">
                                        </div>

                                        <table id="filter" class="table table-bordered" >
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Count Houres</th>
                                                    <th>Count Task</th>
                                                    <th>TASKS Detials</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach ($tasks_by_month as $task)
                                            <tr>
                                                <td>{{ $task->month }}</td>
                                                <td>{{ $task->hours  }}</td>
                                                <td>{{ $task->task_count  }}</td>
                                                <td>{{  $task->task_ids   }}</td>


                                            </tr>
                                        @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                </div>
                            </div>


                        </div>

                    </main>
</div>



  
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="TableFilter.min.js" defer></script>
  <script>
  try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
  return true;
  }).catch(function(e) {
  var carbonScript = document.createElement("script");
  carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
  carbonScript.id = "_carbonads_js";
  document.getElementById("carbon-block").appendChild(carbonScript);
  });
  } catch (error) {
  console.log(error);
  }
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

  </script>
  <script src="../dist/js/TableFilter.min.js" ></script>
  </x-layouts.app>
