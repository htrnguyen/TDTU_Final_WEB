@extends('layouts.admin')
@section('container-main')
<div class="container-main-tasklist">
    <div class="tasklist-header">
        <div class="tasklist-search">
            <input type="text" placeholder="Search">
                <i class="fa-solid fa-search"></i>
        </div>
        <a href="#" id="tasklist-create">
            <i class="fa-solid fa-plus"></i>
            <p>Add task</p>
        </a>
    </div>
    <div class="tasklist-activity">
        <div class="ta-todo">
            <h3 class="h3-todo">To do</h3>
            <div class="ta-todo-child">
                <h4>Update product description</h4>
                <button class="unfi">Unfinished</button>
                <p>July 5, 2024</p>
            </div>
            
            <div class="ta-todo-child">
                <h4>Revise product images</h4>
                <button class="fi">Finish</button>
                <p>August 15, 2024</p>
            </div>
            
            <div class="ta-todo-child">
                <h4>Create promotional banner</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
            
            <div class="ta-todo-child">
                <h4>Update product specifications</h4>
                <button class="continue">Continue</button>
                <p>October 10, 2024</p>
            </div>
        </div>
        <div class="ta-progress">
            <h3 class="h3-progress">In Progress</h3>
            <div class="ta-progress-child">
                <h4>Revise product images</h4>
                <button class="fi">Finish</button>
                <p>August 15, 2024</p>
            </div>
            
            <div class="ta-progress-child">
                <h4>Create promotional banner</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
            <div class="ta-progress-child">
                <h4>Create promotional banner</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
        </div>
        <div class="ta-approve">
            <h3 class="h3-approve">On Approve</h3>
            <div class="ta-approve-child">
                <h4>Modify product images</h4>
                <button class="fi">Complete</button>
                <p>August 15, 2024</p>
            </div>
            
            <div class="ta-approve-child">
                <h4>Design promotional banner</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
            <div class="ta-approve-child">
                <h4>Update product specifications</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
        </div>
        <div class="ta-done">
            <h3 class="h3-done">Done</h3>
            <div class="ta-done-child">
                <h4>Modify product images</h4>
                <button class="fi">Completed</button>
                <p>August 15, 2024</p>
            </div>
            <div class="ta-done-child">
                <h4>Design promotional banner</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
            <div class="ta-done-child">
                <h4>Update product specifications</h4>
                <button class="behance">Behance</button>
                <p>September 20, 2024</p>
            </div>
        </div>
    </div>
</div>
@endsection
