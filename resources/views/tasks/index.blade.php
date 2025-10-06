<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZENTRA - To-Do List</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Press Start 2P', cursive;
            background: linear-gradient(to bottom, #1a1a2e, #0f0f1e);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            border: 3px solid #7CFC00;
            border-radius: 15px;
            padding: 30px;
            max-width: 650px;
            width: 100%;
            box-shadow: 0 0 30px rgba(124, 252, 0, 0.3);
        }

        .title {
            font-size: 32px;
            color: #7CFC00;
            text-align: center;
            margin-bottom: 8px;
            text-shadow: 2px 2px 0 #000;
        }

        .subtitle {
            color: #888;
            text-align: center;
            font-size: 10px;
            margin-bottom: 25px;
            letter-spacing: 2px;
        }

        .stats {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-box {
            flex: 1;
            background: rgba(124, 252, 0, 0.1);
            border: 2px solid #7CFC00;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }

        .stat-number {
            font-size: 20px;
            color: #7CFC00;
            display: block;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 7px;
            color: #aaa;
        }

        .input-form {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .task-input {
            flex: 1;
            min-width: 200px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #555;
            border-radius: 8px;
            padding: 15px;
            color: white;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
        }

        .task-input:focus {
            outline: none;
            border-color: #7CFC00;
        }

        .task-textarea {
            width: 100%;
            min-height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid #555;
            border-radius: 8px;
            padding: 15px;
            color: white;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
            resize: vertical;
        }

        .task-textarea:focus {
            outline: none;
            border-color: #7CFC00;
        }

        .add-button {
            background: #7CFC00;
            border: none;
            border-radius: 8px;
            padding: 15px 25px;
            color: #000;
            font-family: 'Press Start 2P', cursive;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .add-button:hover {
            background: #90ff20;
            transform: translateY(-2px);
        }

        .filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 20px;
            border: 2px solid #555;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            color: #aaa;
            font-size: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn.active {
            background: #7CFC00;
            color: #000;
            border-color: #7CFC00;
        }

        .filter-btn:hover {
            border-color: #7CFC00;
        }

        .task {
            background: rgba(255, 255, 255, 0.05);
            border: 2px solid #555;
            border-radius: 10px;
            padding: 18px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s;
        }

        .task:hover {
            transform: translateX(5px);
            border-color: #7CFC00;
        }

        .task.completed {
            opacity: 0.6;
            border-color: #4CAF50;
        }

        .task-icon {
            font-size: 24px;
        }

        .task-content {
            flex: 1;
        }

        .task-title {
            color: white;
            font-size: 11px;
            margin-bottom: 5px;
        }

        .task.completed .task-title {
            text-decoration: line-through;
            color: #888;
        }

        .task-description {
            color: #aaa;
            font-size: 8px;
            margin-top: 5px;
            line-height: 1.4;
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .status-btn {
            background: rgba(0, 0, 0, 0.5);
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 8px;
            border: 2px solid #555;
            cursor: pointer;
            transition: all 0.2s;
            color: #aaa;
        }

        .status-btn:hover {
            transform: scale(1.05);
            border-color: #7CFC00;
        }

        .task.completed .status-btn {
            color: #7CFC00;
            border-color: #7CFC00;
        }

        .edit-btn {
            background: #FF9800;
            border: none;
            border-radius: 6px;
            padding: 8px 12px;
            color: white;
            font-size: 10px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .edit-btn:hover {
            background: #ffa726;
            transform: scale(1.1);
        }

        .delete-btn {
            background: #F44336;
            border: none;
            border-radius: 6px;
            padding: 8px 12px;
            color: white;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .delete-btn:hover {
            background: #ff5a4d;
            transform: scale(1.1);
        }

        .empty-message {
            text-align: center;
            padding: 50px 20px;
            color: #666;
            font-size: 10px;
        }

        .empty-icon {
            font-size: 48px;
            margin-bottom: 15px;
            opacity: 0.5;
        }

        .alert {
            background: rgba(76, 175, 80, 0.2);
            border: 2px solid #4CAF50;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            color: #7CFC00;
            font-size: 9px;
        }

        /* Edit Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: rgba(0, 0, 0, 0.95);
            border: 3px solid #7CFC00;
            border-radius: 15px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 0 40px rgba(124, 252, 0, 0.5);
        }

        .modal-title {
            font-size: 16px;
            color: #7CFC00;
            margin-bottom: 20px;
            text-align: center;
        }

        .modal-buttons {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .cancel-btn {
            flex: 1;
            background: #666;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: white;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .cancel-btn:hover {
            background: #888;
        }

        .save-btn {
            flex: 1;
            background: #7CFC00;
            border: none;
            border-radius: 8px;
            padding: 12px;
            color: #000;
            font-family: 'Press Start 2P', cursive;
            font-size: 10px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .save-btn:hover {
            background: #90ff20;
        }

        @media (max-width: 640px) {
            .title {
                font-size: 24px;
            }

            .input-form {
                flex-direction: column;
            }

            .stats {
                flex-wrap: wrap;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">⚔️ ZENTRA ⚔️</h1>
        <p class="subtitle">TO-DO LIST</p>

        @php
            $totalTasks = $task->count();
            $completedTasks = $task->where('completed', true)->count();
            $pendingTasks = $task->where('completed', false)->count();
        @endphp

        <div class="stats">
            <div class="stat-box">
                <span class="stat-number">{{ $pendingTasks }}</span>
                <span class="stat-label">PENDING</span>
            </div>
            <div class="stat-box">
                <span class="stat-number">{{ $completedTasks }}</span>
                <span class="stat-label">COMPLETED</span>
            </div>
            <div class="stat-box">
                <span class="stat-number">{{ $totalTasks }}</span>
                <span class="stat-label">TOTAL</span>
            </div>
        </div>

        @if(session('success'))
        <div class="alert">
            ✓ {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST" class="input-form">
            @csrf
            <input
                type="text"
                name="title"
                class="task-input"
                placeholder="Enter task title..."
                required
            >
            <textarea
                name="description"
                class="task-textarea"
                placeholder="Enter description (optional)..."
            ></textarea>
            <button type="submit" class="add-button">+ ADD TASK</button>
        </form>

        <div class="filters">
            <button class="filter-btn active" onclick="filterTasks('all')">ALL</button>
            <button class="filter-btn" onclick="filterTasks('pending')">PENDING</button>
            <button class="filter-btn" onclick="filterTasks('completed')">COMPLETED</button>
        </div>

        <div id="task-list">
            @forelse($task as $item)
            <div class="task {{ $item->completed ? 'completed' : 'pending' }}" data-status="{{ $item->completed ? 'completed' : 'pending' }}">
                <span class="task-icon">
                    @if($item->completed)
                        ✅
                    @else
                        📝
                    @endif
                </span>
                <div class="task-content">
                    <div class="task-title">{{ $item->title }}</div>
                    @if($item->description)
                    <div class="task-description">{{ $item->description }}</div>
                    @endif
                </div>
                <div class="action-buttons">
                    <form action="{{ route('tasks.updateStatus', $item) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="status-btn">
                            {{ $item->completed ? 'DONE' : 'PENDING' }}
                        </button>
                    </form>
                    <button class="edit-btn" onclick="openEditModal({{ $item->id }}, '{{ addslashes($item->title) }}', '{{ addslashes($item->description ?? '') }}')">
                        ✏️
                    </button>
                    <form action="{{ route('tasks.destroy', $item) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn" onclick="return confirm('Delete this task?')">✕</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="empty-message">
                <div class="empty-icon">📦</div>
                <p>No tasks yet!</p>
                <p style="margin-top: 10px; font-size: 8px;">Add your first task above</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <h2 class="modal-title">✏️ EDIT TASK</h2>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <input
                    type="text"
                    id="editTitle"
                    name="title"
                    class="task-input"
                    placeholder="Task title..."
                    required
                    style="width: 100%; margin-bottom: 15px;"
                >
                <textarea
                    id="editDescription"
                    name="description"
                    class="task-textarea"
                    placeholder="Task description (optional)..."
                ></textarea>
                <div class="modal-buttons">
                    <button type="button" class="cancel-btn" onclick="closeEditModal()">CANCEL</button>
                    <button type="submit" class="save-btn">SAVE</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Filter tasks
        function filterTasks(status) {
            const tasks = document.querySelectorAll('.task');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            tasks.forEach(task => {
                if (status === 'all' || task.dataset.status === status) {
                    task.style.display = 'flex';
                } else {
                    task.style.display = 'none';
                }
            });
        }

        // Open edit modal
        function openEditModal(taskId, title, description) {
            const modal = document.getElementById('editModal');
            const form = document.getElementById('editForm');
            const titleInput = document.getElementById('editTitle');
            const descriptionInput = document.getElementById('editDescription');

            // Set form action to the update route
            form.action = `/tasks/${taskId}`;

            // Fill in current values
            titleInput.value = title;
            descriptionInput.value = description;

            // Show modal
            modal.classList.add('active');
        }

        // Close edit modal
        function closeEditModal() {
            const modal = document.getElementById('editModal');
            modal.classList.remove('active');
        }

        // Close modal when clicking outside
        document.getElementById('editModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeEditModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEditModal();
            }
        });
    </script>
</body>
</html>
