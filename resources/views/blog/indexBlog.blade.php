<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 mt-4 mb-4 border-b border-gray-200">
            <h1 class="text-6xl">
                Posts
            </h1>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        .create-post-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            top: 20px;
            position: relative;
            left: 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 50px;
            transition:  0.3s;
        }
        .create-post-btn:hover {
            background-color: #ffffff;
            font-size: 20px;
        }
        .post {
            /* border: 1px solid #ccc; */
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 40px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            
        }
        .post img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .post-title {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #655e5e;
            text-align: center;
            text-transform: uppercase;
        }
        .post-content {
            margin-bottom: 10px;
        }
        .post-meta {
            font-size: 12px;
            color: #888;
            margin-bottom: 10px;
        }
        .continue-reading {
            text-decoration: none;
            cursor: pointer;
            background-color:#777777;
            padding: 10px 20px;
            color:#ffff;
            border-radius:50px;
            transition: ease-in 0.3s;
        }
        .continue-reading:hover {
            background-color:#fff;
            color: #007bff;
        }
        .delete-btn {
            padding: 5px 10px;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 10px;
            transition: ease-in 0.5
        }
        .delete-btn {
            background-color: #dc3545;
        }
        .edit-btn{
            text-decoration: none;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 10px;
            color:#ffff;
            background-color: #007bff;
            transition: ease-in 0.3s;
        }
        .edit-btn:hover {
            color: #fff;
        }
    </style>
</head>

            @if (session()->has('message'))
            <div class="">
                <p style="padding:20px 20px; margin-left:20px; background-color:aquamarine;color:#655e5e;font-weight:600;width:100%;margin-top:20px;width:350px;border-radius:10px">
                    {{ session()->get('message') }}
                </p>
            </div>
            @endif
            @if (Auth::check())
                <a 
                    href="{{ route('create') }}"
                    class="create-post-btn">
                    Create post
                </a>

        @endif
            <div class="post" style="display:block;">
                @foreach ($data as $post)
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:100px;">
                    <div class="image" style="width: 40%">
                        <img src="{{ asset('images/' . $post->image) }}" alt="Post Image">
                    </div>
                    <div style="width: 55%">
    
                    
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <p class="post-content">{{ $post->content }}</p>
                    <p class="post-meta">
                        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </p>
                    <div style="display:flex;justify-content:space-between;align-items:center;">
                    <div>
                        <a  href="{{ route('show',$post->id) }}" class="continue-reading" style="">Keep Reading</a>
                    </div>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <div style="display:flex;margin-top:10px;margin-bottom:20px;gap:7px;">
                        <a 
                        href="{{ route('edit',$post->id) }}"
                        class="edit-btn">
                        Edit
                        </a>
                    <form 
                    action="{{ route('destroy', $post->id) }}"
                    method="POST">
                    @csrf
                    @method('delete')
        
                    <button
                        class="delete-btn"
                        type="submit">
                        Delete
                    </button>
                    @endif
                </form>
            </div>
        </div>
    
                    </div>
                </div>
        @endforeach
            </div>

            </div>
        </div>
    </div>
</x-app-layout>