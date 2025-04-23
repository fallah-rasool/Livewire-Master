<div>
    <li>
        <p style="display: inline">{{ $task }}</p>
        <span style="color: {{ $isDone ?'#047542' : '#b05201' }}">
            {{ $isDone ?'isDone' : 'Panding...' }}
        </span>
        <button
        style="color: {{ $isDone ?'#047542' : '#b05201' }}"
        wire:click='togggle'
        >        {{ $isDone ?'unchack' : 'Panding...' }}
        </button>
    </li>
    </div>
    
