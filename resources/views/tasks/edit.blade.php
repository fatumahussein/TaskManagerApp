<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Edit Task</h1>

        
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary mb-3">Back to Task List</a>

        
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            
            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $task->name) }}" required>
             </div>

            
            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea name="description" class="form-control" id="description">{{ old ('description',$task->description) }}</textarea>
            </div>

            
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Pending" {{old('status', $task->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Completed" {{old('status', $task->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
</body>
</html>
