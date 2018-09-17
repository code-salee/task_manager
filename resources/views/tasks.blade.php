@extends('master.app')
@section('title','Ongoing Tasks')
@section('content')          
        <div class="my-3 my-md-5">
            <div class="container">
              <div class="page-header">
                <h1 class="page-title">My Tasks</h1> 
                <div class="row gutters-xs ml-auto">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search for...">
                    </div>
                    <span class="col-auto">
                        <button class="btn btn-secondary" type="button"><i class="fe fe-search"></i></button>
                    </span>
                </div>
              </div>
              <div class="row row-cards row-deck">
                <div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                              <tr>
                                <th>Task Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Description</th>
                                <th>Action</th>
                                <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Create Task</button></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($tasks as $task)
                                <tr>
                                  <td>{{$task->title}}</td>
                                  <td>{{$task->category}}</td>
                                  <td>{{$task->status}}</td>
                                  <td>{{$task->created_at}}</td>
                                  <td>{{$task->start_date}}</td>
                                  <td>{{$task->end_date}}</td>
                                  <td>{{$task->description}}</td>
                                  <td>
                                    <a href="" class="btn btn-success">Done</a>
                                    <a href="" class="btn btn-warning">Pending</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Remove</a>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                  </div>
                  <ul class="pagination justify-content-end">
                      <li class="page-item page-prev disabled">
                        <a class="page-link" href="#" tabindex="-1">Prev</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item page-next">
                        <a class="page-link" href="#">
                          Next
                        </a>
                      </li>
                    </ul>
                </div>
              </div>              
            </div>            
          </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" id="recipient-name" placeholder="Enter title...">
                  </div>
                  <div class="form-group">
                    <select name="" id="" class="form-control">
                      <option value="">Choose a category</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Start From</label>
                    <input type="date" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label">End date</label>
                      <input type="date" class="form-control" id="recipient-name">
                    </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message-text" placeholder="Task description"></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Save</button>
              </div>
            </div>
          </div>
        </div>
    @endsection