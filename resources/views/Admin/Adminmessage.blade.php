@extends('Admin/admin')
@section('admin')


<div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Messages</h4>
                 
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                          Name
                          </th>
                          <th>
                          Email
                          </th>
                          <th>
                          Phone
                          </th>
                          <th>
                          Subject
                          </th>
                          <th>
                          Message
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $num = 0; ?>
                        @foreach($data as $d)
                        <tr>
                          <td>
                        <?php $num = $num+1;
                        echo $num; ?>
                          </td>
                          <td>
                            {{$d->name}}
                          </td>
                          <td>
                          <a style="text-decoration:none;" class="text-light" href="mailto:{{$d->email}}">{{$d->email}}</a>
                          </td>
                          <td>
                            {{$d->phone}}
                          </td>
                          <td>
                            {{$d->Subject}}
                          </td>
                          <td>
                          <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal{{$d->id}}">
                             Message
                            </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>

<!-- Modal -->
@foreach($data as $d)
<div class="modal fade" id="exampleModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        echo $d->message;
        ?>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection