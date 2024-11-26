<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Add a New Task</h1>

        
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to Task List</a>

        
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="name" class="form-control" id="title" required>
            </div>

            
            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea name="description" class="form-control" ></textarea>
                

            </div>

            
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Pending">Pending</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>

            
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>
</body>
</html>
